<?php
/**
 * 
 */
class Pajak extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE) {
			redirect('login');
		}

		$this->load->model('pajak_model');
		$this->load->model('sumur_model');
	}

	public function index(){
		if($this->session->userdata('akses')=='1'){
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];

				if ($filter == '4') {
					$tgl       = date('Y-m-d', strtotime($_GET['tanggal']));
					$ket       = 'Data Penggunaan Air Tanggal '.date('d-m-Y', strtotime($tgl));
					$url_cetak = 'pajak/cetak?filter=1&tanggal='.$tgl;
					$url_excel = 'pajak/excel?filter=1&tanggal='.$tgl;
					$ambil     = $this->pajak_model->viewByDate($tgl);
				} elseif ($filter == '1'){
					$bulan      = $_GET['bulan'];
					$tahun      = $_GET['tahun'];
					$nama_bulan = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');

					$ket       = 'Data Penggunaan Air Bula '.$nama_bulan[$bulan].' '.$tahun;
					$url_cetak = 'pajak/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
					$url_excel = 'pajak/excel?filter=2&bulan='.$bulan.'&tahun='.$tahun;
					$ambil     = $this->pajak_model->viewByMonth($bulan, $tahun);
				} elseif ($filter == '2'){
					$tahun = $_GET['tahun'];

	                $ket       = 'Data Penggunaan Air Tahun '.$tahun;
					$url_cetak = 'pajak/cetak?filter=3&tahun='.$tahun;
					$url_excel = 'pajak/excel?filter=3&tahun='.$tahun;
	                $ambil     = $this->pajak_model->viewByYear($tahun);
				} elseif ($filter == '5'){
					$izin   = $_GET['izin'];
					$status = array('', 'Berizin', 'Tidak Berizin');

	                $ket       = 'Data Penggunaan Air Perusahaan '.$status[$izin];
					$url_cetak = 'pajak/cetak?filter=5&izin='.$izin;
					$url_excel = 'pajak/excel?filter=5&izin='.$izin;
	                $ambil     = $this->pajak_model->getByIzin($izin);
				} else {
					$id_pers = $_GET['perusahaan'];

	                $ket       = 'Data Pajak Air Tanah ';
					$url_cetak = 'pajak/cetak?filter=4&perusahaan='.$id_pers;
					$url_excel = 'pajak/excel?filter=4&perusahaan='.$id_pers;
	                $ambil     = $this->pajak_model->viewByPerusahaan($id_pers);
				}
			} else {
				$ket       = 'Semua Data Pajak Air Tanah';
				$url_cetak = 'pajak/cetak';
				$url_excel = 'pajak/excel';
				$ambil     = $this->pajak_model->getAll()->result();
			}
		} elseif ($this->session->userdata('akses')=='5'){
			$wil = '1';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];

				if ($filter == '4') {
					$tgl       = date('Y-m-d', strtotime($_GET['tanggal']));
					$ket       = 'Data Penggunaan Air Tanggal '.date('d-m-Y', strtotime($tgl));
					$url_cetak = 'pajak/cetak?filter=1&tanggal='.$tgl;
					$url_excel = 'pajak/excel?filter=1&tanggal='.$tgl;
					$ambil     = $this->pajak_model->viewByDatePerwil($tgl, $wil);
				} elseif ($filter == '1'){
					$bulan      = $_GET['bulan'];
					$tahun      = $_GET['tahun'];
					$nama_bulan = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');

					$ket       = 'Data Penggunaan Air Bulan '.$nama_bulan[$bulan].' '.$tahun;
					$url_cetak = 'pajak/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
					$url_excel = 'pajak/excel?filter=2&bulan='.$bulan.'&tahun='.$tahun;
					$ambil     = $this->pajak_model->viewByMonthPerwil($bulan, $tahun, $wil);
				} elseif ($filter == '2'){
					$tahun = $_GET['tahun'];

	                $ket = 'Data Penggunaan Air Tahun '.$tahun;
					$url_cetak = 'pajak/cetak?filter=3&tahun='.$tahun;
					$url_excel = 'pajak/excel?filter=3&tahun='.$tahun;
	                $ambil = $this->pajak_model->viewByYearPerwil($tahun, $wil);
				} elseif ($filter == '5'){
					$izin = $_GET['izin'];
					$status = array('', 'Berizin', 'Tidak Berizin');

	                $ket = 'Data Penggunaan Air Perusahaan '.$status[$izin];
					$url_cetak = 'pajak/cetak?filter=5&izin='.$izin;
					$url_excel = 'pajak/excel?filter=5&izin='.$izin;
	                $ambil = $this->pajak_model->getByIzinPerwil($izin, $wil);
				} else {
					$id_pers = $_GET['perusahaan'];

	                $ket = 'Data Pajak Air Tanah ';
					$url_cetak = 'pajak/cetak?filter=4&perusahaan='.$id_pers;
					$url_excel = 'pajak/excel?filter=4&perusahaan='.$id_pers;
	                $ambil = $this->pajak_model->viewByPerusahaanPerwil($id_pers, $wil);
				}
			} else {
				$ket = 'Semua Data Pajak Air Tanah';
				$url_cetak = 'pajak/cetak';
				$url_excel = 'pajak/excel';
				$ambil = $this->pajak_model->getWilayah($wil)->result();
			}
		} elseif ($this->session->userdata('akses')=='4'){
			$wil = '2';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];

				if ($filter == '4') {
					$tgl       = date('Y-m-d', strtotime($_GET['tanggal']));
					$ket       = 'Data Penggunaan Air Tanggal '.date('d-m-Y', strtotime($tgl));
					$url_cetak = 'pajak/cetak?filter=1&tanggal='.$tgl;
					$url_excel = 'pajak/excel?filter=1&tanggal='.$tgl;
					$ambil     = $this->pajak_model->viewByDatePerwil($tgl, $wil);
				} elseif ($filter == '1'){
					$bulan      = $_GET['bulan'];
					$tahun      = $_GET['tahun'];
					$nama_bulan = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');

					$ket       = 'Data Penggunaan Air Bulan '.$nama_bulan[$bulan].' '.$tahun;
					$url_cetak = 'pajak/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
					$url_excel = 'pajak/excel?filter=2&bulan='.$bulan.'&tahun='.$tahun;
					$ambil     = $this->pajak_model->viewByMonthPerwil($bulan, $tahun, $wil);
				} elseif ($filter == '2'){
					$tahun = $_GET['tahun'];

	                $ket = 'Data Penggunaan Air Tahun '.$tahun;
					$url_cetak = 'pajak/cetak?filter=3&tahun='.$tahun;
					$url_excel = 'pajak/excel?filter=3&tahun='.$tahun;
	                $ambil = $this->pajak_model->viewByYearPerwil($tahun, $wil);
				} elseif ($filter == '5'){
					$izin = $_GET['izin'];
					$status = array('', 'Berizin', 'Tidak Berizin');

	                $ket = 'Data Penggunaan Air Perusahaan '.$status[$izin];
					$url_cetak = 'pajak/cetak?filter=5&izin='.$izin;
					$url_excel = 'pajak/excel?filter=5&izin='.$izin;
	                $ambil = $this->pajak_model->getByIzinPerwil($izin, $wil);
				} else {
					$id_pers = $_GET['perusahaan'];

	                $ket = 'Data Pajak Air Tanah ';
					$url_cetak = 'pajak/cetak?filter=4&perusahaan='.$id_pers;
					$url_excel = 'pajak/excel?filter=4&perusahaan='.$id_pers;
	                $ambil = $this->pajak_model->viewByPerusahaanPerwil($id_pers, $wil);
				}
			} else {
				$ket = 'Semua Data Pajak Air Tanah';
				$url_cetak = 'pajak/cetak';
				$url_excel = 'pajak/excel';
				$ambil = $this->pajak_model->getWilayah($wil)->result();
			}
		} elseif ($this->session->userdata('akses')=='6'){
			$wil = '3';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];

				if ($filter == '4') {
					$tgl       = date('Y-m-d', strtotime($_GET['tanggal']));
					$ket       = 'Data Penggunaan Air Tanggal '.date('d-m-Y', strtotime($tgl));
					$url_cetak = 'pajak/cetak?filter=1&tanggal='.$tgl;
					$url_excel = 'pajak/excel?filter=1&tanggal='.$tgl;
					$ambil     = $this->pajak_model->viewByDatePerwil($tgl, $wil);
				} elseif ($filter == '1'){
					$bulan      = $_GET['bulan'];
					$tahun      = $_GET['tahun'];
					$nama_bulan = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');

					$ket       = 'Data Penggunaan Air Bulan '.$nama_bulan[$bulan].' '.$tahun;
					$url_cetak = 'pajak/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
					$url_excel = 'pajak/excel?filter=2&bulan='.$bulan.'&tahun='.$tahun;
					$ambil     = $this->pajak_model->viewByMonthPerwil($bulan, $tahun, $wil);
				} elseif ($filter == '2'){
					$tahun = $_GET['tahun'];

	                $ket = 'Data Penggunaan Air Tahun '.$tahun;
					$url_cetak = 'pajak/cetak?filter=3&tahun='.$tahun;
					$url_excel = 'pajak/excel?filter=3&tahun='.$tahun;
	                $ambil = $this->pajak_model->viewByYearPerwil($tahun, $wil);
				} elseif ($filter == '5'){
					$izin = $_GET['izin'];
					$status = array('', 'Berizin', 'Tidak Berizin');

	                $ket = 'Data Penggunaan Air Perusahaan '.$status[$izin];
					$url_cetak = 'pajak/cetak?filter=5&izin='.$izin;
					$url_excel = 'pajak/excel?filter=5&izin='.$izin;
	                $ambil = $this->pajak_model->getByIzinPerwil($izin, $wil);
				} else {
					$id_pers = $_GET['perusahaan'];

	                $ket = 'Data Pajak Air Tanah ';
					$url_cetak = 'pajak/cetak?filter=4&perusahaan='.$id_pers;
					$url_excel = 'pajak/excel?filter=4&perusahaan='.$id_pers;
	                $ambil = $this->pajak_model->viewByPerusahaanPerwil($id_pers, $wil);
				}
			} else {
				$ket = 'Semua Data Pajak Air Tanah';
				$url_cetak = 'pajak/cetak';
				$url_excel = 'pajak/excel';
				$ambil = $this->pajak_model->getWilayah($wil)->result();
			}
		} elseif ($this->session->userdata('akses')=='7'){
			$wil = '4';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];

				if ($filter == '4') {
					$tgl       = date('Y-m-d', strtotime($_GET['tanggal']));
					$ket       = 'Data Penggunaan Air Tanggal '.date('d-m-Y', strtotime($tgl));
					$url_cetak = 'pajak/cetak?filter=1&tanggal='.$tgl;
					$url_excel = 'pajak/excel?filter=1&tanggal='.$tgl;
					$ambil     = $this->pajak_model->viewByDatePerwil($tgl, $wil);
				} elseif ($filter == '1'){
					$bulan      = $_GET['bulan'];
					$tahun      = $_GET['tahun'];
					$nama_bulan = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');

					$ket       = 'Data Penggunaan Air Bulan '.$nama_bulan[$bulan].' '.$tahun;
					$url_cetak = 'pajak/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
					$url_excel = 'pajak/excel?filter=2&bulan='.$bulan.'&tahun='.$tahun;
					$ambil     = $this->pajak_model->viewByMonthPerwil($bulan, $tahun, $wil);
				} elseif ($filter == '2'){
					$tahun = $_GET['tahun'];

	                $ket = 'Data Penggunaan Air Tahun '.$tahun;
					$url_cetak = 'pajak/cetak?filter=3&tahun='.$tahun;
					$url_excel = 'pajak/excel?filter=3&tahun='.$tahun;
	                $ambil = $this->pajak_model->viewByYearPerwil($tahun, $wil);
				} elseif ($filter == '5'){
					$izin = $_GET['izin'];
					$status = array('', 'Berizin', 'Tidak Berizin');

	                $ket = 'Data Penggunaan Air Perusahaan '.$status[$izin];
					$url_cetak = 'pajak/cetak?filter=5&izin='.$izin;
					$url_excel = 'pajak/excel?filter=5&izin='.$izin;
	                $ambil = $this->pajak_model->getByIzinPerwil($izin, $wil);
				} else {
					$id_pers = $_GET['perusahaan'];

	                $ket = 'Data Pajak Air Tanah ';
					$url_cetak = 'pajak/cetak?filter=4&perusahaan='.$id_pers;
					$url_excel = 'pajak/excel?filter=4&perusahaan='.$id_pers;
	                $ambil = $this->pajak_model->viewByPerusahaanPerwil($id_pers, $wil);
				}
			} else {
				$ket = 'Semua Data Pajak Air Tanah';
				$url_cetak = 'pajak/cetak';
				$url_excel = 'pajak/excel';
				$ambil = $this->pajak_model->getWilayah($wil)->result();
			}			
		} 
		$data = [
			'title' => 'SiESDM',
			'sub_title' => 'Home',
			'page' => 'Data Pajak Air Tanah', // $ket
			'filter' => $ket,
			'url_cetak' => $url_cetak,
			'url_excel' => $url_excel,
			'ambil' => $ambil,
			'option_tahun' => $this->pajak_model->option_tahun(),
			'content' => 'pajak/index',
			'perusahaan' => $this->pajak_model->getPerusahaan(),
			'data' => $this->pajak_model->option_tahun()
		];

		$this->load->view('template/template', $data);
	}

	public function viewByIzin(){
		if (isset($_GET['filter']) && !empty($_GET['filter'])) {
			$filter = $_GET['filter'];

			if ($filter == '4') {
				$tgl = $_GET['tanggal'];
				$ket = 'Data Penggunaan Air Tanggal '.date('d-m-yy', strtotime($tgl));
				$url_cetak = 'pajak/cetak?filter=1&tanggal='.$tgl;
				$ambil = $this->pajak_model->viewByDate($tgl);
			} elseif ($filter == '1'){
				$bulan = $_GET['bulan'];
				$tahun = $_GET['tahun'];
				$nama_bulan = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');

				$ket = 'Data Penggunaan Air Bula '.$nama_bulan[$bulan].' '.$tahun;
				$url_cetak = 'pajak/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                $ambil = $this->pajak_model->viewByMonth($bulan, $tahun);
			} elseif ($filter == '2'){
				$tahun = $_GET['tahun'];

                $ket = 'Data Penggunaan Air Tahun '.$tahun;
                $url_cetak = 'pajak/cetak?filter=3&tahun='.$tahun;
                $ambil = $this->pajak_model->viewByYear($tahun);
			} else {
				$id_pers = $_GET['perusahaan'];

                $ket = 'Data Pajak Air Tanah ';
                $url_cetak = 'pajak/cetak?filter=4&perusahaan='.$id_pers;
                $ambil = $this->pajak_model->viewByPerusahaan($id_pers);
			}
		} else {
			$ket = 'Semua Data Pajak Air Tanah';
			$url_cetak = 'pajak/cetak';
			$ambil = $this->pajak_model->getByTidakizin()->result();
		}
		$data = [
			'title' => 'SiESDM',
			'sub_title' => 'Home',
			'page' => 'Data Pajak Air Tanah', // $ket
			'filter' => $ket,
			'url_cetak' => $url_cetak,
			'ambil' => $ambil,
			'option_tahun' => $this->pajak_model->option_tahun(),
			'content' => 'pajak/index',
			'perusahaan' => $this->pajak_model->getPerusahaan(),
			'data' => $this->pajak_model->option_tahun()
		];

		$this->load->view('template/template', $data);
	}

	public function ambilSumur(){
		$id = $this->input->post('id');
		$data = $this->pajak_model->getSumur($id);
		echo json_encode($data);
	}

	public function add(){
		$data = [
			'title' => 'SiESDM',
			'sub_title' => 'Home',
			'page' => 'Tambah Data',
			'sub_page' => '',
			'content' => 'pajak/add',
			//'data' => $this->pajak_model->getById($id_trx),
			'perusahaan' => $this->pajak_model->getPerusahaan()
		];
		//var_dump($data['data']);
		$this->load->view('template/template', $data);
	}

	public function save(){
		$this->pajak_model->save();
		$this->session->set_flashdata('success', 'Data berhasil di simpan!');
		
		redirect('pajak/add');
	}

	public function edit($id_trx = null){
		$data = [
			'title' => 'SiESDM',
			'sub_title' => 'Home',
			'page' => 'Ubah Data',
			'sub_page' => '',
			'content' => 'pajak/edit',
			'data' => $this->pajak_model->getById($id_trx),
			'sumur' => $this->sumur_model->tampil(),
			'perusahaan' => $this->pajak_model->getPerusahaan()
		];
		//var_dump($data['data']);
		$this->load->view('template/template', $data);
	}

	public function update(){
		$this->pajak_model->update();
		$this->session->set_flashdata('success', 'Data berhasil di ubah!');
		redirect('pajak');
	}

	public function delete($id_pjk = null)
    {
        if(!isset($id_pjk)) show_404();

    	if ($this->pajak_model->delete($id_pjk)) {
			$this->session->set_flashdata('danger', 'Data berhasil di hapus!');
    		redirect('pajak');
    	}
    }

	public function cetak(){
		if ($this->session->userdata('akses')=='1') {
			if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
				$filter = $_GET['filter']; // Ambil data filder yang dipilih user

				if($filter == '1'){ // Jika filter nya 1 (per tanggal)
					$tgl = $_GET['tanggal'];

					$ket = 'Data Pajak Air Tanah '.date('d-m-y', strtotime($tgl));
					$ambil = $this->pajak_model->viewByDate($tgl); // Panggil fungsi view_by_date yang ada di TransaksiModel
				}else if($filter == '2'){ // Jika filter nya 2 (per bulan)
					$bulan = $_GET['bulan'];
					$tahun = $_GET['tahun'];
					$nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

					$ket = 'Data Pajak Air Tanah'.$nama_bulan[$bulan].' '.$tahun;
					$ambil = $this->Pajak_model->viewByMonth($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
				}else if($filter == '3'){ // Jika filter nya 3 (per tahun)
					$tahun = $_GET['tahun'];

					$ket = 'Data Pajak Air Tanah'.$tahun;
					$ambil = $this->pajak_model->viewByYear($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else if($filter == '5'){ // Jika filter nya 3 (per tahun)
					$izin = $_GET['izin'];
					$status = array('', 'Berizin', 'Tidak Berizin');
					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->getByIzin($izin); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else{ // jika fiter 4 (perusahaan)
					$id_pers = $_GET['perusahaan'];

					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->viewByPerusahaan($id_pers);
				}
			}else{ // Jika user tidak mengklik tombol tampilkan
				$ket = 'Data Pajak Air Tanah ';
				$ambil = $this->pajak_model->getAll()->result(); // Panggil fungsi view_all yang ada di TransaksiModel
			}
		} elseif ($this->session->userdata('akses')=='5'){
			$wil = '1';
			if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
				$filter = $_GET['filter']; // Ambil data filder yang dipilih user

				if($filter == '1'){ // Jika filter nya 1 (per tanggal)
					$tgl = $_GET['tanggal'];

					$ket = 'Data Pajak Air Tanah '.date('d-m-y', strtotime($tgl));
					$ambil = $this->pajak_model->viewByDatePerwil($tgl, $wil); // Panggil fungsi view_by_date yang ada di TransaksiModel
				}else if($filter == '2'){ // Jika filter nya 2 (per bulan)
					$bulan = $_GET['bulan'];
					$tahun = $_GET['tahun'];
					$nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

					$ket = 'Data Pajak Air Tanah'.$nama_bulan[$bulan].' '.$tahun;
					$ambil = $this->Pajak_model->viewByMonthPerwil($bulan, $tahun, $wil); // Panggil fungsi view_by_month yang ada di TransaksiModel
				}else if($filter == '3'){ // Jika filter nya 3 (per tahun)
					$tahun = $_GET['tahun'];

					$ket = 'Data Pajak Air Tanah'.$tahun;
					$ambil = $this->pajak_model->viewByYearPerwil($tahun, $wil); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else if($filter == '5'){ // Jika filter nya 3 (per tahun)
					$izin = $_GET['izin'];
					$status = array('', 'Berizin', 'Tidak Berizin');
					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->getByIzinPerwil($izin, $wil); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else{ // jika fiter 4 (perusahaan)
					$id_pers = $_GET['perusahaan'];

					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->viewByPerusahaanPerwil($id_pers, $wil);
				}
			}else{ // Jika user tidak mengklik tombol tampilkan
				$ket = 'Data Pajak Air Tanah ';
				$ambil = $this->pajak_model->getWilayah($wil)->result(); // Panggil fungsi view_all yang ada di TransaksiModel
			}
		} elseif ($this->session->userdata('akses')=='4'){
			$wil = '2';
			if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
				$filter = $_GET['filter']; // Ambil data filder yang dipilih user

				if($filter == '1'){ // Jika filter nya 1 (per tanggal)
					$tgl = $_GET['tanggal'];

					$ket = 'Data Pajak Air Tanah '.date('d-m-y', strtotime($tgl));
					$ambil = $this->pajak_model->viewByDatePerwil($tgl, $wil); // Panggil fungsi view_by_date yang ada di TransaksiModel
				}else if($filter == '2'){ // Jika filter nya 2 (per bulan)
					$bulan = $_GET['bulan'];
					$tahun = $_GET['tahun'];
					$nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

					$ket = 'Data Pajak Air Tanah'.$nama_bulan[$bulan].' '.$tahun;
					$ambil = $this->Pajak_model->viewByMonthPerwil($bulan, $tahun, $wil); // Panggil fungsi view_by_month yang ada di TransaksiModel
				}else if($filter == '3'){ // Jika filter nya 3 (per tahun)
					$tahun = $_GET['tahun'];

					$ket = 'Data Pajak Air Tanah'.$tahun;
					$ambil = $this->pajak_model->viewByYearPerwil($tahun, $wil); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else if($filter == '5'){ // Jika filter nya 3 (per tahun)
					$izin = $_GET['izin'];
					$status = array('', 'Berizin', 'Tidak Berizin');
					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->getByIzinPerwil($izin, $wil); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else{ // jika fiter 4 (perusahaan)
					$id_pers = $_GET['perusahaan'];

					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->viewByPerusahaanPerwil($id_pers, $wil);
				}
			}else{ // Jika user tidak mengklik tombol tampilkan
				$ket = 'Data Pajak Air Tanah ';
				$ambil = $this->pajak_model->getWilayah($wil)->result(); // Panggil fungsi view_all yang ada di TransaksiModel
			}
		} elseif ($this->session->userdata('akses')=='6'){
			$wil = '3';
			if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
				$filter = $_GET['filter']; // Ambil data filder yang dipilih user

				if($filter == '1'){ // Jika filter nya 1 (per tanggal)
					$tgl = $_GET['tanggal'];

					$ket = 'Data Pajak Air Tanah '.date('d-m-y', strtotime($tgl));
					$ambil = $this->pajak_model->viewByDatePerwil($tgl, $wil); // Panggil fungsi view_by_date yang ada di TransaksiModel
				}else if($filter == '2'){ // Jika filter nya 2 (per bulan)
					$bulan = $_GET['bulan'];
					$tahun = $_GET['tahun'];
					$nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

					$ket = 'Data Pajak Air Tanah'.$nama_bulan[$bulan].' '.$tahun;
					$ambil = $this->Pajak_model->viewByMonthPerwil($bulan, $tahun, $wil); // Panggil fungsi view_by_month yang ada di TransaksiModel
				}else if($filter == '3'){ // Jika filter nya 3 (per tahun)
					$tahun = $_GET['tahun'];

					$ket = 'Data Pajak Air Tanah'.$tahun;
					$ambil = $this->pajak_model->viewByYearPerwil($tahun, $wil); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else if($filter == '5'){ // Jika filter nya 3 (per tahun)
					$izin = $_GET['izin'];
					$status = array('', 'Berizin', 'Tidak Berizin');
					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->getByIzinPerwil($izin, $wil); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else{ // jika fiter 4 (perusahaan)
					$id_pers = $_GET['perusahaan'];

					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->viewByPerusahaanPerwil($id_pers, $wil);
				}
			}else{ // Jika user tidak mengklik tombol tampilkan
				$ket = 'Data Pajak Air Tanah ';
				$ambil = $this->pajak_model->getWilayah($wil)->result(); // Panggil fungsi view_all yang ada di TransaksiModel
			}
		} elseif ($this->session->userdata('akses')=='7'){
			$wil = '4';
			if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
				$filter = $_GET['filter']; // Ambil data filder yang dipilih user

				if($filter == '1'){ // Jika filter nya 1 (per tanggal)
					$tgl = $_GET['tanggal'];

					$ket = 'Data Pajak Air Tanah '.date('d-m-y', strtotime($tgl));
					$ambil = $this->pajak_model->viewByDatePerwil($tgl, $wil); // Panggil fungsi view_by_date yang ada di TransaksiModel
				}else if($filter == '2'){ // Jika filter nya 2 (per bulan)
					$bulan = $_GET['bulan'];
					$tahun = $_GET['tahun'];
					$nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

					$ket = 'Data Pajak Air Tanah'.$nama_bulan[$bulan].' '.$tahun;
					$ambil = $this->Pajak_model->viewByMonthPerwil($bulan, $tahun, $wil); // Panggil fungsi view_by_month yang ada di TransaksiModel
				}else if($filter == '3'){ // Jika filter nya 3 (per tahun)
					$tahun = $_GET['tahun'];

					$ket = 'Data Pajak Air Tanah'.$tahun;
					$ambil = $this->pajak_model->viewByYearPerwil($tahun, $wil); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else if($filter == '5'){ // Jika filter nya 3 (per tahun)
					$izin = $_GET['izin'];
					$status = array('', 'Berizin', 'Tidak Berizin');
					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->getByIzinPerwil($izin, $wil); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else{ // jika fiter 4 (perusahaan)
					$id_pers = $_GET['perusahaan'];

					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->viewByPerusahaanPerwil($id_pers, $wil);
				}
			}else{ // Jika user tidak mengklik tombol tampilkan
				$ket = 'Data Pajak Air Tanah ';
				$ambil = $this->pajak_model->getWilayah($wil)->result(); // Panggil fungsi view_all yang ada di TransaksiModel
			}
		}

        $data['ket'] = $ket;
        $data['transaksi'] = $ambil;

		$this->load->view('pajak/cetak', $data);
	}

	public function excel(){
		if ($this->session->userdata('akses')=='1') {
			if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
				$filter = $_GET['filter']; // Ambil data filder yang dipilih user

				if($filter == '1'){ // Jika filter nya 1 (per tanggal)
					$tgl = $_GET['tanggal'];

					$ket = 'Data Pajak Air Tanah '.date('d-m-y', strtotime($tgl));
					$ambil = $this->pajak_model->viewByDate($tgl); // Panggil fungsi view_by_date yang ada di TransaksiModel
				}else if($filter == '2'){ // Jika filter nya 2 (per bulan)
					$bulan = $_GET['bulan'];
					$tahun = $_GET['tahun'];
					$nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

					$ket = 'Data Pajak Air Tanah'.$nama_bulan[$bulan].' '.$tahun;
					$ambil = $this->Pajak_model->viewByMonth($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
				}else if($filter == '3'){ // Jika filter nya 3 (per tahun)
					$tahun = $_GET['tahun'];

					$ket = 'Data Pajak Air Tanah'.$tahun;
					$ambil = $this->pajak_model->viewByYear($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else if($filter == '5'){ // Jika filter nya 3 (per tahun)
					$izin = $_GET['izin'];
					$status = array('', 'Berizin', 'Tidak Berizin');
					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->getByIzin($izin); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else{ // jika fiter 4 (perusahaan)
					$id_pers = $_GET['perusahaan'];

					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->viewByPerusahaan($id_pers);
				}
			}else{ // Jika user tidak mengklik tombol tampilkan
				$ket = 'Data Pajak Air Tanah ';
				$ambil = $this->pajak_model->getAll()->result(); // Panggil fungsi view_all yang ada di TransaksiModel
			}
		} elseif ($this->session->userdata('akses')=='5'){
			$wil = '1';
			if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
				$filter = $_GET['filter']; // Ambil data filder yang dipilih user

				if($filter == '1'){ // Jika filter nya 1 (per tanggal)
					$tgl = $_GET['tanggal'];

					$ket = 'Data Pajak Air Tanah '.date('d-m-y', strtotime($tgl));
					$ambil = $this->pajak_model->viewByDatePerwil($tgl, $wil); // Panggil fungsi view_by_date yang ada di TransaksiModel
				}else if($filter == '2'){ // Jika filter nya 2 (per bulan)
					$bulan = $_GET['bulan'];
					$tahun = $_GET['tahun'];
					$nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

					$ket = 'Data Pajak Air Tanah'.$nama_bulan[$bulan].' '.$tahun;
					$ambil = $this->Pajak_model->viewByMonthPerwil($bulan, $tahun, $wil); // Panggil fungsi view_by_month yang ada di TransaksiModel
				}else if($filter == '3'){ // Jika filter nya 3 (per tahun)
					$tahun = $_GET['tahun'];

					$ket = 'Data Pajak Air Tanah'.$tahun;
					$ambil = $this->pajak_model->viewByYearPerwil($tahun, $wil); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else if($filter == '5'){ // Jika filter nya 3 (per tahun)
					$izin = $_GET['izin'];
					$status = array('', 'Berizin', 'Tidak Berizin');
					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->getByIzinPerwil($izin, $wil); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else{ // jika fiter 4 (perusahaan)
					$id_pers = $_GET['perusahaan'];

					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->viewByPerusahaanPerwil($id_pers, $wil);
				}
			}else{ // Jika user tidak mengklik tombol tampilkan
				$ket = 'Data Pajak Air Tanah ';
				$ambil = $this->pajak_model->getWilayah($wil)->result(); // Panggil fungsi view_all yang ada di TransaksiModel
			}
		} elseif ($this->session->userdata('akses')=='4'){
			$wil = '2';
			if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
				$filter = $_GET['filter']; // Ambil data filder yang dipilih user

				if($filter == '1'){ // Jika filter nya 1 (per tanggal)
					$tgl = $_GET['tanggal'];

					$ket = 'Data Pajak Air Tanah '.date('d-m-y', strtotime($tgl));
					$ambil = $this->pajak_model->viewByDatePerwil($tgl, $wil); // Panggil fungsi view_by_date yang ada di TransaksiModel
				}else if($filter == '2'){ // Jika filter nya 2 (per bulan)
					$bulan = $_GET['bulan'];
					$tahun = $_GET['tahun'];
					$nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

					$ket = 'Data Pajak Air Tanah'.$nama_bulan[$bulan].' '.$tahun;
					$ambil = $this->Pajak_model->viewByMonthPerwil($bulan, $tahun, $wil); // Panggil fungsi view_by_month yang ada di TransaksiModel
				}else if($filter == '3'){ // Jika filter nya 3 (per tahun)
					$tahun = $_GET['tahun'];

					$ket = 'Data Pajak Air Tanah'.$tahun;
					$ambil = $this->pajak_model->viewByYearPerwil($tahun, $wil); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else if($filter == '5'){ // Jika filter nya 3 (per tahun)
					$izin = $_GET['izin'];
					$status = array('', 'Berizin', 'Tidak Berizin');
					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->getByIzinPerwil($izin, $wil); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else{ // jika fiter 4 (perusahaan)
					$id_pers = $_GET['perusahaan'];

					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->viewByPerusahaanPerwil($id_pers, $wil);
				}
			}else{ // Jika user tidak mengklik tombol tampilkan
				$ket = 'Data Pajak Air Tanah ';
				$ambil = $this->pajak_model->getWilayah($wil)->result(); // Panggil fungsi view_all yang ada di TransaksiModel
			}
		} elseif ($this->session->userdata('akses')=='6'){
			$wil = '3';
			if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
				$filter = $_GET['filter']; // Ambil data filder yang dipilih user

				if($filter == '1'){ // Jika filter nya 1 (per tanggal)
					$tgl = $_GET['tanggal'];

					$ket = 'Data Pajak Air Tanah '.date('d-m-y', strtotime($tgl));
					$ambil = $this->pajak_model->viewByDatePerwil($tgl, $wil); // Panggil fungsi view_by_date yang ada di TransaksiModel
				}else if($filter == '2'){ // Jika filter nya 2 (per bulan)
					$bulan = $_GET['bulan'];
					$tahun = $_GET['tahun'];
					$nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

					$ket = 'Data Pajak Air Tanah'.$nama_bulan[$bulan].' '.$tahun;
					$ambil = $this->Pajak_model->viewByMonthPerwil($bulan, $tahun, $wil); // Panggil fungsi view_by_month yang ada di TransaksiModel
				}else if($filter == '3'){ // Jika filter nya 3 (per tahun)
					$tahun = $_GET['tahun'];

					$ket = 'Data Pajak Air Tanah'.$tahun;
					$ambil = $this->pajak_model->viewByYearPerwil($tahun, $wil); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else if($filter == '5'){ // Jika filter nya 3 (per tahun)
					$izin = $_GET['izin'];
					$status = array('', 'Berizin', 'Tidak Berizin');
					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->getByIzinPerwil($izin, $wil); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else{ // jika fiter 4 (perusahaan)
					$id_pers = $_GET['perusahaan'];

					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->viewByPerusahaanPerwil($id_pers, $wil);
				}
			}else{ // Jika user tidak mengklik tombol tampilkan
				$ket = 'Data Pajak Air Tanah ';
				$ambil = $this->pajak_model->getWilayah($wil)->result(); // Panggil fungsi view_all yang ada di TransaksiModel
			}
		} elseif ($this->session->userdata('akses')=='7'){
			$wil = '4';
			if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
				$filter = $_GET['filter']; // Ambil data filder yang dipilih user

				if($filter == '1'){ // Jika filter nya 1 (per tanggal)
					$tgl = $_GET['tanggal'];

					$ket = 'Data Pajak Air Tanah '.date('d-m-y', strtotime($tgl));
					$ambil = $this->pajak_model->viewByDatePerwil($tgl, $wil); // Panggil fungsi view_by_date yang ada di TransaksiModel
				}else if($filter == '2'){ // Jika filter nya 2 (per bulan)
					$bulan = $_GET['bulan'];
					$tahun = $_GET['tahun'];
					$nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

					$ket = 'Data Pajak Air Tanah'.$nama_bulan[$bulan].' '.$tahun;
					$ambil = $this->Pajak_model->viewByMonthPerwil($bulan, $tahun, $wil); // Panggil fungsi view_by_month yang ada di TransaksiModel
				}else if($filter == '3'){ // Jika filter nya 3 (per tahun)
					$tahun = $_GET['tahun'];

					$ket = 'Data Pajak Air Tanah'.$tahun;
					$ambil = $this->pajak_model->viewByYearPerwil($tahun, $wil); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else if($filter == '5'){ // Jika filter nya 3 (per tahun)
					$izin = $_GET['izin'];
					$status = array('', 'Berizin', 'Tidak Berizin');
					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->getByIzinPerwil($izin, $wil); // Panggil fungsi view_by_year yang ada di TransaksiModel
				}else{ // jika fiter 4 (perusahaan)
					$id_pers = $_GET['perusahaan'];

					$ket = 'Data Pajak Air Tanah';
					$ambil = $this->pajak_model->viewByPerusahaanPerwil($id_pers, $wil);
				}
			}else{ // Jika user tidak mengklik tombol tampilkan
				$ket = 'Data Pajak Air Tanah ';
				$ambil = $this->pajak_model->getWilayah($wil)->result(); // Panggil fungsi view_all yang ada di TransaksiModel
			}
		}

        $data['ket'] = $ket;
        $data['transaksi'] = $ambil;

		$this->load->view('exel/pajak_excel', $data);
	}
}