<?php

class Materi_model extends CI_Model
{
    public function tampilData(){
        return $this->db->get('tbl_data_materi');
    }

    public function addData($data){
        return $this->db->insert('tbl_data_materi', $data);
    }
}