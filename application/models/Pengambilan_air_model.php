<?php
/**
 * 
 */
class Pengambilan_air_model extends CI_Model{
	
	public function getAll(){
		$this->db->select('*');
		$this->db->from('t_ambil_air');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_ambil_air.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_ambil_air.id_smr', 'left');
		$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
		$this->db->order_by('tahun');
		return $this->db->get()->result();
	}

	public function getWilayah($wilayah){
		$this->db->select('*');
		$this->db->from('t_ambil_air');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_ambil_air.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_ambil_air.id_smr', 'left');
		$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
		$this->db->where('t_perusahaan.id_kota', $wilayah);

		return $this->db->get()->result();
	}

	public function viewByDatePerwil($date, $wilayah){
		$this->db->select('*');
		$this->db->from('t_ambil_air');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_ambil_air.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_ambil_air.id_smr', 'left');
		$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
		$this->db->where('DATE(tgl_ambil)', $date);
		$this->db->where('t_perusahaan.id_kota', $wilayah);
		
		return $this->db->get()->result();
	}

	public function viewByMonth($month, $year){
		$this->db->select('*');
		$this->db->from('t_ambil_air');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_ambil_air.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_ambil_air.id_smr', 'left');
		$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
		$this->db->where('bulan', $month);
		$this->db->where('tahun', $year);

		return $this->db->get()->result();
	}

	public function viewByMonthPerwil($month, $year, $wilayah){
		$this->db->select('*');
		$this->db->from('t_ambil_air');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_ambil_air.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_ambil_air.id_smr', 'left');
		$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
		$this->db->where('bulan', $month);
		$this->db->where('tahun', $year);
		$this->db->where('t_perusahaan.id_kota', $wilayah);
		

		return $this->db->get()->result();
	}

	public function viewByYear($year){
		$this->db->select('*');
		$this->db->from('t_ambil_air');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_ambil_air.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_ambil_air.id_smr', 'left');
		$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
		$this->db->where('tahun', $year);

		return $this->db->get()->result();
	}

	public function viewByYearPerwil($year, $wilayah){
		$this->db->select('*');
		$this->db->from('t_ambil_air');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_ambil_air.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_ambil_air.id_smr', 'left');
		$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
		$this->db->where('tahun', $year);
		$this->db->where('t_perusahaan.id_kota', $wilayah);
		
		return $this->db->get()->result();
	}

	public function viewByPerusahaan($id_pers){
		$this->db->select('*');
		$this->db->from('t_ambil_air');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_ambil_air.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_ambil_air.id_smr', 'left');
		$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
		$this->db->where('id_pers', $id_pers);

		return $this->db->get()->result();
	}

	public function viewByPerusahaanPerwil($id_pers, $wilayah){
		$this->db->select('*');
		$this->db->from('t_ambil_air');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_ambil_air.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_ambil_air.id_smr', 'left');
		$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
		$this->db->where('id_pers', $id_pers);
		$this->db->where('t_perusahaan.id_kota', $wilayah);
		

		return $this->db->get()->result();
	}

	public function option_tahun(){
		$this->db->select('tahun');
		$this->db->from('t_ambil_air');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_ambil_air.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_ambil_air.id_smr', 'left');
		$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
		$this->db->order_by('tahun');
		$this->db->group_by('tahun');

		return $this->db->get()->result();
	}

	public function getPerusahaan(){
		
		return $this->db->get('t_perusahaan')->result();
	}

	public function getSumur($id_perusahaan){
		$this->db->where('id_perusahaan', $id_perusahaan);
    	$result = $this->db->get('t_sumur')->result(); // Tampilkan semua data kota berdasarkan id provinsi
    
    	return $result;
	}

	public function getById($id_trx){
		return $this->db->get_where('t_ambil_air', ["id_trx" => $id_trx])->row();
	}

	public function save(){
		$post = $this->input->post();
		$data = array(
			'id_pers'   => $post["id_perusahaan"],
			'id_smr'    => $post["id_sumur"],
			'debit_air' => $post["debit_air"],
			'bulan'     => $post["bulan"],
			'tahun'     => $post["tahun"]
		);
		//var_dump($data);
		$this->db->insert('t_ambil_air', $data);
	}

	public function update(){
		$post = $this->input->post();
		$data = array(
			'id_trx'    => $post["id_trx"],
			'id_pers'   => $post["id_perusahaan"],
			'id_smr'    => $post["id_sumur"],
			'debit_air' => $post["debit_air"],
			'bulan'     => $post["bulan"],
			'tahun'     => $post["tahun"]
		);
		//var_dump($post);
		$this->db->update('t_ambil_air', $data, array('id_trx' => $post["id_trx"]));
	}

	public function delete($id_trx){
		return $this->db->delete('t_ambil_air', array('id_trx' => $id_trx));
	}
}