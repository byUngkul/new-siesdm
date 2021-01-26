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
		$this->acl->_check_not_login();

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
					<a href='user/edit/$id' title='Ubah Data' class='btn btn-warning btn-sm'>
						<i class='fas fa-edit'></i>
					</a>
					<button class='btn btn-danger btn-sm' title='Hapus data' onclick='deleteDialog($id)'>
						<i class='fas fa-trash'></i>
					</button>
				</div>";

		return $btn;
	}

	public function tambah()
	{
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
}
