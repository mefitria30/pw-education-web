<?php

class Materi_model extends CI_Model
{
    public function tampilData(){
        return $this->db->get('tbl_data_materi');
    }

    public function addData($data){
        return $this->db->insert('tbl_data_materi', $data);
    }

    public function getDataKelas()
    {
        $query = $this->db->query('
            SELECT 
                id_kelas, nama_kelas 
            FROM tbl_data_kelas
            order by nama_kelas asc
        ');
        return $query->result();
    }

    public function getDataPelajaran()
    {
        $query = $this->db->query('
            SELECT 
                id_pelajaran, kode_pelajaran, nama_pelajaran
            FROM tbl_data_pelajaran
            order by nama_pelajaran asc
        ');
        return $query->result();
    }

    public function deleteData($id_materi){
        return $this->db->delete('tbl_data_materi', ['id_materi' => $id_materi]);
    }
}