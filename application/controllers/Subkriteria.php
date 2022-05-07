<?php

class Subkriteria extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelSubKriteria');
    }

    public function proses_tambah()
    {

        $id_kriteria = $this->uri->segment(3);

        $subkriteria = $this->input->post('sub_kriteria');
        $nilai = $this->input->post('nilai');

        if ($subkriteria != null && $nilai != null) {

            $data = array(
                'id_kriteria' => $id_kriteria,
                'crips' => $subkriteria,
                'nilai_sub' => $nilai
            );


            $this->ModelSubKriteria->insertData($data, $id_kriteria);
            $this->session->set_flashdata('pesan', 'Data Sub Kriteria Berhasil ditambahkan');
            $this->session->set_flashdata('type', 'success');
            redirect(base_url('dashboard/data_subkriteria/' . $id_kriteria));
        } else {

            $this->session->set_flashdata('pesan', 'Kolom tidak boleh Kosong');
            $this->session->set_flashdata('type', 'danger');
            redirect(base_url('dashboard/data_subkriteria/' . $id_kriteria));
        }
    }

    public function proses_update()
    {

        $id_kriteria = $this->uri->segment(3);

        $id_subkriteria = $this->input->post('id_subkriteria');
        $subkriteria = $this->input->post('sub_kriteria');
        $nilai = $this->input->post('nilai');

        if ($subkriteria != null && $nilai != null) {

            $data = array(
                'crips' => $subkriteria,
                'nilai_sub' => $nilai
            );

            $this->ModelSubKriteria->updateData($data, $id_kriteria, $id_subkriteria);
            $this->session->set_flashdata('pesan', 'Data Sub Kriteria Berhasil dirubah');
            $this->session->set_flashdata('type', 'success');
            redirect(base_url('dashboard/data_subkriteria/' . $id_kriteria));
        } else {
            $this->session->set_flashdata('pesan', 'terdapat Kolom yang kosong');
            $this->session->set_flashdata('type', 'success');
            redirect(base_url('dashboard/data_subkriteria/' . $id_kriteria));
        }
    }

    public function proses_delete()
    {

        $id_subkriteria = $this->uri->segment(3);
        $id_kriteria = $this->uri->segment(4);

        $this->ModelSubKriteria->deleteData($id_subkriteria);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        $this->session->set_flashdata('type', 'success');
        redirect(base_url('dashboard/data_subkriteria/' . $id_kriteria));
    }
}
