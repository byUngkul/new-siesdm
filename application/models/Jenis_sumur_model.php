<?php

class Jenis_sumur_model extends CI_Model{
	
	public function get_alldata(){
		return $this->db->get('t_jenis_sumur');
	}

	public function getById($id){
		return $this->db->get_where('t_jenis_sumur', ["id" => $id])->row();
		
	}
}