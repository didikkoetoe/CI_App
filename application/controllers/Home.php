<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index($nama = 'Didik Prabowo')
	{
		$data['nama'] = $nama;
		$data['judul'] = 'Home';
		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */