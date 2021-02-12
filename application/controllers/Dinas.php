<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Dinas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('dinas_m');
    }


    public function index()
    {
		$this->acl->_cek_have_permission($this->uri->segments);

        $data = [
            'title' => 'Setting Dinas',
            'parent_menu' => 'dinas',
            'js_file' => 'dinas/js_file',
            'dinas' => $this->dinas_m->get_data()->row_array(),
            'view' => 'dinas/index'
        ];

        $this->load->view('layout', $data);
    }


    public function simpan()
    {
		$this->acl->_cek_have_permission($this->uri->segments);
		
        $this->dinas_m->update();
        redirect('dinas');
    }
}
