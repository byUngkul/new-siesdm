<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE){
			redirect('login');
		}
	}
	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('template/template', $data);
	}

	public function login()
	{
		$data['title'] = 'Login';
		$this->load->view('login', $data);
	}
}
