<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Dashboard extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		
		$this->load->model('sumur_model');
		$this->load->model('perusahaan_model');
		$this->load->model('dinas_m');
	}

	public function index()
	{
		$data = [
			'title' => 'Home',
			'parent_menu' => 'home',
			'view' => 'home',
			'data_dinas' => $this->dinas_m->get_data()->row_array()
		];
		
		$this->load->view('layout', $data);
	}

	// public function index(){
	// 	if($this->session->userdata('akses')=='1'){
	// 		$wilayah = '';
	// 		$hampir = $this->sumur_model->getEndSipa('1', $wilayah)->num_rows();
	// 		$sudah = $this->sumur_model->getEndSipa('2', $wilayah)->num_rows();
	// 	} elseif ($this->session->userdata('akses')=='5') {
	// 		$wilayah = '1';
	// 		$hampir = $this->sumur_model->getEndSipa('1', $wilayah)->num_rows();
	// 		$sudah = $this->sumur_model->getEndSipa('2', $wilayah)->num_rows();
	// 	} elseif ($this->session->userdata('akses')=='4') {
	// 		$wilayah = '2';
	// 		$hampir = $this->sumur_model->getEndSipa('1', $wilayah)->num_rows();
	// 		$sudah = $this->sumur_model->getEndSipa('2', $wilayah)->num_rows();
	// 	} elseif ($this->session->userdata('akses')=='6') {
	// 		$wilayah = '3';
	// 		$hampir = $this->sumur_model->getEndSipa('1', $wilayah)->num_rows();
	// 		$sudah = $this->sumur_model->getEndSipa('2', $wilayah)->num_rows();
	// 	} elseif ($this->session->userdata('akses')=='7') {
	// 		$wilayah = '4';
	// 		$hampir = $this->sumur_model->getEndSipa('1', $wilayah)->num_rows();
	// 		$sudah = $this->sumur_model->getEndSipa('2', $wilayah)->num_rows();
	// 	} 
	// 	$data = [
	// 		'title'          => 'SiESDM',
	// 		'sub_title'      => 'Home',
	// 		'page'           => 'Dashboard',
	// 		'now'            => date('Y-m-d'),
	// 		'content'        => 'home/index',
	// 		'tera_hampir_habis'       => $this->sumur_model->getEndTera('1')->num_rows(),
	// 		'tera_sudah_habis'       => $this->sumur_model->getEndTera('2')->num_rows(),
	// 		'sipa_hampir_habis'            => $hampir,
	// 		'sipa_sudah_habis'            => $sudah,
	// 		'jml_sumur'      => $this->sumur_model->totalSumur(),
	// 		'sumur_imbuh'      => $this->sumur_model->ambilJenisImbuhan()->num_rows(),
	// 		'jml_perusahaan' => $this->perusahaan_model->totolPerusahaan()
	// 	];
	// 	//$selish = DATEDIFF($tempo->)

	// 	$this->load->view('template/template', $data);
	// }

	public function pengingat(){
		$now = date('Y-m-d');
		$data = [ 'waktu' => $this->sumur->hitungMasaIzin()
		];

		$this->load->view('welcome_message', $data);
	}
}