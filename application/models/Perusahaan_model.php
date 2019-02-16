<?php
/**
 * class model perusahaan
 */
class Perusahaan_model extends CI_Model{
	
	public function tampiPerusahaan(){
		$this->db->select('t_perusahaan.*, COUNT(t_sumur.id_sumur) AS jmlSumur, t_kota.*');
		$this->db->from('t_perusahaan');
		$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
		$this->db->join('t_sumur', 't_sumur.id_perusahaan = t_perusahaan.id_perusahaan', 'left');
		$this->db->group_by('id_perusahaan');
		$this->db->order_by('id_kota');
		
		//$this->db->where('id_kota', 'KOTA BANDUNG');
		
		return $this->db->get()->result();
	}

	public function ambilPerwilayah($wilayah){
		$this->db->select('t_perusahaan.*, COUNT(t_sumur.id_sumur) AS jmlSumur, t_kota.*');
		$this->db->from('t_perusahaan');
		$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
		$this->db->join('t_sumur', 't_sumur.id_perusahaan = t_perusahaan.id_perusahaan', 'left');
		$this->db->group_by('id_perusahaan');
		$this->db->where('t_perusahaan.id_kota', $wilayah);
		
		return $this->db->get()->result();
	}

	public function getWilayah(){
		return $this->db->get('t_kota')->result();
	}

	public function getById($id_perusahaan)
    {
        return $this->db->get_where('t_perusahaan', ["id_perusahaan" => $id_perusahaan])->row(); 
    }

	public function tampilById($id_perusahaan){
		$this->db->select('t_perusahaan.*, COUNT(t_sumur.id_sumur) AS jmlSumur, t_sumur.*, t_kota.*');
		$this->db->from('t_perusahaan');
		$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
		$this->db->join('t_sumur', 't_sumur.id_perusahaan = t_perusahaan.id_perusahaan', 'left');
		$this->db->group_by('nama_perusahaan');
		$this->db->where('t_perusahaan.id_perusahaan', $id_perusahaan);
		
		return $this->db->get()->row();
	}

	public function getJumlahSumur($wilayah){
		if($wilayah == ''){
			$this->db->select("t_perusahaan.*, COUNT(t_sumur.id_sumur) AS jmlSumur, COUNT(CASE WHEN id_jenis_sumur='2' THEN 1 END) as sm_dalam, COUNT(CASE WHEN id_jenis_sumur='1' THEN 1 END) as sm_dangkal, COUNT(CASE WHEN id_jenis_sumur='3' THEN 1 END) as sm_imbuhan,COUNT(CASE WHEN id_jenis_sumur='4' THEN 1 END) as sm_pantau, COUNT(CASE WHEN id_jenis_sumur='5' THEN 1 END) as sm_asr, COUNT(CASE WHEN id_jenis_sumur='6' THEN 1 END) as sm_resapan, t_kota.*");
			$this->db->from('t_perusahaan');
			$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
			$this->db->join('t_sumur', 't_sumur.id_perusahaan = t_perusahaan.id_perusahaan', 'left');
			$this->db->group_by('id_perusahaan');
			$this->db->order_by('id_kota');
			//$this->db->where('id_kota', $wilayah);
			
			return $this->db->get()->result();
		} else {
			$this->db->select("t_perusahaan.*, COUNT(t_sumur.id_sumur) AS jmlSumur, COUNT(CASE WHEN id_jenis_sumur='2' THEN 1 END) as sm_dalam, COUNT(CASE WHEN id_jenis_sumur='1' THEN 1 END) as sm_dangkal, COUNT(CASE WHEN id_jenis_sumur='3' THEN 1 END) as sm_imbuhan,COUNT(CASE WHEN id_jenis_sumur='4' THEN 1 END) as sm_pantau, COUNT(CASE WHEN id_jenis_sumur='5' THEN 1 END) as sm_asr, COUNT(CASE WHEN id_jenis_sumur='6' THEN 1 END) as sm_resapan, t_kota.*");
			$this->db->from('t_perusahaan');
			$this->db->join('t_kota', 't_kota.id = t_perusahaan.id_kota', 'left');
			$this->db->join('t_sumur', 't_sumur.id_perusahaan = t_perusahaan.id_perusahaan', 'left');
			$this->db->group_by('id_perusahaan');
			$this->db->order_by('id_kota');
			$this->db->where('id_kota', $wilayah);
			
			return $this->db->get()->result();
		}
	}

	public function add(){ // menambahkan data perusahaan ke database
		$post = $this->input->post();
		if(count($post) > 0){
		$data = array(
			'nama_perusahaan' => strtoupper($post["nama_perusahaan"]),
			'nama_pemilik' => strtoupper($post["nama_pemilik"]),
			'jns_usaha' => strtoupper($post["jns_usaha"]),
			'tlp_perusahaan' => $post["tlp_perusahaan"],
			'fax_perusahaan' => $post["fax_perusahaan"],
			'email' => $post["email"],
			'status_modal' => strtoupper($post["status_modal"]),
			'kontak_person' => strtoupper($post["kontak_person"]),
			'tlp_person' => $post["tlp_person"],
			'luas_area' => $post["luas_area"],
			'alamat_perusahaan' => strtoupper($post["alamat_perusahaan"]),
			'id_kota' => $post["id_kota"],
			'poto_perusahaan' => $this->_upload('./uploads/poto_perusahaan/', 'jpg|jpeg|png', 'IMG_1_'.$post["nama_perusahaan"], 'poto1'),
			'poto_perusahaan2' => $this->_upload('./uploads/poto_perusahaan/', 'jpg|jpeg|png', 'IMG_2_'.$post["nama_perusahaan"], 'poto2')
		);
		//echo json_encode($data);
		$this->db->insert('t_perusahaan', $data);
		}
	}

	public function update(){ // update data perusahaan ke database
		$post = $this->input->post();
		$data = array(
			'id_perusahaan' => $post["id_perusahaan"],
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
			'id_kota' => $post["id_kota"],
			'poto_perusahaan' => $this->_upload('./uploads/poto_perusahaan/', 'pdf|jpg|jpeg|png', 'IMG_1_'.$post["nama_perusahaan"], 'poto1', $post["id_perusahaan"], 'poto_perusahaan'),
			'poto_perusahaan2' => $this->_upload('./uploads/poto_perusahaan/', 'pdf|jpg|jpeg|png', 'IMG_2_'.$post["nama_perusahaan"], 'poto2', $post["id_perusahaan"], 'poto_perusahaan2')
		);
		//echo json_encode($data);
		$this->db->update('t_perusahaan', $data, array('id_perusahaan' => $post["id_perusahaan"]));
	}

	public function delete($id_perusahaan){
		return $this->db->delete('t_perusahaan', array('id_perusahaan' => $id_perusahaan));
	}

	public function totolPerusahaan(){
		return $this->db->get('t_perusahaan')->num_rows();
	}

	private function _upload($path='', $type='', $filename='', $file='', $id_perusahaan='', $select=''){	
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
		if($id_perusahaan != '' && $name  == '') 
		{
			$this->db->select($select .' as nama'); //ganti select dengan value nama ini bertujuan untuk mempercepat pemangilan data dari database hanya menselect satu colomn saja
			$this->db->where('id_perusahaan', $id_perusahaan);
			$get = $this->db->get('t_perusahaan');
			//ganti nama menjadi row dari colom nama database jika get berhasil dan jumlah row dari pemangilan dari database melebih dari 0 jika tidak kembali nilai ''
			$name =($get ? ($get->num_rows() > 0 ? $get->row()->nama : '') : '');
		}
		return $name; //kemabli nilai $nama
	}
}