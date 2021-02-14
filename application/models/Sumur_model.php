<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Sumur_model extends CI_Model
{

	protected $table = 't_sumur a';
	protected $column_order = array('id_sumur', 'nama_perusahaan', 'no_sumur', 'jenis_sumur', null, null, 'tgl_ahir_sipa', 'nama_kota');
	protected $column_search = array('nama_perusahaan', 'jenis_sumur', 'no_sipa', 'tgl_ahir_sipa');
	protected $order = array('id_sumur' => 'desc');
	private $poto_sumur = [];

	public function datagrid()
	{
		$this->_get_query_data();

		if ($_POST['length'] != -1) {
			$this->db->limit($_POST['length'], $_POST['start']);
		}
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_query_data();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	function _get_query_data()
	{
		$this->db->from($this->table);
		$this->db->join('t_perusahaan b', 'b.id_perusahaan = a.id_perusahaan', 'left');
		$this->db->join('t_jenis_sumur c', 'c.id = a.id_jenis_sumur', 'left');
		$this->db->join('t_kota d', 'b.id_kota = d.id');
		$i = 0;

		foreach ($this->column_search as $item) // loop column 
		{
			if ($_POST['search']['value']) {
				if ($i === 0) {
					$this->db->group_start();
					$this->db->like($item, $_POST['search']['value']);
				} else {
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if (count($this->column_search) - 1 == $i) {
					$this->db->group_end();
				}
			}
			$i++;
		}

		if (isset($_POST['order'])) {
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} else if (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_data_byid($id)
	{
		return $this->db
			->get_where($this->table, ["id_sumur" => $id])
			->row_array();
	}

	public function get_data_cetak($filter)
	{
		if ($filter['wilayah'] != '') {
			$this->db->where('id_kota', $filter['wilayah']);
		}
		if ($filter['jenis_sumur'] != '') {
			$this->db->where('id_jenis_sumur', $filter['jenis_sumur']);
		}
		if ($filter['tgl_pendataan'] != '') {
			$this->db->where('tgl_ahir_sipa', $filter['tgl_pendataan']);
		}

		return $this->db->select('p.nama_perusahaan, k.nama_kota, s.lokasi_sumur, s.no_sumur, js.jenis_sumur, s.no_sipa, s.tgl_terbit_sipa, s.tgl_ahir_sipa, s.debit_izin, z.type_zona, DATEDIFF(s.tgl_ahir_sipa, CURRENT_DATE()) as selisih')
			->from('t_sumur s')
			->join('t_jenis_sumur js', 'js.id = s.id_jenis_sumur')
			->join('t_zona z', 'z.id = s.id_zona')
			->join('t_perusahaan p', 'p.id_perusahaan = s.id_perusahaan')
			->join('t_kota k', 'p.id_kota = k.id')
			->order_by('s.id_sumur')
			->get()->result();
	}

	public function delete($id_sumur)
	{
		return $this->db->delete('t_sumur', array('id_sumur' => $id_sumur));
	}

	public function combobox($post)
	{
		return $this->db->select('id_sumur, no_sumur')
			->get_where($this->table, [
				'id_perusahaan' => $post['id_perusahaan']
			])->result_array();
	}

	public function add()
	{
		$post = $this->input->post();

		$jml_phto = isset($_FILES['photo']) ? count($_FILES['photo']['name']) : 0;
		if ($jml_phto > 0) {
			for ($i = 0; $i < $jml_phto; $i++) {

				$_FILES['img']['name'] = $_FILES['photo']['name'][$i];
				$_FILES['img']['type'] = $_FILES['photo']['type'][$i];
				$_FILES['img']['tmp_name'] = $_FILES['photo']['tmp_name'][$i];
				$_FILES['img']['error'] = $_FILES['photo']['error'][$i];
				$_FILES['img']['size'] = $_FILES['photo']['size'][$i];

				$this->poto_sumur[] = $this->_upload('./uploads/poto_sumur/', 'jpg|jpeg|png', 'IMG_' . date('YmdHms') . $i, 'img');
			}
		}

		$data = [
			'id_perusahaan' => $post['id_perusahaan'],
			'id_jenis_sumur' => $post['id_jenis_sumur'],
			'no_sumur' => $post['no_sumur'],
			'status_izin' => $post['status_izin'],
			'no_sipa' => $post['no_sipa'],
			'sipa' => $this->_upload('./uploads/sipa/', 'pdf|xls|doc|docx|odt', 'SIPA_' . date('YmdHms'), 'file_sipa'),
			'tgl_terbit_sipa' => $this->tanggal->date_indo($post['tgl_terbit_sipa']),
			'tgl_ahir_sipa' => $this->tanggal->date_indo($post['tgl_ahir_sipa']),
			'lokasi_sumur' => $post['lokasi_sumur'],
			'poto_sumur' => json_encode($this->poto_sumur),
			'peta_lok' => $this->_upload('./uploads/peta_sumur/', 'jpg|jpeg|png|pdf', 'FILE_' . date('YmdHms'), 'peta_lokasi'),
			'kedalaman_sumur' => $post['kedalaman_sumur'],
			'hasil_uji_air' => $this->_upload('./uploads/uji_air/', 'pdf|xls|doc|docx|odt', 'UJI_' . date('YmdHms'), 'hasil_uji_air'),
			'debit_izin' => $post['debit_izin'],
			'material_pipa' => $post['material_pipa'],
			'dia_pipa_kons' => $post['dia_pipa_kons'],
			'dia_pipa_naik' => $post['dia_pipa_naik'],
			'dia_pipa_isap' => $post['dia_pipa_isap'],
			'brand_pompa' => $post['brand_pompa'],
			'no_seri_pompa' => $post['no_seri_pompa'],
			'type_pompa' => $post['type_pompa'],
			'kapasit_pompa' => $post['kapasit_pompa'],
			'posisi_pompa' => $post['posisi_pompa'],
			'brand_meter_air' => $post['brand_meter_air'],
			'no_meter_air' => $post['no_meter_air'],
			'angka_awal' => $post['angka_awal'],
			'no_tera' => $post['no_tera'],
			'tera_meter' => $this->_upload('./uploads/tera_meter/', 'pdf|xls|doc|docx|odt', 'TERA_' . date('YmdHms'), 'fiel_tera'),
			'tgl_tera' => $this->tanggal->date_indo($post['tgl_tera']),
			'tgl_ahir_tera' => $this->tanggal->date_indo($post['tgl_ahir_tera']),
			'koor_d_ls' => $post['koor_d_ls'],
			'koor_m_ls' => $post['koor_m_ls'],
			'koor_s_ls' => $post['koor_s_ls'],
			'koor_d_bt' => $post['koor_d_bt'],
			'koor_m_bt' => $post['koor_m_bt'],
			'koor_s_bt' => $post['koor_s_bt'],
			'id_zona' => $post['id_zona'],
			'muka_air_tanah' => $post['muka_air_tanah'],
			'id_user' => $this->session->userdata('id_user')
		];
		$this->db->insert('t_sumur', $data);
	}

	public function update()
	{
		$post = $this->input->post();

		$jml_phto = isset($_FILES['photo']) ? count($_FILES['photo']['name']) : 0;
		if ($jml_phto > 0) {
			for ($i = 0; $i < $jml_phto; $i++) {

				$file['img']['name'] = $_FILES['photo']['name'][$i];
				$file['img']['type'] = $_FILES['photo']['type'][$i];
				$file['img']['tmp_name'] = $_FILES['photo']['tmp_name'][$i];
				$file['img']['error'] = $_FILES['photo']['error'][$i];
				$file['img']['size'] = $_FILES['photo']['size'][$i];

				$this->poto_sumur[] = $this->_upload('./uploads/poto_sumur/', 'jpg|jpeg|png', 'IMG_' . date('YmdHms') . $i, 'img');
			}
		} else {
			$this->db->select('poto_sumur as poto');
			$this->db->where('id_sumur', $post['id_sumur']);
			$get = $this->db->get('t_sumur');
			$get_name = ($get->num_rows() > 0) ? $get->row()->poto : '';
			$poto = $get ? $get_name : '';
		}

		$data = [
			'id_perusahaan' => $post['id_perusahaan'],
			'id_jenis_sumur' => $post['id_jenis_sumur'],
			'no_sumur' => $post['no_sumur'],
			'status_izin' => $post['status_izin'],
			'no_sipa' => $post['no_sipa'],
			'sipa' => $this->_upload('./uploads/sipa/', 'pdf|xls|doc|docx|odt', 'SIPA_' . date('YmdHms'), 'file_sipa', $post['id_sumur'], 'sipa'),
			'tgl_terbit_sipa' => $this->tanggal->date_indo($post['tgl_terbit_sipa']),
			'tgl_ahir_sipa' => $this->tanggal->date_indo($post['tgl_ahir_sipa']),
			'lokasi_sumur' => $post['lokasi_sumur'],
			'poto_sumur' => ($jml_phto > 0) ? json_encode($this->poto_sumur) : $poto,
			'peta_lok' => $this->_upload('./uploads/peta_sumur/', 'jpg|jpeg|png|pdf', 'FILE_' . date('YmdHms'), 'peta_lokasi', $post['id_sumur'], 'peta_lok'),
			'kedalaman_sumur' => $post['kedalaman_sumur'],
			'hasil_uji_air' => $this->_upload('./uploads/uji_air/', 'pdf|xls|doc|docx|odt', 'UJI_' . date('YmdHms'), 'hasil_uji_air', $post['id_sumur'], 'hasil_uji_air'),
			'debit_izin' => $post['debit_izin'],
			'material_pipa' => $post['material_pipa'],
			'dia_pipa_kons' => $post['dia_pipa_kons'],
			'dia_pipa_naik' => $post['dia_pipa_naik'],
			'dia_pipa_isap' => $post['dia_pipa_isap'],
			'brand_pompa' => $post['brand_pompa'],
			'no_seri_pompa' => $post['no_seri_pompa'],
			'type_pompa' => $post['type_pompa'],
			'kapasit_pompa' => $post['kapasit_pompa'],
			'posisi_pompa' => $post['posisi_pompa'],
			'brand_meter_air' => $post['brand_meter_air'],
			'no_meter_air' => $post['no_meter_air'],
			'angka_awal' => $post['angka_awal'],
			'no_tera' => $post['no_tera'],
			'tera_meter' => $this->_upload('./uploads/tera_meter/', 'pdf|xls|doc|docx|odt', 'TERA_' . date('YmdHms'), 'fiel_tera', $post['id_sumur'], 'tera_meter'),
			'tgl_tera' => $this->tanggal->date_indo($post['tgl_tera']),
			'tgl_ahir_tera' => $this->tanggal->date_indo($post['tgl_ahir_tera']),
			'koor_d_ls' => $post['koor_d_ls'],
			'koor_m_ls' => $post['koor_m_ls'],
			'koor_s_ls' => $post['koor_s_ls'],
			'koor_d_bt' => $post['koor_d_bt'],
			'koor_m_bt' => $post['koor_m_bt'],
			'koor_s_bt' => $post['koor_s_bt'],
			'id_zona' => $post['id_zona'],
			'muka_air_tanah' => $post['muka_air_tanah'],
			'id_user' => $this->session->userdata('id_user')
		];

		$this->db->update('t_sumur', $data, [
			'id_sumur' => $post['id_sumur']
		]);
	}

	private function _upload($path = '', $type = '', $filename = '', $file = '', $id_sumur = '', $select = '')
	{
		$this->load->library('upload');
		$name = '';

		if ($file != '') {

			$zzz['upload_path'] = ($path != '' ? $path : './uploads/sipa/');
			if ($type != '') $zzz['allowed_types'] = $type;
			if ($filename != '') $zzz['file_name'] = $filename;
			$zzz['overwrite'] = true;
			$zzz['max_size']  = '20480';
			$this->upload->initialize($zzz);

			if ($this->upload->do_upload($file)) {
				$name = $this->upload->data("file_name");
			}
		}

		if ($id_sumur != '' && $name == '') {
			$this->db->select($select . ' as nama');
			$this->db->where('id_sumur', $id_sumur);
			$get = $this->db->get('t_sumur');

			$get_name = ($get->num_rows() > 0) ? $get->row()->nama : '';
			$name = $get ? $get_name : '';
		}
		return $name;
	}
}
