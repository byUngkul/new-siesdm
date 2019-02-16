<?php
/**
 * class Dashboard Aplikasi SiESDM v 0.1
 */
class Dashboard extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE){
			redirect('login');
		}
		$this->load->model('sumur_model');
		$this->load->model('perusahaan_model');
	}

	public function index(){
		$data = [
			'title'          => 'SiESDM',
			'sub_title'      => 'Home',
			'page'           => 'Dashboard',
			'now'            => date('Y-m-d'),
			'content'        => 'home/index',
			'tera_hampir_habis'       => $this->sumur_model->getEndTera('1')->num_rows(),
			'tera_sudah_habis'       => $this->sumur_model->getEndTera('2')->num_rows(),
			'sipa_hampir_habis'            => $this->sumur_model->getEndSipa('1')->num_rows(),
			'sipa_sudah_habis'            => $this->sumur_model->getEndSipa('2')->num_rows(),
			'jml_sumur'      => $this->sumur_model->totalSumur(),
			'sumur_imbuh'      => $this->sumur_model->ambilJenisImbuhan()->num_rows(),
			'jml_perusahaan' => $this->perusahaan_model->totolPerusahaan()
		];
		//var_dump($data['tempo']);
		//$selish = DATEDIFF($tempo->)

		$this->load->view('template/template', $data);
	}

	public function pengingat(){
		$now = date('Y-m-d');
		$data = [ 'waktu' => $this->sumur->hitungMasaIzin()
		];

		$this->load->view('welcome_message', $data);
	}
}