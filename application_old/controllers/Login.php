<?php
/**
 * class controller untuk verifikasi login 
 */
class Login extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('sumur_model');
	}

	public function index(){
		$data['title'] = 'Sign In';
		$this->load->view('login', $data);
	}

	public function auth(){
		$user = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$pass = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);


		$cek_user = $this->login_model->auth($user,$pass);

		if ($cek_user->num_rows() > 0) {
			// cek login
			$data=$cek_user->row_array();
			$this->session->set_userdata('masuk', TRUE);
			if ($data['level']=='1') { //akses admin
				$this->session->set_userdata('akses', '1');
				$this->session->set_userdata('ses_id', $data['uname']);
				$this->session->set_userdata('ses_nama', $data['nama']);
				redirect('dashboard');
			} elseif ($data['level']=='2') { // akses user
				$this->session->set_userdata('akses', '2');
				$this->session->set_userdata('ses_id', $data['uname']);
				$this->session->set_userdata('ses_nama', $data['nama']);
				redirect('dashboard');
			} elseif ($data['level']=='3') { // akses user
				$this->session->set_userdata('akses', '3');
				$this->session->set_userdata('ses_id', $data['uname']);
				$this->session->set_userdata('ses_nama', $data['nama']);
				redirect('dashboard');
			} elseif ($data['level']=='4') { // akses cimahi
				$this->session->set_userdata('akses', '4');
				$this->session->set_userdata('ses_id', $data['uname']);
				$this->session->set_userdata('ses_nama', $data['nama']);
				redirect('dashboard');
			} elseif ($data['level']=='5') { // akses bandung
				$this->session->set_userdata('akses', '5');
				$this->session->set_userdata('ses_id', $data['uname']);
				$this->session->set_userdata('ses_nama', $data['nama']);
				redirect('dashboard');
			} elseif ($data['level']=='6') { // akses bandung barat
				$this->session->set_userdata('akses', '6');
				$this->session->set_userdata('ses_id', $data['uname']);
				$this->session->set_userdata('ses_nama', $data['nama']);
				redirect('dashboard');
			} elseif ($data['level']=='7') { // akses subang
				$this->session->set_userdata('akses', '7');
				$this->session->set_userdata('ses_id', $data['uname']);
				$this->session->set_userdata('ses_nama', $data['nama']);
				redirect('dashboard');
			} else { // akses user
				$this->session->set_userdata('akses', '8');
				$this->session->set_userdata('ses_id', $data['uname']);
				$this->session->set_userdata('ses_nama', $data['nama']);
				redirect('dashboard');
			}
		} else { // jika usernaem dan password tidak ditemukan
			
			echo $this->session->set_flashdata('msg', 'Username atau Password salah');
			redirect('login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		$url=base_url('');
		redirect($url);
	}

	public function display(){
		$data['display'] = $this->sumur_model->tampil()->result();
		$this->load->view('display', $data);
		
	}
}