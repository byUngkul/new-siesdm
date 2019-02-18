<?php 
/**
 * class controller sumur
 */
class Sumur extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('masuk') != TRUE){
			redirect('login');
		}
		$this->load->model('sumur_model', 'sumur');
		$this->load->model('perusahaan_model', 'prs');
		$this->load->model('jenis_sumur_model', 'jenis');
		$this->load->model('hitung_model');
		$this->load->model('pajak_model');
	}

	public function index(){
		// akses admin
		if($this->session->userdata('akses')=='1'){
			if (isset($_GET['filter1']) && !empty($_GET['filter1'])) {
				$filter = $_GET['filter1'];

				if ($filter == '1') {
					$wil        = $_GET['wilayah'];
					$nama_kota  = array('', 'KOTA BANDUNG', 'KOTA CIMAHI', 'KAB. BANDUNG BARAT', 'KAB. SUBANG');
					$url_cetak  = 'sumur/cetak?filter=1&wilayah='.$wil;
					$url_excel  = 'sumur/excel?filter=1&wilayah='.$wil;
					$wilayah    = 'DAFTAR SUMUR WILAYAH '.$nama_kota[$wil];
					$ambil_data = $this->sumur->ambilPerwilayah($wil);
				} elseif ($filter == '2'){
					$perusahaan = $_GET['perusahaan'];
					$wil        = $_GET['wilayah'];
					$url_cetak  = 'sumur/cetak?filter=2&wilayah='.$wil.'&perusahaan='.$perusahaan;
					$url_excel  = 'sumur/excel?filter=2&wilayah='.$wil.'&perusahaan='.$perusahaan;
					$nama_prs   = $this->prs->getById($perusahaan);
					$wilayah    = 'DAFTAR SUMUR '.$nama_prs->nama_perusahaan;
					$ambil_data = $this->sumur->getPerperusahaan($wil, $perusahaan);
				} elseif ($filter == '3'){
					$izin      = $_GET['izin'];
					$wil        = $_GET['wilayah'];
					$url_cetak = 'sumur/cetak?filter=3&wilayah='.$wil.'&izin='.$izin;
					$url_excel = 'sumur/excel?filter=3&wilayah='.$wil.'&izin='.$izin;
					if ($izin == '1') {
						$wilayah    = 'DAFTAR SUMUR YANG MASA BERLAKU SIPA AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndSipa($wil)->result();
					} else {
						$wilayah    = 'DAFTAR SUMUR YANG MASA BERLAKU TERA METER AIR AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndTera($wil)->result();
					}
				} elseif ($filter == '4'){
					$jns_sumur  = $_GET['jns_sumur'];
					$wil        = $_GET['wilayah'];
					$jenis      = $this->jenis->getById($jns_sumur);
					$wilayah    = 'DAFTAR SUMUR '.$jenis->jenis_sumur;
					$url_cetak  = 'sumur/cetak?filter=4&wilayah='.$wil.'&jns_sumur='.$jns_sumur;
					$url_excel  = 'sumur/excel?filter=4&wilayah='.$wil.'&jns_sumur='.$jns_sumur;
					$ambil_data = $this->sumur->ambilJenisSumur($wil, $jns_sumur);
				}else {
					$zona       = $_GET['zona'];
					$wil        = $_GET['wilayah'];
					$wilayah    = 'DAFTAR SUMUR';
					$url_cetak  = 'sumur/cetak?filter=5&wilayah='.$wil.'&zona='.$zona;
					$url_excel  = 'sumur/excel?filter=5&wilayah='.$wil.'&zona='.$zona;
					$ambil_data = $this->sumur->getZona($wil, $zona);
				}
			} else {
				$wilayah    = 'DAFTAR SUMUR';
				$url_cetak  = 'sumur/cetak';
				$url_excel  = 'sumur/excel';
				$ambil_data = $this->sumur->tampil()->result();
				//$hitung = $this->Hitung_model->num_rows();
			}
		} elseif ($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='5'){ // akses Admin Bandung
			//$wilayah = 'WILAYAH BANDUNG';
			$wil = '1';
			if (isset($_GET['filter1']) && !empty($_GET['filter1'])) {
				$filter = $_GET['filter1'];

				if ($filter == '1') {
					$wil = $_GET['wilayah'];
					
					$wilayah    = 'DAFTAR SUMUR';
					$url_cetak  = 'sumur/cetak?filter=1&wilayah='.$wil;
					$url_excel = 'sumur/excel?filter=1&wilayah='.$wil;
					$ambil_data = $this->sumur->ambilPerwilayah($wil);
				} elseif ($filter == '2'){
					$perusahaan = $_GET['perusahaan'];
					$url_cetak  = 'sumur/cetak?filter=2&perusahaan='.$perusahaan;
					$url_excel  = 'sumur/excel?filter=2&perusahaan='.$perusahaan;
					$wilayah    = 'DAFTAR SUMUR';
					$ambil_data = $this->sumur->getPerperusahaan($wil, $perusahaan);
				} elseif ($filter == '3'){
					$izin      = $_GET['izin'];
					$url_cetak = 'sumur/cetak?filter=3&izin='.$izin;
					$url_excel = 'sumur/excel?filter=3&izin='.$izin;
					if ($izin == '1') {
						$wilayah    = 'DAFTAR SUMUR YANG MASA BERLAKU SIPA AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndSipa($wil)->result();
					} else {
						$wilayah    = 'DAFTAR SUMUR YANG MASA BERLAKU TERA METER AIR AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndTera($wil)->result();
					}
				} elseif ($filter == '4'){
					$jns_sumur  = $_GET['jns_sumur'];
					$wilayah    = 'DAFTAR SUMUR';
					$url_cetak  = 'sumur/cetak?filter=4&jns_sumur='.$jns_sumur;
					$url_excel  = 'sumur/excel?filter=4&jns_sumur='.$jns_sumur;
					$ambil_data = $this->sumur->ambilJenisSumur($wil, $jns_sumur);
				} else {
					$zona  = $_GET['zona'];
					$wilayah    = 'DAFTAR SUMUR';
					$url_cetak  = 'sumur/cetak?filter=5&zona='.$zona;
					$url_excel  = 'sumur/excel?filter=5&zona='.$zona;
					$ambil_data = $this->sumur->getZona($wil, $zona);
				}
			} else {
				$wilayah    = 'WILAYAH BANDUNG';
				$url_cetak  = 'sumur/cetak';
				$url_excel  = 'sumur/excel';
				$ambil_data = $this->sumur->ambilPerwilayah($wil);
			}
		} elseif ($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='4'){ //akses admin cimahi
			$wil = '2';
			if (isset($_GET['filter1']) && !empty($_GET['filter1'])) {
				$filter = $_GET['filter1'];

				if ($filter == '1') {
					$wil = $_GET['wilayah'];
					
					$wilayah    = 'DAFTAR SUMUR';
					$url_cetak  = 'sumur/cetak?filter=1&wilayah='.$wil;
					$url_excel = 'sumur/excel?filter=1&wilayah='.$wil;
					$ambil_data = $this->sumur->ambilPerwilayah($wil);
				} elseif ($filter == '2'){
					$perusahaan = $_GET['perusahaan'];
					$url_cetak  = 'sumur/cetak?filter=2&perusahaan='.$perusahaan;
					$url_excel  = 'sumur/excel?filter=2&perusahaan='.$perusahaan;
					$wilayah    = 'DAFTAR SUMUR';
					$ambil_data = $this->sumur->getPerperusahaan($wil, $perusahaan);
				} elseif ($filter == '3'){
					$izin      = $_GET['izin'];
					$url_cetak = 'sumur/cetak?filter=3&izin='.$izin;
					$url_excel = 'sumur/excel?filter=3&izin='.$izin;
					if ($izin == '1') {
						$wilayah    = 'DAFTAR SUMUR YANG MASA BERLAKU SIPA AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndSipa($wil)->result();
					} else {
						$wilayah    = 'DAFTAR SUMUR YANG MASA BERLAKU TERA METER AIR AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndTera($wil)->result();
					}
				} elseif ($filter == '4'){
					$jns_sumur  = $_GET['jns_sumur'];
					$wilayah    = 'DAFTAR SUMUR';
					$url_cetak  = 'sumur/cetak?filter=4&jns_sumur='.$jns_sumur;
					$url_excel  = 'sumur/excel?filter=4&jns_sumur='.$jns_sumur;
					$ambil_data = $this->sumur->ambilJenisSumur($wil, $jns_sumur);
				} else {
					$zona  = $_GET['zona'];
					$wilayah    = 'DAFTAR SUMUR';
					$url_cetak  = 'sumur/cetak?filter=5&zona='.$zona;
					$url_excel  = 'sumur/excel?filter=5&zona='.$zona;
					$ambil_data = $this->sumur->getZona($wil, $zona);
				}
			} else {
				$wilayah    = 'WILAYAH CIMAHI';
				$url_cetak  = 'sumur/cetak';
				$url_excel  = 'sumur/excel';
				$ambil_data = $this->sumur->ambilPerwilayah($wil);
			}
			
		} elseif ($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='6'){ //akses admin bandung barat
			$wil = '3';
			if (isset($_GET['filter1']) && !empty($_GET['filter1'])) {
				$filter = $_GET['filter1'];

				if ($filter == '1') {
					$wil = $_GET['wilayah'];
					
					$wilayah    = 'DAFTAR SUMUR';
					$url_cetak  = 'sumur/cetak?filter=1&wilayah='.$wil;
					$url_excel = 'sumur/excel?filter=1&wilayah='.$wil;
					$ambil_data = $this->sumur->ambilPerwilayah($wil);
				} elseif ($filter == '2'){
					$perusahaan = $_GET['perusahaan'];
					$url_cetak  = 'sumur/cetak?filter=2&perusahaan='.$perusahaan;
					$url_excel  = 'sumur/excel?filter=2&perusahaan='.$perusahaan;
					$wilayah    = 'DAFTAR SUMUR';
					$ambil_data = $this->sumur->getPerperusahaan($wil, $perusahaan);
				} elseif ($filter == '3'){
					$izin      = $_GET['izin'];
					$url_cetak = 'sumur/cetak?filter=3&izin='.$izin;
					$url_excel = 'sumur/excel?filter=3&izin='.$izin;
					if ($izin == '1') {
						$wilayah    = 'DAFTAR SUMUR YANG MASA BERLAKU SIPA AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndSipa($wil)->result();
					} else {
						$wilayah    = 'DAFTAR SUMUR YANG MASA BERLAKU TERA METER AIR AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndTera($wil)->result();
					}
				} elseif ($filter == '4'){
					$jns_sumur  = $_GET['jns_sumur'];
					$wilayah    = 'DAFTAR SUMUR';
					$url_cetak  = 'sumur/cetak?filter=4&jns_sumur='.$jns_sumur;
					$url_excel  = 'sumur/excel?filter=4&jns_sumur='.$jns_sumur;
					$ambil_data = $this->sumur->ambilJenisSumur($wil, $jns_sumur);
				} else {
					$zona  = $_GET['zona'];
					$wilayah    = 'DAFTAR SUMUR';
					$url_cetak  = 'sumur/cetak?filter=5&zona='.$zona;
					$url_excel  = 'sumur/excel?filter=5&zona='.$zona;
					$ambil_data = $this->sumur->getZona($wil, $zona);
				}
			} else {
				$wilayah    = 'WILAYAH BANDUNG BARAT';
				$url_cetak  = 'sumur/cetak';
				$url_excel  = 'sumur/excel';
				$ambil_data = $this->sumur->ambilPerwilayah($wil);
			}
			
		} elseif ($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='7'){ //akses admin subang
			$wil = '4';
			if (isset($_GET['filter1']) && !empty($_GET['filter1'])) {
				$filter = $_GET['filter1'];

				if ($filter == '1') {
					$wil = $_GET['wilayah'];
					
					$wilayah    = 'DAFTAR SUMUR';
					$url_cetak  = 'sumur/cetak?filter=1&wilayah='.$wil;
					$url_excel = 'sumur/excel?filter=1&wilayah='.$wil;
					$ambil_data = $this->sumur->ambilPerwilayah($wil);
				} elseif ($filter == '2'){
					$perusahaan = $_GET['perusahaan'];
					$url_cetak  = 'sumur/cetak?filter=2&perusahaan='.$perusahaan;
					$url_excel  = 'sumur/excel?filter=2&perusahaan='.$perusahaan;
					$wilayah    = 'DAFTAR SUMUR';
					$ambil_data = $this->sumur->getPerperusahaan($wil, $perusahaan);
				} elseif ($filter == '3'){
					$izin      = $_GET['izin'];
					$url_cetak = 'sumur/cetak?filter=3&izin='.$izin;
					$url_excel = 'sumur/excel?filter=3&izin='.$izin;
					if ($izin == '1') {
						$wilayah    = 'DAFTAR SUMUR YANG MASA BERLAKU SIPA AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndSipa($wil)->result();
					} else {
						$wilayah    = 'DAFTAR SUMUR YANG MASA BERLAKU TERA METER AIR AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndTera($wil)->result();
					}
				} elseif ($filter == '4'){
					$jns_sumur  = $_GET['jns_sumur'];
					$wilayah    = 'DAFTAR SUMUR';
					$url_cetak  = 'sumur/cetak?filter=4&jns_sumur='.$jns_sumur;
					$url_excel  = 'sumur/excel?filter=4&jns_sumur='.$jns_sumur;
					$ambil_data = $this->sumur->ambilJenisSumur($wil, $jns_sumur);
				} else {
					$zona  = $_GET['zona'];
					$wilayah    = 'DAFTAR SUMUR';
					$url_cetak  = 'sumur/cetak?filter=5&zona='.$zona;
					$url_excel  = 'sumur/excel?filter=5&zona='.$zona;
					$ambil_data = $this->sumur->getZona($wil, $zona);
				}
			} else {
				$wilayah    = 'WILAYAH SUBANG';
				$url_cetak  = 'sumur/cetak';
				$url_excel  = 'sumur/excel';
				$ambil_data = $this->sumur->ambilPerwilayah($wil);
			}
		}

		$data = [
			'title'       => 'SiESDM',
			'sub_title'   => 'Home',
			'page'        => 'Daftar Data Sumur',
			'jenis_sumur' => $this->jenis->view(),
			'wilayah'     => $wilayah,
			'url_cetak'   => $url_cetak,
			'url_excel'   => $url_excel,
			'f_wilayah'   => $this->sumur->wilayah(),
			'perusahaan'  => $this->prs->tampiPerusahaan(),
			'content'     => 'sumur/index',
			'cek_pajak'  => $this->pajak_model,
			'sumur'       => $ambil_data
		];
		//print_r($data['sumur']);
		$this->load->view('template/template', $data);
	}


	public function detile($id_sumur = null){
		$data = [
			'title'     => 'SiESDM',
			'sub_title' => 'Home',
			'page'      => 'Data Rincian Sumur',
			'url_cetak' => 'sumur/cetakDetile',
			'sub_page'  => '',
			'content'   => 'sumur/detile',
			'sumur'     => $this->sumur->tampilByID($id_sumur)
		];
		$this->load->view('template/template', $data);
	}

	public function add(){
		$data = [
			'title' => 'SiESDM',
			'sub_title' => 'Home',
			'page' => 'Tambah Data Sumur',
			'sub_page' => '',
			'content' => 'sumur/add',
			'sumur' => $this->sumur->tampil()->result(),
			'jenis' => $this->jenis->view(),
			'data' => $this->prs->tampiPerusahaan()
		];
		//print_r($data['perusahaan']);
		$this->load->view('template/template', $data);
	}

	public function save(){
		$this->sumur->add();
		$this->session->set_flashdata('success', 'Data berhasil di simpan!');
		redirect('sumur/add');	
	}

	public function edit($id_sumur = null){
		$data = [
			'title' => 'SiESDM',
			'sub_title' => 'Home',
			'page' => 'Ubah Data Sumur',
			'sub_page' => '',
			'content' => 'sumur/edit',
			'jenis' => $this->jenis->view(),
			'data' => $this->prs->tampiPerusahaan(),
			'sumur' => $this->sumur->getById($id_sumur)
		];
		//var_dump($data["sumur"]);
		$this->load->view('template/template', $data);
	} 

	public function update(){
		$this->sumur->update();
		$this->session->set_flashdata('success', 'Data berhasil di ubah!'); 
		redirect('sumur');	
	}

	public function delete($id_sumur = ''){
		if ($this->sumur->delete($id_sumur)) {
			$this->session->set_flashdata('danger', 'Data berhasil di hapus!');
			redirect('sumur');
		}
	}

	public function cetak(){
		$sm_dangkal = '1';
		$sm_dalam   = '2';
		$sm_imbuhan = '3';
		$sm_pantau  = '4';
		$sm_asr     = '5';
		$sm_resapan = '6';
		if ($this->session->userdata('akses')== '1') {
			
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];
				if ($filter == '1') {
					$wil = $_GET['wilayah'];
					$nama_kota  = array('', 'KOTA BANDUNG', 'KOTA CIMAHI', 'KAB. BANDUNG BARAT', 'KAB. SUBANG');
					$ket        = 'DAFTAR SUMUR WILAYAH '.$nama_kota[$wil];
					$ambil_data = $this->sumur->ambilPerwilayah($wil);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal, $wil)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam, $wil)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan, $wil)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau, $wil)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr, $wil)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan, $wil)->num_rows();
				} elseif ($filter == '2') {
					$perusahaan = $_GET['perusahaan'];
					$wil        = $_GET['wilayah'];
					$nama_prs   = $this->prs->getById($perusahaan);
					$ket        = 'DAFTAR SUMUR '.$nama_prs->nama_perusahaan;
					$ambil_data = $this->sumur->getPerperusahaan($wil, $perusahaan);
					$tot_prs		= $this->hitung_model->getPerusahaanByPrs($wil, $perusahaan)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByPrs($wil, $perusahaan)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurPrs($sm_dangkal, $wil, $perusahaan)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurPrs($sm_dalam, $wil, $perusahaan)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurPrs($sm_imbuhan, $wil, $perusahaan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurPrs($sm_pantau, $wil, $perusahaan)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurPrs($sm_asr, $wil, $perusahaan)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurPrs($sm_resapan, $wil, $perusahaan)->num_rows();
				} elseif ($filter == '3') {
					$izin = $_GET['izin'];
					$wil  = $_GET['wilayah'];
					if ($izin == '1') {
						$ket        = 'DAFTAR SUMUR YANG MASA BERLAKU SIPA AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndSipa($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndSipa($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndSipa($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndSipa($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndSipa($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndSipa($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndSipa($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndSipa($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndSipa($sm_resapan, $wil)->num_rows();
					} else {
						$ket        = 'DAFTAR SUMUR YANG MASA BERLAKU TERA METER AIR AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndTera($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndTera($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndTera($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndTera($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndTera($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndTera($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndTera($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndTera($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndTera($sm_resapan, $wil)->num_rows();
					}
				} elseif ($filter == '4') {
					$jns_sumur  = $_GET['jns_sumur'];
					$wil        = $_GET['wilayah'];
					$jenis      = $this->jenis->getById($jns_sumur);
					$ket        = 'DAFTAR SUMUR '.$jenis->jenis_sumur;
					$ambil_data = $this->sumur->ambilJenisSumur($wil, $jns_sumur);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();
				} else {
					$zona       = $_GET['zona'];
					$wil        = $_GET['wilayah'];
					$nama_zona  = array('','AMAN','RAWAN','KRITIS','RESAPAN');
					$ket        = 'DAFTAR SUMUR ZONA '.$nama_zona[$zona];
					$ambil_data = $this->sumur->getZona($wil, $zona);
					$tot_prs		= $this->hitung_model->getPerusahaanByZona($wil, $zona)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByZona($wil, $zona)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurZona($sm_dangkal, $wil, $zona)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurZona($sm_dalam, $wil, $zona)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurZona($sm_imbuhan, $wil, $zona)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurZona($sm_pantau, $wil, $zona)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurZona($sm_asr, $wil, $zona)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurZona($sm_resapan, $wil, $zona)->num_rows();
				}
			} else {
				$ket            = 'DATA SUMUR';
				$wil			= '';
				$ambil_data     = $this->sumur->tampil()->result();
				$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
				$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
				$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
				$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
				$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
				$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
				$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
				$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();

			}
		} elseif ($this->session->userdata('akses')== '5') {
			$wil = '1';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];
				if ($filter == '1') {
					$wil = $_GET['wilayah'];
					$nama_kota  = array('', 'KOTA BANDUNG', 'KOTA CIMAHI', 'KAB. BANDUNG BARAT', 'KAB. SUBANG');
					$ket    = 'DAFTAR SUMUR WILAYAH '.$nama_kota[$wil];
					$ambil_data = $this->sumur->ambilPerwilayah($wil);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal, $wil)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam, $wil)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan, $wil)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau, $wil)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr, $wil)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan, $wil)->num_rows();
				} elseif ($filter == '2') {
					$perusahaan = $_GET['perusahaan'];
					$nama_prs   = $this->prs->getById($perusahaan);
					$ket    = 'DAFTAR SUMUR '.$nama_prs->nama_perusahaan;
					$ambil_data = $this->sumur->getPerperusahaan($wil, $perusahaan);
					$tot_prs		= $this->hitung_model->getPerusahaanByPrs($wil, $perusahaan)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByPrs($wil, $perusahaan)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurPrs($sm_dangkal, $wil, $perusahaan)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurPrs($sm_dalam, $wil, $perusahaan)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurPrs($sm_imbuhan, $wil, $perusahaan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurPrs($sm_pantau, $wil, $perusahaan)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurPrs($sm_asr, $wil, $perusahaan)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurPrs($sm_resapan, $wil, $perusahaan)->num_rows();
				} elseif ($filter == '3') {
					$izin      = $_GET['izin'];
					if ($izin == '1') {
						$ket    = 'DAFTAR SUMUR YANG MASA BERLAKU SIPA AKAN HABIS';
						$ambil_data = $this->sumur->abilEndSipa($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndSipa($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndSipa($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndSipa($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndSipa($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndSipa($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndSipa($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndSipa($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndSipa($sm_resapan, $wil)->num_rows();
					} else {
						$ket    = 'DAFTAR SUMUR YANG MASA BERLAKU TERA METER AIR AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndTera($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndTera($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndTera($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndTera($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndTera($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndTera($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndTera($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndTera($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndTera($sm_resapan, $wil)->num_rows();
					}
				} elseif ($filter == '4') {
					$jns_sumur  = $_GET['jns_sumur'];
					$jenis      = $this->jenis->getById($jns_sumur);
					$ket    = 'DAFTAR SUMUR '.$jenis->jenis_sumur;
					$ambil_data = $this->sumur->ambilJenisSumur($wil, $jns_sumur);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();
				} else {
					$zona  = $_GET['zona'];
					$nama_zona  =  array('','AMAN','RAWAN','KRITIS','RESAPAN');
					$ket        = 'DAFTAR SUMUR ZONA '.$nama_zona[$zona];
					$ambil_data = $this->sumur->getZona($wil, $zona);
					$tot_prs		= $this->hitung_model->getPerusahaanByZona($wil, $zona)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByZona($wil, $zona)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurZona($sm_dangkal, $wil, $zona)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurZona($sm_dalam, $wil, $zona)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurZona($sm_imbuhan, $wil, $zona)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurZona($sm_pantau, $wil, $zona)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurZona($sm_asr, $wil, $zona)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurZona($sm_resapan, $wil, $zona)->num_rows();
				}
				
			} else {
				$ket       = 'DATA SUMUR WILAYAH BANDUNG';
				$ambil_data = $this->sumur->ambilPerwilayah($wil);
				$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
				$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
				$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
				$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
				$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
				$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
				$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
				$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();
			}
		} elseif ($this->session->userdata('akses')== '4') {
			$wil = '2';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];
				if ($filter == '1') {
					$wil = $_GET['wilayah'];
					$nama_kota  = array('', 'KOTA BANDUNG', 'KOTA CIMAHI', 'KAB. BANDUNG BARAT', 'KAB. SUBANG');
					$ket    = 'DAFTAR SUMUR WILAYAH '.$nama_kota[$wil];
					$ambil_data = $this->sumur->ambilPerwilayah($wil);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal, $wil)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam, $wil)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan, $wil)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau, $wil)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr, $wil)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan, $wil)->num_rows();
				} elseif ($filter == '2') {
					$perusahaan = $_GET['perusahaan'];
					$nama_prs   = $this->prs->getById($perusahaan);
					$ket    = 'DAFTAR SUMUR '.$nama_prs->nama_perusahaan;
					$ambil_data = $this->sumur->getPerperusahaan($wil, $perusahaan);
					$tot_prs		= $this->hitung_model->getPerusahaanByPrs($wil, $perusahaan)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByPrs($wil, $perusahaan)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurPrs($sm_dangkal, $wil, $perusahaan)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurPrs($sm_dalam, $wil, $perusahaan)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurPrs($sm_imbuhan, $wil, $perusahaan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurPrs($sm_pantau, $wil, $perusahaan)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurPrs($sm_asr, $wil, $perusahaan)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurPrs($sm_resapan, $wil, $perusahaan)->num_rows();
				} elseif ($filter == '3') {
					$izin      = $_GET['izin'];
					if ($izin == '1') {
						$ket    = 'DAFTAR SUMUR YANG MASA BERLAKU SIPA AKAN HABIS';
						$ambil_data = $this->sumur->abilEndSipa($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndSipa($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndSipa($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndSipa($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndSipa($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndSipa($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndSipa($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndSipa($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndSipa($sm_resapan, $wil)->num_rows();
					} else {
						$ket    = 'DAFTAR SUMUR YANG MASA BERLAKU TERA METER AIR AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndTera($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndTera($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndTera($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndTera($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndTera($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndTera($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndTera($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndTera($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndTera($sm_resapan, $wil)->num_rows();
					}
				} elseif ($filter == '4') {
					$jns_sumur  = $_GET['jns_sumur'];
					$jenis      = $this->jenis->getById($jns_sumur);
					$ket    = 'DAFTAR SUMUR '.$jenis->jenis_sumur;
					$ambil_data = $this->sumur->ambilJenisSumur($wil, $jns_sumur);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();
				} else {
					$zona  = $_GET['zona'];
					$nama_zona  =  array('','AMAN','RAWAN','KRITIS','RESAPAN');
					$ket        = 'DAFTAR SUMUR ZONA '.$nama_zona[$zona];
					$ambil_data = $this->sumur->getZona($wil, $zona);
					$tot_prs		= $this->hitung_model->getPerusahaanByZona($wil, $zona)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByZona($wil, $zona)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurZona($sm_dangkal, $wil, $zona)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurZona($sm_dalam, $wil, $zona)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurZona($sm_imbuhan, $wil, $zona)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurZona($sm_pantau, $wil, $zona)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurZona($sm_asr, $wil, $zona)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurZona($sm_resapan, $wil, $zona)->num_rows();
				}
				
			} else {
				$ket       = 'DATA SUMUR WILAYAH CIMAHI';
				$ambil_data = $this->sumur->ambilPerwilayah($wil);
				$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
				$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
				$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
				$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
				$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
				$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
				$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
				$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();
			}
		} elseif ($this->session->userdata('akses')== '6') {
			$wil = '3';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];
				if ($filter == '1') {
					$wil = $_GET['wilayah'];
					$nama_kota  = array('', 'KOTA BANDUNG', 'KOTA CIMAHI', 'KAB. BANDUNG BARAT', 'KAB. SUBANG');
					$ket    = 'DAFTAR SUMUR WILAYAH '.$nama_kota[$wil];
					$ambil_data = $this->sumur->ambilPerwilayah($wil);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal, $wil)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam, $wil)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan, $wil)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau, $wil)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr, $wil)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan, $wil)->num_rows();
				} elseif ($filter == '2') {
					$perusahaan = $_GET['perusahaan'];
					$nama_prs   = $this->prs->getById($perusahaan);
					$ket    = 'DAFTAR SUMUR '.$nama_prs->nama_perusahaan;
					$ambil_data = $this->sumur->getPerperusahaan($wil, $perusahaan);
					$tot_prs		= $this->hitung_model->getPerusahaanByPrs($wil, $perusahaan)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByPrs($wil, $perusahaan)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurPrs($sm_dangkal, $wil, $perusahaan)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurPrs($sm_dalam, $wil, $perusahaan)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurPrs($sm_imbuhan, $wil, $perusahaan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurPrs($sm_pantau, $wil, $perusahaan)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurPrs($sm_asr, $wil, $perusahaan)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurPrs($sm_resapan, $wil, $perusahaan)->num_rows();
				} elseif ($filter == '3') {
					$izin      = $_GET['izin'];
					if ($izin == '1') {
						$ket    = 'DAFTAR SUMUR YANG MASA BERLAKU SIPA AKAN HABIS';
						$ambil_data = $this->sumur->abilEndSipa($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndSipa($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndSipa($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndSipa($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndSipa($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndSipa($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndSipa($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndSipa($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndSipa($sm_resapan, $wil)->num_rows();
					} else {
						$ket    = 'DAFTAR SUMUR YANG MASA BERLAKU TERA METER AIR AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndTera($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndTera($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndTera($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndTera($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndTera($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndTera($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndTera($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndTera($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndTera($sm_resapan, $wil)->num_rows();
					}
				} elseif ($filter == '4') {
					$jns_sumur  = $_GET['jns_sumur'];
					$jenis      = $this->jenis->getById($jns_sumur);
					$ket    = 'DAFTAR SUMUR '.$jenis->jenis_sumur;
					$ambil_data = $this->sumur->ambilJenisSumur($wil, $jns_sumur);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();
				} else {
					$zona  = $_GET['zona'];
					$nama_zona  =  array('','AMAN','RAWAN','KRITIS','RESAPAN');
					$ket        = 'DAFTAR SUMUR ZONA '.$nama_zona[$zona];
					$ambil_data = $this->sumur->getZona($wil, $zona);
					$tot_prs		= $this->hitung_model->getPerusahaanByZona($wil, $zona)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByZona($wil, $zona)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurZona($sm_dangkal, $wil, $zona)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurZona($sm_dalam, $wil, $zona)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurZona($sm_imbuhan, $wil, $zona)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurZona($sm_pantau, $wil, $zona)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurZona($sm_asr, $wil, $zona)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurZona($sm_resapan, $wil, $zona)->num_rows();
				}
				
			} else {
				$ket       = 'DATA SUMUR WILAYAH BANDUNG BARAT';
				$ambil_data = $this->sumur->ambilPerwilayah($wil);
				$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
				$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
				$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
				$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
				$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
				$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
				$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
				$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();
			}
		} elseif ($this->session->userdata('akses')== '7') {
			$wil = '4';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];
				if ($filter == '1') {
					$wil = $_GET['wilayah'];
					$nama_kota  = array('', 'KOTA BANDUNG', 'KOTA CIMAHI', 'KAB. BANDUNG BARAT', 'KAB. SUBANG');
					$ket    = 'DAFTAR SUMUR WILAYAH '.$nama_kota[$wil];
					$ambil_data = $this->sumur->ambilPerwilayah($wil);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal, $wil)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam, $wil)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan, $wil)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau, $wil)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr, $wil)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan, $wil)->num_rows();
				} elseif ($filter == '2') {
					$perusahaan = $_GET['perusahaan'];
					$nama_prs   = $this->prs->getById($perusahaan);
					$ket    = 'DAFTAR SUMUR '.$nama_prs->nama_perusahaan;
					$ambil_data = $this->sumur->getPerperusahaan($wil, $perusahaan);
					$tot_prs		= $this->hitung_model->getPerusahaanByPrs($wil, $perusahaan)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByPrs($wil, $perusahaan)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurPrs($sm_dangkal, $wil, $perusahaan)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurPrs($sm_dalam, $wil, $perusahaan)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurPrs($sm_imbuhan, $wil, $perusahaan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurPrs($sm_pantau, $wil, $perusahaan)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurPrs($sm_asr, $wil, $perusahaan)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurPrs($sm_resapan, $wil, $perusahaan)->num_rows();
				} elseif ($filter == '3') {
					$izin      = $_GET['izin'];
					if ($izin == '1') {
						$ket    = 'DAFTAR SUMUR YANG MASA BERLAKU SIPA AKAN HABIS';
						$ambil_data = $this->sumur->abilEndSipa($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndSipa($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndSipa($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndSipa($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndSipa($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndSipa($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndSipa($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndSipa($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndSipa($sm_resapan, $wil)->num_rows();
					} else {
						$ket    = 'DAFTAR SUMUR YANG MASA BERLAKU TERA METER AIR AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndTera($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndTera($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndTera($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndTera($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndTera($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndTera($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndTera($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndTera($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndTera($sm_resapan, $wil)->num_rows();
					}
				} elseif ($filter == '4') {
					$jns_sumur  = $_GET['jns_sumur'];
					$jenis      = $this->jenis->getById($jns_sumur);
					$ket    = 'DAFTAR SUMUR '.$jenis->jenis_sumur;
					$ambil_data = $this->sumur->ambilJenisSumur($wil, $jns_sumur);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();
				} else {
					$zona  = $_GET['zona'];
					$nama_zona  =  array('','AMAN','RAWAN','KRITIS','RESAPAN');
					$ket        = 'DAFTAR SUMUR ZONA '.$nama_zona[$zona];
					$ambil_data = $this->sumur->getZona($wil, $zona);
					$tot_prs		= $this->hitung_model->getPerusahaanByZona($wil, $zona)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByZona($wil, $zona)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurZona($sm_dangkal, $wil, $zona)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurZona($sm_dalam, $wil, $zona)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurZona($sm_imbuhan, $wil, $zona)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurZona($sm_pantau, $wil, $zona)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurZona($sm_asr, $wil, $zona)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurZona($sm_resapan, $wil, $zona)->num_rows();
				}
				
			} else {
				$ket       = 'DATA SUMUR WILAYAH SUBANG';
				$ambil_data = $this->sumur->ambilPerwilayah($wil);
				$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
				$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
				$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
				$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
				$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
				$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
				$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
				$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();
			}
		}
		
		$data = [
				'ket'        => $ket,
				'tot_prs'	 => $tot_prs,
				'tot_sumur'  => $tot_sumur,
				'sm_dangkal' => $tot_sm_dangkal,
				'sm_dalam'   => $tot_sm_dalam,
				'sm_imbuhan' => $tot_sm_imbuhan,
				'sm_pantau'  => $tot_sm_pantau,
				'sm_asr'     => $tot_sm_asr,
				'sm_resapan' => $tot_sm_resapan,
				'isi_data'   => $ambil_data
		];
		
		$this->load->view('sumur/cetak', $data);
	}

	public function cetakDetile($id = null){
		$data['sumur'] = $this->sumur->tampilByID($id);
		$this->load->view('sumur/cetak_detile', $data);
	}

	public function excelDetile($id = null){
		$data['ket'] = 'Data Sumur';
		$data['sumur'] = $this->sumur->tampilByID($id);
		$this->load->view('exel/sumur_detile_excel', $data);
	}

	public function excel(){
		$sm_dangkal = '1';
		$sm_dalam   = '2';
		$sm_imbuhan = '3';
		$sm_pantau  = '4';
		$sm_asr     = '5';
		$sm_resapan = '6';
		if ($this->session->userdata('akses')== '1') {
			
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];
				if ($filter == '1') {
					$wil = $_GET['wilayah'];
					$nama_kota  = array('', 'KOTA BANDUNG', 'KOTA CIMAHI', 'KAB. BANDUNG BARAT', 'KAB. SUBANG');
					$ket        = 'DAFTAR SUMUR WILAYAH '.$nama_kota[$wil];
					$ambil_data = $this->sumur->ambilPerwilayah($wil);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal, $wil)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam, $wil)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan, $wil)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau, $wil)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr, $wil)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan, $wil)->num_rows();
				} elseif ($filter == '2') {
					$perusahaan = $_GET['perusahaan'];
					$wil        = $_GET['wilayah'];
					$nama_prs   = $this->prs->getById($perusahaan);
					$ket        = 'DAFTAR SUMUR '.$nama_prs->nama_perusahaan;
					$ambil_data = $this->sumur->getPerperusahaan($wil, $perusahaan);
					$tot_prs		= $this->hitung_model->getPerusahaanByPrs($wil, $perusahaan)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByPrs($wil, $perusahaan)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurPrs($sm_dangkal, $wil, $perusahaan)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurPrs($sm_dalam, $wil, $perusahaan)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurPrs($sm_imbuhan, $wil, $perusahaan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurPrs($sm_pantau, $wil, $perusahaan)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurPrs($sm_asr, $wil, $perusahaan)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurPrs($sm_resapan, $wil, $perusahaan)->num_rows();
				} elseif ($filter == '3') {
					$izin = $_GET['izin'];
					$wil  = $_GET['wilayah'];
					if ($izin == '1') {
						$ket        = 'DAFTAR SUMUR YANG MASA BERLAKU SIPA AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndSipa($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndSipa($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndSipa($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndSipa($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndSipa($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndSipa($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndSipa($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndSipa($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndSipa($sm_resapan, $wil)->num_rows();
					} else {
						$ket        = 'DAFTAR SUMUR YANG MASA BERLAKU TERA METER AIR AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndTera($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndTera($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndTera($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndTera($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndTera($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndTera($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndTera($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndTera($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndTera($sm_resapan, $wil)->num_rows();
					}
				} elseif ($filter == '4') {
					$jns_sumur  = $_GET['jns_sumur'];
					$wil        = $_GET['wilayah'];
					$jenis      = $this->jenis->getById($jns_sumur);
					$ket        = 'DAFTAR SUMUR '.$jenis->jenis_sumur;
					$ambil_data = $this->sumur->ambilJenisSumur($wil, $jns_sumur);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();
				} else {
					$zona       = $_GET['zona'];
					$wil        = $_GET['wilayah'];
					$nama_zona  = array('','AMAN','RAWAN','KRITIS','RESAPAN');
					$ket        = 'DAFTAR SUMUR ZONA '.$nama_zona[$zona];
					$ambil_data = $this->sumur->getZona($wil, $zona);
					$tot_prs		= $this->hitung_model->getPerusahaanByZona($wil, $zona)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByZona($wil, $zona)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurZona($sm_dangkal, $wil, $zona)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurZona($sm_dalam, $wil, $zona)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurZona($sm_imbuhan, $wil, $zona)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurZona($sm_pantau, $wil, $zona)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurZona($sm_asr, $wil, $zona)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurZona($sm_resapan, $wil, $zona)->num_rows();
				}
			} else {
				$ket            = 'DATA SUMUR';
				$wil			= '';
				$ambil_data     = $this->sumur->tampil()->result();
				$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
				$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
				$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
				$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
				$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
				$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
				$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
				$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();

			}
		} elseif ($this->session->userdata('akses')== '5') {
			$wil = '1';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];
				if ($filter == '1') {
					$wil = $_GET['wilayah'];
					$nama_kota  = array('', 'KOTA BANDUNG', 'KOTA CIMAHI', 'KAB. BANDUNG BARAT', 'KAB. SUBANG');
					$ket    = 'DAFTAR SUMUR WILAYAH '.$nama_kota[$wil];
					$ambil_data = $this->sumur->ambilPerwilayah($wil);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal, $wil)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam, $wil)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan, $wil)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau, $wil)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr, $wil)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan, $wil)->num_rows();
				} elseif ($filter == '2') {
					$perusahaan = $_GET['perusahaan'];
					$nama_prs   = $this->prs->getById($perusahaan);
					$ket    = 'DAFTAR SUMUR '.$nama_prs->nama_perusahaan;
					$ambil_data = $this->sumur->getPerperusahaan($wil, $perusahaan);
					$tot_prs		= $this->hitung_model->getPerusahaanByPrs($wil, $perusahaan)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByPrs($wil, $perusahaan)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurPrs($sm_dangkal, $wil, $perusahaan)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurPrs($sm_dalam, $wil, $perusahaan)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurPrs($sm_imbuhan, $wil, $perusahaan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurPrs($sm_pantau, $wil, $perusahaan)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurPrs($sm_asr, $wil, $perusahaan)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurPrs($sm_resapan, $wil, $perusahaan)->num_rows();
				} elseif ($filter == '3') {
					$izin      = $_GET['izin'];
					if ($izin == '1') {
						$ket    = 'DAFTAR SUMUR YANG MASA BERLAKU SIPA AKAN HABIS';
						$ambil_data = $this->sumur->abilEndSipa($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndSipa($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndSipa($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndSipa($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndSipa($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndSipa($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndSipa($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndSipa($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndSipa($sm_resapan, $wil)->num_rows();
					} else {
						$ket    = 'DAFTAR SUMUR YANG MASA BERLAKU TERA METER AIR AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndTera($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndTera($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndTera($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndTera($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndTera($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndTera($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndTera($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndTera($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndTera($sm_resapan, $wil)->num_rows();
					}
				} elseif ($filter == '4') {
					$jns_sumur  = $_GET['jns_sumur'];
					$jenis      = $this->jenis->getById($jns_sumur);
					$ket    = 'DAFTAR SUMUR '.$jenis->jenis_sumur;
					$ambil_data = $this->sumur->ambilJenisSumur($wil, $jns_sumur);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();
				} else {
					$zona  = $_GET['zona'];
					$nama_zona  =  array('','AMAN','RAWAN','KRITIS','RESAPAN');
					$ket        = 'DAFTAR SUMUR ZONA '.$nama_zona[$zona];
					$ambil_data = $this->sumur->getZona($wil, $zona);
					$tot_prs		= $this->hitung_model->getPerusahaanByZona($wil, $zona)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByZona($wil, $zona)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurZona($sm_dangkal, $wil, $zona)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurZona($sm_dalam, $wil, $zona)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurZona($sm_imbuhan, $wil, $zona)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurZona($sm_pantau, $wil, $zona)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurZona($sm_asr, $wil, $zona)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurZona($sm_resapan, $wil, $zona)->num_rows();
				}
				
			} else {
				$ket       = 'DATA SUMUR WILAYAH BANDUNG';
				$ambil_data = $this->sumur->ambilPerwilayah($wil);
				$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
				$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
				$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
				$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
				$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
				$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
				$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
				$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();
			}
		} elseif ($this->session->userdata('akses')== '4') {
			$wil = '2';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];
				if ($filter == '1') {
					$wil = $_GET['wilayah'];
					$nama_kota  = array('', 'KOTA BANDUNG', 'KOTA CIMAHI', 'KAB. BANDUNG BARAT', 'KAB. SUBANG');
					$ket    = 'DAFTAR SUMUR WILAYAH '.$nama_kota[$wil];
					$ambil_data = $this->sumur->ambilPerwilayah($wil);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal, $wil)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam, $wil)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan, $wil)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau, $wil)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr, $wil)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan, $wil)->num_rows();
				} elseif ($filter == '2') {
					$perusahaan = $_GET['perusahaan'];
					$nama_prs   = $this->prs->getById($perusahaan);
					$ket    = 'DAFTAR SUMUR '.$nama_prs->nama_perusahaan;
					$ambil_data = $this->sumur->getPerperusahaan($wil, $perusahaan);
					$tot_prs		= $this->hitung_model->getPerusahaanByPrs($wil, $perusahaan)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByPrs($wil, $perusahaan)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurPrs($sm_dangkal, $wil, $perusahaan)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurPrs($sm_dalam, $wil, $perusahaan)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurPrs($sm_imbuhan, $wil, $perusahaan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurPrs($sm_pantau, $wil, $perusahaan)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurPrs($sm_asr, $wil, $perusahaan)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurPrs($sm_resapan, $wil, $perusahaan)->num_rows();
				} elseif ($filter == '3') {
					$izin      = $_GET['izin'];
					if ($izin == '1') {
						$ket    = 'DAFTAR SUMUR YANG MASA BERLAKU SIPA AKAN HABIS';
						$ambil_data = $this->sumur->abilEndSipa($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndSipa($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndSipa($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndSipa($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndSipa($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndSipa($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndSipa($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndSipa($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndSipa($sm_resapan, $wil)->num_rows();
					} else {
						$ket    = 'DAFTAR SUMUR YANG MASA BERLAKU TERA METER AIR AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndTera($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndTera($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndTera($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndTera($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndTera($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndTera($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndTera($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndTera($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndTera($sm_resapan, $wil)->num_rows();
					}
				} elseif ($filter == '4') {
					$jns_sumur  = $_GET['jns_sumur'];
					$jenis      = $this->jenis->getById($jns_sumur);
					$ket    = 'DAFTAR SUMUR '.$jenis->jenis_sumur;
					$ambil_data = $this->sumur->ambilJenisSumur($wil, $jns_sumur);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();
				} else {
					$zona  = $_GET['zona'];
					$nama_zona  =  array('','AMAN','RAWAN','KRITIS','RESAPAN');
					$ket        = 'DAFTAR SUMUR ZONA '.$nama_zona[$zona];
					$ambil_data = $this->sumur->getZona($wil, $zona);
					$tot_prs		= $this->hitung_model->getPerusahaanByZona($wil, $zona)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByZona($wil, $zona)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurZona($sm_dangkal, $wil, $zona)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurZona($sm_dalam, $wil, $zona)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurZona($sm_imbuhan, $wil, $zona)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurZona($sm_pantau, $wil, $zona)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurZona($sm_asr, $wil, $zona)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurZona($sm_resapan, $wil, $zona)->num_rows();
				}
				
			} else {
				$ket       = 'DATA SUMUR WILAYAH CIMAHI';
				$ambil_data = $this->sumur->ambilPerwilayah($wil);
				$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
				$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
				$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
				$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
				$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
				$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
				$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
				$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();
			}
		} elseif ($this->session->userdata('akses')== '6') {
			$wil = '3';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];
				if ($filter == '1') {
					$wil = $_GET['wilayah'];
					$nama_kota  = array('', 'KOTA BANDUNG', 'KOTA CIMAHI', 'KAB. BANDUNG BARAT', 'KAB. SUBANG');
					$ket    = 'DAFTAR SUMUR WILAYAH '.$nama_kota[$wil];
					$ambil_data = $this->sumur->ambilPerwilayah($wil);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal, $wil)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam, $wil)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan, $wil)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau, $wil)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr, $wil)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan, $wil)->num_rows();
				} elseif ($filter == '2') {
					$perusahaan = $_GET['perusahaan'];
					$nama_prs   = $this->prs->getById($perusahaan);
					$ket    = 'DAFTAR SUMUR '.$nama_prs->nama_perusahaan;
					$ambil_data = $this->sumur->getPerperusahaan($wil, $perusahaan);
					$tot_prs		= $this->hitung_model->getPerusahaanByPrs($wil, $perusahaan)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByPrs($wil, $perusahaan)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurPrs($sm_dangkal, $wil, $perusahaan)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurPrs($sm_dalam, $wil, $perusahaan)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurPrs($sm_imbuhan, $wil, $perusahaan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurPrs($sm_pantau, $wil, $perusahaan)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurPrs($sm_asr, $wil, $perusahaan)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurPrs($sm_resapan, $wil, $perusahaan)->num_rows();
				} elseif ($filter == '3') {
					$izin      = $_GET['izin'];
					if ($izin == '1') {
						$ket    = 'DAFTAR SUMUR YANG MASA BERLAKU SIPA AKAN HABIS';
						$ambil_data = $this->sumur->abilEndSipa($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndSipa($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndSipa($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndSipa($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndSipa($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndSipa($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndSipa($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndSipa($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndSipa($sm_resapan, $wil)->num_rows();
					} else {
						$ket    = 'DAFTAR SUMUR YANG MASA BERLAKU TERA METER AIR AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndTera($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndTera($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndTera($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndTera($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndTera($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndTera($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndTera($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndTera($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndTera($sm_resapan, $wil)->num_rows();
					}
				} elseif ($filter == '4') {
					$jns_sumur  = $_GET['jns_sumur'];
					$jenis      = $this->jenis->getById($jns_sumur);
					$ket    = 'DAFTAR SUMUR '.$jenis->jenis_sumur;
					$ambil_data = $this->sumur->ambilJenisSumur($wil, $jns_sumur);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();
				} else {
					$zona  = $_GET['zona'];
					$nama_zona  =  array('','AMAN','RAWAN','KRITIS','RESAPAN');
					$ket        = 'DAFTAR SUMUR ZONA '.$nama_zona[$zona];
					$ambil_data = $this->sumur->getZona($wil, $zona);
					$tot_prs		= $this->hitung_model->getPerusahaanByZona($wil, $zona)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByZona($wil, $zona)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurZona($sm_dangkal, $wil, $zona)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurZona($sm_dalam, $wil, $zona)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurZona($sm_imbuhan, $wil, $zona)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurZona($sm_pantau, $wil, $zona)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurZona($sm_asr, $wil, $zona)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurZona($sm_resapan, $wil, $zona)->num_rows();
				}
				
			} else {
				$ket       = 'DATA SUMUR WILAYAH BANDUNG BARAT';
				$ambil_data = $this->sumur->ambilPerwilayah($wil);
				$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
				$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
				$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
				$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
				$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
				$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
				$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
				$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();
			}
		} elseif ($this->session->userdata('akses')== '7') {
			$wil = '4';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];
				if ($filter == '1') {
					$wil = $_GET['wilayah'];
					$nama_kota  = array('', 'KOTA BANDUNG', 'KOTA CIMAHI', 'KAB. BANDUNG BARAT', 'KAB. SUBANG');
					$ket    = 'DAFTAR SUMUR WILAYAH '.$nama_kota[$wil];
					$ambil_data = $this->sumur->ambilPerwilayah($wil);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal, $wil)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam, $wil)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan, $wil)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau, $wil)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr, $wil)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan, $wil)->num_rows();
				} elseif ($filter == '2') {
					$perusahaan = $_GET['perusahaan'];
					$nama_prs   = $this->prs->getById($perusahaan);
					$ket    = 'DAFTAR SUMUR '.$nama_prs->nama_perusahaan;
					$ambil_data = $this->sumur->getPerperusahaan($wil, $perusahaan);
					$tot_prs		= $this->hitung_model->getPerusahaanByPrs($wil, $perusahaan)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByPrs($wil, $perusahaan)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurPrs($sm_dangkal, $wil, $perusahaan)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurPrs($sm_dalam, $wil, $perusahaan)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurPrs($sm_imbuhan, $wil, $perusahaan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurPrs($sm_pantau, $wil, $perusahaan)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurPrs($sm_asr, $wil, $perusahaan)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurPrs($sm_resapan, $wil, $perusahaan)->num_rows();
				} elseif ($filter == '3') {
					$izin      = $_GET['izin'];
					if ($izin == '1') {
						$ket    = 'DAFTAR SUMUR YANG MASA BERLAKU SIPA AKAN HABIS';
						$ambil_data = $this->sumur->abilEndSipa($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndSipa($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndSipa($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndSipa($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndSipa($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndSipa($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndSipa($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndSipa($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndSipa($sm_resapan, $wil)->num_rows();
					} else {
						$ket    = 'DAFTAR SUMUR YANG MASA BERLAKU TERA METER AIR AKAN HABIS';
						$ambil_data = $this->sumur->ambilEndTera($wil)->result();
						$tot_prs		= $this->hitung_model->getPerusahaanByEndTera($wil)->num_rows();
						$tot_sumur      = $this->hitung_model->getTotSumurByEndTera($wil)->num_rows();
						$tot_sm_dangkal = $this->hitung_model->getJenisSumurEndTera($sm_dangkal, $wil)->num_rows();
						$tot_sm_dalam   = $this->hitung_model->getJenisSumurEndTera($sm_dalam, $wil)->num_rows();
						$tot_sm_imbuhan = $this->hitung_model->getJenisSumurEndTera($sm_imbuhan, $wil)->num_rows();
						$tot_sm_pantau  = $this->hitung_model->getJenisSumurEndTera($sm_pantau, $wil)->num_rows();
						$tot_sm_asr     = $this->hitung_model->getJenisSumurEndTera($sm_asr, $wil)->num_rows();
						$tot_sm_resapan = $this->hitung_model->getJenisSumurEndTera($sm_resapan, $wil)->num_rows();
					}
				} elseif ($filter == '4') {
					$jns_sumur  = $_GET['jns_sumur'];
					$jenis      = $this->jenis->getById($jns_sumur);
					$ket    = 'DAFTAR SUMUR '.$jenis->jenis_sumur;
					$ambil_data = $this->sumur->ambilJenisSumur($wil, $jns_sumur);
					$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();
				} else {
					$zona  = $_GET['zona'];
					$nama_zona  =  array('','AMAN','RAWAN','KRITIS','RESAPAN');
					$ket        = 'DAFTAR SUMUR ZONA '.$nama_zona[$zona];
					$ambil_data = $this->sumur->getZona($wil, $zona);
					$tot_prs		= $this->hitung_model->getPerusahaanByZona($wil, $zona)->num_rows();
					$tot_sumur      = $this->hitung_model->getTotSumurByZona($wil, $zona)->num_rows();
					$tot_sm_dangkal = $this->hitung_model->getJenisSumurZona($sm_dangkal, $wil, $zona)->num_rows();
					$tot_sm_dalam   = $this->hitung_model->getJenisSumurZona($sm_dalam, $wil, $zona)->num_rows();
					$tot_sm_imbuhan = $this->hitung_model->getJenisSumurZona($sm_imbuhan, $wil, $zona)->num_rows();
					$tot_sm_pantau  = $this->hitung_model->getJenisSumurZona($sm_pantau, $wil, $zona)->num_rows();
					$tot_sm_asr     = $this->hitung_model->getJenisSumurZona($sm_asr, $wil, $zona)->num_rows();
					$tot_sm_resapan = $this->hitung_model->getJenisSumurZona($sm_resapan, $wil, $zona)->num_rows();
				}
				
			} else {
				$ket       = 'DATA SUMUR WILAYAH SUBANG';
				$ambil_data = $this->sumur->ambilPerwilayah($wil);
				$tot_prs		= $this->hitung_model->getPerusahaan($wil)->num_rows();
				$tot_sumur      = $this->hitung_model->getTotSumur($wil)->num_rows();
				$tot_sm_dangkal = $this->hitung_model->getJenisSumur($sm_dangkal)->num_rows();
				$tot_sm_dalam   = $this->hitung_model->getJenisSumur($sm_dalam)->num_rows();
				$tot_sm_imbuhan = $this->hitung_model->getJenisSumur($sm_imbuhan)->num_rows();
				$tot_sm_pantau  = $this->hitung_model->getJenisSumur($sm_pantau)->num_rows();
				$tot_sm_asr     = $this->hitung_model->getJenisSumur($sm_asr)->num_rows();
				$tot_sm_resapan = $this->hitung_model->getJenisSumur($sm_resapan)->num_rows();
			}
		}
		
		$data = [
				'ket'        => $ket,
				'tot_prs'	 => $tot_prs,
				'tot_sumur'  => $tot_sumur,
				'sm_dangkal' => $tot_sm_dangkal,
				'sm_dalam'   => $tot_sm_dalam,
				'sm_imbuhan' => $tot_sm_imbuhan,
				'sm_pantau'  => $tot_sm_pantau,
				'sm_asr'     => $tot_sm_asr,
				'sm_resapan' => $tot_sm_resapan,
				'isi_data'   => $ambil_data
		];
		//print_r($data['perusahaan']);
		$this->load->view('exel/sumur_excel', $data);
	}	

	function downloadSipa($filename = NULL) {
	    // load download helder
	    $this->load->helper('download');
	    // read file contents
	    $data = file_get_contents(base_url('/uploads/sipa/'.$filename));
	    //echo json_encode($data);
	    force_download($filename, $data);
	}

	function downloadTera($filename = NULL) {
	    // load download helder
	    $this->load->helper('download');
	    // read file contents
	    $data = file_get_contents(base_url('/uploads/tera_meter/'.$filename));
	    //echo json_encode($data);
	    force_download($filename, $data);
	}

	function downloadUji($filename = NULL) {
	    // load download helder
	    $this->load->helper('download');
	    // read file contents
	    $data = file_get_contents(base_url('/uploads/uji_air/'.$filename));
	    //echo json_encode($data);
	    force_download($filename, $data);
	}

	function downloadPeta($filename = NULL) {
	    // load download helder
	    $this->load->helper('download');
	    // read file contents
	    $data = file_get_contents(base_url('/uploads/peta_sumur/'.$filename));
	    //echo json_encode($data);
	    force_download($filename, $data);
	}
}