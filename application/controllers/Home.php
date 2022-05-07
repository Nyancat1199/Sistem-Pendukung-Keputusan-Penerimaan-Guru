<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelNilai');
        $this->load->model('ModelSubKriteria');
        $this->load->model('ModelWawancara');
        $this->load->model('ModelPendaftaran');
        $this->load->model('ModelNormalisasi');
        $this->load->model('ModelBukaPendaftaran');
        $this->load->model('ModelNilaiKriteria');
    }

    public function index()
    {
        $id_users = $this->session->userdata('id_users');
        $data_buka = $this->ModelBukaPendaftaran->getDataBy(1);

        $data = array(
            
            "title" => "Tk - Amalia",
            "data_buka" => $data_buka
                

                );
        
        $this->load->view('homee/layout/header',$data);
        $this->load->view('homee/layout/navbar');
        $this->load->view('homee/index');
        $this->load->view('homee/layout/footer');
    }

    public function pendaftaran_guru()
    {
        $id_users = $this->session->userdata('id_users');
        $data_subkriteria = $this->ModelSubKriteria->getData();
        $pengalaman = $data_subkriteria['kriteria'] = 'pengalaman';
        $pendidikan = $data_subkriteria['kriteria'] = 'pendidikan';
        $usia = $data_subkriteria['kriteria'] = 'usia';
        $data_buka = $this->ModelBukaPendaftaran->getDataBy(1);
        $nuptk = $this->input->post('y_nuptk');
        
        
        
        $data = array(
            'data_kriteria_pendidikan' => $this->ModelSubKriteria->getDataPendidikan($pendidikan),
            'data_kriteria_pengalaman' => $this->ModelSubKriteria->getDataPengalaman($pengalaman),
            'data_kriteria_usia' => $this->ModelSubKriteria->getDataUsia($usia),
            'data_pendaftaran' => $this->ModelPendaftaran->getDataByIdUsersAndGelombang($id_users, $data_buka['gelombang']),
            'title' => "Pendaftaran Guru",
            'data_buka' => $data_buka,
            'data_open' => $data_buka['gelombang']
        );

        $this->load->view('homee/layout/header', $data);
        $this->load->view('homee/layout/navbar_pendaftaran');
        $this->load->view('homee/pendaftaran_guru');
        $this->load->view('homee/layout/footer');
    }

    public function pendaftaran()
    {
        
        $data = array(
            "data_nilai_pengalaman" => $this->ModelNilai->getPengalaman(),
            "data_nilai_pendidikan" => $this->ModelNilai->getPendidikan(),
            "data_nilai_gaji" => $this->ModelNilai->getGaji(),
            
        );

        $this->load->view('home/layout/header', $data);
        $this->load->view('home/layout/navbar');
        $this->load->view('home/page/pendaftaran');
        $this->load->view('home/layout/footer');
    }

    public function info_pendaftaran(){

        $id_users = $this->session->userdata('id_users');
        $data_buka = $this->ModelBukaPendaftaran->getDataBy(1);
        $data_wawancara = $this->ModelWawancara->getDataByIdUsers($id_users, $data_buka['gelombang']);
        $data_nilai = $this->ModelNilaiKriteria->getStatusById($id_users, $data_buka['gelombang']);
        $data_pendaftaran = $this->ModelPendaftaran->getDataByIdUsersAndGelombang($id_users,$data_buka['gelombang']);
        
        $data = array(
            'data_pendaftaran' => $data_pendaftaran,
            'is_verif' => $data_wawancara['is_verif'],
            'title' => 'Informasi Pendaftaran',
            'data_wawancara' => $data_wawancara,
            'status_nilai' => $data_nilai['status'],
            'data_open' => $data_buka['gelombang']
                );

        $this->load->view('homee/layout/header', $data);
        $this->load->view('homee/layout/navbar_pendaftaran');
        $this->load->view('homee/page/informasi_pendaftaran');
        $this->load->view('homee/layout/footer');

    }

    public function register(){

        $this->load->view('register/index');

    }

    public function alur_pendaftaran(){
        $id_users = $this->session->userdata('id_users');
        $data_buka = $this->ModelBukaPendaftaran->getDataBy(1);
        $data_pendaftaran = $this->ModelPendaftaran->getDataByIdUsersAndGelombang($id_users, $data_buka['gelombang']);
        
        $data = array(
            'data_pendaftaran' => $data_pendaftaran,
            'title' => "Alur Penerimaan",
            'data_open' => $data_buka['gelombang']
            );

        $this->load->view('homee/layout/header',$data);
        $this->load->view('homee/layout/navbar_pendaftaran');
        $this->load->view('homee/page/alur_pendaftaran');
        $this->load->view('homee/layout/footer');

    }

    public function info_penerimaan(){
        $id_users = $this->session->userdata('id_users');
        $getDataNormalisasi = $this->ModelNormalisasi->getDataLimit(1);
        $data_buka = $this->ModelBukaPendaftaran->getDataBy(1);
        
       
        
        $data = array(
            "data_pendaftaran" => $this->ModelPendaftaran->getDataByIdUsers($id_users),
            "title" => "Informasi Pendaftaran",
            "data_nilai" => $this->ModelNormalisasi->getDataById($id_users),
            "data_normalisasi" => $getDataNormalisasi,
            'data_open' => $data_buka['gelombang']
            
        );

        $this->load->view('homee/layout/header',$data);
        $this->load->view('homee/layout/navbar_pendaftaran');
        $this->load->view('homee/page/informasi_penerimaan');
        $this->load->view('homee/layout/footer');
    }

}
