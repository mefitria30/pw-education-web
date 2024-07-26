<?php

class Materi_model extends CI_Model
{
    public function tampilData(){
        // return $this->db->get('tbl_data_materi');

        $query = $this->db->query('
            select 
                a.id_materi, b.nama_kelas, c.nama_pelajaran, a.judul_materi, a.isi_materi, a.file, a.status, a.tanggal_dibuat, a.approver 
            from tbl_data_materi a 
            left join tbl_data_kelas b on b.id_kelas = a.id_kelas
            left join tbl_data_pelajaran c on c.id_pelajaran = a.id_pelajaran
            order by a.judul_materi asc
        ');
        return $query->result();

    }

    public function addData($data){
        return $this->db->insert('tbl_data_materi', $data);
    }

    public function editData($id_materi, $data){
        return $this->db->update('tbl_data_materi', $data, ['id_materi' => $id_materi]);
    }

    public function detailData($id_materi){
        return $this->db->get_where('tbl_data_materi', ['id_materi' => $id_materi]);
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
                id_pelajaran, nama_pelajaran
            FROM tbl_data_pelajaran
            order by nama_pelajaran asc
        ');
        return $query->result();
    }

    public function deleteData($id_materi){
        return $this->db->delete('tbl_data_materi', ['id_materi' => $id_materi]);
    }
}