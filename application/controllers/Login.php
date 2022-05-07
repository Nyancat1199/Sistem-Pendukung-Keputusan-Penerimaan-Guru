<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelUsers');
    }

    public function index()
    {

        $this->load->view('login/index');
    }


    public function proses_login()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');


        if ($username != null && $password != null) {

            $data = $this->ModelUsers->getDataUsers($username);
            if ($data != null) {

                $data_password = $data['password'];
                if ($data_password == $password) {

                    $role = $data['role'];
                    if ($role == 0) {


                        $this->session->set_userdata('id_users', $data['id_users']);
                        $this->session->set_userdata('username', $data['username']);
                        $this->session->set_userdata('nama', $data['nama']);
                        $this->session->set_userdata('user', true);
                        $this->session->set_flashdata('pesan', 'anda berhasil login');
                        $this->session->set_flashdata('type', 'success');
                        $this->session->set_flashdata('title', 'Berhasil!');
                        redirect(base_url('home/alur_pendaftaran'));
                    } else if ($role == 1) {

                        $this->session->set_userdata('id_users', $data['id_users']);
                        $this->session->set_userdata('username', $data['username']);
                        $this->session->set_userdata('nama', $data['nama']);
                        $this->session->set_userdata('admin', true);  
                        redirect(base_url('dashboard'));
                    } else if ($role == 2) {
                        $this->session->set_userdata('id_users', $data['id_users']);
                        $this->session->set_userdata('username', $data['username']);
                        $this->session->set_userdata('nama', $data['nama']);
                        $this->session->set_userdata('kepsek', true);
                        $this->session->set_flashdata('pesan', 'anda berhasil login');
                        $this->session->set_flashdata('type', 'success');
                        $this->session->set_flashdata('title', 'Berhasil!');
                        redirect(base_url('dashboard'));
                    }
                } else {

                    $this->session->set_flashdata('pesan', 'Password Salah ');
                    $this->session->set_flashdata('type', 'error');
                    $this->session->set_flashdata('title', 'Gagal!');

                    redirect(base_url('home/alur_pendaftaran'));
                }
            } else {
                $this->session->set_flashdata('pesan', 'Username Tidak Cocok ');
                $this->session->set_flashdata('type', 'warning');
                $this->session->set_flashdata('title', 'Gagal!');

                redirect(base_url('home/pendaftaran_guru'));
            }
        } else {

            $this->session->set_flashdata('pesan', 'Data tidak boleh kosong');
            $this->session->set_flashdata('type', 'error');
            $this->session->set_flashdata('title', 'Gagal!');
            redirect(base_url('home/alur_pendaftaran'));
        }
    }


    public function proses_logout()
    {

        session_destroy();
        redirect(base_url('home/alur_pendaftaran'));
    }
}
