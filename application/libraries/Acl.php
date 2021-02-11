<?php defined('BASEPATH') || exit('No direct script access allowed');

class Acl
{
    protected $CI;
    protected $userlogin;

    public function __construct()
    {
        $this->CI = &get_instance();
        $this->userlogin = $this->CI->session->userdata();
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
        if ($this->CI->session->userdata('role') != 1) {
            redirect('admin/main');
        }
    }

    public function _cek_have_permission($id_menu)
    {
        if (!in_array($id_menu, $this->CI->session->userdata('permission'))) {
            echo json_encode(['message' => 'Anda tidak memiliki akses ke menu ini!']);
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
