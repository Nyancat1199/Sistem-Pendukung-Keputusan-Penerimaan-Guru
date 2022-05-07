<?php

class ModelHasil extends CI_Model{

    public function insertData($data_hasil){

        return $this->db->insert('tb_hasil', $data_hasil);
        

    }



}