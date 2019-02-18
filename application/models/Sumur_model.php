<?php
/**
 * class model Sumur
 */
class Sumur_model extends CI_Model{
	
	public function tampil(){
		$this->db->select('*, DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) as selisih');
		$this->db->from('t_sumur');
		$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
		$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
		$this->db->order_by('t_perusahaan.id_kota', 'asc');
		
		//$this->db->where('id_kota', '4');
		return $this->db->get();
	}

	public function ambilPerwilayah($wilayah){
		$this->db->select('*, DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) as selisih');
		$this->db->from('t_sumur');
		$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
		$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
		$this->db->where('id_kota', $wilayah);

		return $this->db->get()->result();
	}

	public function getPerperusahaan($wilayah, $perusahaan){
		if ($wilayah == '') {
			$this->db->select('*, DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) as selisih');
			$this->db->from('t_sumur');
			$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur');
			$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
			$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
			$this->db->where('t_sumur.id_perusahaan', $perusahaan);
			return $this->db->get()->result();
		} else {
			$this->db->select('*, DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) as selisih');
			$this->db->from('t_sumur');
			$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur');
			$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
			$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
			$this->db->where('t_sumur.id_perusahaan', $perusahaan);
			$this->db->where('id_kota', $wilayah);
			return $this->db->get()->result();
		}
	}

