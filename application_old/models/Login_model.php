<?php
/**
 * class untuk model login
 */
class Login_model extends CI_Model{
	//cek uname dan password user
	public function auth($user, $pass){
		$query = $this->db->query("SELECT * FROM user_log WHERE uname='$user' AND passwd=MD5('$pass') LIMIT 1");
		return $query;
	}
}

