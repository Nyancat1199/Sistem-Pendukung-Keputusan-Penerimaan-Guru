<?php

class ModelKriteria extends CI_Model
{

    public function getData()
    {

        return $this->db->get('tb_kriteria')->result_array();
    }

    public function getDataPerTipe($jenis){
        return $this->db->get_where('tb_kriteria',['jenis' => $jenis])->result_array();
    }

    public function insertData($data)
    {

        return $this->db->insert('tb_kriteria', $data);
    }

    public function updateData($data, $id_kriteria)
    {

        return $this->db->update('tb_kriteria', $data, array('id_kriteria' => $id_kriteria));
    }

    public function deleteData($id_kriteria)
    {

        return $this->db->delete('tb_kriteria', array("id_kriteria" => $id_kriteria));
    }

    public function getDataSubKriteria($id_kriteria){

        $sql = "SELECT * FROM tb_subkriteria WHERE id_kriteria = ?";

        return $this->db->query($sql,$id_kriteria)->result_array();

    }
}
