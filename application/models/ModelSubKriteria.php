<?php

class ModelSubKriteria extends CI_Model
{

    public function insertData($data, $id_kriteria)
    {

        return $this->db->insert('tb_subkriteria', $data, array('id_kriteria' => $id_kriteria));
    }

    public function updateData($data, $id_kriteria, $id_subkriteria)
    {

        return $this->db->update('tb_subkriteria', $data, array('id_kriteria' => $id_kriteria, 'id_subkriteria' => $id_subkriteria));
    }

    public function deleteData($id_subkriteria)
    {

        return $this->db->delete('tb_subkriteria', array('id_subkriteria' => $id_subkriteria));
    }

    public function getDataPendidikan($pendidikan)
    {

        $sql = "SELECT * FROM tb_subkriteria, tb_kriteria WHERE
                tb_subkriteria.id_kriteria = tb_kriteria.id_kriteria AND
                tb_kriteria.kriteria = '$pendidikan'";

        return $this->db->query($sql)->result_array();
    }

    public function getDataPengalaman($pengalaman)
    {

        $sql = "SELECT * FROM tb_subkriteria, tb_kriteria WHERE
                tb_subkriteria.id_kriteria = tb_kriteria.id_kriteria AND
                tb_kriteria.kriteria = '$pengalaman'";

        return $this->db->query($sql)->result_array();
    }

    public function getDataUsia($usia)
    {

        $sql = "SELECT * FROM tb_subkriteria, tb_kriteria WHERE
                tb_subkriteria.id_kriteria = tb_kriteria.id_kriteria AND
                tb_kriteria.kriteria = '$usia'";

        return $this->db->query($sql)->result_array();
    }

    public function getData()
    {

        $sql = "SELECT * FROM tb_subkriteria, tb_kriteria WHERE
                tb_subkriteria.id_kriteria = tb_kriteria.id_kriteria";

        return $this->db->query($sql)->result_array;
    }

    public function getDataKepribadian($kepribadian)
    {

        $sql = "SELECT * FROM tb_subkriteria, tb_kriteria WHERE
                tb_subkriteria.id_kriteria = tb_kriteria.id_kriteria AND
                 tb_kriteria.kriteria = '$kepribadian'";

        return $this->db->query($sql)->result_array();
    }

    public function getDataWawancara($wawancara)
    {

        $sql = "SELECT * FROM tb_subkriteria, tb_kriteria WHERE
                tb_subkriteria.id_kriteria = tb_kriteria.id_kriteria AND
                tb_kriteria.kriteria = '$wawancara'";

        return $this->db->query($sql)->result_array();
    }

    public function getCripsPendidikan($pendidikan)
    {

        $sql = "SELECT * FROM tb_subkriteria, tb_kriteria WHERE
                tb_subkriteria.id_kriteria = tb_kriteria.id_kriteria AND
                tb_subkriteria.crips = '$pendidikan'";

        return $this->db->query($sql)->row_array();
    }

    public function getCripsPengalaman($pengalaman)
    {

        $sql = "SELECT * FROM tb_subkriteria, tb_kriteria WHERE
                tb_subkriteria.id_kriteria = tb_kriteria.id_kriteria AND
                tb_subkriteria.crips = '$pengalaman'";

        return $this->db->query($sql)->row_array();
    }

    public function getCripsUsia($usia){

        $sql = "SELECT * FROM tb_subkriteria, tb_kriteria WHERE
                tb_subkriteria.id_kriteria = tb_kriteria.id_kriteria AND
                tb_subkriteria.crips = '$usia'";

        return $this->db->query($sql)->row_array();

    }

    public function getWawancaraByName($wawancara){

        $sql = "SELECT * FROM tb_subkriteria, tb_kriteria WHERE
                tb_subkriteria.id_kriteria = tb_kriteria.id_kriteria AND
                tb_subkriteria.crips = '$wawancara'";

        return $this->db->query($sql)->row_array();

    }

    public function getKepribadian($kepribadian){

        $sql = "SELECT * FROM tb_subkriteria, tb_kriteria WHERE
                tb_subkriteria.id_kriteria = tb_kriteria.id_kriteria AND
                tb_subkriteria.crips = '$kepribadian'";

        return $this->db->query($sql)->row_array();

    }

    public function getNilaiSubkriteria($id_subkriteria){

        return $this->db->get_where('tb_subkriteria', array('id_subkriteria' => $id_subkriteria))->row_array();

    }
}
