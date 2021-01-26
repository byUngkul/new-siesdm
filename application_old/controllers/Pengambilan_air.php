<?php
/**
 * 
 */
class Pengambilan_air extends CI_Controller{
	
	public function __construct(){
		parent:: __construct();
		if ($this->session->userdata('masuk') != TRUE) {
			redirect('login');
		}

		$this->load->model('pengambilan_air_model', 'ambil_air');
		$this->load->model('sumur_model', 'sumur');
		$this->load->model('perusahaan_model', 'perusahaan');
		
	}

	public function index(){
		if ($this->session->userdata('akses') == '1') {
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];

				if ($filter == '1'){
					$bulan      = $_GET['bulan'];
					$tahun      = $_GET['tahun'];
					$nama_bulan = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');

					$ket       = 'Data Penggunaan Air Bulan '.$nama_bulan[$bulan].' '.$tahun;
					$url_cetak = 'pengambilan_air/cetak?filter=1&bulan='.$bulan.'&tahun='.$tahun;
					$ambil     = $this->ambil_air->viewByMonth($bulan, $tahun);
				} elseif ($filter == '2'){
					$tahun = $_GET['tahun'];

					$ket       = 'Data Penggunaan Air Tahun '.$tahun;
					$url_cetak = 'pengambilan_air/cetak?filter=2&tahun='.$tahun;
					$ambil     = $this->ambil_air->viewByYear($tahun);
				} else {
					$id_pers = $_GET['perusahaan'];
					$perusahaan = $this->perusahaan->getById($id_pers);
					$ket       = 'Data Penggunaan Air Perusahaan '.$perusahaan->nama_perusahaan;
					$url_cetak = 'pengambilan_air/cetak?filter=3&perusahaan='.$perusahaan->nama_perusahaan;
					$ambil     = $this->ambil_air->viewByPerusahaan($id_pers);
				}
			} else {
				$ket       = 'Data Penggunaan Air';
				$url_cetak = 'pengambilan_air/cetak';
				$ambil     = $this->ambil_air->getAll();
			}
		} elseif ($this->session->userdata('akses') == '5'){
			$wil = '1';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];

				if ($filter == '1'){
					$bulan      = $_GET['bulan'];
					$tahun      = $_GET['tahun'];
					$nama_bulan = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');

					$ket       = 'Data Penggunaan Air Wil. Bandung Bulan '.$nama_bulan[$bulan].' '.$tahun;
					$url_cetak = 'pengambilan_air/cetak?filter=1&bulan='.$bulan.'&tahun='.$tahun;
					$ambil     = $this->ambil_air->viewByMonthPerwil($bulan, $tahun, $wil);
				} elseif ($filter == '2'){
					$tahun = $_GET['tahun'];

					$ket       = 'Data Penggunaan Air Wil. Bandung Tahun '.$tahun;
					$url_cetak = 'pengambilan_air/cetak?filter=2&tahun='.$tahun;
					$ambil     = $this->ambil_air->viewByYearPerwil($tahun, $wil);
				} else {
					$id_pers    = $_GET['perusahaan'];
					$perusahaan = $this->perusahaan->getById($id_pers);
					$ket        = 'Data Penggunaan Air Perusahaan '.$perusahaan->nama_perusahaan;
					$url_cetak  = 'pengambilan_air/cetak?filter=3&perusahaan='.$perusahaan->nama_perusahaan;
					$ambil      = $this->ambil_air->viewByPerusahaanPerwil($id_pers, $wil);
				}
			} else {
				$ket       = 'Semua Data Penggunaan Air';
				$url_cetak = 'pengambilan_air/cetak';
				$ambil     = $this->ambil_air->getWilayah($wil);
			}
		} elseif ($this->session->userdata('akses') == '4'){
			$wil = '2';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];

				if ($filter == '1'){
					$bulan      = $_GET['bulan'];
					$tahun      = $_GET['tahun'];
					$nama_bulan = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');

					$ket       = 'Data Penggunaan Air Bulan '.$nama_bulan[$bulan].' '.$tahun;
					$url_cetak = 'pengambilan_air/cetak?filter=1&bulan='.$bulan.'&tahun='.$tahun;
					$ambil     = $this->ambil_air->viewByMonthPerwil($bulan, $tahun, $wil);
				} elseif ($filter == '2'){
					$tahun = $_GET['tahun'];

					$ket       = 'Data Penggunaan Air Tahun '.$tahun;
					$url_cetak = 'pengambilan_air/cetak?filter=2&tahun='.$tahun;
					$ambil     = $this->ambil_air->viewByYearPerwil($tahun, $wil);
				} else {
					$id_pers    = $_GET['perusahaan'];
					$perusahaan = $this->perusahaan->getById($id_pers);
					$ket        = 'Data Penggunaan Air Perusahaan '.$perusahaan->nama_perusahaan;
					$url_cetak  = 'pengambilan_air/cetak?filter=3&perusahaan='.$perusahaan->nama_perusahaan;
					$ambil      = $this->ambil_air->viewByPerusahaanPerwil($id_pers, $wil);
				}
			} else {
				$ket       = 'Semua Data Penggunaan Air';
				$url_cetak = 'pengambilan_air/cetak';
				$ambil     = $this->ambil_air->getWilayah($wil);
			}
		} elseif ($this->session->userdata('akses') == '6'){
			$wil = '3';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];

				if ($filter == '1'){
					$bulan      = $_GET['bulan'];
					$tahun      = $_GET['tahun'];
					$nama_bulan = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');

					$ket       = 'Data Penggunaan Air Bulan '.$nama_bulan[$bulan].' '.$tahun;
					$url_cetak = 'pengambilan_air/cetak?filter=1&bulan='.$bulan.'&tahun='.$tahun;
					$ambil     = $this->ambil_air->viewByMonthPerwil($bulan, $tahun, $wil);
				} elseif ($filter == '2'){
					$tahun = $_GET['tahun'];

					$ket       = 'Data Penggunaan Air Tahun '.$tahun;
					$url_cetak = 'pengambilan_air/cetak?filter=2&tahun='.$tahun;
					$ambil     = $this->ambil_air->viewByYearPerwil($tahun, $wil);
				} else {
					$id_pers    = $_GET['perusahaan'];
					$perusahaan = $this->perusahaan->getById($id_pers);
					$ket        = 'Data Penggunaan Air Perusahaan '.$perusahaan->nama_perusahaan;
					$url_cetak  = 'pengambilan_air/cetak?filter=3&perusahaan='.$perusahaan->nama_perusahaan;
					$ambil      = $this->ambil_air->viewByPerusahaanPerwil($id_pers, $wil);
				}
			} else {
				$ket       = 'Semua Data Penggunaan Air';
				$url_cetak = 'pengambilan_air/cetak';
				$ambil     = $this->ambil_air->getWilayah($wil);
			}
		} elseif ($this->session->userdata('akses') == '7'){
			$wil = '4';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];

				if ($filter == '1'){
					$bulan      = $_GET['bulan'];
					$tahun      = $_GET['tahun'];
					$nama_bulan = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');

					$ket       = 'Data Penggunaan Air Bulan '.$nama_bulan[$bulan].' '.$tahun;
					$url_cetak = 'pengambilan_air/cetak?filter=1&bulan='.$bulan.'&tahun='.$tahun;
					$ambil     = $this->ambil_air->viewByMonthPerwil($bulan, $tahun, $wil);
				} elseif ($filter == '2'){
					$tahun = $_GET['tahun'];

					$ket       = 'Data Penggunaan Air Tahun '.$tahun;
					$url_cetak = 'pengambilan_air/cetak?filter=2&tahun='.$tahun;
					$ambil     = $this->ambil_air->viewByYearPerwil($tahun, $wil);
				} else {
					$id_pers    = $_GET['perusahaan'];
					$perusahaan = $this->perusahaan->getById($id_pers);
					$ket        = 'Data Penggunaan Air Perusahaan '.$perusahaan->nama_perusahaan;
					$url_cetak  = 'pengambilan_air/cetak?filter=3&perusahaan='.$perusahaan->nama_perusahaan;
					$ambil      = $this->ambil_air->viewByPerusahaanPerwil($id_pers, $wil);
				}
			} else {
				$ket       = 'Semua Data Penggunaan Air';
				$url_cetak = 'pengambilan_air/cetak';
				$ambil     = $this->ambil_air->getWilayah($wil);
			}
		}
			
		$data = [
			'title'        => '',
			'sub_title'    => 'Home',
			'page'         => 'Data Penggunaan Air',               // $ket
			'filter'       => $ket,
			'url_cetak'    => $url_cetak,
			'transaksi'    => $ambil,
			'option_tahun' => $this->ambil_air->option_tahun(),
			'content'      => 'pengambilan_air/index',
			'perusahaan'   => $this->ambil_air->getPerusahaan(),
			'data'         => $this->ambil_air->option_tahun()
		];

		$this->load->view('template/template', $data);
	}

	public function ambilSumur(){
		$id   = $this->input->post('id');
		$data = $this->ambil_air->getSumur($id);
		echo json_encode($data);
	}

	public function add(){
		$data = [
			'title'     => 'SiESDM',
			'sub_title' => 'Home',
			'page'      => 'Tamabah Data',
			'sub_page'  => '',
			'content'   => 'pengambilan_air/add',
			//'data' => $this->ambil_air->getById($id_trx),
			'perusahaan' => $this->ambil_air->getPerusahaan()
		];
		//var_dump($data['data']);
		$this->load->view('template/template', $data);
	}

	public function save(){
		$this->ambil_air->save();
		$this->session->set_flashdata('success', 'Data berhasil di simpan!');

		redirect('pengambilan_air/add');
	}

	public function edit($id_trx = null){
		$data = [
			'title'      => 'SiESDM',
			'sub_title'  => 'Home',
			'page'       => 'Ubah Data',
			'sub_page'   => '',
			'content'    => 'pengambilan_air/edit',
			'data'       => $this->ambil_air->getById($id_trx),
			'sumur'      => $this->sumur->tampil(),
			'perusahaan' => $this->ambil_air->getPerusahaan()
		];
		//var_dump($data['data']);
		$this->load->view('template/template', $data);
	}

	public function update(){
		$this->ambil_air->update();
		$this->session->set_flashdata('success', 'Data berhasil di ubah!');
		redirect('pengambilan_air');
	}

	public function delete($id_trx = null)
    {
        if(!isset($id_trx)) show_404();

    	if ($this->ambil_air->delete($id_trx)) {
			$this->session->set_flashdata('danger', 'Data berhasil di hapus!');
    		redirect('pajak');
    	}
    }

	public function cetak(){
        if ($this->session->userdata('akses') == '1') {
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];

				if ($filter == '1'){
					$bulan      = $_GET['bulan'];
					$tahun      = $_GET['tahun'];
					$nama_bulan = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');

					$ket       = 'Data Penggunaan Air Bulan '.$nama_bulan[$bulan].' '.$tahun;
					$ambil     = $this->ambil_air->viewByMonth($bulan, $tahun);
				} elseif ($filter == '2'){
					$tahun = $_GET['tahun'];

					$ket       = 'Data Penggunaan Air Tahun '.$tahun;
					$ambil     = $this->ambil_air->viewByYear($tahun);
				} else {
					$id_pers = $_GET['perusahaan'];
					$perusahaan = $this->perusahaan->getById($id_pers);
					$ket       = 'Data Penggunaan Air Perusahaan '.$perusahaan->nama_perusahaan;
					$ambil     = $this->ambil_air->viewByPerusahaan($id_pers);
				}
			} else {
				$ket       = 'Data Penggunaan Air';
				$ambil     = $this->ambil_air->getAll();
			}
		} elseif ($this->session->userdata('akses') == '5'){
			$wil = '1';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];

				if ($filter == '1'){
					$bulan      = $_GET['bulan'];
					$tahun      = $_GET['tahun'];
					$nama_bulan = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');

					$ket       = 'Data Penggunaan Air Wil. Bandung Bulan '.$nama_bulan[$bulan].' '.$tahun;
					$ambil     = $this->ambil_air->viewByMonthPerwil($bulan, $tahun, $wil);
				} elseif ($filter == '2'){
					$tahun = $_GET['tahun'];

					$ket       = 'Data Penggunaan Air Wil. Bandung Tahun '.$tahun;
					$ambil     = $this->ambil_air->viewByYearPerwil($tahun, $wil);
				} else {
					$id_pers    = $_GET['perusahaan'];
					$perusahaan = $this->perusahaan->getById($id_pers);
					$ket        = 'Data Penggunaan Air Perusahaan '.$perusahaan->nama_perusahaan;
					$ambil      = $this->ambil_air->viewByPerusahaanPerwil($id_pers, $wil);
				}
			} else {
				$ket       = 'Semua Data Penggunaan Air';
				$ambil     = $this->ambil_air->getWilayah($wil);
			}
		} elseif ($this->session->userdata('akses') == '4'){
			$wil = '2';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];

				if ($filter == '1'){
					$bulan      = $_GET['bulan'];
					$tahun      = $_GET['tahun'];
					$nama_bulan = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');

					$ket       = 'Data Penggunaan Air Bulan '.$nama_bulan[$bulan].' '.$tahun;
					$ambil     = $this->ambil_air->viewByMonthPerwil($bulan, $tahun, $wil);
				} elseif ($filter == '2'){
					$tahun = $_GET['tahun'];

					$ket       = 'Data Penggunaan Air Tahun '.$tahun;
					$ambil     = $this->ambil_air->viewByYearPerwil($tahun, $wil);
				} else {
					$id_pers    = $_GET['perusahaan'];
					$perusahaan = $this->perusahaan->getById($id_pers);
					$ket        = 'Data Penggunaan Air Perusahaan '.$perusahaan->nama_perusahaan;
					$ambil      = $this->ambil_air->viewByPerusahaanPerwil($id_pers, $wil);
				}
			} else {
				$ket       = 'Semua Data Penggunaan Air';
				$ambil     = $this->ambil_air->getWilayah($wil);
			}
		} elseif ($this->session->userdata('akses') == '6'){
			$wil = '3';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];

				if ($filter == '1'){
					$bulan      = $_GET['bulan'];
					$tahun      = $_GET['tahun'];
					$nama_bulan = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');

					$ket       = 'Data Penggunaan Air Bulan '.$nama_bulan[$bulan].' '.$tahun;
					$ambil     = $this->ambil_air->viewByMonthPerwil($bulan, $tahun, $wil);
				} elseif ($filter == '2'){
					$tahun = $_GET['tahun'];

					$ket       = 'Data Penggunaan Air Tahun '.$tahun;
					$ambil     = $this->ambil_air->viewByYearPerwil($tahun, $wil);
				} else {
					$id_pers    = $_GET['perusahaan'];
					$perusahaan = $this->perusahaan->getById($id_pers);
					$ket        = 'Data Penggunaan Air Perusahaan '.$perusahaan->nama_perusahaan;
					$ambil      = $this->ambil_air->viewByPerusahaanPerwil($id_pers, $wil);
				}
			} else {
				$ket       = 'Semua Data Penggunaan Air';
				$ambil     = $this->ambil_air->getWilayah($wil);
			}
		} elseif ($this->session->userdata('akses') == '7'){
			$wil = '4';
			if (isset($_GET['filter']) && !empty($_GET['filter'])) {
				$filter = $_GET['filter'];

				if ($filter == '1'){
					$bulan      = $_GET['bulan'];
					$tahun      = $_GET['tahun'];
					$nama_bulan = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember');

					$ket       = 'Data Penggunaan Air Bulan '.$nama_bulan[$bulan].' '.$tahun;
					$ambil     = $this->ambil_air->viewByMonthPerwil($bulan, $tahun, $wil);
				} elseif ($filter == '2'){
					$tahun = $_GET['tahun'];

					$ket       = 'Data Penggunaan Air Tahun '.$tahun;
					$ambil     = $this->ambil_air->viewByYearPerwil($tahun, $wil);
				} else {
					$id_pers    = $_GET['perusahaan'];
					$perusahaan = $this->perusahaan->getById($id_pers);
					$ket        = 'Data Penggunaan Air Perusahaan '.$perusahaan->nama_perusahaan;
					$ambil      = $this->ambil_air->viewByPerusahaanPerwil($id_pers, $wil);
				}
			} else {
				$ket       = 'Semua Data Penggunaan Air';
				$ambil     = $this->ambil_air->getWilayah($wil);
			}
		}

        $data['ket']       = $ket;
		$data['transaksi'] = $ambil;
		
		$this->load->view('pengambilan_air/cetak', $data);
	}
}