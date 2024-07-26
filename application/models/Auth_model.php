<?php

class Auth_model extends CI_Model
{

    public function loginCheck($email_user, $password_user)
    {
        return $this->db->get_where('tbl_data_user', ['email_user' => $email_user, 'password_user' => $password_user]);
    }

    public function add_user($data) {
        return $this->db->insert('tbl_data_user', $data);
    }

    public function getDataMateriKelas($id_kelas)
    {
        $query = $this->db->query('
            select 
                b.nama_kelas, 
                c.nama_pelajaran,
                d.nama_user,
                a.*
            from tbl_data_materi a 
            left join tbl_data_kelas b on b.id_kelas = a.id_kelas
            left join tbl_data_pelajaran c on c.id_pelajaran = a.id_pelajaran
            left join tbl_data_user d on d.id_user = a.id_user
            where b.id_kelas = '.$id_kelas.' and status="approved";
        ');
        return $query->result();
    }

    public function getListDiskusi($id_materi)
    {
        $query = $this->db->query('
            SELECT
                tbl_data_user.nama_user,
                tbl_data_materi.judul_materi,
                tbl_data_diskusi.*
            FROM
                `tbl_data_diskusi`
            LEFT JOIN tbl_data_user ON tbl_data_user.id_user = tbl_data_diskusi.id_user
            left join tbl_data_materi on tbl_data_materi.id_materi = tbl_data_diskusi.id_materi
            where tbl_data_diskusi.id_materi = '.$id_materi.'
            order by tbl_data_diskusi.created_at desc;;
        ');
        return $query->result();
    }

    public function addData($data){
        return $this->db->insert('tbl_data_diskusi', $data);
    }

    public function deleteData($id_diskusi){
        return $this->db->delete('tbl_data_diskusi', ['id_diskusi' => $id_diskusi]);
    }

    public function tampilData($id_user){

        $query = $this->db->query('
            select 
                a.id_materi, b.nama_kelas, c.nama_pelajaran, a.judul_materi, a.isi_materi, a.file, a.status, a.tanggal_dibuat, a.approver 
            from tbl_data_materi a 
            left join tbl_data_kelas b on b.id_kelas = a.id_kelas
            left join tbl_data_pelajaran c on c.id_pelajaran = a.id_pelajaran
            where a.id_user = '.$id_user.'
            order by a.judul_materi asc
        ');
        return $query->result();

    }
}