<?php

class ModelUsers extends CI_Model
{


    public function getDataUsers($username)
    {

        return $this->db->get_where('tbl_users', array('username' => $username))->row_array();
    }

    public function getDataById($id_users){

        return $this->db->get_where('tbl_users', array('id_users' => $id_users ))->row_array();

    }

    public function insertData($data){

        return $this->db->insert('tbl_users',$data);

    }
    
}
