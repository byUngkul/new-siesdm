<?php
/**
 * class controller perusahaan Aplikasi SiESDM v 0.1
 */
class Perusahaan extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE){
			redirect('login');
		}
		$this->load->model('perusahaan_model', 'prs');
		$this->load->model('sumur_model', 'sumur');
		$this->load->model('kota_model', 'kota');
	}

	public function index(){
		// akses admin
		if($this->session->userdata('akses')=='1'){
			if (isset($_GET['filter1']) && !empty($_GET['filter1'])) {
				$filter     = $_GET['filter1'];
				$nama_kota  = array('', 'KOTA BANDUNG', 'KOTA CIMAHI', 'KAB. BANDUNG BARAT', 'KAB. SUBANG');
				$url_cetak  = 'perusahaan/cetak?filter='.$filter;
				$url_excel  = 'perusahaan/excel?filter='.$filter;
				$wilayah    = 'DAFTAR PERUSAHAAN WILAYAH '.$nama_kota[$filter];
				$ambil_data = $this->prs->getJumlahSumur($filter);
			} else {
				$wilayah    = 'DAFTAR SELURUH PERUSAHAAN';
				$filter     = '';
				$url_cetak  = 'perusahaan/cetak';
				$url_excel  = 'perusahaan/excel';
				$ambil_data = $this->prs->getJumlahSumur($filter);
			}
		} elseif ($this->session->userdata('akses')=='5'){ // akses Admin Bandung
			$wilayah = 'WILAYAH BANDUNG';
			$wil = '1';
			$url_cetak  = 'perusahaan/cetak';
			$url_excel  = 'perusahaan/excel';
			$ambil_data = $this->prs->getJumlahSumur($wil);
		} elseif ($this->session->userdata('akses')=='4'){ //akses admin cimahi
			$wilayah = 'WILAYAH CIMAI';
			$wil = '2';
			$url_cetak  = 'perusahaan/cetak';
			$url_excel  = 'perusahaan/excel';
			$ambil_data = $this->prs->getJumlahSumur($wil);
		} elseif ($this->session->userdata('akses')=='6'){ //akses admin bandung barat
			$wilayah = 'WILAYAH BANDUNG BARAT';
			$wil = '3';
			$url_cetak  = 'perusahaan/cetak';
			$url_excel  = 'perusahaan/excel';
			$ambil_data = $this->prs->getJumlahSumur($wil);
		} elseif ($this->session->userdata('akses')=='7'){ //akses admin subang
			$wilayah = 'WILAYAH SUBANG';
			$wil = '4';
			$url_cetak  = 'perusahaan/cetak';
			$url_excel  = 'perusahaan/excel';
			$ambil_data = $this->prs->getJumlahSumur($wil);
		}

		$data = [
				'title'      => 'SiESDM',
				'sub_title'  => 'Home',
				'page'       => 'Daftar Data Perusahaan',
				'wilayah'    => $wilayah,
				'url_cetak'  => $url_cetak,
				'url_excel'  => $url_excel,
				'content'    => 'perusahaan/index',
				'perusahaan' => $ambil_data,
				'f_wilayah'  => $this->prs->getWilayah()
			];
		//print_r($data['perusahaan']);
		$this->load->view('template/template', $data);
	}

	public function detile($id_perusahaan = null){
		$data = [
			'title' => 'SiESDM',
			'sub_title' => 'Home',
			'page' => 'Biodata Perusahaan',
			'sub_page' => '',
			'content' => 'perusahaan/detile',
			'datas' => $this->prs->tampilById($id_perusahaan),
			'sumur' => $this->sumur->tampilByPerusahaan($id_perusahaan)
		];
		$this->load->view('template/template', $data);
	}

	public function add(){
		$data = [
			'title' => 'SiESDM',
			'sub_title' => 'Home',
			'page' => 'Tambah Data',
			'sub_page' => '',
			'content' => 'perusahaan/add',
			'kota' => $this->kota->getData()
		];
		//print_r($data['perusahaan']);
		$this->load->view('template/template', $data);
	}

	public function save(){
		$this->prs->add();
		$this->session->set_flashdata('success', 'Data berhasil di simpan!');
		redirect('perusahaan/add');
	}

	public function edit($id_perusahaan = null){
		$data = [
			'title' => 'SiESDM',
			'sub_title' => 'Home',
			'page' => 'Tambah Data',
			'sub_page' => '',
			'content' => 'perusahaan/edit',
			'kota' => $this->kota->getData(),
			'datas' => $this->prs->getById($id_perusahaan)
		];
		//print_r($data['perusahaan']);
		$this->load->view('template/template', $data);
	}

	public function update(){
		$this->prs->update();
		$this->session->set_flashdata('success', 'Data berhasil di ubah!');
		redirect('perusahaan');
	}

	public function delete($id_perusahaan = null)
    {
        if(!isset($id_perusahaan)) show_404();

    	if ($this->prs->delete($id_perusahaan)) {
			$this->session->set_flashdata('danger', 'Data berhasil di hapus!');
    		redirect('perusahaan');
    	}
    }

	public function kirimEmailSipa(){
		$htmlContent = '<h1>Diberitahukan bahwa Sura Izin Pengusahaan Air Tanah(SIPA) Perusahaan anda akan habis</h1>';
		$htmlContent .= '<div>Segera lakukan perpanjangan Izin Pengusahaan Air Tanah Perusahaan Anda.<br> Terima Kasih,</div>';
		$tujuan = $this->input->post('tujuan');


		// Konfigurasi email
        $config = [
               'mailtype'  => 'html',
               'charset'   => 'utf-8',
               'protocol'  => 'smtp',
               'smtp_host' => 'ssl://smtp.gmail.com',
               'smtp_user' => 'dani.danisaja@gmail.com',    // Ganti dengan email gmail kamu
               'smtp_pass' => 'Satu23456789',      // Password gmail kamu
               'smtp_port' => 465,
               'crlf'      => "\r\n",
               'newline'   => "\r\n"
           ];
        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

		//$this->email->initialize($config);
		$this->email->to($tujuan);
		$this->email->from('no-repley@gmail.com','Dinas ESDM');
		// Subject email
        $this->email->subject('Pemberitahuan Masa Berlaku SIPA');
		$this->email->message($htmlContent);
		// Tampilkan pesan sukses atau error
        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
            redirect('perusahaan');
        } else {
            show_error($this->email->print_debugger());
        }
	}

	public function kirimEmailTera(){
		$htmlContent = '<h1>Diberitahukan bahwa Sertifikat Tera Meter Air Perusahaan anda akan habis</h1>';
		$htmlContent .= '<div>Segera lakukan perpanjangan Sertifikat Tera Meter Air Tanah Perusahaan Anda.<br> Terima Kasih,</div>';
		$tujuan = $this->input->post('tujuan');


		// Konfigurasi email
        $config = [
               'mailtype'  => 'html',
               'charset'   => 'utf-8',
               'protocol'  => 'smtp',
               'smtp_host' => 'ssl://smtp.gmail.com',
               'smtp_user' => 'dani.danisaja@gmail.com',    // Ganti dengan email gmail kamu
               'smtp_pass' => 'Satu23456789',      // Password gmail kamu
               'smtp_port' => 465,
               'crlf'      => "\r\n",
               'newline'   => "\r\n"
           ];
        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

		//$this->email->initialize($config);
		$this->email->to($tujuan);
		$this->email->from('no-repley@gmail.com','Dinas ESDM');
		// Subject email
        $this->email->subject('Pemberitahuan Masa Berlaku Tera Meter Air');
		$this->email->message($htmlContent);
		// Tampilkan pesan sukses atau error
        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
            redirect('perusahaan');
        } else {
            show_error($this->email->print_debugger());
        }
	}

	public function kirimEmailAir(){
		$htmlContent = '<h1>Diberitahukan bahwa Penggunaan Air Tanah Perusahaan anda melebihi batas yang di tentukan.</h1>';
		$htmlContent .= '<div>Atur Penggunaan Air Tanah di Perusahaan Anda sesuai dengan yang ditentukan.<br> Terima Kasih,</div>';
		$tujuan = $this->input->post('tujuan');


		// Konfigurasi email
        $config = [
               'mailtype'  => 'html',
               'charset'   => 'utf-8',
               'protocol'  => 'smtp',
               'smtp_host' => 'ssl://smtp.gmail.com',
               'smtp_user' => 'dani.danisaja@gmail.com',    // Ganti dengan email gmail kamu
               'smtp_pass' => 'Satu23456789',      // Password gmail kamu
               'smtp_port' => 465,
               'crlf'      => "\r\n",
               'newline'   => "\r\n"
           ];
        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

		//$this->email->initialize($config);
		$this->email->to($tujuan);
		$this->email->from('no-repley@gmail.com','Dinas ESDM');
		// Subject email
        $this->email->subject('Pemberitahuan Masa Berlaku Tera Meter Air');
		$this->email->message($htmlContent);
		// Tampilkan pesan sukses atau error
        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
            redirect('perusahaan');
        } else {
            show_error($this->email->print_debugger());
        }
	}

	public function cetak(){
		if($this->session->userdata('akses')=='1'){
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter     = $_GET['filter'];
				$nama_kota  = array('', 'KOTA BANDUNG', 'KOTA CIMAHI', 'KAB. BANDUNG BARAT', 'KAB. SUBANG');
				$wilayah    = 'DAFTAR PERUSAHAAN WILAYAH '.$nama_kota[$filter];
				$ambil_data = $this->prs->getJumlahSumur($filter);
			} else {
				$wilayah    = 'DAFTAR SELURUH PERUSAHAAN';
				$ambil_data = $this->prs->getJumlahSumur($filter);
			}
		} elseif ($this->session->userdata('akses')=='5'){ // akses Admin Bandung
			$wilayah = 'WILAYAH BANDUNG';
			$wil = '1';
			$ambil_data = $this->prs->getJumlahSumur($wil);
		} elseif ($this->session->userdata('akses')=='4'){ //akses admin cimahi
			$wilayah = 'WILAYAH CIMAI';
			$wil = '2';
			$ambil_data = $this->prs->getJumlahSumur($wil);
		} elseif ($this->session->userdata('akses')=='6'){ //akses admin bandung barat
			$wilayah = 'WILAYAH BANDUNG BARAT';
			$wil = '3';
			$ambil_data = $this->prs->getJumlahSumur($wil);
		} elseif ($this->session->userdata('akses')=='7'){ //akses admin subang
			$wilayah = 'WILAYAH SUBANG';
			$wil = '4';
			$ambil_data = $this->prs->getJumlahSumur($wil);
		}
		$data = [
			'ket'      => $wilayah,
			'isi_data' => $ambil_data
		];
		//echo json_encode($data);
		$this->load->view('perusahaan/cetak', $data);
	}

	public function excel(){
		if($this->session->userdata('akses')=='1'){
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter     = $_GET['filter'];
				$nama_kota  = array('', 'KOTA BANDUNG', 'KOTA CIMAHI', 'KAB. BANDUNG BARAT', 'KAB. SUBANG');
				$wilayah    = 'DAFTAR PERUSAHAAN WILAYAH '.$nama_kota[$filter];
				$ambil_data = $this->prs->getJumlahSumur($filter);
			} else {
				$wilayah    = 'DAFTAR SELURUH PERUSAHAAN';
				$ambil_data = $this->prs->getJumlahSumur($filter);
			}
		} elseif ($this->session->userdata('akses')=='5'){ // akses Admin Bandung
			$wilayah = 'WILAYAH BANDUNG';
			$wil = '1';
			$ambil_data = $this->prs->getJumlahSumur($wil);
		} elseif ($this->session->userdata('akses')=='4'){ //akses admin cimahi
			$wilayah = 'WILAYAH CIMAI';
			$wil = '2';
			$ambil_data = $this->prs->getJumlahSumur($wil);
		} elseif ($this->session->userdata('akses')=='6'){ //akses admin bandung barat
			$wilayah = 'WILAYAH BANDUNG BARAT';
			$wil = '3';
			$ambil_data = $this->prs->getJumlahSumur($wil);
		} elseif ($this->session->userdata('akses')=='7'){ //akses admin subang
			$wilayah = 'WILAYAH SUBANG';
			$wil = '4';
			$ambil_data = $this->prs->getJumlahSumur($wil);
		}
		$data = [
			'ket'      => $wilayah,
			'isi_data' => $ambil_data
		];
		$this->load->view('exel/perusahaan_excel', $data);
	}

	public function cetakDetile($id = null){
		$data['datas'] = $this->prs->tampilById($id);
		$this->load->view('perusahaan/cetak_detile', $data);
	}

	public function excelDetile($id = null){
		$data['ket'] = 'Data Perusahaan';
		$data['datas'] = $this->prs->tampilById($id);
		$this->load->view('exel/perusahaan_detile_excel', $data);
	}
}