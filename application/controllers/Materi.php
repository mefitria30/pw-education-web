<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Materi_model');
        if($this->session->userdata('level_user') !== 'admin'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Silakan login terlebih dahulu</div>');
			redirect('auth');
		}
    }

	public function index()
	{
        $data = [
            'title' => 'List Data Materi',
			'subtitle' => 'Data Transaksi Materi',
            // 'dataMateri' => $this->Materi_model->tampilData()->result()
            'dataMateri' => $this->Materi_model->tampilData(),
        ];
        $this->template->load('index', 'pages/data-transaksi-materi/v_materi', $data);
	}

    
    public function add()
	{
        $data = [
            'title' => 'Data Materi',
			'subtitle' => 'Add Data Materi',
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
            'status'            => 'approved',
            'id_user'           => $this->input->post('id_user'),
            'approver'          => $this->input->post('approver')              
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

    public function edit($id_materi)
    {
        if(isset($_POST['edit'])){
            $data = [
                'judul_materi'      => $this->input->post('judul_materi'),
                'isi_materi'        => $this->input->post('isi_materi'),
                'id_kelas'          => $this->input->post('id_kelas'),
                'id_pelajaran'      => $this->input->post('id_pelajaran'),
                'file'              => null,
                'status'            => 'approved',
                'id_user'           => $this->input->post('id_user'),
                'approver'          => $this->input->post('approver')
            ];

            $this->Materi_model->editData($id_materi, $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data berhasil diubah</div>');
            redirect('materi');
        }

        $data = [
            'title' => 'Data Materi',
			'subtitle' => 'Edit Data Materi',
            'dataMateri' => $this->Materi_model->detailData($id_materi)->row(),
            'kelas' => $this->Materi_model->getDataKelas(),
            'pelajaran' => $this->Materi_model->getDataPelajaran(),
        ];

        $this->template->load('index', 'pages/data-transaksi-materi/v_materi_edit', $data);
    }

    public function formUpload($id_materi)
	{
        // proses upload
        if(isset($_POST['upload'])) {
            // remove file
            // array_map('unlink', glob("./uploads/$id_materi.*"));

            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $id_materi;
            $config['max_size']             = 10000;
            $config['is_image']             = 1;
            // $config['overwrite']            = TRUE;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);
            $this->upload->overwrite = true;

            if ( ! $this->upload->do_upload('file'))
            {
                $data = [
                    'error' => $this->upload->display_errors(),
                    'title' => 'Data Materi',
                    'subtitle' => 'Upload Attachment Data Materi',
                    'dataMateri' => $this->Materi_model->detailData($id_materi)->row()
                ];

                // $this->template->load('index', 'pages/data-transaksi-materi/v_materi_upload', $data);

                $this->session->set_flashdata('pesan', '<div class="alert alert-success">'.$data['error'].'</div>');
                redirect('materi/formUpload/'.$id_materi);
            }
            else
            {   
                $upload_data = $this->upload->data();

                $data = [
                    'file' => $upload_data['file_name'],
                ];

                $upload_success = $this->Materi_model->editData($id_materi, $data);

                if( $upload_success){
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data berhasil di upload</div>');
                    redirect('materi');
                }
                
            }
        }

        // file view
        $data = [
            'title' => 'Data Materi',
			'subtitle' => 'Upload Attachment Data Materi',
            'dataMateri' => $this->Materi_model->detailData($id_materi)->row()
        ];
		
        $this->template->load('index', 'pages/data-transaksi-materi/v_materi_upload', $data);
	}

    public function upload(){
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|xls|doc|docx';
        $config['max_size']             = 10000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file'))
        {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload_success', $data);
        }
    }

    public function formApprove($id_materi)
    {
        if(isset($_POST['edit'])){
            $data = [
                'judul_materi'      => $this->input->post('judul_materi'),
                'isi_materi'        => $this->input->post('isi_materi'),
                'id_kelas'          => $this->input->post('id_kelas'),
                'id_pelajaran'      => $this->input->post('id_pelajaran'),
                'file'              => null,
                'status'            => 'approved',
                'id_user'           => $this->input->post('id_user'),
                'approver'          => $this->input->post('approver')
            ];

            $this->Materi_model->editData($id_materi, $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data berhasil diubah</div>');
            redirect('materi');
        }

        $data = [
            'title' => 'Data Materi',
			'subtitle' => 'Edit Data Materi',
            'dataMateri' => $this->Materi_model->getDataDetailApprove($id_materi),
        ];

        $this->template->load('index', 'pages/data-transaksi-materi/v_materi_approve', $data);
    }
}