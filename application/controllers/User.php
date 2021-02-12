<?php
defined('BASEPATH') || exit('No direct script access allowed');

class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('pegawai_model');
		$this->load->model('permission_m');
	}

	public function index()
	{
		// $this->acl->_check_not_login();
		// $this->acl->_cek_have_permission($this->uri->segments);

		$data = [
			'title' => 'Data User',
			'parent_menu' => 'user',
			'js_file' => 'user/js_file',
			'view' => 'user/index'
		];

		$this->load->view('layout', $data);
	}

	public function ajax_list()
	{
		// $this->acl->_cek_have_permission($this->uri->segments);
		$list = $this->user_model->datagrid();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $val) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $val->username;
			$row[] = $val->nama_pegawai;
			$row[] = $val->name_role;
			$row[] = $this->_action($val->id_user);

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->user_model->count_all(),
			"recordsFiltered" => $this->user_model->count_filtered(),
			"data" => $data,
		);

		echo json_encode($output);
	}

	public function _action($id = null)
	{
		$btn = "<div class='btn-group btn-group-sm' role='group' aria-label='Button aksi'>
					<a href=" . base_url('user/edit/' . $id) . " title='Ubah Data' class='btn btn-warning btn-sm'>
						<i class='fas fa-edit'></i>
					</a>
					<a href=" . base_url('user/edit_permission/' . $id) . " title='Ubah Permission' class='btn btn-info btn-sm'>
						<i class='fas fa-cog'></i>
					</a>
					<button class='btn btn-danger btn-sm' title='Hapus data' onclick='deleteDialog($id)'>
						<i class='fas fa-trash'></i>
					</button>
				</div>";

		return $btn;
	}

	public function tambah()
	{
		$this->acl->_cek_have_permission($this->uri->segments);
		$permit = json_encode($this->permission_m->get_data_permission());
		$menu = json_encode($this->permission_m->get_data_menu());
		$data = [
			'title' => 'Tambah Data [USER]',
			'parent_menu' => 'user',
			'js_file' => 'user/js_file',
			'view' => 'user/tambah',
			'roles' => $this->user_model->get_data_role(),
			'pegawais' => $this->pegawai_model->get_all_data(),
			'permissions' => $permit,
			'menus' => $menu
		];

		$this->load->view('layout', $data);
	}

	public function edit($iduser)
	{
		$this->acl->_cek_have_permission($this->uri->segments);

		$data = [
			'title' => 'Ubah Data [USER]',
			'parent_menu' => 'user',
			'js_file' => 'user/js_file',
			'view' => 'user/edit',
			'roles' => $this->user_model->get_data_role(),
			'pegawais' => $this->pegawai_model->get_all_data(),
			'user' => $this->user_model->getById($iduser)
		];

		$this->load->view('layout', $data);
	}

	public function edit_permission($iduser)
	{
		$this->acl->_cek_have_permission($this->uri->segments);

		$permit = json_encode($this->permission_m->get_data_permission());
		$menu = json_encode($this->permission_m->get_data_menu());
		$user_permission = $this->acl->list_permission($iduser);


		$data = [
			'title' => 'Edit Permission [USER]',
			'parent_menu' => 'user',
			'js_file' => 'user/js_file',
			'view' => 'user/edit_permission',
			'roles' => $this->user_model->get_data_role(),
			'pegawais' => $this->pegawai_model->get_all_data(),
			'permissions' => $permit,
			'user_permission' => json_encode($user_permission),
			'iduser' => $iduser,
			'menus' => $menu
		];

		$this->load->view('layout', $data);
	}

	public function createOrUpdate()
	{
		$post = $this->input->post();

		if ($post['id_user'] == '') {
			$this->form_validation->set_rules(
				'username',
				'Username',
				'required|is_unique[t_users.username]',
				array(
					'required'      => '%s tidak boleh kosong.',
					'is_unique'     => '%s sudah digunakan.'
				)
			);
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]', array(
				'required'      => '%s tidak boleh kosong.',
				'min_length'	=> 'Minimal panjang password 5'
			));
			$this->form_validation->set_rules('password_conf', 'Password Confirmation', 'required|matches[password]', array(
				'required'      => '%s tidak boleh kosong.',
				'matches'		=> 'password tidak sama!'
			));
		}

		$this->form_validation->set_rules('id_role', 'Role', 'required', ['required' => 'Otoritas tidak boleh kosong.']);

		if ($this->form_validation->run() == FALSE) {
			($post['id_user'] != '')
				? $this->edit($post['id_user'])
				: $this->tambah();
		} else {
			if ($post['id_user'] != '') {
				$password_lama = $this->user_model->getOldPass($post['id_user']);

				$data = [
					'username' => $post["username"],
					'password' => ($post["password"] == '') ? $password_lama : $this->acl->generate_password($post["password"]),
					'id_pegawai' => $post["id_pegawai"],
					'id_role' => $post["role"],
				];

				$this->user_model->update($post['id_user'], $data);
			} else {
				$this->user_model->save($post);
			}

			redirect('user');
		}
	}

	public function simpan_permission()
	{
		$post = $this->input->post();
		$post['permission'];
		$permission_exist = $this->acl->list_permission($post['iduser']);

		if (count($permission_exist) > 0) {
			foreach ($post['permission'] as $v) {
				if (!in_array($v, $permission_exist)) {
					$data = [
						'user_id' => $post['iduser'],
						'permission_id' => $v
					];

					$this->permission_m->simpan_permission($data);
				}
			}

			foreach ($permission_exist as $v) {
				if (!in_array($v, $post['permission'])) {
					$this->permission_m->delet_permission($post['iduser'], $v);
				}
			}
		} else {
			foreach ($post['permission'] as $key => $v) {
				$data = [
					'user_id' => $post['iduser'],
					'permission_id' => $v
				];

				$this->permission_m->simpan_permission($data);
			}
		}

		redirect('user');
	}

	// public function validate_post($param)
	// {

	// }
}
