<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SiESDM - <?= $title; ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url() ?>/public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url() ?>/public/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/public/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!-- Sweetalert -->
  <link rel="stylesheet" href="<?= base_url() ?>/public/vendor/sweetalert2/dist/sweetalert2.min.css">
  <!-- Lightbox -->
  <link rel="stylesheet" href="<?= base_url() ?>public/vendor/lightbox/lightbox.min.css">
  <!-- datepicker -->
  <link rel="stylesheet" href="<?= base_url() ?>public/vendor/datepicker/css/bootstrap-datepicker.min.css">
  <!-- BVSelect -->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/vendor/sv-select/css/bvselect.css">
  <style>
    tbody {
      font-weight: 300;
      font-size: 12px;
    }
  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('_block/sidebar'); ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view('_block/topbar'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <?php $this->load->view($view); ?>
        </div>

        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url() ?>/public/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?= base_url() ?>/public/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?= base_url() ?>/public/js/sb-admin-2.min.js"></script>
  <!-- Page level plugins -->
  <!-- <script src="<?= base_url() ?>/public/vendor/chart.js/Chart.min.js"></script> -->
  <!-- Page level custom scripts -->
  <!-- <script src="<?= base_url() ?>/public/js/demo/chart-area-demo.js"></script> -->
  <!-- <script src="<?= base_url() ?>/public/js/demo/chart-pie-demo.js"></script> -->
  <!-- Page level plugins -->
  <script src="<?= base_url() ?>public/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>public/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- Sweetalert2 -->
  <script src="<?= base_url() ?>public/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
  <!-- lightbox -->
  <script src="<?= base_url() ?>public/vendor/lightbox/lightbox.min.js"></script>
  <!-- BVSelect -->
  <script src="<?= base_url() ?>public/vendor/sv-select/js/bvselect.js"></script>
  <!-- supermask -->
  <script src="<?= base_url() ?>public/vendor/supermask/index.js"></script>
  <!-- datepicker -->
  <script src="<?= base_url() ?>public/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Page level custom scripts -->
  <!-- <script src="<?= base_url() ?>/public/js/demo/datatables-demo.js"></script> -->

  <?php isset($js_file) ? $this->load->view($js_file) : ''; ?>

  <script type="text/javascript">
    $(document).ready(() => {
      <?php if ($this->session->flashdata('welcome')) : ?>
        Swal.fire({
          // position: 'top-end',
          icon: 'success',
          title: '<?= $this->session->flashdata('welcome') ?>',
          showConfirmButton: false,
          timer: 2000
        });
      <?php endif; ?>

			<?php if ($this->session->flashdata('no_permit')) : ?>
				Swal.fire({
          // position: 'top-end',
          icon: 'warning',
          title: '<?= $this->session->flashdata('no_permit') ?>',
          showConfirmButton: false,
          timer: 2000
        });
			<?php endif; ?>
    })
  </script>
</body>

</html>
