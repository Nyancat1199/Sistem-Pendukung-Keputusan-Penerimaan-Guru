<?php

class ModelNilai extends CI_Model
{


    public function getDataPengalaman($pengalaman)
    {
        // return $this->db->get_where('tb_nilai', array('crips' => $pengalaman))->row_array();

        $sql = "SELECT * FROM tb_nilai, tb_kriteria WHERE
                tb_nilai.id_kriteria = tb_kriteria.id_kriteria AND
                tb_nilai.crips = '$pengalaman'";

        return $this->db->query($sql, $pengalaman)->row_array();
    }

    public function getDataPendidikan($pendidikan)
    {

        $sql = "SELECT * FROM tb_nilai, tb_kriteria WHERE
        tb_nilai.id_kriteria = tb_kriteria.id_kriteria AND
        tb_nilai.crips = '$pendidikan'";

        return $this->db->query($sql, $pendidikan)->row_array();
    }

    public function getPengalaman()
    {

        $sql = "SELECT * FROM tb_nilai, tb_kriteria WHERE
                tb_nilai.id_kriteria = tb_kriteria.id_kriteria AND
                tb_kriteria.kriteria = 'pengalaman' ";

        return $this->db->query($sql)->result_array();
    }

    public function getPendidikan()
    {

        $sql = "SELECT * FROM tb_nilai, tb_kriteria WHERE
                tb_nilai.id_kriteria = tb_kriteria.id_kriteria AND
                tb_kriteria.kriteria = 'pendidikan'";

        return $this->db->query($sql)->result_array();
    }

    public function getGaji()
    {
        $sql = "SELECT * FROM tb_nilai, tb_kriteria WHERE
                tb_nilai.id_kriteria = tb_kriteria.id_kriteria AND
                tb_kriteria.kriteria = 'gaji'";

        return $this->db->query($sql)->result_array();
    }

    public function getDataGaji($gaji)
    {

        $sql = "SELECT * FROM tb_nilai, tb_kriteria WHERE
                tb_nilai.id_kriteria = tb_kriteria.id_kriteria AND
                tb_nilai.crips = '$gaji'";

        return $this->db->query($sql, $gaji)->row_array();
    }

    public function getData()
    {

        $sql = "SELECT * FROM tb_nilai, tb_kriteria WHERE
                tb_nilai.id_kriteria = tb_kriteria.id_kriteria";

        return $this->db->query($sql)->result_array();
    }

   
}
