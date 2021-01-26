  <!-- notifikasi -->
<?php if ($this->session->flashdata('success')): ?>
<div class="col-xs-6">
  <div class="callout callout-info">
      <h4>Berhasil !</h4>
      <p><?php echo $this->session->flashdata('success'); ?></p>
  </div>
</div>
<?php elseif($this->session->flashdata('danger')): ?>
<div class="col-xs-6">
  <div class="callout callout-danger">
      <h4>Berhasil !</h4>
      <p><?php echo $this->session->flashdata('danger'); ?></p>
  </div>
</div>
<?php endif; ?>

  <section class="content">
    <div class="row">
      <div class="col-sm-12">
          <!-- star card -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?=$filter;?></h3>
            </div>
            
            <div class="box-header">
              <form action="" method="get">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label>Urutkan</label>
                      <select name="filter" id="filter" class="form-control">
                          <option value = "">Pilih</option>
                          <option value = "1">Bulan</option>
                          <option value = "2">Tahun</option>
                          <option value = "3">Perusahaan</option>
                      </select>
                    </div>  
                  </div>
                  
                  <div class="col-sm-2">
                    <div id="form-tanggal" class="form-group">
                      <label>Tanggal</label>
                      <input type="text" name="tanggal" class="form-control datepicker">
                    </div>

                    <div id="form-bulan" class="form-group">
                      <label>Bulan</label>
                      <select class="form-control" name="bulan" id="">
                          <option value = "">Pilih</option>
                          <option value = "1">Januari</option>
                          <option value = "2">Februari</option>
                          <option value = "3">Maret</option>
                          <option value = "4">April</option>
                          <option value = "5">Mei</option>
                          <option value = "6">Juni</option>
                          <option value = "7">Juli</option>
                          <option value = "8">Agustus</option>
                          <option value = "9">September</option>
                          <option value = "10">Oktober</option>
                          <option value = "11">Nopember</option>
                          <option value = "12">Desember</option>
                      </select>
                    </div>

                    <div id="form-tahun" class="">
                      <label>Tahun</label>
                      <select class="form-control" name="tahun">
                          <option value="">Pilih</option>
                            <?php
                            foreach($option_tahun as $data){ // Ambil data tahun dari model yang dikirim dari controller
                                echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
                            }
                            ?>
                      </select>
                    </div>

                    <div id="form-perusahaan1">
                      <label>Perusahaan</label>
                      <select name="perusahaan" id="" class="form-control">
                        <option value="">Pilih</option>
                        <?php foreach($perusahaan as $perusahaan): ?>
                          <option value="<?=$perusahaan->id_perusahaan?>"><?=$perusahaan->nama_perusahaan?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-2">
                    
                  </div>

                </div>

                <button type="submit" class="btn btn-social  btn-default btn-flat btn-sm"><i class="fa fa-search"></i>Tampilkan</button>

                <a type="button" class="btn btn-social btn-default btn-flat btn-sm" href="<?=base_url('pengambilan_air');?>"><i class="fa fa-repeat"></i>Reset Filter</a>

                <a type="button" href="<?php echo base_url('pengambilan_air/add')?>" class="btn btn-social btn-success btn-flat btn-sm" title="Tambah Data" ><i class="fa fa-plus"></i>Tambah Data </a>
                

                <a type="button" class="btn btn-social btn-warning btn-flat btn-sm" href="<?php echo $url_cetak; ?>" target="_blank"><i class="fa fa-file-text"></i>Cetak PDF</a>

              </form>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
              
              <table id="example1" class="table table-bordered table-striped nowrap">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Aksi</th>
                    <th>Perusahaan</th>
                    <th>Kota</th>
                    <th>No Sumur</th>
                    <th>bulan</th>
                    <th>tahun</th>
                    <th>Pengambilan Air</th>
                    <th>Debit Izin Perhari</th>
                    <th>Debit Izin Perbulan</th>
                    <th>Status</th>
                          
                  </tr>
                </thead>
                <tbody style="">
                  <?php
                    if (!empty($transaksi)) {
                      $no = 1;
                     foreach ($transaksi as $key => $data){
                      ?>
                  <tr>
                    <td><?=$key+1?></td>
                    <td>
                        <a href="<?=base_url('pengambilan_air/edit/'.$data->id_trx);?>" type="button" class="btn btn-social btn-warning btn-flat btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" type="button" class="btn btn-social btn-danger btn-flat btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
                    </td>
                    <td><?=$data->nama_perusahaan?></td>
                    <td><?=$data->nama_kota?></td>
                    <td><?=$data->no_sumur?></td>
                    <td>
                      <?php
                        $bln = $data->bulan;
                        switch ($bln) {
                          case '1':
                            echo "Januari";
                            break;
                          case '2':
                            echo "Februari";
                            break;
                          case '3':
                            echo "Maret";
                            break;
                          case '4':
                            echo "April";
                            break;
                          case '5':
                            echo "Mei";
                            break;
                          case '6':
                            echo "Juni";
                            break;
                          case '7':
                            echo "Juli";
                            break;
                          case '8':
                            echo "Agustus";
                            break;
                          case '9':
                            echo "September";
                            break;
                          case '10':
                            echo "Oktober";
                            break;
                          case '11':
                            echo "Nopember";
                            break;
                          case '12':
                            echo "Desember";
                            break;
                        }
                      ?>  
                      </td>
                    <td><?=$data->tahun?></td>
                    <td><?=$data->debit_air?> m<sup>3</sup></td>
                    <td><?=$data->debit_izin?> m<sup>3</sup></td>
                    <td><?=$data->debit_izin*30?> m<sup>3</sup></td>
                    <td>
                      <?php
                        $batas = $data->debit_izin*30;
                        if ($data->debit_air > $batas) {
                          echo "<label class='label label-danger'>Melebihi Izin</label>";
                        } else{
                          echo "<label class='label label-info'>Sesuai Izin</label>";
                        }
                      ?>
                    </td>
                    
                  </tr>
                <?php 
                    }
                  } 
                ?>
                </tbody>
              </table>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- end card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->