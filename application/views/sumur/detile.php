<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <!-- star card --> 
      <div class="box box-primary ">
        <div class="box-header with-border">
          <button onclick="history.go(-1);" type="button" class="btn btn-success btn-flat btn-social btn-sm"><i class="fa fa-arrow-left"></i>Kembali ke Daftar Sumur</button>
          <a type="button" target="_blank" href="<?php echo site_url("sumur/cetakDetile/$sumur->id_sumur")?>" class="btn btn-default btn-flat btn-social btn-sm pull-right"><i class="fa fa-print"></i>Cetak</a>
          <a type="button" target="_blank" href="<?php echo site_url("sumur/excelDetile/$sumur->id_sumur")?>" class="btn btn-default btn-flat btn-social btn-sm pull-right"><i class="fa fa-file-excel-o"></i>Export ke Excel</a>
        </div>
        <div class="box-header with-border col-xs-12 text-center">
          <h3 class="box-title">Data Pengusahaan Air Tanah </h3><br>
          <h2 class="box-title"><b><?=$sumur->nama_perusahaan?></b></h2><br>
          <img src="<?php echo base_url('uploads/poto_sumur/'.$sumur->poto_sumur); ?>" class="img-thumbnail" width="250">
        </div>
        <form role="form">

          <div class="box-header with-border">
              <h3 class="box-title">Data Sumur <b><?=$sumur->no_sumur?></b></h3>
              
              
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped table-bordered table-hover">
                <tr>
                  <td class="col-xs-2">Nomor Sumur</td>
                  <td>:</td>
                  <td><?=$sumur->no_sumur?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Jenis Sumur</td>
                  <td>:</td>
                  <td><?=$sumur->jenis_sumur?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Nomor SIPA</td>
                  <td>:</td>
                  <td><?=$sumur->no_sipa?></td>
                </tr>
              
                <tr>
                  <td class="col-xs-2">Berizin / Blm</td>
                  <td>:</td>
                  <td>
                    <?php if($sumur->status_izin == '1'){
                                echo "ADA";
                            } else {
                                echo "TIDAK ADA";
                            } ?>
                    
                  </td>
                </tr>
                <tr>
                  <td class="col-xs-2">Tanggal Terbit SIPA</td>
                  <td>:</td>
                  <td><?=$sumur->tgl_terbit_sipa?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Masa Berlaku SIPA</td>
                  <td>:</td>
                  <td><?=$sumur->tgl_ahir_sipa?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Status IZIN</td>
                  <td>:</td>
                  <td><?php
                    $nilai =  $sumur->selisih;
                    if ($nilai <= '90' && $nilai >= '0') {
                      echo "Izin akan Habis";
                    } elseif ($nilai <= '0') {
                      echo "Izin Habis";
                    } else {
                      echo "Berizin";
                    }
                  ?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Lokasi</td>
                  <td>:</td>
                  <td><?=$sumur->lokasi_sumur?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Zonasi</td>
                  <td>:</td>
                  <td>
                    <?php switch ($sumur->id_zona) {
                          case '1':
                            echo "AMAN";
                            break;
                          case '2':
                            echo "RAWAN";
                            break;
                          case '3':
                            echo "KRITIS";
                            break;
                          case '4':
                            echo "RESAPAN";
                            break;
                        } ?>
                  </td>
                </tr>
                <tr>
                  <td class="col-xs-2">Koordinat</td>
                  <td>:</td>
                  <td>
                    <table class="table-sm">
                      <tr>
                        <td width="15%">L/S</td>
                        <td >:</td>
                        <td><?=$sumur->koor_d_ls?><sup>O</sup></td>
                        <td><?=$sumur->koor_m_ls?><strong>'</strong></td>
                        <td><?=$sumur->koor_s_ls?><strong>"</strong></td>
                      </tr>
                      <tr>
                        <td width="10%">B/T</td>
                        
                        <td>:</td>
                        <td><?=$sumur->koor_d_bt?><sup>O</sup></td>
                        <td><?=$sumur->koor_m_bt?><strong>'</strong></td>
                        <td><?=$sumur->koor_s_bt?><strong>"</strong></td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td class="col-xs-2">Kedalaman</td>
                  <td>:</td>
                  <td><?=$sumur->kedalaman_sumur?> m</td>
                </tr>
                <tr>
                  <td class="col-xs-2">Debit yang di Izinkan</td>
                  <td>:</td>
                  <td><?=$sumur->debit_izin?> m<sup>3</sup> /hari</td>
                </tr>
                <tr>
                  <th colspan="3">DATA POMPA</th>
                </tr>
                <tr>
                  <td class="col-xs-2">Merek / Jenis</td>
                  <td>:</td>
                  <td><?=$sumur->brand_pompa?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">No Seri</td>
                  <td>:</td>
                  <td><?=$sumur->no_seri_pompa?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Type</td>
                  <td>:</td>
                  <td><?=$sumur->type_pompa?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Kapasitas</td>
                  <td>:</td>
                  <td><?=$sumur->kapasit_pompa?> HP</td>
                </tr>
                <tr>
                  <td class="col-xs-2">Posisi</td>
                  <td>:</td>
                  <td><?=$sumur->posisi_pompa?> m bmt</td>
                </tr>
                <tr>
                  <th colspan="3">DATA PIPA</th>
                </tr>
                <tr>
                  <td class="col-xs-2">Material</td>
                  <td>:</td>
                  <td><?=$sumur->material_pipa?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Ukuran Pipa Konstr.</td>
                  <td>:</td>
                  <td><?=$sumur->dia_pipa_kons?> Inch</td>
                </tr>
                <tr>
                  <td class="col-xs-2">Ukuran Pipa Naik</td>
                  <td>:</td>
                  <td><?=$sumur->dia_pipa_naik?> m</td>
                </tr>
                <tr>
                  <td class="col-xs-2">Ukuran Pipa Isap</td>
                  <td>:</td>
                  <td><?=$sumur->dia_pipa_isap?>1.25 Inch</td>
                </tr>
                <tr>
                  <th colspan="3">DATA METER AIR</th>
                </tr>
                <tr>
                  <td class="col-xs-2">Merek</td>
                  <td>:</td>
                  <td><?=$sumur->brand_meter_air?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Nomor</td>
                  <td>:</td>
                  <td><?=$sumur->no_meter_air?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Angka Awal</td>
                  <td>:</td>
                  <td><?=$sumur->angka_awal?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">No. Tera</td>
                  <td>:</td>
                  <td><?=$sumur->no_tera?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Tanggal Tera</td>
                  <td>:</td>
                  <td><?=$sumur->tgl_tera?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Masa Berlaku</td>
                  <td>:</td>
                  <td><?=$sumur->tgl_ahir_tera?></td>
                </tr>
                <tr>
                  <td>Unduh File</td>
                  <td>:</td>
                  <td>
                    <table width="80%">
                      <tr>
                        <th>SIPA</th>
                        <th>Peta Sumur</th>
                        <th>Sertifikat Tera Meter</th>
                        <th>Sertifikat Uji Air</th>
                      </tr>
                      <tr>
                        <td><a href="<?php echo base_url(); ?>sumur/downloadSipa/<?php echo $sumur->sipa; ?>" class="btn btn-default btn-xs" target="_blank">Download File</a></td>
                        <td><a href="<?php echo base_url(); ?>sumur/downloadPeta/<?php echo $sumur->peta_lok; ?>" class="btn btn-default btn-xs" target="_blank">Download File</a></td>
                        <td><a href="<?php echo base_url(); ?>sumur/downloadTera/<?php echo $sumur->tera_meter; ?>" class="btn btn-default btn-xs" target="_blank">Download File</a></td>
                        <td><a href="<?php echo base_url(); ?>sumur/downloadUji/<?php echo $sumur->hasil_uji_air; ?>" class="btn btn-default btn-xs" target="_blank">Download File</a></td>
                      </tr>
                    </table>
                  </td>
                </tr>

              </table>
            </div>
        </form>
      </div>     
      <!-- /.box-body -->
      
    </div>
        <!-- /.col -->
  </div>
      <!-- /.row -->
</section>
<!-- /.content -->