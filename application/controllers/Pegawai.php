<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pegawai_model');
	}

	public function index()
	{
		$this->acl->_check_not_login();
		$this->acl->_cek_have_permission($this->uri->segments);

		$data = [
			'title' => 'Data Pajak Air',
			'parent_menu' => 'pegawai',
			'js_file' => 'pegawai/js_file',
			'view' => 'pegawai/index'
		];

		$this->load->view('layout', $data);
	}

	public function ajax_list()
	{
		$list = $this->pegawai_model->datagrid();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $val) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $val->nama_pegawai;
			$row[] = $val->jabatan_pegawai;
			$row[] = $val->nip_pegawai;
			$row[] = $this->_action($val->id_pegawai);

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->pegawai_model->count_all(),
			"recordsFiltered" => $this->pegawai_model->count_filtered(),
			"data" => $data,
		);

		echo json_encode($output);
	}

	public function _action($id = null)
	{
		$btn = "<div class='btn-group btn-group-sm' role='group' aria-label='Button aksi'>
					<a href='pegawai/edit/$id' title='Ubah Data' class='btn btn-warning btn-sm'>
						<i class='fas fa-edit'></i>
					</a>
					<button class='btn btn-danger btn-sm' title='Hapus data' onclick='deleteDialog($id)'>
						<i class='fas fa-trash'></i>
					</button>
				</div>";

		return $btn;
	}

	public function dorpdownSumur()
	{
		$post = $this->input->post();
		$output = $this->sumur_model->combobox($post);
		echo json_encode($output);
	}

	public function tambah()
	{
		$this->acl->_check_not_login();
		$this->acl->_cek_have_permission($this->uri->segments);

		$data = [
			'title' => 'Tambah Data [PAJAK AIR]',
			'parent_menu' => 'pegawai',
			'child_menu' => 'pajak_air',
			'js_file' => 'pegawai/js_file',
			'view' => 'pegawai/tambah'
		];

		$this->load->view('layout', $data);
	}

	public function edit($id)
	{
		$this->acl->_check_not_login();
		$this->acl->_cek_have_permission($this->uri->segments);

		$data = [
			'title' => 'Edit Data [PAJAK AIR]',
			'parent_menu' => 'pegawai',
			'child_menu' => 'pajak_air',
			'js_file' => 'pegawai/js_file',
			'view' => 'pegawai/edit',
			'pegawai' => $this->pegawai_model->get_by_id($id),
		];

		$this->load->view('layout', $data);
	}

	public function createOrUpdate()
	{
		$post = $this->input->post();

		if ($post['id_pegawai'] == '') {
			$this->pegawai_model->add();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
		} else {
			$this->pegawai_model->update();
			$this->session->set_flashdata('success', 'Data berhasil di ubah');
		}

		redirect('pegawai');
	}

	public function delete()
	{
		$this->acl->_check_not_login();
		$this->acl->_cek_have_permission($this->uri->segments);
		$post = $this->input->post();

		if ($this->pegawai_model->delete($post['id'])) {
			echo json_encode(['data' => 'success']);
		}
	}
}
