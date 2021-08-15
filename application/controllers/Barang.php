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
		$this->form_validation->set_rules('harga' , 'Harga' , 'required');
		$this->form_validation->set_rules('berat' , 'Berat' , 'required');
		$this->form_validation->set_rules('warna' , 'Warna' , 'required');
		$this->form_validation->set_rules('jumlah' , 'Jumlah' , 'required');
		$this->form_validation->set_rules('deskripsi' , 'Deskipsi' , 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('barang/tambah');
			$this->load->view('templates/footer');
		} else {
			$this->Barang_model->tambahBarang();
			$this->session->set_flashdata('flash', 'Berhasil');
			redirect('Barang');
		}
	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */