<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelKriteria');
        $this->load->model('ModelNilai');
        $this->load->model('ModelNilaiKriteria');
        $this->load->model('ModelPendaftaran');
        $this->load->model('ModelSubKriteria');
        $this->load->model('ModelWawancara');
        $this->load->model('ModelUsers');
        $this->load->model('ModelNormalisasi');
        $this->load->model('ModelBukaPendaftaran');
        $this->load->model('ModelVerifikasi');
        if ($this->session->userdata('kepsek') != true && $this->session->userdata('admin') != true) {

            redirect(base_url());
        }
    }

    public function index()
    {
        $data_verif = $this->ModelPendaftaran->getDataVerif();
        $count_verif = count($data_verif);
        $data_pendaftaran = $this->ModelPendaftaran->getData();
        $count_pendaftaran = count($data_pendaftaran);
        $data_notverif = $this->ModelPendaftaran->getDataFailVerif();
        $data_normalisasi = $this->ModelNormalisasi->getData();
        $data_kriteria = $this->ModelKriteria->getData();
        $data_wawancara = $this->ModelWawancara->getDataPenilaian();
        $data_laporan = $this->ModelNormalisasi->getDataLaporan();


        $data = array(
            "title" => "Dashboard",
            "count_verif" => $count_verif,
            "count_pendaftaran" => $count_pendaftaran,
            "count_notverif" => count($data_notverif),
            "count_perhitungan" => count($data_normalisasi),
            "count_wawancara" => count($data_wawancara),
            "count_laporan" => count($data_laporan)
        );

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/index');
        $this->load->view('admin/layout/footer');
    }

    public function data_kriteria()
    {
        $data = array(
            "title" => "Dashboard - Data Kriteria",
            "data_kriteria" => $this->ModelKriteria->getData()

        );

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/data/data_kriteria');
        $this->load->view('admin/layout/footer');
    }

    public function data_subkriteria()
    {
        $id_kriteria = $this->uri->segment(3);

        $data = array(
            'data_sub_kriteria' => $this->ModelKriteria->getDataSubKriteria($id_kriteria),
            'title' => 'Dashboard - Sub Kriteria'
        );

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/data/data_subkriteria');
        $this->load->view('admin/layout/footer');
    }

    public function data_perhitungan()
    {


        $data = array(
            'data_nilai' => $this->ModelNilaiKriteria->getData(),
            'data_pendaftaran' => $this->ModelPendaftaran->getData()
        );

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/data/data_perhitungan');
        $this->load->view('admin/layout/footer');
    }

    public function data_verifikasi_pendaftaran()
    {

        $data = array(
            'data_isverif' => $this->ModelPendaftaran->getDataNotVerified(),
            'data_verif' => $this->ModelVerifikasi->getDataFixVerif(),
            'data_notverif' => $this->ModelVerifikasi->getDataNotVerif(),
            'title' => 'Dashboard - Verifikasi Data'
        );

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/data/data_verifikasi_pendaftaran');
        $this->load->view('admin/layout/footer');
    }

    public function data_pendaftaran()
    {
        $bukatutup = $this->ModelBukaPendaftaran->getDataBy(1);
        $data = array(
            'data_verif' => $this->ModelPendaftaran->getData(),
            'title' => "Dashboard - Data Pendaftaran",

        );

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/data/data_pendaftaran');
        $this->load->view('admin/layout/footer');
    }

    public function data_wawancara()
    {

        $data_subkriteria = $this->ModelSubKriteria->getData();
        $kepribadian = $data_subkriteria['kriteria'] = 'kepribadian';
        $wawancara = $data_subkriteria['kriteria'] = 'wawancara';

        $data = array(
            'data_wawancara' => $this->ModelWawancara->getDataWawancara(),
            'data_kriteria_kepribadian' => $this->ModelSubKriteria->getDataKepribadian($kepribadian),
            'data_kriteria_wawancara' => $this->ModelSubKriteria->getDataWawancara($wawancara),
            'title' => 'Dashboard - Wawancara'

        );

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/data/data_wawancara');
        $this->load->view('admin/layout/footer');
    }

    public function data_akhir()
    {

        // $cekDataPenilian = $this->ModelNilaiKriteria->cekDataPenilaian();
        $getDataPenilaian = $this->ModelNilaiKriteria->getPenilaian();

        $data = array(
            'title' => 'Dashboard - Penilaian Akhir',
            'data_penilaian' => $getDataPenilaian
        );

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/data/data_hasil');
        $this->load->view('admin/layout/footer');
    }

    public function data_nilai()
    {


        $getDataNormalisasi = $this->ModelNormalisasi->getData();
        $getDataPendaftaran = $this->ModelPendaftaran->getGelombang();

        $data = array(
            'title' => 'Dashboard - Penilaian Akhir',
            'data_normalisasi' => $getDataNormalisasi,
            'gelombang' => $getDataPendaftaran
        );

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/data/data_nilai');
        $this->load->view('admin/layout/footer');
    }

    public function jadwal_wawancara()
    {

        $data = array(
            "title" => "Dashboard - Jadwal Wawancara",
            "data_wawancara" => $this->ModelWawancara->getData()
        );

        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/data/data_jadwal');
        $this->load->view('admin/layout/footer');
    }

    public function buka_pendaftaran()
    {

        $data_buka = $this->ModelBukaPendaftaran->getDataBy(1);
        $gelombang = $data_buka['gelombang'];
        $data = array(
            "gelombang" => $gelombang + 1
        );
        $this->ModelBukaPendaftaran->updateGelombang($data);
        $this->ModelBukaPendaftaran->buka();
        redirect(base_url('dashboard'));
    }

    public function tutup_pendaftaran()
    {
        $this->ModelBukaPendaftaran->tutup();
        redirect(base_url('dashboard'));
    }

    public function data_laporan()
    {
        
        $gelombang = $this->input->post('tgl_penerimaan');
        $getDataNormalisasi = $this->ModelNormalisasi->getDataLimitByDate($gelombang);
        $data_tanggal = $this->ModelNormalisasi->getTgl($gelombang);
        
        

        $data = array(
            "title" => "Dashboard - Laporan Penerimaan",
            "tgl_penerimaan" => $this->ModelNormalisasi->getDataBytgl(),
            "data_penerimaan" => $this->ModelNormalisasi->getDataByDateAndId($getDataNormalisasi['id_pendaftaran'],$data_tanggal['gelombang']),
            "tanggal" => $data_tanggal,
            "data_limit" => $getDataNormalisasi,
            "gelombang" => $gelombang
        );


        $this->load->view('admin/layout/header', $data);
        $this->load->view('admin/layout/navbar');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/data/data_laporan');
        $this->load->view('admin/layout/footer');
    }

    public function cetaklaporan(){

        $tanggal = $this->uri->segment(3);

        $getDataNormalisasi = $this->ModelNormalisasi->getDataLimitByDate($tanggal);
        $getDataPenerimaan =  $this->ModelNormalisasi->getDataAccept($tanggal);
        
        $data = array(
            "data_penerimaan" => $this->ModelNormalisasi->getDataByDate($tanggal),
            "data_limit" => $getDataNormalisasi,
            "tgl_penerimaan" => $getDataPenerimaan['tgl_penerimaan']
        );

        $this->load->view('admin/data/cetak_laporan', $data);

    }
}
