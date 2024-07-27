<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('Auth_model');
    }

	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'subtitle' => 'Dashboard',
		];

		$this->template->load('v_login', 'pages/login/v_login_form', $data);
	}

	public function processLogin()
	{
		$email_user 	= $this->input->post('email_user');
		// $password_user 	= password_hash($this->input->post('password_user'), PASSWORD_BCRYPT);
		// $password_user 	= md5($this->input->post('password_user'));
		$password_user 	= $this->input->post('password_user');

		$check = $this->Auth_model->loginCheck($email_user, $password_user);
		// echo print_r($email_user);
		// echo print_r($password_user);
		// echo print_r($check);
			
		$row = $check->row();
		$total = $check->num_rows();

		// echo print_r($row->level_user);

		if($total > 0){
			$this->session->set_userdata([
				'id_user' => $row->id_user,
				'email_user' => $row->email_user,
				'nama_user' => $row->nama_user,
				'level_user' => $row->level_user,
			]);	

			if ($row->level_user == 'admin') {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Login berhasil</div>');
				redirect('home', 'refresh');
			} else if ($row->level_user == 'user') {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Login berhasil</div>');
				redirect('member', 'refresh');
			}
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Login gagal</div>');
			redirect('auth', 'refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth', 'refresh');
	}

	public function register() {
        $data = [
            'title' => 'Add User',
            'subtitle' => 'Form Add User'
        ];
        $this->template->load('v_login', 'pages/login/v_register', $data);
    }

	public function add_process() {
        $data = [
            'nama_user' => $this->input->post('nama_user'),
            'email_user' => $this->input->post('email_user'),
            // 'password_user' => password_hash($this->input->post('password_user'), PASSWORD_BCRYPT),
            'password_user' => $this->input->post('password_user'),
            'level_user' => $this->input->post('level_user')
        ];

        $this->Auth_model->add_user($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Register berhasil, silakan login</div>');
        redirect('auth', 'refresh');
    }
}