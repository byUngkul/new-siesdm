<?php

class Hitung_model extends CI_Model{
    // get jumlah total sumur
    public function getTotSumur($wil){
        if($wil == ''){
            $this->db->select('no_sumur');
            $this->db->from('t_sumur');
            $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
            //$this->db->where('id_kota', $wil);
            return $this->db->get('');
        } else {
            $this->db->select('no_sumur');
            $this->db->from('t_sumur');
            $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
            $this->db->where('id_kota', $wil);
            return $this->db->get('');
        }
    }
    // get jumlah total sumur
    public function getTotSumurByZona($wil, $zona){
        if($wil == ''){
            $this->db->select('no_sumur');
            $this->db->from('t_sumur');
            $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
            $this->db->where('id_zona', $zona);
            return $this->db->get('');
        } else {
            $this->db->select('no_sumur');
            $this->db->from('t_sumur');
            $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
            $this->db->where('id_zona', $zona);
            $this->db->where('id_kota', $wil);
            return $this->db->get('');
        }
    }
    // get jumlah total sumur
    public function getTotSumurByPrs($wil, $prs){
        if($wil == ''){
            $this->db->select('no_sumur');
            $this->db->from('t_sumur');
            $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
            $this->db->where('t_sumur.id_perusahaan', $prs);
            return $this->db->get('');
        } else {
            $this->db->select('no_sumur');
            $this->db->from('t_sumur');
            $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
            $this->db->where('t_sumur.id_perusahaan', $prs);
            $this->db->where('id_kota', $wil);
            return $this->db->get('');
        }
    }

