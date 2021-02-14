<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Dinas_m extends CI_Model {

    public function get_data()
    {
        return $this->db->get('t_dinas');
    }

    public function update()
    {
        $post = $this->input->post();
        $data = [
            'nama_dinas' => $post['nama_dinas'],
            'singkatan_dinas' => $post['singkatan_dinas'],
            'cabang_dinas' => $post['cabang_dinas'],
            'alamat_dinas' => $post['alamat_dinas'],
            'logo_dinas' => $this->_upload('./uploads/logo/', 'pdf|jpg|jpeg|png', 'IMG_1_' . $post["nama_perusahaan"], 'logo', $post["id_perusahaan"], 'logo_dinas')
        ];

        $this->db->update('t_dinas', $data,array('id_dinas' => $post['id_dinas']));
    }

    private function _upload($path = '', $type = '', $filename = '', $file = '', $id_perusahaan = '', $select = '')
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
				$name = $this->upload->data("file_name"); //jika upload berhasil ganti value nama dari file yg di upload
			}
		}
		
		if ($id_perusahaan != '' && $name == '') {
			$this->db->select($select . ' as nama'); 
			$this->db->where('id_dinas', $id_perusahaan);
			$get = $this->db->get('t_dinas');
			//ganti nama menjadi row dari colom nama database jika get berhasil dan jumlah row dari pemangilan dari database melebih dari 0 jika tidak kembali nilai ''
			$get_name = ($get->num_rows() > 0) ? $get->row()->nama : '';
			$name = $get ? $get_name : '';
		}
		return str_replace('./', '', $path).$name;
	}
}
