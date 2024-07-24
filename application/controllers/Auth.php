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

		$this->load->view('pages/login/v_login', $data);
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

		if($total > 0){
			$this->session->set_userdata([
				'email_user' => $row->email_user,
				'nama_user' => $row->nama_user,
				'level_user' => $row->level_user,
			]);	

			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Login Berhasil</div>');
			redirect('home', 'refresh');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Login Gagal</div>');
			redirect('auth', 'refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth', 'refresh');
	}
}