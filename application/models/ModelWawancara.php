
<?php

class ModelWawancara extends CI_Model{


    public function insertData($datawawancara){

        return $this->db->insert('tb_wawancara', $datawawancara);

    }

    public function getDataByIdUsers($id_users, $data_buka){

        $sql = "SELECT * FROM tb_pendaftaran, tb_wawancara WHERE
                tb_wawancara.id_pendaftaran = tb_pendaftaran.id_pendaftaran AND
                tb_pendaftaran.id_users = $id_users AND tb_pendaftaran.gelombang = $data_buka";

        return $this->db->query($sql)->row_array();

    }

    public function getDataWawancara(){

        $sql = "SELECT * FROM tb_wawancara, tb_pendaftaran WHERE
                tb_wawancara.id_pendaftaran = tb_pendaftaran.id_pendaftaran AND
                tb_wawancara.is_verif = 1";

        return $this->db->query($sql)->result_array();


    }

    public function updateData($wawancara_data, $id_pendaftaran){

        return $this->db->update('tb_wawancara', $wawancara_data, array('id_pendaftaran' => $id_pendaftaran));

    }

    public function insert($data_wawancara){

        return $this->db->insert('tb_wawancara',$data_wawancara);

    }

    public function getData(){

        $sql = "SELECT * FROM tb_wawancara, tb_pendaftaran WHERE tb_wawancara.id_pendaftaran
                = tb_pendaftaran.id_pendaftaran AND is_verif = 0";
        
        return $this->db->query($sql)->result_array();

    }

    public function updateJadwal($id_wawancara,$data_jadwal){

        return $this->db->update('tb_wawancara',$data_jadwal, array('id_wawancara' => $id_wawancara));

    }

    public function getDataById($id_wawancara){

        $sql = "SELECT * FROM tb_wawancara, tb_pendaftaran WHERE tb_wawancara.id_pendaftaran
        = tb_pendaftaran.id_pendaftaran AND id_wawancara = $id_wawancara";

        return $this->db->query($sql)->row_array();

    }

    public function getDataByTanggalAndWaktu($tanggal, $waktu){

        $sql = "SELECT * FROM tb_wawancara WHERE tanggal = '$tanggal' AND waktu = '$waktu'";

        return $this->db->query($sql)->row_array();

    }

    public function getDataPenilaian(){

        $sql = "SELECT * FROM tb_wawancara WHERE is_verif = 1";

        return $this->db->query($sql)->result_array();

    }

    

}