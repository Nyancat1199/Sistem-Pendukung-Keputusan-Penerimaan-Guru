<?php

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelUsers');
    }

    public function proses_register()
    {

        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $confirpass = $this->input->post('confirpass');

        if ($nama != null && $username != null && $password != null && $confirpass != null) {

            $data_users = $this->ModelUsers->getDataUsers($username);
            if ($password == $confirpass) {
                if ($data_users == null) {

                    $data = array(
                        "nama" => $nama,
                        "username" => $username,
                        "password" => $password,
                        "role" => 0
                    );


                    $this->ModelUsers->insertData($data);
                    $this->session->set_flashdata('pesan', 'Berhasil Melakukan Register');
                    $this->session->set_flashdata('type', 'success');
                    $this->session->set_flashdata('title', 'Berhasil!');
                    redirect(base_url('home/alur_pendaftaran'));
                } else {
                    $this->session->set_flashdata('pesan', 'username sudah terdaftar');
                    $this->session->set_flashdata('type', 'warning');
                    redirect(base_url('home/register'));
                }
            } else {
                $this->session->set_flashdata('pesan', 'password tidak cocok');
                $this->session->set_flashdata('type', 'danger');
                redirect(base_url('home/register'));
            }
        } else {

            $this->session->set_flashdata('pesan', 'Kolom tidak boleh kosong');
            $this->session->set_flashdata('type', 'danger');
            redirect(base_url('home/register'));
        }
    }
}
