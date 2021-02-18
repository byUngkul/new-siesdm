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
		$this->acl->_check_not_login();
		
		$data = [
			'title' => 'Home',
			'parent_menu' => 'home',
			'view' => 'home',
			'js_file' => 'js_home',
			'data_dinas' => $this->dinas_m->get_data()->row_array()
		];
		
		$this->load->view('layout', $data);
	}

	public function get_data_card()
	{
		$perusahaan = $this->perusahaan_model->count_all();
		$sumur = $this->sumur_model->count_all();
		$sipa_habis = $this->sumur_model->count_sipa_habis();
		$sipa_akip = $this->sumur_model->count_sipa_aktip();
		$tidak_berizin = $this->sumur_model->count_tidak_berizin();

		$data = [
			'tot_perusahaan_abt' => $perusahaan,
			'tot_sumur_abt' => $sumur,
			'tot_sipa_habis' => $sipa_habis,
			'tot_sipa_aktip' => $sipa_akip,
			'tot_abt_tidak_berizin' => $tidak_berizin,
			'tot_tambang_berizin' => 0,
			'tot_tambang_tidak_berizin' => 0,
		];

		echo json_encode($data);
	}

	public function pengingat(){
		$now = date('Y-m-d');
		$data = [ 'waktu' => $this->sumur->hitungMasaIzin()
		];

		$this->load->view('welcome_message', $data);
	}
}
