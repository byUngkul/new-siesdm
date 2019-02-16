<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <!-- star card --> 
      <div class="box box-primary ">
        <div class="box-header with-border">
          <button onclick="history.go(-1);" class="btn btn-success btn-flat btn-social btn-sm"><i class="fa fa-arrow-left"></i>Kembali ke Daftar Perusahaan</button>
          <a type="button" target="_blank" href="<?php echo site_url("perusahaan/cetakDetile/$datas->id_perusahaan")?>" class="btn btn-default btn-flat btn-social btn-sm pull-right"><i class="fa fa-print"></i>Cetak</a>
          <a type="button" target="_blank" href="<?php echo site_url("perusahaan/excelDetile/$datas->id_perusahaan")?>" class="btn btn-default btn-flat btn-social btn-sm pull-right"><i class="fa fa-file-excel-o"></i>Export ke Excel</a>
        </div>
        <div class="box-header with-border col-xs-12 text-center">
          <h3 class="box-title">Data Perusahaan </h3><br>
          <h2 class="box-title"><b><?=$datas->nama_perusahaan?></b></h2>
        </div>
        <div class="box-body">
          <form role="form" class="col-xs-8">
            <div class="box-body table-responsive ">
              <table class="table table-striped table-bordered table-hover">
                <tr>
                  <th colspan="3"><label for="">DATA UMUM</label></th>
                </tr>
                <tr>
                  <td class="col-sm-3">Nama Perusahaan</td>
                  <td style="width: 10px"><b>:</b></td>
                  <td class="col-sm-10"><strong><?=$datas->nama_perusahaan?></strong></td>
                </tr>
                <tr>
                  <td class="col-sm-3">Direktur</td>
                  <td style="width: 10px"><b>:</b></td>
                  <td class="col-sm-10"><?=$datas->nama_pemilik?></td>
                </tr>
                <tr>
                  <td class="col-sm-3">Bidang Usaha</td>
                  <td style="width: 10px"><b>:</b></td>
                  <td class="col-sm-10"><?=$datas->jns_usaha?></td>
                </tr>

                <tr>
                  <td class="col-sm-3">Wilayah</td>
                  <td style="width: 10px"><b>:</b></td>
                  <td><?=$datas->nama_kota?></td>
                </tr>

                <tr>
                  <td class="col-sm-3">Alamat Perusahaan</td>
                  <td style="width: 10px"><b>:</b></td>
                  <td><?=$datas->alamat_perusahaan?></td>
                </tr>

                <tr>
                  <td class="col-sm-3">Status Perusahaan</td>
                  <td style="width: 10px"><b>:</b></td>
                  <td class="col-sm-10"><?=$datas->status_modal?></td>
                </tr>
                <tr>
                  <td class="col-sm-3">Jumlah Kepemilikan Sumur</td>
                  <td style="width: 10px"><b>:</b></td>
                  <td class="col-sm-10"><?=$datas->jmlSumur?></td>
                </tr>
                <tr>
                  <td class="col-sm-3">Telp</td>
                  <td style="width: 10px"><b>:</b></td>
                  <td><?=$datas->tlp_perusahaan?></td>
                </tr>
                <tr>
                  <td class="col-sm-3">Fax</td>
                  <td style="width: 10px"><b>:</b></td>
                  <td><?=$datas->fax_perusahaan?></td>
                </tr>
                <tr>
                  <td class="col-sm-3">E-mail</td>
                  <td style="width: 10px"><b>:</b></td>
                  <td><?=$datas->email?></td>
                </tr>
                <tr>
                  <td class="col-sm-3">Kontak Person</td>
                  <td style="width: 10px"><b>:</b></td>
                  <td class="col-sm-10"><?=$datas->kontak_person?></td>
                </tr>
                <tr>
                  <td class="col-sm-3">Telp / HP Kontak Person</td>
                  <td style="width: 10px"><b>:</b></td>
                  <td><?=$datas->tlp_person?></td>
                </tr>

              </table>
            </div>
          </form>
          <div class="col-xs-3">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Carousel Indikator -->
              <ol class="carousel-indicators">
                <li data-target="carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="carousel-example-generic" data-slide-to="1"></li>
              </ol>
              
              <!-- Wrapper for Slide -->
              <div class="carousel-inner">
                  <div class="item active">
                    <img src="<?php echo base_url('uploads/poto_perusahaan/'.$datas->poto_perusahaan)?>" class="img-thumbnail" width="250" alt="Slide 1">
                      
                  </div>
                  <div class="item">
                    <img src="<?php echo base_url('uploads/poto_perusahaan/'.$datas->poto_perusahaan2)?>" class="img-thumbnail" width="250" alt="Slide 1">
                     
                  </div>
              </div>
              
              <!-- Control -->
              <a href="#carousel-example-generic" class="carousel-control left" data-slide="prev" role="button">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a href="#carousel-example-generic" class="carousel-control right" data-slide="next" role="button">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>

          </div>
        </div>
      </div>     
      <!-- /.box-body -->
      <div class="col-xs-12">
        <?php
          foreach ($sumur as $key => $data):
         ?>
        
            <div class="box box-default collapsed-box">
              <div class="box-header with-border">
                <h3 class="box-title">Data Sumur <b><?=$data->no_sumur?></b></h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                  </button>
                </div>
                <!-- /.box-tools -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table class="table table-striped table-bordered table-hover">
                  <tr>
                    <td class="col-xs-2">Nomor Sumur</td>
                    <td>:</td>
                    <td><?=$data->no_sumur?></td>
                  </tr>
                  <tr>
                    <td class="col-xs-2">Jenis Sumur</td>
                    <td>:</td>
                    <td><?=$data->jenis_sumur?></td>
                  </tr>
                  <tr>
                    <td class="col-xs-2">Nomor SIPA</td>
                    <td>:</td>
                    <td><?=$data->no_sipa?></td>
                  </tr>
                  <tr>
                    <td class="col-xs-2">Tanggal Terbit SIPA</td>
                    <td>:</td>
                    <td><?=$data->tgl_terbit_sipa?></td>
                  </tr>
                  <tr>
                    <td class="col-xs-2">Masa Berlaku SIPA</td>
                    <td>:</td>
                    <td><?=$data->tgl_ahir_sipa?></td>
                  </tr>
                  <tr>
                    <td class="col-xs-2">Lokasi</td>
                    <td>:</td>
                    <td><?=$data->lokasi_sumur?></td>
                  </tr>
                  <tr>
                  <td class="col-xs-2">Koordinat</td>
                  <td>:</td>
                  <td>
                    <table class="table-sm">
                      <tr>
                        <td width="15%">L/S</td>
                        <td >:</td>
                        <td><?=$data->koor_d_ls?><sup>O</sup></td>
                        <td><?=$data->koor_m_ls?><strong>'</strong></td>
                        <td><?=$data->koor_s_ls?><strong>"</strong></td>
                      </tr>
                      <tr>
                        <td width="10%">B/T</td>
                        
                        <td>:</td>
                        <td><?=$data->koor_d_bt?><sup>O</sup></td>
                        <td><?=$data->koor_m_bt?><strong>'</strong></td>
                        <td><?=$data->koor_s_bt?><strong>"</strong></td>
                      </tr>
                    </table>
                  </td>
                </tr>
                  <tr>
                    <td class="col-xs-2">Kedalaman</td>
                    <td>:</td>
                    <td><?=$data->kedalaman_sumur?> m</td>
                  </tr>
                  <tr>
                    <td class="col-xs-2">Debit yang di Izinkan</td>
                    <td>:</td>
                    <td><?=$data->debit_izin?> m<sup>3</sup> /hari</td>
                  </tr>
                  <tr>
                    <th colspan="3">DATA POMPA</th>
                  </tr>
                  <tr>
                    <td class="col-xs-2">Merek / Jenis</td>
                    <td>:</td>
                    <td><?=$data->brand_pompa?></td>
                  </tr>
                  <tr>
                    <td class="col-xs-2">No Seri</td>
                    <td>:</td>
                    <td><?=$data->no_seri_pompa?></td>
                  </tr>
                  <tr>
                    <td class="col-xs-2">Type</td>
                    <td>:</td>
                    <td><?=$data->type_pompa?></td>
                  </tr>
                  <tr>
                    <td class="col-xs-2">Kapasitas</td>
                    <td>:</td>
                    <td><?=$data->kapasit_pompa?> HP</td>
                  </tr>
                  <tr>
                    <td class="col-xs-2">Posisi</td>
                    <td>:</td>
                    <td><?=$data->posisi_pompa?> m bmt</td>
                  </tr>
                  <tr>
                    <th colspan="3">DATA PIPA</th>
                  </tr>
                  <tr>
                    <td class="col-xs-2">Material</td>
                    <td>:</td>
                    <td><?=$data->material_pipa?></td>
                  </tr>
                  <tr>
                    <td class="col-xs-2">Ukuran Pipa Konstr.</td>
                    <td>:</td>
                    <td><?=$data->dia_pipa_kons?> Inch</td>
                  </tr>
                  <tr>
                    <td class="col-xs-2">Ukuran Pipa Naik</td>
                    <td>:</td>
                    <td><?=$data->dia_pipa_naik?> m</td>
                  </tr>
                  <tr>
                    <td class="col-xs-2">Ukuran Pipa Isap</td>
                    <td>:</td>
                    <td><?=$data->dia_pipa_isap?>1.25 Inch</td>
                  </tr>
                  <tr>
                    <th colspan="3">DATA METER AIR</th>
                  </tr>
                  <tr>
                    <td class="col-xs-2">Merek</td>
                    <td>:</td>
                    <td><?=$data->brand_meter_air?></td>
                  </tr>
                  <tr>
                    <td class="col-xs-2">Nomor</td>
                    <td>:</td>
                    <td><?=$data->no_meter_air?></td>
                  </tr>
                  <tr>
                    <td class="col-xs-2">Angka Awal</td>
                    <td>:</td>
                    <td><?=$data->angka_awal?></td>
                  </tr>
                  <tr>
                    <td class="col-xs-2">No. Tera</td>
                    <td>:</td>
                    <td><?=$data->no_tera?></td>
                  </tr>
                  <tr>
                    <td class="col-xs-2">Tanggal Tera</td>
                    <td>:</td>
                    <td><?=$data->tgl_tera?></td>
                  </tr>
                  <tr>
                    <td class="col-xs-2">Masa Berlaku</td>
                    <td>:</td>
                    <td><?=$data->tgl_ahir_tera?></td>
                  </tr>

                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
        
        <?php endforeach; ?>
      </div>
    </div>
        <!-- /.col -->
  </div>
      <!-- /.row -->
</section>
<!-- /.content -->