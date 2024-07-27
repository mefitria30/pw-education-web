<?php

class Home_model extends CI_Model
{

    public function getCntKelas()
    {
        $query = $this->db->query('
            SELECT count(*) as `jml_kelas` FROM `tbl_data_kelas`;
        ');
        return $query->result();
    }

    public function getCntUser()
    {
        $query = $this->db->query('
            SELECT count(*) as `jml_user` FROM `tbl_data_user`;
        ');
        return $query->result();
    }

    public function getCntPelajaran()
    {
        $query = $this->db->query('
            SELECT count(*) as `jml_pelajaran` FROM `tbl_data_pelajaran`;
        ');
        return $query->result();
    }

    public function getCntMateriApproved()
    {
        $query = $this->db->query('
            SELECT count(*) as `cntApproved` FROM `tbl_data_materi` WHERE status = "approved";
        ');
        return $query->result();
    }

    public function getCntMateriRejected()
    {
        $query = $this->db->query('
            SELECT count(*) as `cntRejected` FROM `tbl_data_materi` WHERE status = "rejected";
        ');
        return $query->result();
    }

    public function getCntMateriVerification()
    {
        $query = $this->db->query('
            SELECT count(*) as `cntVerification` FROM `tbl_data_materi` WHERE status = "verification";
        ');
        return $query->result();
    }
}