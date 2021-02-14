<?php
  header("Content-type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=data_sumur.xls");
  header("Pragma: no-cache");
  header("Expires: 0");

  $this->load->view('sumur/export/cetak');
?>
