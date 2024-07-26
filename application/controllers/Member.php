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

	public function detailMateri($id_materi)
    {

        $data = [
            'title' => 'Data Materi',
			'subtitle' => 'Edit Data Materi',
            'dataMateri' => $this->Materi_model->detailData($id_materi)->row(),
        ];

        $this->template->load('v_user', 'pages/member/materi-detail', $data);
    }

	public function listDiskusi($id_materi)
    {

        $data = [
            'title' => 'Data Materi',
			'subtitle' => 'Edit Data Materi',
			'dataMateri' => $id_materi,
			'materiDiskusi' => $this->Auth_model->getListDiskusi($id_materi),
        ];

        $this->template->load('v_user', 'pages/member/materi-diskusi', $data);
    }

	public function add_diskusi()
    {
        $data = [
            'txt_diskusi'      => $this->input->post('txt_diskusi'),
            'id_user'           => $this->input->post('id_user'),
            'id_materi'          => $this->input->post('id_materi')              
        ];

        $this->Auth_model->addData($data);
        redirect('member/listDiskusi/'.$data['id_materi']);
    }

	public function delete_diskusi($id_diskusi, $id_materi)
    {
        $this->Auth_model->deleteData($id_diskusi);
        redirect('member/listDiskusi/'.$id_materi);
    }
}