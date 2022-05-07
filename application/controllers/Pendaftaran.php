<?php

class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelPendaftaran');
        $this->load->model('ModelWawancara');
        $this->load->model('ModelSubKriteria');
        $this->load->model('ModelNilaiKriteria');
        $this->load->model('ModelBukaPendaftaran');
    }

    public function proses_tambah()
    {

        $id_users = $this->session->userdata('id_users');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $nik = $this->input->post('nik');
        $no_telp = $this->input->post('no_telp');
        $usia = $this->input->post('usia');
        $alamat = $this->input->post('alamat');
        $tanggal_lahir = $this->input->post('tgl_lahir');
        $email = $this->input->post('email');
        $pengalaman = $this->input->post('pengalaman');
        $pendidikan = $this->input->post('pendidikan');
        $usia = $this->input->post('h_usia');
        $nuptk = $this->input->post('nuptk');
        $h_usia = $this->input->post('h_usia');
        $result_usia = $this->usiaResult($h_usia);
        $data_buka = $this->ModelBukaPendaftaran->getDataBy(1);
        $gelombang = $data_buka['gelombang'];
        $data_pendaftaran = $this->ModelPendaftaran->getDataByGelombang($id_users, $gelombang);
        $tgl_pendaftaran = date('Y-m-d');
        // $perbandingan = $data_buka['gelombang'] != $data_pendaftaran['gelombang'];
        

        if ($this->session->userdata('id_users')) {
                
            if ($data_buka['gelombang'] != $data_pendaftaran['gelombang']) {

                if ($nama_lengkap != null && $nik != null && $no_telp != null && $alamat != null && $tanggal_lahir != null && $email != null) {

                    $cv = $this->insert('cv');
                    $ktp = $this->insert('ktp');
                    $ijazah = $this->insert('ijazah');
                    $nuptk_surat = $this->insert('nuptk_surat');
                    $gelombang = $data_buka['gelombang'];


                    $data = array(
                        array(
                            'id_users' => $id_users,
                            'gelombang' => $gelombang,
                            'nama_lengkap' => $nama_lengkap,
                            'nik' => $nik,
                            'nuptk' => $nuptk,
                            'no_telp' => $no_telp,
                            'alamat' => $alamat,
                            'tgl_pendaftaran' => $tgl_pendaftaran,
                            'usia' => $usia,
                            'tanggal_lahir' => $tanggal_lahir,
                            'email' => $email,
                            'bukti_pendidikan' => $pendidikan,
                            'bukti_pengalaman' => $pengalaman,
                            'cv' => $cv,
                            'ktp' => $ktp,
                            'ijazah' => $ijazah,
                            'nuptk_surat' => $nuptk_surat
                        )
                    );

                    $this->ModelPendaftaran->insertData($data);
                    $data_nilai = $this->ModelPendaftaran->getDataByIdUsersAndGelombang($id_users,$data_buka['gelombang']);
                    $kriteria_pendidikan = $this->ModelSubKriteria->getCripsPendidikan($pendidikan);
                    $id_pendidikan = $kriteria_pendidikan['id_subkriteria'];
                    $kriteria_pengalaman = $this->ModelSubKriteria->getCripsPengalaman($pengalaman);
                    $id_pengalaman = $kriteria_pengalaman['id_subkriteria'];
                    $kriteria_usia = $this->ModelSubKriteria->getCripsUsia($usia);
                    $id_usia = $kriteria_usia['id_subkriteria'];

                    $data_nilai_kriteria = array(
                        "id_pendaftaran" => $data_nilai['id_pendaftaran'],
                        "pengalaman" => $id_pengalaman,
                        "pendidikan" => $id_pendidikan,
                        "usia" => $result_usia,
                        "wawancara" => 20,
                        "kepribadian" => 21

                    );

                    $this->ModelNilaiKriteria->insertData($data_nilai_kriteria);;
                    $data_pendaftaran = $this->ModelPendaftaran->getDataByIdUsers($id_users);
                    $id_pendaftaran = $data_pendaftaran['id_pendaftaran'];

                    $this->session->set_flashdata('pesan', 'Berhasil Melakukan Pendaftaran');
                    $this->session->set_flashdata('type', 'success');
                    $this->session->set_flashdata('title', 'Berhasil!!');
                    redirect(base_url('home/pendaftaran_guru'));
                } else {

                    $this->session->set_flashdata('pesan', 'Data Tidak Boleh Kosong ');
                    $this->session->set_flashdata('type', 'error');
                    $this->session->set_flashdata('title', 'Gagal!');
                    redirect(base_url('home/pendaftaran_guru'));
                }
            } else {
                $this->session->set_flashdata('pesan', 'Sudah Mendaftar ');
                $this->session->set_flashdata('type', 'warning');
                $this->session->set_flashdata('title', 'Gagal!');
                redirect(base_url('home/pendaftaran_guru'));
            }
        } else {
            $this->session->set_flashdata('pesan', 'Login Terlebih Dahulu');
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('title', 'Gagal mendaftar!');
            redirect(base_url('home/pendaftaran_guru'));
        }
    }

    public function insert($name_foto)
    {

        $config['upload_path']          = './assets/admin/image';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $this->upload->initialize($config);
        if ($this->upload->do_upload($name_foto)) {

            $data_foto = array('data_upload' => $this->upload->data());
            $nama_foto = $data_foto['data_upload']['file_name'];
            return $nama_foto;
        } else {

            $this->session->set_flashdata('pesan', 'Foto tidak terupload');
            $this->session->set_flashdata('danger');
            redirect(base_url('home/pendaftaran_guru'));
        }
    }

    public function verifikasi()
    {

        $id_pendaftaran = $this->uri->segment(3);
        $check_nik = $this->input->post('check_nik');
        $check_nama = $this->input->post('check_nama');
        $check_tgl = $this->input->post('check_tgl');
        $check_pendidikan = $this->input->post('check_pendidikan');
        $check_pengalaman = $this->input->post('check_pengalaman');
        $check_nuptk = $this->input->post('check_nuptk');
        $check_surat = $this->input->post('check_surat');
        $data_pendaftar = $this->ModelPendaftaran->getDataById($id_pendaftaran);


        $is_nik = $this->checkData($check_nik);
        $is_nama = $this->checkData($check_nama);
        $is_tgl = $this->checkData($check_tgl);
        $is_pendidikan = $this->checkData($check_pendidikan);
        $is_pengalaman = $this->checkData($check_pengalaman);
        $is_nuptk = $this->checkData($check_nuptk);
        $is_surat = $this->checkData($check_surat);


        if ($check_nik != null && $check_nama != null && $check_tgl != null && $check_pendidikan != null && $check_pengalaman != null && $check_nuptk != null || $check_surat != null) {
            $data = array(

                'is_verified' => 1

            );
            $data_wawancara = array(
                "id_pendaftaran" => $id_pendaftaran
            );

            $this->ModelWawancara->insert($data_wawancara);
        } else {
            $data = array(

                'is_verified' => 2

            );
        }
        $this->ModelPendaftaran->verif_pendaftar($id_pendaftaran, $data);
        $data_nilai = $this->ModelNilaiKriteria->getDataByIdNilai($id_pendaftaran);
        
        
        
        $data_check = array(

            'id_nilai_kriteria' => $data_nilai['id_nilai_kriteria'],
            'c_nik' => $is_nik,
            'c_nama' => $is_nama,
            'c_tgl_lahir' => $is_tgl,
            'c_pendidikan' => $is_pendidikan,
            'c_pengalaman' => $is_pengalaman,
            'c_nuptk' => $is_nuptk,
            'c_surat' => $is_surat

        );

        $this->ModelNilaiKriteria->insertCheck($data_check);
        $this->session->set_flashdata('pesan', 'Data pendaftaran berhasil Diverifikasi');
        $this->session->set_flashdata('type', 'success');
        redirect(base_url('dashboard/data_verifikasi_pendaftaran'));
    }

    public function checkData($check){

        if($check == null){
            $check = 0;
        }else{
            $check = 1;
        }

        return $check;

    }

    public function usiaResult($umur){
        if($umur <= 30){
            $umur = 12;
        }elseif($umur >= 31 && $umur <= 40){
            $umur = 11;
        }else{
            $umur = 10;
        }

        return $umur;
    }
    public function tidak_terdaftar()
    {

        $this->session->set_flashdata('pesan', 'Belum Mendaftar');
        $this->session->set_flashdata('type', 'warning');
        $this->session->set_flashdata('title', 'Tidak Bisa Melihat');

        redirect(base_url('home/pendaftaran_guru'));
    }

    public function tidaklogin()
    {
        $this->session->set_flashdata('pesan', 'Tidak Bisa Melihat Hasil Penerimaan');
        $this->session->set_flashdata('type', 'warning');
        $this->session->set_flashdata('title', 'Belum Login');

        redirect(base_url('home/alur_pendaftaran'));
    }

    public function sudah_ada()
    {

        $this->session->set_flashdata('pesan', 'Sudah Melakukan Pendaftaran');
        $this->session->set_flashdata('type', 'warning');
        $this->session->set_flashdata('title', 'Gagal');

        redirect(base_url('home/pendaftaran_guru'));
    }
}
