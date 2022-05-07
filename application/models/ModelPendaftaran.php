<?php

class ModelPendaftaran extends CI_Model
{

    public function insertData($data)
    {

        return $this->db->insert_batch('tb_pendaftaran', $data);
    }

    public function getDataNama($nama_lengkap)
    {

        return $this->db->get_where('tb_pendaftaran', array('nama_lengkap' => $nama_lengkap))->row_array();
    }

    public function getDataPendaftaran($nik)
    {

        return $this->db->get_where('tb_pendaftaran', array('nik' => $nik))->row_array();
    }

    public function getData()
    {

        $sql = "SELECT * FROM tb_pendaftaran ORDER BY id_pendaftaran DESC";

        return $this->db->query($sql)->result_array();
    }

    public function getDataLast()
    {

        $sql = "SELECT * FROM tb_pendaftaran ORDER BY id_pendaftaran DESC";
        return $this->db->query($sql)->row_array();
    }


    public function getDataNotVerified()
    {

        $sql = "SELECT * FROM tb_pendaftaran WHERE is_verified = 0 ORDER BY id_pendaftaran";

        return $this->db->query($sql)->result_array();
    }

    public function getDataVerif()
    {

        $sql = "SELECT * FROM tb_pendaftaran WHERE is_verified = 1";

        return $this->db->query($sql)->result_array();
    }

    public function verif_pendaftar($id_pendaftaran, $data)
    {

        $this->db->update('tb_pendaftaran', $data, array('id_pendaftaran' => $id_pendaftaran));
    }

    public function getDataById($id_pendaftaran)
    {

        return $this->db->get_where('tb_pendaftaran', array('id_pendaftaran' => $id_pendaftaran))->row_array();
    }


    public function getDataByIdUsers($id_users){

        return $this->db->get_where('tb_pendaftaran', array('id_users' => $id_users))->row_array();

    }

    public function getDataByGelombang($id_users, $gelombang){
        
        $sql = "SELECT * FROM tb_pendaftaran, tbl_users WHERE tb_pendaftaran.id_users = tbl_users.id_users
                AND tb_pendaftaran.id_users = $id_users AND gelombang = $gelombang";

        return $this->db->query($sql)->row_array();

    }

   

    public function getGelombang(){

        $sql = "SELECT * FROM tb_pendaftaran GROUP BY gelombang";

        return $this->db->query($sql)->result_array();

    }

    

    public function getDataByIdUsersAndGelombang($id_users,$data_buka){

        $sql = "SELECT * FROM tb_pendaftaran WHERE id_users = ? AND gelombang = $data_buka";

        return $this->db->query($sql,$id_users)->row_array();

    }

    public function getDataFailVerif(){

        $sql = "SELECT * FROM tb_pendaftaran WHERE is_verified = 2";

        return $this->db->query($sql)->result_array();

    }

}
