<?php

class ModelBukaPendaftaran extends CI_Model{


public function buka(){

    return $this->db->update('tb_buka_pendaftaran',array('status' => 1));
}
public function getDataBy($status){

    return $this->db->get_where('tb_buka_pendaftaran', array('id_buka' => $status))->row_array();

}
public function tutup(){

    return $this->db->update('tb_buka_pendaftaran',array('status' => 0));

}

public function updateGelombang($data){

    return $this->db->update('tb_buka_pendaftaran',$data);

}

}