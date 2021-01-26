<?php
header("Content-type: application/vnd.ms-excel");
//   header("Content-Disposition: attachment; filename=data_perusahaan.xls");
header("Pragma: no-cache");
header("Expires: 0");
ini_set("memory_limit", "512M");
ini_set('max_execution_time', 300);
set_time_limit(300);

$this->load->view('perusahaan/export/cetakan');
