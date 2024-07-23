<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Materi_model');
    }

	public function index()
	{
        $data = [
            'title' => 'List Data Materi',
			'subtitle' => 'Data Transaksi Materi',
            'dataMateri' => $this->Materi_model->tampilData()->result()
        ];
        $this->template->load('index', 'pages/data-transaksi-materi/v_materi', $data);
	}

    
    public function add()
	{
        $data = [
            'title' => 'Data Materi',
			'subtitle' => 'Data Materi',
            'kelas' => $this->Materi_model->getDataKelas(),
            'pelajaran' => $this->Materi_model->getDataPelajaran(),
        ];

        $this->template->load('index', 'pages/data-transaksi-materi/v_materi_add', $data);
    }

    public function addprocess()
    {
        $data = [
            'judul_materi'      => $this->input->post('judul_materi'),
            'isi_materi'        => $this->input->post('isi_materi'),
            'id_kelas'          => $this->input->post('id_kelas'),
            'id_pelajaran'      => $this->input->post('id_pelajaran'),
            'file'              => null,
            'status'            => 'approved'              
        ];

        $this->Materi_model->addData($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data berhasil ditambahkan</div>');
        redirect('materi');
    }

    public function delete($id_materi)
    {
        $this->Materi_model->deleteData($id_materi);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data berhasil dihapus</div>');
        redirect('materi');
    }
}