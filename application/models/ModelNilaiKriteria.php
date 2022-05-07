<?php

class ModelNilaiKriteria extends CI_Model
{

    public function insertData($data_nilai_kriteria)
    {

        return $this->db->insert('tb_nilai_kriteria', $data_nilai_kriteria);
    }

    public function getData()
    {

        $sql = "SELECT * FROM tb_nilai_kriteria, tb_pendaftaran, tb_kriteria WHERE
                tb_nilai_kriteria.id_pendaftaran = tb_pendaftaran.id_pendaftaran AND
                tb_nilai_kriteria.id_kriteria = tb_kriteria.id_kriteria";

        return $this->db->query($sql)->result_array();
    }

    public function updateData($data,$id_pendaftaran){

        return $this->db->update('tb_nilai_kriteria',$data, array('id_pendaftaran' => $id_pendaftaran));

    }

    public function getDataByIdPendaftar($id_pendaftaran){

        return $this->db->get_where('tb_nilai_kriteria', array('id_pendaftaran' => $id_pendaftaran))->row_array();

    }

    public function getDataPenilaian(){

        return $this->db->get('tb_nilai_kriteria')->result_array();

    }

    public function getDataPengalaman(){

        $sql = "SELECT * FROM tb_nilai_kriteria, tb_subkriteria WHERE tb_nilai_kriteria.pengalaman = 
        tb_subkriteria.id_subkriteria";

        return $this->db->query($sql)->result_array();

    }
    
    public function getMaxPengalaman($pengalaman){

        $this->db->select_max('nilai_sub');

        $sql = "SELECT * FROM tb_nilai_kriteria, tb_subkriteria WHERE tb_nilai_kriteria.pengalaman =
            tb_subkriteria.id_subkriteria";

        return $this->db->query($sql)->result_array();

    }

    public function getPenilaian(){
        $sql = "SELECT id_nilai_kriteria, 
                      SB1.crips as pengalaman, 
                      SB2.crips as pendidikan, 
                      SB3.crips as usia,
                      SB4.crips as wawancara,
                      SB5.crips as kepribadian,
                      nama_lengkap, is_verified,tgl_pendaftaran,id_nilai_kriteria  FROM  tb_nilai_kriteria 
                JOIN tb_subkriteria SB1 ON tb_nilai_kriteria.pengalaman = SB1.id_subkriteria
                JOIN tb_subkriteria SB2 ON tb_nilai_kriteria.pendidikan = SB2.id_subkriteria
                JOIN tb_subkriteria SB3 ON tb_nilai_kriteria.usia = SB3.id_subkriteria
                JOIN tb_subkriteria SB4 ON tb_nilai_kriteria.wawancara = SB4.id_subkriteria
                JOIN tb_subkriteria SB5 ON tb_nilai_kriteria.kepribadian = SB5.id_subkriteria
                JOIN tb_pendaftaran ON tb_nilai_kriteria.id_pendaftaran = tb_pendaftaran.id_pendaftaran WHERE 
                is_verified = 1 ORDER BY id_nilai_kriteria DESC";
        return $this->db->query($sql)->result_array();
    }

    public function getDataKriteria(){
        $sql = "SELECT id_nilai_kriteria, 
                      SB1.nilai_sub as pengalaman, 
                      SB2.nilai_sub as pendidikan, 
                      SB3.nilai_sub as usia,
                      SB4.nilai_sub as wawancara,
                      SB5.nilai_sub as kepribadian,
                      nama_lengkap, status_penerimaan FROM  tb_nilai_kriteria 
                JOIN tb_subkriteria SB1 ON tb_nilai_kriteria.pengalaman = SB1.id_subkriteria
                JOIN tb_subkriteria SB2 ON tb_nilai_kriteria.pendidikan = SB2.id_subkriteria
                JOIN tb_subkriteria SB3 ON tb_nilai_kriteria.usia = SB3.id_subkriteria
                JOIN tb_subkriteria SB4 ON tb_nilai_kriteria.wawancara = SB4.id_subkriteria
                JOIN tb_subkriteria SB5 ON tb_nilai_kriteria.kepribadian = SB5.id_subkriteria
                JOIN tb_pendaftaran ON tb_nilai_kriteria.id_pendaftaran = tb_pendaftaran.id_pendaftaran
                WHERE SB4.nilai_sub != 0 && SB5.nilai_sub != 0 && status_penerimaan != 1";
        return $this->db->query($sql)->result_array();
    }

    public function ambilNilaiMaxBerdasarkanKriteria($kriteria){
        $this->db->select_min($kriteria);

        return $this->db->get('tb_nilai_kriteria')->result_array();
    }

    public function ambilNilaiMinBerdasarkanKriteria($kriteria){
        $this->db->select_max($kriteria);

        return $this->db->get('tb_nilai_kriteria')->result_array();
    }

    public function getDetailSubKriteria($idSubKriteria){
        return $this->db->get_where('tb_subkriteria',['id_subkriteria' => $idSubKriteria])->row_array();
    }

    public function UpdateStatus(){

        $sql = "UPDATE tb_nilai_kriteria SET status = 1, status_penerimaan = 1 WHERE kepribadian != 21 AND wawancara != 20";

        return $this->db->query($sql);

    }

    public function getStatusById($id_users, $data_buka){
        
        $sql = "SELECT * FROM tb_nilai_kriteria, tb_pendaftaran WHERE tb_nilai_kriteria.id_pendaftaran = 
                tb_pendaftaran.id_pendaftaran AND id_users = $id_users AND gelombang = $data_buka";

        return $this->db->query($sql)->row_array();
    }

    public function getDataByIdNilai($id_pendaftaran){

        return $this->db->get_where('tb_nilai_kriteria', array('id_pendaftaran' => $id_pendaftaran))->row_array();

    }

    public function insertCheck($data_check){

        return $this->db->insert('tb_verifikasi', $data_check);
        
    }
   
}
