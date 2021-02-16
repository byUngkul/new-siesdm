<?php

class User_model extends CI_Model
{

	protected $table = 't_users a';
	protected $column_order = array(null, 'username', 'nama_pegawai', 'name_role');
	protected $column_search = array('username', 'nama_pegawai', 'name_role');
	protected $order = array('id_user' => 'asc');

	public function getAll()
	{
		return $this->db->get($this->table)->result();
	}

	public function getById($id)
	{
		return $this->db->get_where('t_users', [
			"id_user" => $id
		])->row();
	}

	public function getByUsername($username)
	{
		return $this->db->get_where('t_users', [
			"username" => $username
		])->row();
	}

	public function getOldPass($iduser)
	{
		return $this->db->select('password')
			->get_where('t_users', ['id_user' => $iduser])
			->row_array();
	}

	public function save($post)
	{
		$data = [
			'username' => $post["username"],
			'password' => $post["password"],
			'id_pegawai' => $post["id_pegawai"],
			'id_role' => $post["role"],
			'id_bidang' => isset($post['id_bidang']) ? $post['id_bidang'] : null
		];

		$this->db->insert('t_users', $data);
	}

	public function update($iduser, $data)
	{
		$this->db->update('t_users', $data, array('id_user' => $iduser));
	}

	public function update_password($password, $iduser)
	{
		$this->db->update('t_users', ['password' => $password], ['id_user' => $iduser]);
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
		$this->db->join('t_pegawai b', 'b.id_pegawai = a.id_pegawai', 'left');
		$this->db->join('t_role c', 'c.id_role = a.id_role', 'left');
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

	public function get_data_role()
	{
		return $this->db
			->get('t_role')
			->result_array();
	}
}
