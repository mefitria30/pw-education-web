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

    public function uploadMateriView()
	{
        $data['id_user'] = $this->session->userdata('id_user');
        $data = [
            'title' => 'List Data Materi',
			'subtitle' => 'Data Transaksi Materi',
            // 'dataMateri' => $this->Materi_model->tampilData()->result()
            'dataMateri' => $this->Auth_model->tampilData($data['id_user']),
        ];
        $this->template->load('v_user', 'pages/member/data-transaksi-materi/v_materi', $data);
	}

     public function add()
	{
        $data = [
            'title' => 'Data Materi',
			'subtitle' => 'Add Data Materi',
            'kelas' => $this->Materi_model->getDataKelas(),
            'pelajaran' => $this->Materi_model->getDataPelajaran(),
        ];

        $this->template->load('v_user', 'pages/member/data-transaksi-materi/v_materi_add', $data);
    }

    public function addprocess()
    {
        $data = [
            'judul_materi'      => $this->input->post('judul_materi'),
            'isi_materi'        => $this->input->post('isi_materi'),
            'id_kelas'          => $this->input->post('id_kelas'),
            'id_pelajaran'      => $this->input->post('id_pelajaran'),
            'file'              => null,
            'status'            => 'verification',
            'id_user'           => $this->input->post('id_user'),
            'approver'          => null,              
        ];

        $this->Materi_model->addData($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data berhasil ditambahkan</div>');
        redirect('member/uploadMateriView');
    }

    public function delete($id_materi)
    {
        $this->Materi_model->deleteData($id_materi);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data berhasil dihapus</div>');
        redirect('member/uploadMateriView');
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
                'status'            => 'verification',
                'id_user'           => $this->input->post('id_user'),
                'approver'          => null,
            ];

            $this->Materi_model->editData($id_materi, $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success">Data berhasil diubah</div>');
            redirect('member/uploadMateriView');
        }

        $data = [
            'title' => 'Data Materi',
			'subtitle' => 'Edit Data Materi',
            'dataMateri' => $this->Materi_model->detailData($id_materi)->row(),
            'kelas' => $this->Materi_model->getDataKelas(),
            'pelajaran' => $this->Materi_model->getDataPelajaran(),
        ];

        $this->template->load('v_user', 'pages/member/data-transaksi-materi/v_materi_edit', $data);
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

                // $this->template->load('v_user', 'pages/member/data-transaksi-materi/v_materi_upload', $data);

                $this->session->set_flashdata('pesan', '<div class="alert alert-success">'.$data['error'].'</div>');
                redirect('member/formUpload/'.$id_materi);
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
                    redirect('member/uploadMateriView');
                }
                
            }
        }

        // file view
        $data = [
            'title' => 'Data Materi',
			'subtitle' => 'Upload Attachment Data Materi',
            'dataMateri' => $this->Materi_model->detailData($id_materi)->row()
        ];
		
        $this->template->load('v_user', 'pages/member/data-transaksi-materi/v_materi_upload', $data);
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

        $data = [
            'title' => 'Data Materi',
			'subtitle' => 'Edit Data Materi',
            'dataMateri' => $this->Materi_model->getDataDetailApprove($id_materi),
        ];

        $this->template->load('v_user', 'pages/member/data-transaksi-materi/v_materi_approve', $data);
    }
}