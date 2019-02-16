<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kota_model extends CI_Model {
  
  public function getData(){
    $result = $this->db->get('t_kota')->result(); // Tampilkan semua data kota berdasarkan id provinsi
    
    return $result; 
  }
}