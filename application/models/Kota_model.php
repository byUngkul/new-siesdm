<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kota_model extends CI_Model {
  
  public function getData(){
    return $this->db
            ->get('t_kota')
            ->result(); 
  }
}