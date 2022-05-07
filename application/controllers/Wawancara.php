<?php

class Wawancara extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelSubkriteria');
        $this->load->model('ModelNilaiKriteria');
        $this->load->model('ModelWawancara');
        $this->load->model('ModelHasil');
    }

    public function updatewawancara()
    {

        $id_pendaftaran = $this->input->post('id_pendaftaran');
        $wawancara = $this->input->post('wawancara');
        $kepribadian = $this->input->post('kepribadian');

        $data_wawancara = $this->ModelSubkriteria->getWawancaraByName($wawancara);
        $id_wawancara = $data_wawancara['id_subkriteria'];
        $data_kepribadian = $this->ModelSubkriteria->getKepribadian($kepribadian);

        $id_kepribadian = $data_kepribadian['id_subkriteria'];


        if ($wawancara != null && $kepribadian != null) {

            // if ($wawancara == 'Sangat Bagus' || $wawancara == 'Bagus') {

            $data = array(
                "kepribadian" => $id_kepribadian,
                "wawancara" => $id_wawancara
            );

            $this->ModelNilaiKriteria->updateData($data, $id_pendaftaran);

            $wawancara_data = array(
                "is_verif" => 2
            );

            $this->ModelWawancara->updateData($wawancara_data, $id_pendaftaran);
           

            $data_hasil = $this->ModelNilaiKriteria->getDataByIdPendaftar($id_pendaftaran);
            $id_nilai = $data_hasil['id_nilai_kriteria'];



            $getDataPenilaian = $this->ModelNilaiKriteria->getDataByIdPendaftar($id_pendaftaran);

            $nilai_pengalaman = $getDataPenilaian['pengalaman'];
            $getSubPengalaman = $this->ModelSubkriteria->getNilaiSubkriteria($nilai_pengalaman);

            $nilai_pendidikan = $getDataPenilaian['pendidikan'];
            $getSubPendidikan = $this->ModelSubkriteria->getNilaiSubkriteria($nilai_pendidikan);

            $nilai_usia = $getDataPenilaian['usia'];
            $getSubUsia = $this->ModelSubkriteria->getNilaiSubkriteria($nilai_usia);

            $nilai_wawancara = $getDataPenilaian['wawancara'];
            $getSubWawancara = $this->ModelSubkriteria->getNilaiSubkriteria($nilai_wawancara);

            $nilai_kepribadian = $getDataPenilaian['kepribadian'];
            $getSubKepribadian = $this->ModelSubkriteria->getNilaiSubkriteria($nilai_kepribadian);

            $getDataPenglaman = $this->ModelNilaiKriteria->getDataPengalaman();

            foreach ($getDataPenglaman as $pengalaman) {

                $nilai_max_penglaman = $this->ModelNilaiKriteria->getMaxPengalaman($pengalaman['nilai_sub']);
            }


            $this->session->set_flashdata('pesan', 'Berhasil Memberikan Penilaian');
            $this->session->set_flashdata('type', 'success');
            redirect(base_url('dashboard/data_wawancara'));

            // } else {

            //     $data = array(
            //         "kepribadian" => $id_kepribadian,
            //         "wawancara" => $id_wawancara
            //     );

            //     $this->ModelNilaiKriteria->updateData($data, $id_pendaftaran);

            //     $wawancara_data = array(
            //         "is_verif" => 2
            //     );

            //     $this->ModelWawancara->updateData($wawancara_data, $id_pendaftaran);
            //     $this->session->set_flashdata('pesan', 'Berhasil Memberikan Penilaian');
            //     $this->session->set_flashdata('type', 'success');
            //     redirect(base_url('dashboard/data_wawancara'));

            // }


        } else {

            $this->session->set_flashdata('pesan', 'Kolom penilaian tidak boleh kosong');
            $this->session->set_flashdata('type', 'danger');
            redirect(base_url('dashboard/data_wawancara'));
        }
    }

    public function tambahjadwal()
    {

        
        $id_wawancara = $this->uri->segment(3);

        $tanggal = $this->input->post('tanggal');
        $waktu = $this->input->post('waktu');
        
        // $getTanggalAndWaktu = $this->ModelWawancara->getDataByTanggalAndWaktu($tanggal,$waktu);
        

        if ($tanggal != null && $waktu != null) {

            $data_jadwal = array(
                "waktu" => $waktu,
                "tanggal" => $tanggal,
                "is_verif" => 1
            );

            $this->ModelWawancara->updateJadwal($id_wawancara, $data_jadwal);

            $data_wawancara = $this->ModelWawancara->getDataById($id_wawancara);
            // var_dump($data_wawancara);die;

            // $data = array(

            //     'is_verified' => 1

            // );
            // $config = array(
            //     'protocol' => 'smtp',
            //     'smtp_host' => 'ssl://smtp.googlemail.com',
            //     'smtp_port' => 465,
            //     'smtp_user' => 'rimzoe1199@gmail.com',
            //     'smtp_pass' => 'irsyad123',
            //     'mailtype' => 'html',
            //     'charset' => 'iso-8859-1'
            // );

            // $nama_pendaftar = $data_wawancara['nama_lengkap'];
            // $alamat_pendaftar = $data_wawancara['alamat'];
            // $j_waktu = $data_wawancara['waktu'];
            // $j_tanggal = $data_wawancara['tanggal'];
            // $email = $data_wawancara['email'];
            // // var_dump($email);die;

            // $dataEmail = [
            //     "nama" => $nama_pendaftar,
            //     "alamat"    => $alamat_pendaftar,
            //     "waktu" => $j_waktu,
            //     "tanggal" => $j_tanggal

            // ];


            // $this->load->library('email', $config);
            // $this->email->set_newline("\r\n");
            // $this->email->from('tkamalia05@gmail.com', 'Taman Kanak-Kanak Amalia');
            // $this->email->to($email);
            // $this->email->subject('Undangan Wawancara');


            // $body = $this->load->view('home/layout/email', $dataEmail, true);
            // $this->email->message($body);

            // $this->email->send();
            $this->session->set_flashdata('pesan', 'Berhasil Memberikan Jadwal');
            $this->session->set_flashdata('type', 'success');
            redirect(base_url('dashboard/jadwal_wawancara'));

        } else {
            $this->session->set_flashdata('pesan', 'Data Tidak Boleh Kosong');
            $this->session->set_flashdata('type', 'danger');
            redirect(base_url('dashboard/jadwal_wawancara'));
            
        }

        redirect(base_url('dashboard/jadwal_wawancara'));
    }
}
