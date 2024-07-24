<?php
class Kelas extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Kelas_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        if($this->session->userdata('level_user') !== 'admin'){
			redirect('auth');
		}
    }
    
    // public function index() {
    //     $data['kelas'] = $this->Kelas_model->get_all_kelas();
    //     $this->load->view('pages/data-kelas/index', $data);
    // }

    public function index() {
        $data['title'] = 'Data Kelas'; 
        $data['subtitle'] = 'Manajemen Data Kelas'; 
        $data['kelas'] = $this->Kelas_model->get_all_kelas();
        $data['content'] = $this->load->view('pages/data-kelas/index', $data, true);
        $this->load->view('index', $data);
    }    
    
    
    public function buat() {
        $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required');
        
        if ($this->form_validation->run() === FALSE) {
            $this->index();
        } else {
            $data = array(
                'nama_kelas' => $this->input->post('nama_kelas'),
                'deskripsi' => $this->input->post('deskripsi'),
                'id_user' => $this->input->post('id_user')
            );
            $this->Kelas_model->create_kelas($data);
            redirect('Kelas/index');
        }
    }
    
    public function edit($id) {
        $kelas = $this->Kelas_model->get_kelas($id);
        if ($this->input->is_ajax_request()) {
            echo json_encode($kelas);
        } else {
            $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required');
            
            if ($this->form_validation->run() === FALSE) {
                $this->index();
            } else {
                $update_data = array(
                    'nama_kelas' => $this->input->post('nama_kelas'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'id_user' => $this->input->post('id_user')
                );
                $this->Kelas_model->update_kelas($id, $update_data);
                redirect('Kelas/index');
            }
        }
    }
    
    public function hapus($id) {
        $this->Kelas_model->delete_kelas($id);
        redirect('Kelas/index');
    }
}