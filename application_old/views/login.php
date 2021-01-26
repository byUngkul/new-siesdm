<!DOCTYPE html>
<html>
<head>
  
  <!-- star header -->
  <?php $this->load->view('_partial/header'); ?>

</head>
<body class="hold-transition login-page">
<div>
<a href="<?=base_url();?>login/display" class="btn btn-default btn-sm">Lihan Info</a>
</div>
<div class="login-box">
    
  <div class="login-logo">
    <img src="<?=base_url();?>assets/dist/img/logo-jabar.png" style="width: 180px;"><br>
    <a href="#"><b>Si</b>ESDM</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Masukan Username & Password anda!</p>
  
    <?php echo $this->session->flashdata('msg'); ?>

    <form action="<?php echo base_url().'index.php/login/auth'?>" method="post">
      <div class="form-group has-feedback">
        <input type="username" name="username" class="form-control" placeholder="User Name" required autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<?php $this->load->view('_partial/js'); ?>
</body>
</html>
