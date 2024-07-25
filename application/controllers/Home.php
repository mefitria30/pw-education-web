<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
        parent::__construct();
        if($this->session->userdata('level_user') !== 'admin'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Silakan login terlebih dahulu</div>');
			redirect('auth');
		}
    }

	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'subtitle' => 'Dashboard',
		];

		$this->template->load('index', 'pages/home', $data);
	}
}