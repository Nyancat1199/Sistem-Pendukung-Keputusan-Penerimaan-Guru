<?php 

class ModelVerifikasi extends CI_Model{

    public function getDataNotVerif(){

        $sql = "SELECT * FROM tb_verifikasi, tb_nilai_kriteria, tb_pendaftaran WHERE
                tb_verifikasi.id_nilai_kriteria = tb_nilai_kriteria.id_nilai_kriteria AND
                tb_nilai_kriteria.id_pendaftaran = tb_pendaftaran.id_pendaftaran AND is_verified = 2";

        return $this->db->query($sql)->result_array();
    }

    public function getDataFixVerif(){

        $sql = "SELECT * FROM tb_verifikasi, tb_nilai_kriteria, tb_pendaftaran WHERE
                tb_verifikasi.id_nilai_kriteria = tb_nilai_kriteria.id_nilai_kriteria AND
                tb_nilai_kriteria.id_pendaftaran = tb_pendaftaran.id_pendaftaran AND is_verified = 1 ORDER BY
                tb_pendaftaran.id_pendaftaran DESC";

        return $this->db->query($sql)->result_array();

    }




}