	public function ambilEndSipa($wilayah){
		if($wilayah == ''){
			$this->db->select('t_sumur.*, t_perusahaan.*, t_kota.*, t_jenis_sumur.*, DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) as selisih');
			$this->db->from('t_sumur');
			$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur');
			$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
			$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
			$this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) <= 90');
			$this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) >= 0');
			//$this->db->where('id_kota', $wilayah);
			return $this->db->get();
		} else {
			$this->db->select('t_sumur.*, t_perusahaan.*, t_kota.*, t_jenis_sumur.*, DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) as selisih');
			$this->db->from('t_sumur');
			$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur');
			$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
			$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
			$this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) <= 90');
			$this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) >= 0');
			$this->db->where('id_kota', $wilayah);
			return $this->db->get();
		}
	}

	public function ambilEndTera($wilayah){
		if($wilayah == ''){
			$this->db->select('*, DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) as selisih');
			$this->db->from('t_sumur');
			$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur');
			$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
			$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
			$this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) <= 30');
			$this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) >= 0');
			//$this->db->where('id_kota', $wilayah);
			return $this->db->get();
		} else {
			$this->db->select('*, DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) as selisih');
			$this->db->from('t_sumur');
			$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur');
			$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
			$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
			$this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) <= 30');
			$this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) >= 0');
			$this->db->where('id_kota', $wilayah);
			return $this->db->get();
		}
	}

	public function getEndSipa($param = ''){
		if ($param == '1') {
			$this->db->select('t_sumur.*, t_perusahaan.*, t_kota.*, t_jenis_sumur.*, DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) as selisih');
			$this->db->from('t_sumur');
			$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur');
			$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
			$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
			$this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) <= 90');
			$this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) >= -1');
			//$this->db->where('id_kota', $wilayah);
			return $this->db->get();
		} elseif($param == '2'){
			$this->db->select('t_sumur.*, t_perusahaan.*, t_kota.*, t_jenis_sumur.*, DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) as selisih');
			$this->db->from('t_sumur');
			$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur');
			$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
			$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
			$this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) <= 0');
			//$this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) >= -1');
			//$this->db->where('id_kota', $wilayah);
			return $this->db->get();
		} else {
			$this->db->select('t_sumur.*, t_perusahaan.*, t_kota.*, t_jenis_sumur.*, DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) as selisih');
			$this->db->from('t_sumur');
			$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur');
			$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
			$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
			//$this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) <= 90');
			$this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) >= 90');
			//$this->db->where('id_kota', $wilayah);
			return $this->db->get();
		}
			
	}

	public function getEndTera($param = ''){
		if ($param == '1') {
			$this->db->select('*');
			$this->db->from('t_sumur');
			$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur');
			$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
			$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
			$this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) <= 30');
			$this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) >= -1');
			//$this->db->where('id_kota', $wilayah);
			return $this->db->get();
		} elseif ($param == '2'){
			$this->db->select('*');
			$this->db->from('t_sumur');
			$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur');
			$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
			$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
			$this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) <= 0');
			return $this->db->get();
		} else {
			$this->db->select('*');
			$this->db->from('t_sumur');
			$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur');
			$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
			$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
			$this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) >= 30');
			return $this->db->get();
		}
		
	}

	public function ambilJenisSumur($wilayah, $jenis){
		if($wilayah == ''){
			$this->db->select('*, DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) as selisih');
			$this->db->from('t_sumur');
			$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur');
			$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
			$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
			$this->db->where('t_sumur.id_jenis_sumur', $jenis);
			//$this->db->where('id_kota', $wilayah);
			return $this->db->get()->result();
		} else {
			$this->db->select('*, DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) as selisih');
			$this->db->from('t_sumur');
			$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur');
			$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
			$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
			$this->db->where('t_sumur.id_jenis_sumur', $jenis);
			$this->db->where('id_kota', $wilayah);
			return $this->db->get()->result();
		}
	}

	public function ambilJenisImbuhan(){
		$this->db->select('*, DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) as selisih');
		$this->db->from('t_sumur');
		$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
		$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
		$this->db->where('t_sumur.id_jenis_sumur', '3');
		return $this->db->get();
	}

	public function getZona($wilayah, $zona){
		if($wilayah == ''){
			$this->db->select('*, DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) as selisih');
			$this->db->from('t_sumur');
			$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur');
			$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
			$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
			$this->db->where('id_zona', $zona);
			//$this->db->where('id_kota', $wilayah);
			return $this->db->get()->result();
		} else {
			$this->db->select('*, DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) as selisih');
			$this->db->from('t_sumur');
			$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur');
			$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
			$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
			$this->db->where('id_zona', $zona);
			$this->db->where('id_kota', $wilayah);
			return $this->db->get()->result();
		}
	}

	public function wilayah(){
		return $this->db->get('t_kota')->result();
	}

	public function getById($id_sumur){
		return $this->db->get_where('t_sumur', ["id_sumur" => $id_sumur])->row();
	}

	public function tampilByID($id_sumur = null){
		$this->db->select('t_sumur.*, t_perusahaan.*, t_jenis_sumur.*, DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) as selisih');
		$this->db->from('t_sumur');
		$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur', 'left');
		$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
		$this->db->where('id_sumur', $id_sumur);
		return $this->db->get()->row();
	}

	public function tampilByPerusahaan($id_perusahaan){
		$this->db->select('*, DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) as selisih');
		$this->db->from('t_sumur');
		$this->db->join('t_jenis_sumur', 't_jenis_sumur.id = t_sumur.id_jenis_sumur', 'left');
		//$this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
		$this->db->where('id_perusahaan', $id_perusahaan);
		return $this->db->get()->result();
	}

	public function add(){ // tambah data sumur
		$post = $this->input->post();
		$val = uniqid();
		//echo json_encode($post);
		if (count($post) > 0) {
				$data = array(
					'id_perusahaan'   => $post["id_perusahaan"],
					'id_jenis_sumur'  => $post["id_jenis_sumur"],
					'id_zona'         => $post["id_zona"],
					'no_sumur'        => strtoupper($post["no_sumur"]),
					'status_izin'     => $post["stauts_izin"],
					'no_sipa'         => $post["no_sipa"],
					'sipa'            => $this->_upload('./uploads/sipa/', 'pdf|doc|docx', 'SIPA_'.$val, 'file_sipa'),
					'tgl_terbit_sipa' => date('Y-m-d', strtotime($post["tgl_terbit_sipa"])),
					'tgl_ahir_sipa'   => date('Y-m-d', strtotime($post["tgl_ahir_sipa"])),
					'lokasi_sumur'    => strtoupper($post["lokasi_sumur"]),
					'poto_sumur'      => $this->_upload('./uploads/poto_sumur/', 'jpg|jpeg|png', 'IMG_'.$val, 'poto_sumur'),
					'peta_lok'        => $this->_upload('./uploads/peta_sumur/', 'pdf|doc|docx|jpg|jpeg|png', 'PETA_'.$val, 'peta_lok'),
					'hasil_uji_air'   => 
							$this->_upload('./uploads/uji_air/', 'pdf|doc|docx|jpg|jpeg|png', 'UJI_'.$val, 'hasil_uji_air'),
					'kedalaman_sumur' => $post["kedalaman_sumur"],
					'debit_izin'      => $post["debit_izin"],
					'material_pipa'   => strtoupper($post["material_pipa"]),
					'dia_pipa_kons'   => $post["dia_pipa_kons"],
					'dia_pipa_naik'   => $post["dia_pipa_naik"],
					'dia_pipa_isap'   => $post["dia_pipa_isap"],
					'brand_pompa'     => strtoupper($post["brand_pompa"]),
					'no_seri_pompa'   => $post["no_seri_pompa"],
					'type_pompa'      => strtoupper($post["type_pompa"]),
					'kapasit_pompa'   => $post["kapasit_pompa"],
					'posisi_pompa'    => $post["posisi_pompa"],
					'brand_meter_air' => strtoupper($post["brand_meter_air"]),
					'no_meter_air'    => $post["no_meter_air"],
					'angka_awal'      => $post["angka_awal"],
					'no_tera'         => $post["no_tera"],
					'tera_meter'      => $this->_upload('./uploads/tera_meter/', 'pdf|doc|docx|jpg|jpeg|png', 'TERA_'.$val, 'tera'),
					'tgl_tera'        => date('Y-m-d', strtotime($post["tgl_tera"])),
					'tgl_ahir_tera'   => date('Y-m-d',strtotime($post["tgl_ahir_tera"])),
					'koor_d_ls'       => $post["koor_d_ls"],
					'koor_m_ls'       => $post["koor_m_ls"],
					'koor_s_ls'       => $post["koor_s_ls"],
					'koor_d_bt'       => $post["koor_d_bt"],
					'koor_m_bt'       => $post["koor_m_bt"],
					'koor_s_bt'       => $post["koor_s_bt"]
					);
				//echo json_encode($data);
				$this->db->insert('t_sumur', $data);
				}//echo json_encode($data);
	}

	public function update(){ // update data sumur
		$post = $this->input->post();
		$val = uniqid();
		//echo json_encode($post);
		$data = array(
			'id_sumur'        => $post["id_sumur"],
			'id_perusahaan'   => $post["id_perusahaan"],
			'id_jenis_sumur'  => $post["id_jenis_sumur"],
			'id_zona'         => $post["id_zona"],
			'no_sumur'        => strtoupper($post["no_sumur"]),
			'no_sipa'         => $post["no_sipa"],
			'sipa'            => $this->_upload('./uploads/sipa/', 'pdf|doc|docx', 'SIPA_'.$val, 'file_sipa', $post["id_sumur"], 'sipa'),
			'status_izin'     => $post["status_izin"],
			'tgl_terbit_sipa' => date('Y-m-d', strtotime($post["tgl_terbit_sipa"])),
			'tgl_ahir_sipa'   => date('Y-m-d', strtotime($post["tgl_ahir_sipa"])),
			'lokasi_sumur'    => strtoupper($post["lokasi_sumur"]),
			'poto_sumur'      => $this->_upload('./uploads/poto_sumur/', 'pdf|jpg|jpeg|png', 'IMG_'.$val, 'poto_sumur', $post["id_sumur"], 'poto_sumur'),
			'peta_lok'        => $this->_upload('./uploads/peta_sumur/', 'pdf|doc|docx|jpg|jpeg|png', 'PETA_'.$val, 'peta_lok', $post["id_sumur"], 'peta_lok'),
			'hasil_uji_air'   => $this->_upload('./uploads/uji_air/', 'pdf|doc|docx|jpg|jpeg|png', 'UJI_AIR_'.$val, 'hasil_uji_air', $post["id_sumur"], 'hasil_uji_air'),
			'kedalaman_sumur' => $post["kedalaman_sumur"],
			'debit_izin'      => $post["debit_izin"],
			'material_pipa'   => strtoupper($post["material_pipa"]),
			'dia_pipa_kons'   => $post["dia_pipa_kons"],
			'dia_pipa_naik'   => $post["dia_pipa_naik"],
			'dia_pipa_isap'   => $post["dia_pipa_isap"],
			'brand_pompa'     => strtoupper($post["brand_pompa"]),
			'no_seri_pompa'   => $post["no_seri_pompa"],
			'type_pompa'      => strtoupper($post["type_pompa"]),
			'kapasit_pompa'   => $post["kapasit_pompa"],
			'posisi_pompa'    => $post["posisi_pompa"],
			'brand_meter_air' => strtoupper($post["brand_meter_air"]),
			'no_meter_air'    => $post["no_meter_air"],
			'angka_awal'      => $post["angka_awal"],
			'no_tera'         => $post["no_tera"],
			'tera_meter'      => $this->_upload('./uploads/tera_meter/', 'pdf|doc|docx|jpg|jpeg|png', 'TERA_'.$val, 'tera', $post["id_sumur"], 'tera_meter'),
			'tgl_tera'        => date('Y-m-d', strtotime($post["tgl_tera"])),
			'tgl_ahir_tera'   => date('Y-m-d',strtotime($post["tgl_ahir_tera"])),
			'koor_d_ls'       => $post["koor_d_ls"],
			'koor_m_ls'       => $post["koor_m_ls"],
			'koor_s_ls'       => $post["koor_s_ls"],
			'koor_d_bt'       => $post["koor_d_bt"],
			'koor_m_bt'       => $post["koor_m_bt"],
			'koor_s_bt'       => $post["koor_s_bt"]
			);
		//echo var_dump($this->_upload());
		//echo var_dump($data);
		$this->db->update('t_sumur', $data, array('id_sumur' => $post["id_sumur"]));
		
	}

	public function delete($id_sumur){
		// hapus data sumur menurut id_sumur
		return $this->db->delete('t_sumur', array('id_sumur' => $id_sumur));
	}

	public function totalSumur(){
		return $this->db->get('t_sumur')->num_rows();
	}

	private function _upload($path='', $type='', $filename='', $file='', $id_sumur='', $select=''){
		$this->load->library('upload');
		$name = ''; //variable nama dengan nilai kosong
		//jika file tidak sama dengan kosong
		if($file != '')
		{
			$zzz['upload_path'] = ($path != '' ? $path : './uploads/sipa/'); 
			if($type != '') $zzz['allowed_types'] = $type;
			if($filename != '') $zzz['file_name'] = $filename; 
			$zzz['overwrite'] = true;
			$zzz['max_size']  = '20480';		
			$this->upload->initialize($zzz);

			if ($this->upload->do_upload($file)) {
				$name = $this->upload->data("file_name"); //jika upload berhasil ganti value dari variable nama
			}
		}

		//jika id_umur tidak sama dengan kosong dan nama masih
		if($id_sumur != '' && $name  == '') 
		{
			$this->db->select($select .' as nama'); //ganti select dengan value nama ini bertujuan untuk mempercepat pemangilan data dari database hanya menselect satu colomn saja
			$this->db->where('id_sumur', $id_sumur);
			$get = $this->db->get('t_sumur');
			//ganti nama menjadi row dari colom nama database jika get berhasil dan jumlah row dari pemangilan dari database melebih dari 0 jika tidak kembali nilai ''
			$name =($get ? ($get->num_rows() > 0 ? $get->row()->nama : '') : '');
		}
		return $name; //kemabli nilai $nama
	}

	/*private function _upload($path='', $type='', $filename='', $file='', $id_sumur='', $select=''){	
		$this->load->library('upload');
		$name = '';  //variable nama dengan nilai kosong
		//echo json_encode($file);
		//jika file tidak sama dengan kosong
		if($file != '')
		{
			$zzz['upload_path']                     = ($path != '' ? $path : './uploads/sipa/');
			if  ($type != '') $zzz['allowed_types'] = $type;
			if  ($filename != '') $zzz['file_name'] = $filename;
			$zzz['overwrite']                       = true;
			$zzz['max_size']                        = '20480';
			$this->upload->initialize($zzz);
			echo json_encode($file);
			if ($this->upload->do_upload($file)) {
				$name = $this->upload->data("file_name");  //jika upload berhasil ganti value dari variable nama
				//echo json_encode($file);
			}
		}
		//echo json_encode($name);
		//jika id_umur tidak sama dengan kosong dan nama masih
		if($id_sumur != '' && $name  == '') 
		{
			$this->db->select($select.' as nama'); //ganti select dengan value nama ini bertujuan untuk mempercepat pemangilan data dari database hanya menselect satu colomn saja
			$this->db->where('id_sumur', $id_sumur);
			$get = $this->db->get('t_sumur');
			
			//ganti nama menjadi row dari colom nama database jika get berhasil dan jumlah row dari pemangilan dari database melebih dari 0 jika tidak kembali nilai ''
			$name = ($get ? ($get->num_rows() > 0 ? $get->row()->nama : '') : '');
		}
		//echo json_encode($name);
		return $name; //kemabli nilai $nama
	}*/

}