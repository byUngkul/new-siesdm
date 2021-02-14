<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Pajak_model extends CI_Model{
	
	protected $table = 't_pajak a';
	protected $column_order = array(null, 'nama_perusahaan', 'no_sumur', 'status_izin', 'nilai_pjk', 'tgl_pjk');
	protected $column_search = array('nama_perusahaan', 'no_sumur');
	protected $order = array('tgl_pjk' => 'desc');

	public function _get_query_data()
	{
		$this->db->from($this->table);
		$this->db->join('t_perusahaan p', 'p.id_perusahaan = a.id_pers');
		$this->db->join('t_sumur s', 's.id_sumur = a.id_smr');
		$this->db->join('t_kota k', 'p.id_kota = k.id');
		$i = 0;

		foreach ($this->column_search as $item) // loop column 
		{
			if ($_POST['search']['value']) // if datatable send POST for search
			{

				if ($i === 0) {
					$this->db->group_start();
					$this->db->like($item, $_POST['search']['value']);
				} else {
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if (count($this->column_search) - 1 == $i) {
					$this->db->group_end();
				}
			}
			$i++;
		}

		if (isset($_POST['order'])) {
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} else if (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	public function datagrid()
	{
		$this->_get_query_data();

		if ($_POST['length'] != -1) {
			$this->db->limit($_POST['length'], $_POST['start']);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	function count_filtered()
	{
		$this->_get_query_data();
		$query = $this->db->get();
		return $query->num_rows();
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
			'tgl_pjk'   => $this->tanggal->date_indo($post["tgl_bayar"])
		);
		
		$this->db->insert('t_pajak', $data);
	}

	public function update(){
		$post = $this->input->post();
		$data = array(
			'id_pers'   => $post["id_perusahaan"],
			'id_smr'    => $post["id_sumur"],
			'nilai_pjk' => $post["nilai_pajak"],
			'tgl_pjk'   => $this->tanggal->date_indo($post["tgl_bayar"])
		);
		
		$this->db->update('t_pajak', $data, array('id_pjk' => $post["id_pjk"]));
	}

	public function delete($id){
		return $this->db->delete('t_pajak', array(
			'id_pjk' => $id
		));
	}
}
