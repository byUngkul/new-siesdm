<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sumur extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('sumur_model');
		$this->load->model('perusahaan_model');
		$this->load->model('jenis_sumur_model');
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
			'view' => 'sumur/index'
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
                    : '<button class="btn btn-info btn-sm" disabled>Berlaku</button>';
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

	public function _action($id = null)
	{
		$btn = "<div class='btn-group btn-group-sm' role='group' aria-label='Button aksi'>
					<a href='sumur/edit/$id' title='Ubah Data' class='btn btn-warning btn-sm'>
						<i class='fas fa-edit'></i>
					</a>
					<a href='sumur/detile/$id' title='Lihat data detile' class='btn btn-info btn-sm'>
						<i class='fas fa-info-circle'></i>
					</a>
					<button class='btn btn-danger btn-sm' title='Hapus data' onclick='deleteDialog($id)'>
						<i class='fas fa-trash'></i>
					</button>
				</div>";

		return $btn;
	}

	public function tambah()
	{
		$this->acl->_check_not_login();
		$this->acl->_cek_have_permission($this->uri->segments);

		$data = [
			'title' => 'Tambah Data [SUMUR]',
			'parent_menu' => 'abt',
			'child_menu' => 'sumur',
			'js_file' => 'sumur/js_file',
			'view' => 'sumur/tambah',
			'perusahaan' => $this->perusahaan_model->get_alldata()->result_array(),
			'jenis_sumur' => $this->jenis_sumur_model->get_alldata()->result_array(),
		];

		$this->load->view('layout', $data);
	}
	
	public function edit($id)
	{
		$this->acl->_check_not_login();
		$this->acl->_cek_have_permission($this->uri->segments);
		
		$data = [
			'title' => 'Edit Data [SUMUR]',
			'parent_menu' => 'abt',
			'child_menu' => 'sumur',
			'js_file' => 'sumur/js_file',
			'view' => 'sumur/edit',
			'sumur' => $this->sumur_model->get_data_byid($id),
			'perusahaan' => $this->perusahaan_model->get_alldata()->result_array(),
			'jenis_sumur' => $this->jenis_sumur_model->get_alldata()->result_array(),
		];
		
		$this->load->view('layout', $data);	
	}

	public function simpan()
	{
		redirect('sumur');
	}
}
