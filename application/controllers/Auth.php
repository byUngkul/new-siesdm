<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
		$this->load->model('permission_m');
		$this->load->model('pegawai_model');
    }

    public function index()
    {
        $this->acl->_cek_login();

        $data = [
            'title' => 'Login',
        ];

        $this->load->view('login', $data);
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->user_model->getByUsername($username);

        if (empty($user)) {
            $this->session->set_flashdata('message', 'User atau Password salah!');
            redirect('auth');
        } else {
            if (password_verify($password, $user->password)) {
                $permission = $this->acl->list_permission($user->id_user);
				$pegawai = ($user->id_pegawai == null) ? [] : $this->pegawai_model->get_by_id($user->id_pegawai);

                $session = [
                    'authenticated' => true,
                    'id_user' => $user->id_user,
                    'username' => $user->username,
                    'nama' => ($user->id_pegawai == null) ? $user->username : $pegawai['nama_pegawai'],
                    'role' => $user->id_role,
					'id_bidang' => $user->id_bidang,
					'id_wilayah' => $user->id_wilayah,
                    'permission' => $permission,
                ];
				
                $this->session->set_userdata($session);
                $this->session->set_flashdata('welcome', 'Selamat datang ' . $session['nama']);
                redirect('/');
            } else {
                $this->session->set_flashdata('message', 'User atau Password salah!');
                redirect('auth');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
