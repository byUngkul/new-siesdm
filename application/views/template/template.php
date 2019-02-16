<!DOCTYPE html>
<html>
<head>
  <!-- star header -->
  <?php $this->load->view('_partial/header'); ?>
  <!-- end header -->

  
  </style>
</style>
</head>
<body class="hold-transition skin-purple-light sidebar-collapse sidebar-mini">
<div class="wrapper">

  <!-- star header -->
  <?php $this->load->view('_partial/nav'); ?>
  <!-- end header -->

  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('_partial/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <?php $this->load->view('_partial/breadcrumb'); ?>  

    <!-- Main content -->
      
          <?php $this->load->view($content); ?>          
          
  </div>
  <!-- /.content-wrapper -->
  
  <?php $this->load->view('_partial/footer'); ?>
  <!-- /.footer -->

  <!-- Control Sidebar -->
  <?php //$this->load->view('_partial/control_sidebar'); ?>
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- JavaScript Plugin -->
<?php $this->load->view('_partial/js'); ?>
</body>
</html>