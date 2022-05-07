<?php

class Kriteria extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelKriteria');
    }

    public function proses_tambah()
    {

        $kriteria = $this->input->post('kriteria');
        $jenis = $this->input->post('jenis');
        $bobot = $this->input->post('bobot');

        if ($kriteria != null && $jenis != null && $bobot != null) {
            $data = array(

                'kriteria' => $kriteria,
                'jenis' => $jenis,
                'bobot' => $bobot

            );

            $this->ModelKriteria->insertData($data);
            $this->session->set_flashdata('pesan', 'Berhasil Menambahkan Data kriteria');
            $this->session->set_flashdata('type', 'success');
            redirect(base_url('dashboard/data_kriteria'));
        } else {
            $this->session->set_flashdata('pesan', 'Kolom tidak boleh kosong');
            $this->session->set_flashdata('type', 'danger');
            redirect(base_url('dashboard/data_kriteria'));
        }
    }

    public function proses_update()
    {

        $id_kriteria = $this->input->post('id_kriteria');
        $kriteria = $this->input->post('kriteria');
        $jenis = $this->input->post('jenis');
        $bobot = $this->input->post('bobot');

        if ($kriteria != null && $jenis != null && $bobot != null) {
            $data = array(

                'kriteria' => $kriteria,
                'jenis' => $jenis,
                'bobot' => $bobot

            );

            $this->ModelKriteria->updateData($data, $id_kriteria);
            $this->session->set_flashdata('pesan', 'Berhasil Mengubah Data kriteria');
            $this->session->set_flashdata('type', 'success');
            redirect(base_url('dashboard/data_kriteria'));
        } else {
            $this->session->set_flashdata('pesan', 'Gagal Mengubah Data kriteria');
            $this->session->set_flashdata('type', 'danger');
            redirect(base_url('dashboard/data_kriteria'));
        }
    }

    public function proses_delete()
    {
        $id_kriteria = $this->uri->segment(3);
        $this->ModelKriteria->deleteData($id_kriteria);
        redirect(base_url('dashboard/data_kriteria'));
    }
}
