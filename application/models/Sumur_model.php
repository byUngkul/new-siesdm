<?php

class Sumur_model extends CI_Model
{

	protected $table = 't_sumur a';
	protected $column_order = array(null, 'nama_perusahaan', 'jenis_sumur', 'no_sipa', 'tgl_ahir_sipa');
	protected $column_search = array('nama_perusahaan', 'jenis_sumur', 'no_sipa', 'tgl_ahir_sipa');
	protected $order = array('id_sumur' => 'asc');

	public function datagrid()
	{
		$this->_get_query_data();

		if ($_POST['length'] != -1) {
			$this->db->limit($_POST['length'], $_POST['start']);
		}
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_query_data();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	function _get_query_data()
	{
		$this->db->from($this->table);
		$this->db->join('t_perusahaan b', 'b.id_perusahaan = a.id_perusahaan', 'left');
		$this->db->join('t_jenis_sumur c', 'c.id = a.id_jenis_sumur', 'left');
		$this->db->join('t_kota d', 'b.id_kota = d.id');
		$i = 0;

		foreach ($this->column_search as $item) // loop column 
		{
			if ($_POST['search']['value']) {
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
}
