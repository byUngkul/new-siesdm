<?php
defined('BASEPATH') || exit('No direct script access allowd');

class Pegawai_model extends CI_Model
{
    protected $table = 't_pegawai';
    public function get_all_data()
    {
        return $this->db->get($this->table)
            ->result_array();
    }
}
