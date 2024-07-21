<?php

class Pelajaran_model extends CI_Model{
    
    public function tampilDataPelajaran(){
        return $this->db->get('tbl_data_pelajaran');
    }

    public function get_pelajaran_by_id($id_pelajaran) {
        $this->db->where('id_pelajaran',$id_pelajaran);
        $query = $this->db->get('tbl_data_pelajaran');
        return $query->row();
    }
   
    public function addDatapelajaran($data){
        return $this->db->insert('tbl_data_pelajaran', $data);
    }

    
    public function update_pelajaran($id, $data) {
        $this->db->where('id_pelajaran', $id);
       return $this->db->update('tbl_data_pelajaran', $data);
    }

    public function delete_pelajaran($id_pelajaran) {
        return $this->db->delete('tbl_data_pelajaran', array('id_pelajaran' => $id_pelajaran));
    }
   
}

?>