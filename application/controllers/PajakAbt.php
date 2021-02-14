<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PajakAbt extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pajak_model');
		$this->load->model('sumur_model');
		$this->load->model('perusahaan_model');
	}

	public function index()
	{
		$this->acl->_check_not_login();
		$this->acl->_cek_have_permission($this->uri->segments);

		$data = [
			'title' => 'Data Pajak Air',
			'parent_menu' => 'abt',
			'child_menu' => 'pajak_air',
			'js_file' => 'pajak-air/js_file',
			'view' => 'pajak-air/index'
		];

		$this->load->view('layout', $data);
	}

	public function ajax_list()
	{
		$list = $this->pajak_model->datagrid();
		$data = array();
		$no = $_POST['start'];
		// $satuan = ' m<sup>3</sup>';
		foreach ($list as $val) {
			$no++;
			$aktip = (date('Y-m-d', strtotime($val->tgl_ahir_sipa)) < date('Y-m-d'))
				? '<button class="btn btn-danger btn-sm" disabled>Izin Habis</button>'
				: '<button class="btn btn-info btn-sm" disabled>Aktip</button>';
			$row = array();
			$row[] = $no;
			$row[] = $val->nama_perusahaan;
			$row[] = $val->no_sumur;
			$row[] = ($val->status_izin == 1) ? 'Berizin' : 'Tidak Berizin';
			$row[] = number_format($val->nilai_pjk, 0, ',', '.');
			$row[] = $this->tanggal->date_indo($val->tgl_pjk);
			$row[] = $this->_action($val->id_pjk);

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->pajak_model->count_all(),
			"recordsFiltered" => $this->pajak_model->count_filtered(),
			"data" => $data,
		);

		echo json_encode($output);
	}

	public function _action($id = null)
	{
		$btn = "<div class='btn-group btn-group-sm' role='group' aria-label='Button aksi'>
					<a href='pajakabt/edit/$id' title='Ubah Data' class='btn btn-warning btn-sm'>
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
			'parent_menu' => 'abt',
			'child_menu' => 'pajak_air',
			'js_file' => 'pajak-air/js_file',
			'view' => 'pajak-air/tambah',
			'perusahaan' => $this->perusahaan_model->get_alldata()->result_array(),
		];

		$this->load->view('layout', $data);
	}

	public function edit($id)
	{
		$this->acl->_check_not_login();
		$this->acl->_cek_have_permission($this->uri->segments);

		$data = [
			'title' => 'Edit Data [PAJAK AIR]',
			'parent_menu' => 'abt',
			'child_menu' => 'pajak_air',
			'js_file' => 'pajak-air/js_file',
			'view' => 'pajak-air/edit',
			'sumur' => $this->sumur_model->get_data_byid($id),
			'perusahaan' => $this->perusahaan_model->get_alldata()->result_array(),
			'pajakabt' => $this->pajak_model->getById($id)
		];

		$this->load->view('layout', $data);
	}

	public function createOrUpdate()
	{
		$post = $this->input->post();

		if ($post['id_pjk'] == '') {
			$this->pajak_model->save();
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
		} else {
			$this->pajak_model->update();
			$this->session->set_flashdata('success', 'Data berhasil di ubah');
		}

		redirect('pajakabt');
	}

	public function delete()
	{
		$this->acl->_check_not_login();
		$this->acl->_cek_have_permission($this->uri->segments);
		$post = $this->input->post();

		if ($this->pajak_model->delete($post['id'])) {
			echo json_encode(['data' => 'success']);
		}
	}
}
