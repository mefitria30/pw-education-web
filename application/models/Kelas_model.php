<?php
class Kelas_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_all_kelas() {
        $query = $this->db->get('tbl_data_kelas');
        return $query->result();
    }
    
    public function get_kelas($id) {
        $query = $this->db->get_where('tbl_data_kelas', array('id_kelas' => $id));
        return $query->row();
    }
    
    public function create_kelas($data) {
        return $this->db->insert('tbl_data_kelas', $data);
    }
    
    public function update_kelas($id, $data) {
        $this->db->where('id_kelas', $id);
        return $this->db->update('tbl_data_kelas', $data);
    }
    
    public function delete_kelas($id) {
        $this->db->where('id_kelas', $id);
        return $this->db->delete('tbl_data_kelas');
    }
}