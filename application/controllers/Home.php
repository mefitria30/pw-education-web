<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
        parent::__construct();
        if($this->session->userdata('level_user') !== 'admin'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Silakan login terlebih dahulu</div>');
			redirect('auth');
		}

		$this->load->model('Home_model');
    }

	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'subtitle' => 'Dashboard',
			'jmlKelas' => $this->Home_model->getCntKelas(),
			'jmlUser' => $this->Home_model->getCntUser(),
			'jmlPelajaran' => $this->Home_model->getCntPelajaran(),

			'jmlApproved' => $this->Home_model->getCntMateriApproved(),
			'jmlRejected' => $this->Home_model->getCntMateriRejected(),
			'jmlVerification' => $this->Home_model->getCntMateriVerification(),
		];

		$this->template->load('index', 'pages/home', $data);
	}
}