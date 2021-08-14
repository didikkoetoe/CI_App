<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	public function getAllBarang()
	{
		$query = $this->db->get('barang');
		return $query->result_array();
	}

}

/* End of file Barang_model.php */
/* Location: ./application/models/Barang_model.php */