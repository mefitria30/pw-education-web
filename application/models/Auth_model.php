<?php

class Auth_model extends CI_Model
{

    public function loginCheck($email_user, $password_user)
    {
        return $this->db->get_where('tbl_data_user', ['email_user' => $email_user, 'password_user' => $password_user]);
    }
}