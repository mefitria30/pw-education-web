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
}