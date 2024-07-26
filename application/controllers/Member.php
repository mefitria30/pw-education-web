<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	public function __construct(){
        parent::__construct();
        if($this->session->userdata('level_user') !== 'user'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Silakan login terlebih dahulu</div>');
			redirect('auth');
		}
		$this->load->model('Kelas_model');
		$this->load->model('Materi_model');
		$this->load->model('Auth_model');
    }

	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'subtitle' => 'Dashboard',
		];

		$data['kelas'] = $this->Kelas_model->get_all_kelas();

		$this->template->load('v_user', 'pages/member/home', $data);
	}

	public function detailMateriKelas($id_kelas)
    {

        $data = [
            'title' => 'Data Materi',
			'subtitle' => 'Edit Data Materi',
            'materiKelas' => $this->Auth_model->getDataMateriKelas($id_kelas),
        ];

        $this->template->load('v_user', 'pages/member/materi-kelas', $data);
    }
}