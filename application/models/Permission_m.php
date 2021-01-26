<?php

class Permission_m extends CI_Model
{

    public function get_data_permission()
    {
        return $this->db->get('t_permission')->result_array();
    }

    public function get_data_menu()
    {
        return  $this->db->get('t_menu')->result_array();
    }
}
