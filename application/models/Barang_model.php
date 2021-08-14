<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	public function getAllBarang()
	{
		$query = $this->db->get('barang');
		return $query->result_array();
	}

	public function tambahBarang()
	{
		$data = array(
        'nama' => $this->input->post('nama', true),
        'harga' => $this->input->post('harga', true),
        'berat' => $this->input->post('berat', true),
        'warna' => $this->input->post('warna', true),
        'jumlah' => $this->input->post('jumlah', true),
        'deskripsi' => $this->input->post('deskripsi', true),
		);

		$this->db->insert('barang', $data);
	}


}

/* End of file Barang_model.php */
/* Location: ./application/models/Barang_model.php */