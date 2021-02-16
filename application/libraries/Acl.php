<?php defined('BASEPATH') || exit('No direct script access allowed');

class Acl
{
    protected $CI;
    protected $userlogin;

    public function __construct()
    {
        $this->CI = &get_instance();
        $this->userlogin = $this->CI->session->userdata();
		$this->CI->load->model('permission_m');
    }

    public function _cek_login()
    {
        $user_session = isset($this->userlogin['authenticated']) ? $this->userlogin['authenticated'] : false;
        if ($user_session) {
            redirect('dashboard');
        }
    }

    function _check_not_login()
    {
        $user_session = $this->CI->session->userdata('authenticated');
        if (!$user_session) {
            redirect('auth');
        }
    }

    function _is_admin()
    {
        return ($this->CI->session->userdata('role') != 1) ? false : true;
    }

    public function _cek_have_permission($current_url)
    {
		if (!$this->_is_admin()) {
			$current_url[2] = (isset($current_url[2])) ? $current_url[2] : 'index';
			$id_menu = $this->CI->permission_m->get_permission_by_menu($current_url[1], $current_url[2]);
			$permission_user = $this->CI->session->userdata('permission');
			// var_dump($id_menu); 
			// var_dump($permission_user);
			// die; 

			if (!in_array($id_menu['id_permission'], $permission_user)) {
				$this->CI->session->set_flashdata('no_permit', 'anda tidak punya akses!');
				redirect('dashboard');
			}
		}
    }

    function user_login()
    {
        $this->CI->load->model('auth_model');
        $user_id = $this->CI->session->userdata('userid');
        $user_data = $this->CI->auth_model->get($user_id)->row();
        return $user_data;
    }

	function list_permission($user_id)
	{
		$user_permission = $this->CI->permission_m->get_list_permission($user_id);
		$list_permission = [];
		foreach ($user_permission as $v) {
			array_push($list_permission, $v['permission_id']);
		}
		
		return $list_permission;
	}

	function generate_password($string)
	{
		$pass_option = ['cost' => 10];
		return password_hash($string, PASSWORD_DEFAULT, $pass_option);
	}
}
