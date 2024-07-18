<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'subtitle' => 'Dashboard',
		];

		$this->template->load('index', 'pages/home', $data);
	}
}