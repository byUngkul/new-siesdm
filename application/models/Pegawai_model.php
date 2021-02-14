<?php
defined('BASEPATH') || exit('No direct script access allowd');

class Pegawai_model extends CI_Model
{
	protected $table = 't_pegawai';
	protected $column_order = array(null, 'nama_pegawai', 'nip_pegawai', 'jabatan_pegawai');
	protected $column_search = array('nama_pegawai', 'nip_pegawai', 'jabatan_pegawai');
	protected $order = array('id_pegawai' => 'desc');

	public function _get_query_data()
	{
		$this->db->from($this->table);
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

	public function get_by_id($id)
	{
		return $this->db->get_where('t_pegawai', [
			'id_pegawai' => $id
		])->row_array();
	}

	public function add()
	{
		$post = $this->input->post();
		$data = [
			'nama_pegawai' => $post['nama_pegawai'],
			'nip_pegawai' => $post['nip_pegawai'],
			'jabatan_pegawai' => $post['jabatan_pegawai'],
			'created_at' => date('Y-m-d H:m:s', time()),
		];

		$this->db->insert('t_pegawai', $data);
	}

	public function update()
	{
		$post = $this->input->post();
		$data = [
			'nama_pegawai' => $post['nama_pegawai'],
			'nip_pegawai' => $post['nip_pegawai'],
			'jabatan_pegawai' => $post['jabatan_pegawai'],
			'update_at' => date('Y-m-d H:m:s', time()),
		];

		$this->db->update('t_pegawai', $data, [
			'id_pegawai' => $post['id_pegawai']
		]);
	}

	public function delete($id){
		return $this->db->delete('t_pegawai', array(
			'id_pegawai' => $id
		));
	}

	public function get_all_data()
	{
		return $this->db->get('t_pegawai')
			->result_array();
	}
}