    // get jumlah total sumur
    public function getTotSumurByEndSipa($wil){
        if($wil == ''){
            $this->db->select('no_sumur');
            $this->db->from('t_sumur');
            $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
            $this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) <= 90');
		    $this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) >= 0');
            return $this->db->get('');
        } else {
            $this->db->select('no_sumur');
            $this->db->from('t_sumur');
            $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
            $this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) <= 90');
		    $this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) >= 0');
            $this->db->where('id_kota', $wil);
            return $this->db->get('');
        }
    }

    // get jumlah total sumur
    public function getTotSumurByEndTera($wil){
        if($wil == ''){
            $this->db->select('no_sumur');
            $this->db->from('t_sumur');
            $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
            $this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) <= 30');
			$this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) >= 0');
            return $this->db->get('');
        } else {
            $this->db->select('no_sumur');
            $this->db->from('t_sumur');
            $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
            $this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) <= 30');
			$this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) >= 0');
            $this->db->where('id_kota', $wil);
            return $this->db->get('');
        }
    }

    // get sumur per jenis
    public function getJenisSumur($jns = '', $wil = ''){
       if ($wil == '') {
        $this->db->select('*');
        $this->db->from('t_sumur');
        $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
        $this->db->where('id_jenis_sumur', $jns);
        //$this->db->where('id_kota', $wil);
        return $this->db->get();
       } else {
        $this->db->select('*');
        $this->db->from('t_sumur');
        $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
        $this->db->where('id_jenis_sumur', $jns);
        $this->db->where('id_kota', $wil);
        return $this->db->get();
       }  
    }

    // filter by zona
    public function getJenisSumurZona($jns = '', $wil = '', $zona = ''){
        if ($wil == '') {
         $this->db->select('*');
         $this->db->from('t_sumur');
         $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
         $this->db->where('id_jenis_sumur', $jns);
         $this->db->where('id_zona', $zona);
         //$this->db->where('id_kota', $wil);
         return $this->db->get();
        } else {
         $this->db->select('*');
         $this->db->from('t_sumur');
         $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
         $this->db->where('id_jenis_sumur', $jns);
         $this->db->where('id_kota', $wil);
         $this->db->where('id_zona', $zona);
         return $this->db->get();
        }  
    }

     // filter by zona
    public function getJenisSumurPrs($jns = '', $wil = '', $prs = ''){
        if ($wil == '') {
         $this->db->select('*');
         $this->db->from('t_sumur');
         $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
         $this->db->where('id_jenis_sumur', $jns);
         $this->db->where('t_sumur.id_perusahaan', $prs);
         //$this->db->where('id_kota', $wil);
         return $this->db->get();
        } else {
         $this->db->select('*');
         $this->db->from('t_sumur');
         $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
         $this->db->where('id_jenis_sumur', $jns);
         $this->db->where('id_kota', $wil);
         $this->db->where('t_sumur.id_perusahaan', $prs);
         return $this->db->get();
        }  
    }

     // filter by zona
     public function getJenisSumurEndSipa($jns = '', $wil = ''){
        if ($wil == '') {
         $this->db->select('*');
         $this->db->from('t_sumur');
         $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
         $this->db->where('id_jenis_sumur', $jns);
         $this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) <= 90');
		 $this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) >= 0');
         //$this->db->where('id_kota', $wil);
         return $this->db->get();
        } else {
         $this->db->select('*');
         $this->db->from('t_sumur');
         $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
         $this->db->where('id_jenis_sumur', $jns);
         $this->db->where('id_kota', $wil);
         $this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) <= 90');
		 $this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) >= 0');
         return $this->db->get();
        }  
     }

     // filter by zona
     public function getJenisSumurEndTera($jns = '', $wil = ''){
        if ($wil == '') {
         $this->db->select('*');
         $this->db->from('t_sumur');
         $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
         $this->db->where('id_jenis_sumur', $jns);
         $this->db->where('t_sumur.id_perusahaan', $prs);
         $this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) <= 30');
		 $this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) >= 0');
         //$this->db->where('id_kota', $wil);
         return $this->db->get();
        } else {
         $this->db->select('*');
         $this->db->from('t_sumur');
         $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
         $this->db->where('id_jenis_sumur', $jns);
         $this->db->where('id_kota', $wil);
         $this->db->where('t_sumur.id_perusahaan', $prs);
         $this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) <= 30');
		 $this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) >= 0');
         return $this->db->get();
        }  
     }

    // get Total perusahaan
    public function getPerusahaan($wil){
          if($wil == ""){
            return $this->db->get('t_perusahaan');
          } else {
            return $this->db->get_where('t_perusahaan', ["id_kota" => $wil]);
          } 
    }

    // get Total perusahaan
    public function getPerusahaanByZona($wil, $zona){
        if($wil == ""){
            $this->db->select('*');
            $this->db->from('t_sumur');
            $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
            //$this->db->where('id_jenis_sumur', $jns);
            $this->db->where('id_zona', $zona);
            $this->db->group_by('t_sumur.id_perusahaan');
            //$this->db->where('id_kota', $wil);
            return $this->db->get();
        } else {
            $this->db->select('*');
            $this->db->from('t_sumur');
            $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
            //$this->db->where('id_jenis_sumur', $jns);
            $this->db->where('id_zona', $zona);
            $this->db->group_by('t_sumur.id_perusahaan');
            $this->db->where('id_kota', $wil);
            return $this->db->get();
        } 
    }

    // get Total perusahaan
    public function getPerusahaanByPrs($wil, $prs){
        if($wil == ""){
            $this->db->select('*');
            $this->db->from('t_sumur');
            $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
            //$this->db->where('id_jenis_sumur', $jns);
            $this->db->where('t_sumur.id_perusahaan', $prs);
            $this->db->group_by('t_sumur.id_perusahaan');
            //$this->db->where('id_kota', $wil);
            return $this->db->get();
        } else {
            $this->db->select('*');
            $this->db->from('t_sumur');
            $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
            //$this->db->where('id_jenis_sumur', $jns);
            $this->db->where('t_sumur.id_perusahaan', $prs);
            $this->db->group_by('t_sumur.id_perusahaan');
            $this->db->where('id_kota', $wil);
            return $this->db->get();
        } 
    }

    // get Total perusahaan
    public function getPerusahaanByEndSipa($wil){
        if($wil == ""){
            $this->db->select('*');
            $this->db->from('t_sumur');
            $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
            //$this->db->where('id_jenis_sumur', $jns);
            $this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) <= 90');
		    $this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) >= 0');
            $this->db->group_by('t_sumur.id_perusahaan');
            //$this->db->where('id_kota', $wil);
            return $this->db->get();
        } else {
            $this->db->select('*');
            $this->db->from('t_sumur');
            $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
            //$this->db->where('id_jenis_sumur', $jns);
            $this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) <= 90');
		    $this->db->where('DATEDIFF(t_sumur.tgl_ahir_sipa, CURRENT_DATE()) >= 0');
            $this->db->group_by('t_sumur.id_perusahaan');
            $this->db->where('id_kota', $wil);
            return $this->db->get();
        } 
    }

    // get Total perusahaan
    public function getPerusahaanByEndTera($wil){
        if($wil == ""){
            $this->db->select('*');
            $this->db->from('t_sumur');
            $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
            //$this->db->where('id_jenis_sumur', $jns);
            $this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) <= 30');
			$this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) >= 0');
            $this->db->group_by('t_sumur.id_perusahaan');
            //$this->db->where('id_kota', $wil);
            return $this->db->get();
        } else {
            $this->db->select('*');
            $this->db->from('t_sumur');
            $this->db->join('t_perusahaan', 't_perusahaan.id_perusahaan = t_sumur.id_perusahaan', 'left');
            //$this->db->where('id_jenis_sumur', $jns);
            $this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) <= 30');
		    $this->db->where('DATEDIFF(t_sumur.tgl_ahir_tera, CURRENT_DATE()) >= 0');
            $this->db->group_by('t_sumur.id_perusahaan');
            $this->db->where('id_kota', $wil);
            return $this->db->get();
        } 
    }
}
