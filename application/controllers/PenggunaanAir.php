<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PenggunaanAir extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('pengambilan_air_model', 'pengambilanair');
		$this->load->model('sumur_model');
		$this->load->model('perusahaan_model');
	}

	public function index()
	{
		$data = [
			'title' => 'Data Penggunaan Air',
			'parent_menu' => 'abt',
			'child_menu' => 'ambil_air',
			'js_file' => 'penggunaan-air/js_file',
			'view' => 'penggunaan-air/index'
		];

		$this->load->view('layout', $data);
	}

	public function ajax_list()
	{
		$list = $this->pengambilanair->datagrid();
		$data = array();
		$no = $_POST['start'];
		$satuan = ' m<sup>3</sup>';
		foreach ($list as $val) {
			$no++;
			$aktip = (date('Y-m-d', strtotime($val->tgl_ahir_sipa)) < date('Y-m-d'))
				? '<button class="btn btn-danger btn-sm" disabled>Izin Habis</button>'
				: '<button class="btn btn-info btn-sm" disabled>Berlaku</button>';
			$row = array();
			$row[] = $no;
			$row[] = $val->nama_perusahaan;
			$row[] = $val->nama_kota;
			$row[] = $val->no_sumur;
			$row[] = $val->bulan;
			$row[] = $val->tahun;
			$row[] = $val->debit_air . $satuan;
			$row[] = $val->debit_izin . $satuan;
			$row[] = ($val->debit_izin * 30) . $satuan;
			$row[] = $aktip;
			$row[] = $this->_action($val->id_sumur);

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->pengambilanair->count_all(),
			"recordsFiltered" => $this->pengambilanair->count_filtered(),
			"data" => $data,
		);

		echo json_encode($output);
	}

	public function _action($id = null)
	{
		$btn = "<div class='btn-group btn-group-sm' role='group' aria-label='Button aksi'>
					<a href='penggunaanair/edit/$id' title='Ubah Data' class='btn btn-warning btn-sm'>
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
		$data = [
			'title' => 'Tambah Data [PENGGUNAAN AIR]',
			'parent_menu' => 'abt',
			'child_menu' => 'ambil_air',
			'js_file' => 'penggunaan-air/js_file',
			'view' => 'penggunaan-air/tambah',
			'perusahaan' => $this->perusahaan_model->get_alldata()->result_array(),
		];

		$this->load->view('layout', $data);
	}

	public function edit($id)
	{
		$data = [
			'title' => 'Edit Data [SUMUR]',
			'parent_menu' => 'abt',
			'child_menu' => 'ambil_air',
			'js_file' => 'penggunaan-air/js_file',
			'view' => 'penggunaan-air/edit',
			'sumur' => $this->sumur_model->get_data_byid($id),
			'perusahaan' => $this->perusahaan_model->get_alldata()->result_array(),
			'penggunaanair' => $this->pengambilanair->get_data_byId($id)
		];
		// var_dump($data['penggunaanair']); die;
		$this->load->view('layout', $data);
	}

	public function createOrUpdate()
	{
		$post = $this->input->post();

		if ($post['id_penggunaanair'] == '') {
			$this->pengambilanair->create($post);
			$this->session->set_flashdata('success', 'Data berhasil di simpan');
		} else {
			$this->pengambilanair->update($post);
			$this->session->set_flashdata('success', 'Data berhasil di ubah');
		}

		redirect('penggunaanair');
	}
}
