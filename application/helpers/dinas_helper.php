<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function dinas_helper()
{
    $CI = &get_instance();
    $CI->load->model('dinas_m');
    return $CI->dinas_m->get_data()
        ->row_array();
}
