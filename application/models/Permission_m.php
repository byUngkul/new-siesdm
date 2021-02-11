<?php

class Permission_m extends CI_Model
{
	protected $t_menu = 't_menu';
	protected $t_permission = 't_permission';
	protected $t_user_permissinon = 't_user_permission';


	public function get_data_permission()
	{
		return $this->db->get($this->t_permission)->result_array();
	}

	public function get_data_menu()
	{
		return  $this->db->get($this->t_menu)->result_array();
	}

	public function get_list_permission($iduser)
	{
		return $this->db->select('permission_id')
			->from($this->t_user_permissinon)
			->where('user_id', $iduser)
			->get()->result_array();
	}

	public function simpan_permission($post)
	{
		$this->db->insert($this->t_user_permissinon, $post);
	}

	public function delet_permission($user_id, $permission_id)
	{
		$this->db->delete($this->t_user_permissinon, [
			'user_id' => $user_id,
			'permission_id' => $permission_id
		]);
	}
}
