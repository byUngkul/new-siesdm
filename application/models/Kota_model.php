<?php
('BASEPATH') OR exit('No direct script access allowed');

class Kota_model extends CI_Model {
  
  public function getData(){
    return $this->db
            ->get('t_kota')
            ->result(); 
  }

	public function getById($id)
	{
		return $this->db->get_where('t_kota', [
			'id' => $id
			])->row_array();
	}
}
