<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelajaran extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pelajaran_model');
    }

    public function index() {
        $data = [
            'title' => 'Data Pelajaran',
            'subtitle' => 'Data Pelajaran',
            'pelajaran' => $this->Pelajaran_model->tampilDataPelajaran()->result()
        ];
        $this->template->load('index', 'pages/data-pelajaran/index', $data);
    }

    public function add() {
        $data = [
            'title' => 'Tambah Data Pelajaran',
            'subtitle' => 'Form Tambah Data Pelajaran',
        ];
        $this->template->load('index', 'pages/data-pelajaran/pelajaran_add', $data);
    }

    public function addprocess() {
        $data = [
            'kode_pelajaran' => $this->input->post('kode_pelajaran'),
            'nama_pelajaran' => $this->input->post('nama_pelajaran'),
            'deskripsi' => $this->input->post('deskripsi'),
            'kategori' => $this->input->post('kategori'),
            'pengajar' => $this->input->post('pengajar'),
        ];

        $this->Pelajaran_model->addDatapelajaran($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data berhasil ditambahkan</div>');
        redirect('pelajaran/add');
    }

    public function edit($id_pelajaran) {
        $data = [
            'title' => 'Edit Data Pelajaran',
            'subtitle' => 'Form Edit Data Pelajaran',
            'pelajaran' => $this->Pelajaran_model->get_pelajaran_by_id($id_pelajaran),
        ];
        $this->template->load('index', 'pages/data-pelajaran/pelajaran_edit', $data);
    }

    public function editprocess($id_pelajaran) {
        $data = [
            'kode_pelajaran' => $this->input->post('kode_pelajaran'),
            'nama_pelajaran' => $this->input->post('nama_pelajaran'),
            'deskripsi' => $this->input->post('deskripsi'),
            'kategori' => $this->input->post('kategori'),
            'pengajar' => $this->input->post('pengajar'),
        ];

        $this->Pelajaran_model->update_pelajaran($id_pelajaran, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data berhasil diperbarui</div>');
        redirect('pelajaran');
    }

    public function delete($id_pelajaran) {
        $this->Pelajaran_model->delete_pelajaran($id_pelajaran);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data berhasil dihapus</div>');
        redirect('pelajaran');
    }
}
?>
