<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('perusahaan_model');
		$this->load->model('kota_model');
	}

	public function index()
	{
		$data = [
			'title' => 'Perusahaan',
			'parent_menu' => 'perusahaan',
			'view' => 'perusahaan/index',
			'js_file' => 'perusahaan/js_file',
		];

		$this->load->view('layout', $data);
	}

	public function ajax_list()
	{
		$list = $this->perusahaan_model->get_data();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $val) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $val->nama_perusahaan;
			$row[] = $val->nama_pemilik;
			$row[] = $val->jns_usaha;
			$row[] = $val->alamat_perusahaan;
			$row[] = $val->nama_kota;
			$row[] = $this->_action($val->id_perusahaan);

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->perusahaan_model->count_all(),
			"recordsFiltered" => $this->perusahaan_model->count_filtered(),
			"data" => $data,
		);

		echo json_encode($output);
	}

	public function _action($id = null)
	{
		$btn = "<div class='btn-group btn-group-sm' role='group' aria-label='Button aksi'>
					<a href='perusahaan/edit/$id' title='Ubah Data' class='btn btn-warning btn-sm'>
						<i class='fas fa-edit'></i>
					</a>
					<a href='perusahaan/detile/$id' title='Lihat data detile' class='btn btn-info btn-sm'>
						<i class='fas fa-info-circle'></i>
					</a>
					<button class='btn btn-danger btn-sm' title='Hapus data' onclick='deleteDialog($id)'>
						<i class='fas fa-trash'></i>
					</button>
				</div>";

		return $btn;
	}

	public function detile($id)
	{
		$data = [
			'title' => 'Detile Data [Perusahaan]',
			'parent_menu' => 'perusahaan',
			'view' => 'perusahaan/detile',
			'js_file' => 'perusahaan/js_file',
			'perusahaan' => $this->perusahaan_model->get_detile_data($id)
		];

		$this->load->view('layout', $data);
	}

	public function tambah()
	{
		$data = [
			'title' => 'Tambah Data [Perusahaan]',
			'parent_menu' => 'perusahaan',
			'view' => 'perusahaan/tambah',
			'js_file' => 'perusahaan/js_file',
			'kota' => $this->kota_model->getData()
		];

		$this->load->view('layout', $data);
	}

	public function simpan()
	{
		if ($this->input->post('id_perusahaan') == null) {
			$this->perusahaan_model->add();
		} else {
			$this->perusahaan_model->update();
		}

		$this->session->set_flashdata('success', 'Data berhasil di simpan');

		redirect('perusahaan');
	}

	public function edit($id)
	{
		$data = [
			'title' => 'Edit Data [Perusahaan]',
			'parent_menu' => 'perusahaan',
			'view' => 'perusahaan/edit',
			'js_file' => 'perusahaan/js_file',
			'kota' => $this->kota_model->getData(),
			'perusahaan' => $this->perusahaan_model->get_data_byId($id)
		];

		$this->load->view('layout', $data);
	}

	public function delete($id)
	{
		if ($this->prs->delete($id)) {
			$this->session->set_flashdata('success', 'Data berhasil di hapus!');
			redirect('perusahaan');
		}
	}

	public function cetak_pdf()
	{
		$data = $this->perusahaan_model->get_alldata();
		ini_set("memory_limit","512M");
		ini_set('max_execution_time', 300);
		set_time_limit(300);
		$pdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => [210, 330],
			'orientation' => 'L'
		]);
		$pdf->packTableData =true;
		$view = $this->load->view('perusahaan/export/cetak', ['data' => $data], true);
		$pdf->WriteHTML($view);
		$pdf->Output();
	}

	public function cetak_excel()
	{
		$data = $this->perusahaan_model->get_alldata();

		$this->load->view('perusahaan/export/excel', ['data' => $data]);
	}
}
