<?php 
defined('BASEPATH') || exit('No direct script access allowed');

class Tanggal
{
    public function date_indo($date)
    {
        return date('Y-m-d', strtotime($date));
    }
}