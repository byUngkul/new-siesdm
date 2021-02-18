<?php

class Perusahaan_model extends CI_Model
{

	protected $table = 't_perusahaan p';
	protected $column_order = array(null, 'nama_perusahaan', 'nama_pemilik', 'jns_usaha', 'alamat_perusahaan', 'nama_kota');
	protected $column_search = array('nama_perusahaan', 'nama_pemilik', 'nama_kota', 'alamat_perusahaan');
	protected $order = array('id_perusahaan' => 'asc');

	public function _get_query_data()
	{
		$this->db->from($this->table);
		$this->db->join('t_kota k', 'p.id_kota = k.id');
		$i = 0;

		foreach ($this->column_search as $item) // loop column 
		{
			if ($_POST['search']['value']) // if datatable send POST for search
			{

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

	function get_data()
	{
		$this->_get_query_data();

		if ($_POST['length'] != -1) {
			$this->db->limit($_POST['length'], $_POST['start']);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_alldata($param = null)
	{
		if (isset($param['wilayah']) && $param['wilayah'] != '') {
			$this->db->where('id_kota', $param['wilayah']);
		}

		if (isset($param['status_modal']) && $param['status_modal'] != '') {
			$this->db->where('status_modal', $param['status_modal']);
		}

		if (isset($param['tgl_pendataan']) && $param['tgl_pendataan'] != '') {
			$this->db->where("DATE_FORMAT(created_at, '%d-%m-%Y') =", $param['tgl_pendataan']);
		}
		$this->db->select('*')
			->join('t_kota', 'id = id_kota');

		return $this->db->get('t_perusahaan');
	}

	public function get_data_byId($id)
	{
		return $this->db
			->get_where($this->table, ["id_perusahaan" => $id])
			->row_array();
	}

	public function get_detile_data($id)
	{
		return	$this->db->select('*')->from($this->table)
			->join('t_kota k', 'p.id_kota = k.id')
			->where('id_perusahaan', $id)
			->get()->row_array();
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

	public function add()
	{
		$post = $this->input->post();

		if (count($post) > 0) {
			$prsh_poto = [];
			$jml_phto = isset($_FILES['photo']) ? count($_FILES['photo']['name']) : 0;

			if ($jml_phto > 0) {
				for ($i = 0; $i < $jml_phto; $i++) {

					$file['photo']['name'] = $_FILES['photo']['name'][$i];
					$file['photo']['type'] = $_FILES['photo']['type'][$i];
					$file['photo']['tmp_name'] = $_FILES['photo']['tmp_name'][$i];
					$file['photo']['error'] = $_FILES['photo']['error'][$i];
					$file['photo']['size'] = $_FILES['photo']['size'][$i];

					$prsh_poto[] = $this->_upload('./uploads/poto_perusahaan/', 'jpg|jpeg|png', 'IMG_' . date('YmdHms') . $i, $file);
				}
			}

			$data = array(
				'nama_perusahaan' => strtoupper($post["nama_perusahaan"]),
				'nama_pemilik' => strtoupper($post["nama_pemilik"]),
				'jns_usaha' => strtoupper($post["jns_usaha"]),
				'tlp_perusahaan' => $post["tlp_perusahaan"],
				'fax_perusahaan' => $post["fax_perusahaan"],
				'email' => $post["email"],
				'status_modal' => $post["status_modal"],
				'kontak_person' => strtoupper($post["kontak_person"]),
				'tlp_person' => $post["tlp_person"],
				'luas_area' => $post["luas_area"],
				'alamat_perusahaan' => $post["alamat_perusahaan"],
				'id_kota' => $post["wilayah"],
				'poto_perusahaan' => json_encode($prsh_poto),
				'input_by' => $this->session->userdata('id_user'),
				'created_at' => date('Y-m-d H:m:s', time())
			);

			$this->db->insert('t_perusahaan', $data);
		}
	}

	public function update()
	{
		$post = $this->input->post();

		$data = array(
			// 'id_perusahaan' => $post["id_perusahaan"],
			'nama_perusahaan' => strtoupper($post["nama_perusahaan"]),
			'nama_pemilik' => strtoupper($post["nama_pemilik"]),
			'jns_usaha' => strtoupper($post["jns_usaha"]),
			'tlp_perusahaan' => $post["tlp_perusahaan"],
			'fax_perusahaan' => $post["fax_perusahaan"],
			'email' => $post["email"],
			'status_modal' => $post["status_modal"],
			'kontak_person' => strtoupper($post["kontak_person"]),
			'tlp_person' => $post["tlp_person"],
			'luas_area' => $post["luas_area"],
			'alamat_perusahaan' => strtoupper($post["alamat_perusahaan"]),
			'id_kota' => $post["wilayah"],
			'input_by' => $this->session->userdata('id_user'),
			'updated_at' => date('Y-m-d H:m:s', time())
			// 'poto_perusahaan' => $this->_upload('./uploads/poto_perusahaan/', 'pdf|jpg|jpeg|png', 'IMG_1_' . $post["nama_perusahaan"], 'poto1', $post["id_perusahaan"], 'poto_perusahaan'),
			// 'poto_perusahaan2' => $this->_upload('./uploads/poto_perusahaan/', 'pdf|jpg|jpeg|png', 'IMG_2_' . $post["nama_perusahaan"], 'poto2', $post["id_perusahaan"], 'poto_perusahaan2')
		);

		$this->db->update('t_perusahaan', $data, array('id_perusahaan' => $post["id_perusahaan"]));
	}

	public function delete($id_perusahaan)
	{
		return $this->db->delete('t_perusahaan', array('id_perusahaan' => $id_perusahaan));
	}

	public function totolPerusahaan()
	{
		return $this->db->get('t_perusahaan')->num_rows();
	}

	private function _upload($path = '', $type = '', $filename = '', $file = '', $id_perusahaan = '', $select = '')
	{
		$this->load->library('upload');
		$name = '';

		if ($file != '') {
			$_FILES['file']['type'] = $file['photo']['type'];
			$_FILES['file']['tmp_name'] = $file['photo']['tmp_name'];
			$_FILES['file']['error'] = $file['photo']['error'];
			$_FILES['file']['size'] = $file['photo']['size'];
			$_FILES['file']['name'] = $file['photo']['name'];

			$zzz['upload_path'] = ($path != '' ? $path : './uploads/sipa/');
			if ($type != '') $zzz['allowed_types'] = $type;
			if ($filename != '') $zzz['file_name'] = $filename;
			$zzz['overwrite'] = true;
			$zzz['max_size']  = '20480';
			$this->upload->initialize($zzz);

			if ($this->upload->do_upload('file')) {
				$name = $this->upload->data("file_name"); //jika upload berhasil ganti value nama dari file yg di upload
			}
		}

		if ($id_perusahaan != '' && $name == '') {
			$this->db->select($select . ' as nama'); //ganti select dengan value nama ini bertujuan untuk mempercepat pemangilan data dari database hanya menselect satu colomn saja
			$this->db->where('id_perusahaan', $id_perusahaan);
			$get = $this->db->get('t_perusahaan');
			//ganti nama menjadi row dari colom nama database jika get berhasil dan jumlah row dari pemangilan dari database melebih dari 0 jika tidak kembali nilai ''
			$get_name = ($get->num_rows() > 0) ? $get->row()->nama : '';
			$name = $get ? $get_name : '';
		}
		return $name;
	}
}
