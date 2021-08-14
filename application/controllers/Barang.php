<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Barang';
		$data['barang'] = $this->Barang_model->getAllBarang();
		$this->load->view('templates/header', $data);
		$this->load->view('barang/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Tambah';

		// Rules
		$this->form_validation->set_rules('nama' , 'Nama' , 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('barang/tambah');
			$this->load->view('templates/footer');
		} else {
			echo "Ok";
		}
	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */