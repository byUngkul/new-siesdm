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
                          <option value="">Pilih</option>
                          <option value="4">Tanggal</option>
                          <option value="1">Bulan</option>
                          <option value="2">Tahun</option>
                          <option value="3">Perusahaan</option>
                          <option value="5">Perizinan</option>
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
                          <option value = "">Pilih</option>
                            <?php
                            foreach($option_tahun as $data){ // Ambil data tahun dari model yang dikirim dari controller
                                echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
                            }
                            ?>
                      </select>
                    </div>

                     <div id="form-izin" class="">
                      <label>Izin</label>
                      <select class="form-control" name="izin" id="">
                          <option value = "">Pilih</option>
                          <option value = "1">Berizin</option>
                          <option value = "2">Tidak Berizin</option>
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

                  

                </div>

                <button type="submit" class="btn btn-social  btn-default btn-flat btn-sm"><i class="fa fa-search"></i>Tampilkan</button>

                <a type="button" class="btn btn-social btn-default btn-flat btn-sm" href="<?=base_url('pajak');?>"><i class="fa fa-repeat"></i>Reset Filter</a>
                
                <div class="btn-group">
                      <btton type="button" class="btn btn-social btn-flat btn-info btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i>Pilih Aksi</btton>
                      <ul class="dropdown-menu" role="menu">
                          <li><a type="button" href="<?php echo base_url('pajak/add')?>" class="btn btn-social btn-flat btn-sm" title="Tambah Data" ><i class="fa fa-plus"></i>Tambah Data </a></li>
                          <li><a type="button" class="btn btn-social btn-flat btn-sm" target="_blank" href="<?php echo $url_cetak; ?>"><i class="fa fa-print"></i>Cetak</a></li>
                          <li><a type="button" class="btn btn-social btn-flat btn-sm" target="_blank" href="<?php echo $url_excel; ?>"><i class="fa fa-file-excel-o"></i>Cetak ke Excel</a></li>
                      </ul>
                </div>
          
              </form>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
              
              <table id="example2" class="table table-bordered table-striped dataTable nowrap">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Aksi</th>
                    <th>Perusahaan</th>
                    <th>No Sumur</th>
                    <th>Status Izin</th>
                    <th>Jumlah Pembayaran</th>
                    <th>Tanggal</th>      
                  </tr>
                </thead>
                <tbody style="">
                  <?php
                    if (!empty($ambil)) {
                      $no = 1;
                     foreach ($ambil as $key => $data){
                       $tgl = date('d-m-Y', strtotime($data->tgl_pjk));
                      ?>
                  <tr>
                    <td><?=$key+1?></td>
                    <td>
                        <a href="<?=base_url('pajak/edit/'.$data->id_pjk);?>" type="button" class="btn btn-social btn-warning btn-flat btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="<?=base_url('pajak/delete/'.$data->id_pjk);?>" type="button" class="btn btn-social btn-danger btn-flat btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
                    </td>
                    <td><?=$data->nama_perusahaan?></td>
                    <td><?=$data->no_sumur?></td>
                    <td>
                      <?php
                        if($data->status_izin=='1'){
                            echo "ADA";
                        } else {
                            echo "TIDAK ADA";
                        }
                      ?>  
                    </td>
                    <td><?="Rp " .number_format($data->nilai_pjk,2,',','.');?></td>
                    <td><?=$tgl?></td>
                    
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