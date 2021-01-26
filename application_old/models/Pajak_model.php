<?php
/**
 * 
 */
class Pajak_model extends CI_Model{
	
	//public $wilayah = $_GET['wil'];

	public function getAll(){
		$this->db->select('*');
		$this->db->from('t_pajak');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_pajak.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_pajak.id_smr', 'left');

		return $this->db->get();
	}

	public function getWilayah($wilayah){
		$this->db->select('*');
		$this->db->from('t_pajak');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_pajak.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_pajak.id_smr', 'left');
		$this->db->where('t_perusahaan.id_kota', $wilayah);
		$this->db->order_by('tgl_pjk', 'asc');
		return $this->db->get();
	}

	public function getByIzin($izin){
		$this->db->select('*');
		$this->db->from('t_pajak');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_pajak.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_pajak.id_smr', 'left');
		$this->db->where('status_izin', $izin);
		$this->db->order_by('tgl_pjk', 'asc');
		return $this->db->get()->result();
	}

	public function getByIzinPerwil($izin, $wilayah){
		$this->db->select('*');
		$this->db->from('t_pajak');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_pajak.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_pajak.id_smr', 'left');
		$this->db->where('status_izin', $izin);
		$this->db->where('t_perusahaan.id_kota', $wilayah);
		$this->db->order_by('tgl_pjk', 'asc');
		return $this->db->get()->result();
	}

	public function viewByDate($date){
		$this->db->select('*');
		$this->db->from('t_pajak');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_pajak.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_pajak.id_smr', 'left');
		$this->db->where('DATE(tgl_pjk)', $date);

		return $this->db->get()->result();
	}

	public function viewByDatePerwil($date, $wilayah){
		$this->db->select('*');
		$this->db->from('t_pajak');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_pajak.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_pajak.id_smr', 'left');
		$this->db->where('DATE(tgl_pjk)', $date);
		$this->db->where('t_perusahaan.id_kota', $wilayah);

		return $this->db->get()->result();
	}

	public function viewByMonth($month, $year){
		$this->db->select('*');
		$this->db->from('t_pajak');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_pajak.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_pajak.id_smr', 'left');
		$this->db->where('MONTH(tgl_pjk)', $month);
		$this->db->where('YEAR(tgl_pjk)', $year);

		return $this->db->get()->result();
	}

	public function viewByMonthPerwil($month, $year, $wilayah){
		$this->db->select('*');
		$this->db->from('t_pajak');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_pajak.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_pajak.id_smr', 'left');
		$this->db->where('MONTH(tgl_pjk)', $month);
		$this->db->where('YEAR(tgl_pjk)', $year);
		$this->db->where('t_perusahaan.id_kota', $wilayah);

		return $this->db->get()->result();
	}

	public function viewByYear($year){
		$this->db->select('*');
		$this->db->from('t_pajak');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_pajak.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_pajak.id_smr', 'left');
		$this->db->where('YEAR(tgl_pjk)', $year);

		return $this->db->get()->result();
	}

	public function viewByYearPerwil($year, $wilayah){
		$this->db->select('*');
		$this->db->from('t_pajak');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_pajak.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_pajak.id_smr', 'left');
		$this->db->where('YEAR(tgl_pjk)', $year);
		$this->db->where('t_perusahaan.id_kota', $wilayah);

		return $this->db->get()->result();
	}

	public function viewByPerusahaan($id_pers){
		$this->db->select('t_pajak.*, t_perusahaan.*, t_sumur.*');
		$this->db->from('t_pajak');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_pajak.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_pajak.id_smr', 'left');
		$this->db->where('id_pers', $id_pers);
		$this->db->order_by('tgl_pjk', 'asc');
		//$this->db->where('t_perusahaan.id_kota', $wilayah);

		return $this->db->get()->result();
	}

	public function viewByPerusahaanPerwil($id_pers, $wilayah){
		$this->db->select('t_pajak.*, t_perusahaan.*, t_sumur.*');
		$this->db->from('t_pajak');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_pajak.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_pajak.id_smr', 'left');
		$this->db->where('id_pers', $id_pers);
		$this->db->where('t_perusahaan.id_kota', $wilayah);
		$this->db->order_by('tgl_pjk', 'asc');

		return $this->db->get()->result();
	}

	public function option_tahun(){
		$this->db->select('YEAR(tgl_pjk) AS tahun');
		$this->db->from('t_pajak');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_pajak.id_pers', 'left');
		$this->db->join('t_sumur', 't_sumur.id_sumur = t_pajak.id_smr', 'left');
		$this->db->order_by('YEAR(tgl_pjk)');
		$this->db->group_by('YEAR(tgl_pjk)');

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

	public function getById_sumur($id_sumur){
		return $this->db->get_where('t_pajak', ["id_smr" => $id_sumur]);
	}

	public function getById($id_pjk){
		return $this->db->get_where('t_pajak', ["id_pjk" => $id_pjk])->row();
	}

	public function save(){
		$post = $this->input->post();
		$data = array(
			'id_pers'   => $post["id_perusahaan"],
			'id_smr'    => $post["id_sumur"],
			'nilai_pjk' => $post["nilai_pajak"],
			'tgl_pjk'   => date('Y-m-d',strtotime($post["tgl_pjk"]))
		);
		//var_dump($data);
		$this->db->insert('t_pajak', $data);
	}

	public function update(){
		$post = $this->input->post();
		$data = array(
			'id_pjk'    => $post["id_pjk"],
			'id_pers'   => $post["id_perusahaan"],
			'id_smr'    => $post["id_sumur"],
			'nilai_pjk' => $post["nilai_pajak"],
			'tgl_pjk'   => date('Y-m-d',strtotime($post["tgl_pjk"]))
		);
		//var_dump($post);
		$this->db->update('t_pajak', $data, array('id_pjk' => $post["id_pjk"]));
	}

	public function delete($id_pjk){
		return $this->db->delete('t_pajak', array('id_pjk' => $id_pjk));
	}
}