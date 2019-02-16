<section class="content">
  <div class="row">
    <div class="col-xs-12">
     <!-- star card -->
     <div class="row">
      <div class="col-xs-5">
         <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title"></h3>
            <img src="<?=base_url('assets/dist/img/logo-jabar.png')?>" style="width: 150px">
          </div>
          <div class="box-body">
            <h2>Dinas Energi Sumber Daya Mineral - ESDM Cabang III Bandung</h2>
            <h4>Selamat datang <strong><?php echo $this->session->userdata('ses_nama');?></strong></h4>

          </div>
         </div>
        <!-- /.box-body -->
      </div>

      <div class="col-xs-7">

          <!-- box jumlah sumur-->
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $jml_sumur;?></h3>

                <p>Total Sumur</p>
              </div>
              <div class="icon">
                <i class="fa fa-bar-chart-o"></i>
              </div>
              <a href="<?=base_url('sumur')?>" class="small-box-footer">
                Lihat <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->

          <!-- box jumlah perusahaan -->
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo $jml_perusahaan;?></h3>

                <p>Total Perusahaan</p>
              </div>
              <div class="icon">
                <i class="fa fa-bar-chart-o"></i>
              </div>
              <a href="<?=base_url('perusahaan')?>" class="small-box-footer">
                Lihat <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo $sipa_hampir_habis;?></h3>

                <p>Izin yang akan habis</p>
              </div>
              <div class="icon">
                <i class="fa fa-warning"></i>
              </div>
              <a href="<?=base_url('sumur?filter1=3&wilayah=&perusahaan=&izin=1&jns_sumur=')?>" class="small-box-footer">
                Lihat <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo $tera_hampir_habis;?></h3>

                <p>Tera Meter Air</p>
              </div>
              <div class="icon">
                <i class="fa fa-warning"></i>
              </div>
              <a href="<?=base_url('sumur?filter1=3&wilayah=&perusahaan=&izin=2&jns_sumur=')?>" class="small-box-footer">
                Lihat <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $sipa_sudah_habis;?></h3>

                <p>Total Izin SIPA Habis</p>
              </div>
              <div class="icon">
                <i class="fa fa-times-circle"></i>
              </div>
              <a href="<?=base_url('sumur')?>" class="small-box-footer">
                Lihat <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $tera_sudah_habis;?></h3>

                <p>Masa Tera Meter Habis</p>
              </div>
              <div class="icon">
                <i class="fa fa-times-circle"></i>
              </div>
              <a href="<?=base_url('sumur')?>" class="small-box-footer">
                Lihat <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          
      </div>
    </div>

    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->