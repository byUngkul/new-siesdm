<?php
/**
 * 
 */
class User_model extends CI_Model{
	
	public function getAll()
	{
		return $this->db->get('user_log')->result();
	}

	public function getById($id)
	{
		return $this->db->get_where('user_log', ["id" => $id])->row();
	}

	public function update()
	{
		$post = $this->input->post();
		$data = array (
					'id' => $post["id"],
					'nama' => $post["nama"],
					'uname'=> $post["username"],
					'passwd' => md5($post["password"]),
					'level' => $post["level"]
				);
		//echo json_encode($data);
		$this->db->update('user_log', $data, array('id' => $post["id"]));
	}
}