<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Pengambilan_air_model extends CI_Model
{

	protected $table = 't_ambil_air a';
	protected $column_order = array(null, 'nama_perusahaan', 'nama_kota', 'a.id_sumur', 'bulan', 'tahun', 'debit_air');
	protected $column_search = array('nama_perusahaan', 'nama_kota', 'a.id_sumur', 'bulan', 'tahun', 'debit_air');
	protected $order = array('bulan' => 'desc', 'tahun' => 'desc');

	public function _get_query_data()
	{
		$session = $this->session->userdata();
		$this->db->from($this->table);
		$this->db->join('t_perusahaan p', 'p.id_perusahaan = a.id_perusahaan');
		$this->db->join('t_sumur s', 's.id_sumur = a.id_sumur');
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

		if ($session['id_wilayah'] != null) {
			$this->db->where('p.id_kota', $session['id_wilayah']);
		}

		if (isset($_POST['order'])) {
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} else if (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function datagrid()
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
		$session = $this->session->userdata();
		$this->db->from($this->table)
			->join('t_perusahaan p', 'p.id_perusahaan = a.id_perusahaan');
		if ($session['id_wilayah'] != null) {
			$this->db->where('p.id_kota', $session['id_wilayah']);
		}
		return $this->db->count_all_results();
	}

	function count_filtered()
	{
		$this->_get_query_data();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function get_alldata()
	{
		return $this->db->get('t_perusahaan');
	}

	public function get_data_byId($id)
	{
		return $this->db
			->get_where($this->table, ["id_penggunaanair" => $id])
			->row_array();
	}

	public function get_detile_data($id)
	{
		return	$this->db->select('*')->from($this->table)
			->join('t_kota k', 'p.id_kota = k.id')
			->where('id_perusahaan', $id)
			->get()->row_array();
	}

	public function create($post)
	{
		$data = [
			'id_perusahaan' => $post['id_perusahaan'],
			'id_sumur' => $post['id_sumur'],
			'debit_air' => $post['debit_air'],
			'bulan' => $post['bulan'],
			'tahun' => $post['tahun']
		];

		$this->db->insert('t_ambil_air', $data);
	}

	public function update($post)
	{
		$data = [
			'id_perusahaan' => $post['id_perusahaan'],
			'id_sumur' => $post['id_sumur'],
			'debit_air' => $post['debit_air'],
			'bulan' => $post['bulan'],
			'tahun' => $post['tahun']
		];

		$this->db->update($this->table, $data, array('id_penggunaanair' => $post['id_penggunaanair']));
	}

	public function delete($id_trx)
	{
		return $this->db->delete('t_ambil_air', array('id_penggunaanair' => $id_trx));
	}
}
