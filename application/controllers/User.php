<?php
/**
 * 
 */
class User extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			redirect('login');
		}
		$this->load->model('user_model');
	}

	public function index()
	{
		$data = [
			'title' => 'SiESDM',
			'sub_title' => 'Home',
			'page' => 'Pengaturan User',
			'wilayah' => 'WILAYAH BANDUNG',
			'content' => 'user/index',
			'user' => $this->user_model->getAll()
		];
		//print_r($data['perusahaan']);
		$this->load->view('template/template', $data);
	}

	public function edit($id = null)
	{
		$data = [
			'title' => 'SiESDM',
			'sub_title' => 'Home',
			'page' => 'Edit User',
			'wilayah' => 'WILAYAH BANDUNG',
			'content' => 'user/edit',
			'user' => $this->user_model->getById($id)
		];
		//print_r($data['perusahaan']);
		$this->load->view('template/template', $data);
	}

	public function update()
	{
		$this->user_model->update();
		echo $this->session->set_flashdata('msg', 'Data berhasil di Uabah!');
		redirect('user');	
	}
}