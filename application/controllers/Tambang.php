<?php
defined('BASEPATH') || exit('no direcect script access allowd');

class Tambang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kota_model');
	}

	public function index()
	{
		$this->acl->_check_not_login();
		$this->acl->_cek_have_permission($this->uri->segments);

		$data = [
			'title' => 'Data Sumur',
			'parent_menu' => 'abt',
			'child_menu' => 'sumur',
			'js_file' => 'sumur/js_file',
			'view' => 'sumur/index',
			'jenis_sumur' => $this->jenis_sumur_model->get_alldata()->result_array(),
			'wilayah' => $this->kota_model->getData()
		];

		$this->load->view('layout', $data);
	}

	public function ajax_list()
	{
		$list = $this->sumur_model->datagrid();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $val) {
			$no++;
			$aktip = (date('Y-m-d', strtotime($val->tgl_ahir_sipa)) < date('Y-m-d'))
				? '<button class="btn btn-danger btn-sm" disabled>Izin Habis</button>'
				: '<button class="btn btn-info btn-sm" disabled>Aktip</button>';
			$row = array();
			$row[] = $no;
			$row[] = $val->nama_perusahaan;
			$row[] = $val->no_sumur;
			$row[] = $val->jenis_sumur;
			$row[] = $aktip;
			$row[] = $val->no_sipa;
			$row[] = $val->tgl_ahir_sipa;
			$row[] = $val->nama_kota;
			$row[] = $this->_action($val->id_sumur);

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->sumur_model->count_all(),
			"recordsFiltered" => $this->sumur_model->count_filtered(),
			"data" => $data,
		);

		echo json_encode($output);
	}

	public function tambah()
	{
		$data =[];
		$this->load->view('layout', $data);
	}
	
	public function edit($id)
	{
		$data =[];
		$this->load->view('layout', $data);
	}
}

