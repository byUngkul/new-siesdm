<?php
  header("Content-type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=$ket.xls");
  header("Pragma: no-cache");
  header("Expires: 0");

  $this->load->view('perusahaan/cetak_detile');
    
  //include("donjo-app/views/sid/kependudukan/penduduk_print.php");
?>