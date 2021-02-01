<?php

class Sumur_model extends CI_Model
{

	protected $table = 't_sumur a';
	protected $column_order = array(null, 'nama_perusahaan', 'jenis_sumur', 'no_sipa', 'tgl_ahir_sipa');
	protected $column_search = array('nama_perusahaan', 'jenis_sumur', 'no_sipa', 'tgl_ahir_sipa');
	protected $order = array('id_sumur' => 'asc');

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

	public function add()
	{
		$post = $this->input->post();

		if (count($post) > 0) {
			$data = array(
				'id_perusahaan'   => $post["id_perusahaan"],
				'id_jenis_sumur'  => $post["id_jenis_sumur"],
				'id_zona'         => $post["id_zona"],
				'no_sumur'        => strtoupper($post["no_sumur"]),
				'status_izin'     => $post["stauts_izin"],
				'no_sipa'         => $post["no_sipa"],
				'sipa'            => $this->_upload('./uploads/sipa/', 'pdf|doc|docx|zip', 'SIPA_' . $val, 'file_sipa'),
				'tgl_terbit_sipa' => ($post["tgl_terbit_sipa"]) ? date('Y-m-d', strtotime($post["tgl_terbit_sipa"])) : '',
				'tgl_ahir_sipa'   => ($post["tgl_ahir_sipa"]) ? date('Y-m-d', strtotime($post["tgl_ahir_sipa"])) : '',
				'lokasi_sumur'    => strtoupper($post["lokasi_sumur"]),
				'poto_sumur'      => $this->_upload('./uploads/poto_sumur/', 'jpg|jpeg|png', 'IMG_' . $val, 'poto_sumur'),
				'peta_lok'        => $this->_upload('./uploads/peta_sumur/', 'pdf|doc|docx|jpg|jpeg|png|zip', 'PETA_' . $val, 'peta_lok'),
				'hasil_uji_air'   => $this->_upload('./uploads/uji_air/', 'pdf|doc|docx|jpg|jpeg|png|zip', 'UJI_' . $val, 'hasil_uji_air'),
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
				'tera_meter'      => $this->_upload('./uploads/tera_meter/', 'pdf|doc|docx|jpg|jpeg|png|zip', 'TERA_' . $val, 'tera'),
				'tgl_tera'        => ($post["tgl_tera"]) ? date('Y-m-d', strtotime($post["tgl_tera"])) : '',
				'tgl_ahir_tera'   => ($post["tgl_ahir_tera"]) ? date('Y-m-d', strtotime($post["tgl_ahir_tera"])) : '',
				'koor_d_ls'       => $post["koor_d_ls"],
				'koor_m_ls'       => $post["koor_m_ls"],
				'koor_s_ls'       => $post["koor_s_ls"],
				'koor_d_bt'       => $post["koor_d_bt"],
				'koor_m_bt'       => $post["koor_m_bt"],
				'koor_s_bt'       => $post["koor_s_bt"]
			);
			//echo json_encode($data);
			$this->db->insert('t_sumur', $data);
		} //echo json_encode($data);
	}

	public function update()
	{ // update data sumur
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
			'sipa'            => $this->_upload('./uploads/sipa/', 'pdf|doc|doc|zip', 'SIPA_' . $val, 'file_sipa', $post["id_sumur"], 'sipa'),
			'status_izin'     => $post["status_izin"],
			'tgl_terbit_sipa' => ($post["tgl_terbit_sipa"]) ? date('Y-m-d', strtotime($post["tgl_terbit_sipa"])) : '',
			'tgl_ahir_sipa'   => ($post["tgl_ahir_sipa"]) ? date('Y-m-d', strtotime($post["tgl_ahir_sipa"])) : '',
			'lokasi_sumur'    => strtoupper($post["lokasi_sumur"]),
			'poto_sumur'      => $this->_upload('./uploads/poto_sumur/', 'pdf|jpg|jpeg|png', 'IMG_' . $val, 'poto_sumur', $post["id_sumur"], 'poto_sumur'),
			'peta_lok'        => $this->_upload('./uploads/peta_sumur/', 'pdf|doc|docx|jpg|jpeg|png|zip', 'PETA_' . $val, 'peta_lok', $post["id_sumur"], 'peta_lok'),
			'hasil_uji_air'   => $this->_upload('./uploads/uji_air/', 'pdf|doc|docx|jpg|jpeg|png|zip', 'UJI_AIR_' . $val, 'hasil_uji_air', $post["id_sumur"], 'hasil_uji_air'),
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
			'tera_meter'      => $this->_upload('./uploads/tera_meter/', 'pdf|doc|docx|jpg|jpeg|png|zip', 'TERA_' . $val, 'tera', $post["id_sumur"], 'tera_meter'),
			'tgl_tera'        => ($post["tgl_tera"]) ? date('Y-m-d', strtotime($post["tgl_tera"])) : '',
			'tgl_ahir_tera'   => ($post["tgl_ahir_tera"]) ? date('Y-m-d', strtotime($post["tgl_ahir_tera"])) : '',
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

	public function delete($id_sumur)
	{
		return $this->db->delete('t_sumur', array('id_sumur' => $id_sumur));
	}
}
