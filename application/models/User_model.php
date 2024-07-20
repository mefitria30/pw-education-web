<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    // Function to retrieve all users
    public function get_all_users() {
        $query = $this->db->get('tbl_data_user');
        return $query->result();
    }

    // Function to retrieve a user by ID
    public function get_user_by_id($id_user) {
        $this->db->where('id_user', $id_user);
        $query = $this->db->get('tbl_data_user');
        return $query->row();
    }

    // Function to add a new user
    public function add_user($data) {
        return $this->db->insert('tbl_data_user', $data);
    }

    // Function to update a user
    public function update_user($id_user, $data) {
        $this->db->where('id_user', $id_user);
        return $this->db->update('tbl_data_user', $data);
    }

    // Function to delete a user
    public function delete_user($id_user) {
        $this->db->where('id_user', $id_user);
        return $this->db->delete('tbl_data_user');
    }
}
