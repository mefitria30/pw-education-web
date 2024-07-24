<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');

        if($this->session->userdata('level_user') !== 'admin'){
			redirect('auth');
		}
    }

    public function index() {
        $data = [
            'title' => 'List Data User',
            'subtitle' => 'Data User',
            'dataUser' => $this->User_model->get_all_users()
        ];
        $this->template->load('index', 'pages/data-user/user', $data);
    }

    public function add() {
        $data = [
            'title' => 'Add User',
            'subtitle' => 'Form Add User'
        ];
        $this->template->load('index', 'pages/data-user/user_add', $data);
    }

    public function add_process() {
        $data = [
            'nama_user' => $this->input->post('nama_user'),
            'email_user' => $this->input->post('email_user'),
            // 'password_user' => password_hash($this->input->post('password_user'), PASSWORD_BCRYPT),
            'password_user' => $this->input->post('password_user'),
            'level_user' => $this->input->post('level_user')
        ];

        $this->User_model->add_user($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data berhasil ditambahkan</div>');
        redirect('user');
    }

    public function edit($id_user) {
        $data = [
            'title' => 'Edit User',
            'subtitle' => 'Form Edit User',
            'user' => $this->User_model->get_user_by_id($id_user)
        ];
        $this->template->load('index', 'pages/data-user/user_edit', $data);
    }

    public function edit_process($id_user) {
        $data = [
            'nama_user' => $this->input->post('nama_user'),
            'email_user' => $this->input->post('email_user'),
            // 'password_user' => password_hash($this->input->post('password_user'), PASSWORD_BCRYPT),
            'password_user' => $this->input->post('password_user'),
            'level_user' => $this->input->post('level_user')
        ];

        $this->User_model->update_user($id_user, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data berhasil diperbarui</div>');
        redirect('user');
    }

    public function delete($id_user) {
        $this->User_model->delete_user($id_user);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data berhasil dihapus</div>');
        redirect('user');
    }
}