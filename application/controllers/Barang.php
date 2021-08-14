<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_model');
	}

	public function index()
	{
		$data['judul'] = 'Barang';
		$this->load->model('Barang_model');
		$data['barang'] = $this->Barang_model->getAllBarang();
		$this->load->view('templates/header', $data);
		$this->load->view('barang/index', $data);
		$this->load->view('templates/footer');
	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */