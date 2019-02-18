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
        <div class="col-xs-12">
          <!-- star card -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?=$wilayah;?></h3>
            </div>

            <div class="box-header">
              <form action="" method="get">
                <div class="row">
                  <div class="col-sm-2">
                  <?php if($this->session->userdata('akses')=='1'){ ?>
                    <div class="form-group">
                      <label >Urutkan</label>
                      <select name="filter1" id="filter1" class="form-control">
                          <option value="">Pilih</option>
                        <?php foreach($f_wilayah as $data): ?>
                          <option value="<?=$data->id;?>"><?=$data->nama_kota;?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  <?php } ?>
                  </div>
                  <!-- end of column -->
                </div>
                <!-- end of row -->
                <div class="row">
                  <div class="col-xs-10">
                  <?php if($this->session->userdata('akses')=='1'){ ?>
                    <button type="submit" class="btn btn-social btn-primary btn-flat btn-sm"><i class="fa fa-search"></i>Tampilkan</button>
                    <a href="<?=site_url()?>perusahaan" class="btn btn-social btn-flat btn-default btn-sm" title="Tambah Data"><i class="fa fa-repeat"></i>Reset</a>
                  <?php } ?>
                    <a href="<?=site_url()?>perusahaan/add" class="btn btn-social btn-flat btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Tambah Data"><i class="fa fa-plus"></i>Tambah Data</a>
                    <div class="btn-group">
                      <btton type="button" class="btn btn-social btn-flat btn-info btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i>Pilih Aksi</btton>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="<?=$url_cetak?>" class="btn btn-social btn-flat  btn-sm" target="_blank" title="Cetak ke Excel"><i class="fa fa-file-excel-o"></i>Cetak</a>
                        </li>
                        <li>
                          <a href="<?=$url_excel?>" class="btn btn-social btn-flat btn-sm" target="_blank" title="Cetak ke Excel"><i class="fa fa-file-pdf-o"></i>Export ke Excel</a>
                        </li>
                      </ul>
                    </div>
                    
                  </div>
                </div>
              </form>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example2" class="table table-bordered table-striped dataTable table-hover nowrap" >
                <thead class="bg-gray disabled color-palette">
                  <tr>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Nama Perusahaan</th>
                    <th>Alamat</th>
                    <th>Wilayah</th>
                    <th>Nama Pemilik</th>
                    <th>E-mail Perusahaan</th>
                    <th>Sumur Dalam</th>
                    <th>Sumur Dangkal</th>
                    <th>Sumur ASR</th>
                    <th>Sumur Pantau</th>
                    <th>Sumur Imbuhan</th>
                    <th>Sumur Resapan</th>
                    <th>Total Sumur</th>
                    
                    
                  </tr>
                </thead>
                <tbody style="font-size: 12px">
                  <?php
                     foreach ($perusahaan as $key => $data):
                      ?>
                  <tr nowrap>
                    <td><?=$key+1?></td>
                    <td nowrap>
                        <div class="btn-group">
                          <btton type="button" class="btn btn-social btn-flat btn-info btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i>Pilih Aksi</btton>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a href="#" type="button" class="btn btn-social btn-default btn-flat btn-xs" data-toggle="modal" data-target="#modal-sipa<?=$data->id_perusahaan;?>" title="Pemberitahuan Masa Belaku SIPA"><i class="fa fa-envelope"></i>Email SIPA</a>
                            </li>

                            <li>
                              <a href="#" type="button" class="btn btn-social btn-default btn-flat btn-xs" data-toggle="modal" data-target="#modal-tera<?=$data->id_perusahaan;?>" title="Pemberitahuan Habis Masa Tera"><i class="fa fa-envelope"></i>Email Tera</a>
                            </li>

                            <li>
                              <a href="#" type="button" class="btn btn-social btn-default btn-flat btn-xs" data-toggle="modal" data-target="#modal-air<?=$data->id_perusahaan;?>" title="Pemberitahuan Penggunaan Air Tanah"><i class="fa fa-envelope"></i>Email Penggunaan Air</a>
                            </li>

                            <li>
                              <a href="<?=site_url('perusahaan/detile/'.$data->id_perusahaan)?>" type="button" class="btn btn-social btn-default btn-flat btn-xs"><i class="fa fa-info-circle" title="Lihat Detile Perusahaan"></i> Detile</a>
                            </li>

                            <li>
                              <a href="<?=site_url('perusahaan/edit/'.$data->id_perusahaan)?>" type="button" class="btn btn-social btn-default btn-flat btn-xs" title="Ubah Data Perusahaan"><i class="fa fa-edit"></i> Edit</a>
                            </li>

                            <li>
                              <a href="<?=site_url('perusahaan/delete/'.$data->id_perusahaan)?>" type="button" class="btn btn-social btn-default btn-flat btn-xs" title="Hapus Data Perusahaan"><i class="fa fa-trash-o"></i> Hapus</a>
                            </li>
                          </ul>
                        </div>
                    </td>
                    <td><?=$data->nama_perusahaan?></td>
                    <td><?=$data->alamat_perusahaan?></td>
                    <td><?=$data->nama_kota?></td>
                    <td><?=$data->nama_pemilik?></td>
                    <td><?=$data->email?></td>
                    <td><?=$data->sm_dalam?></td>
                    <td><?=$data->sm_dangkal?></td>
                    <td><?=$data->sm_asr?></td>
                    <td><?=$data->sm_pantau?></td>
                    <td><?=$data->sm_imbuhan?></td>
                    <td><?=$data->sm_resapan?></td>
                    <td><?=$data->jmlSumur?></td>
                    
                  </tr>
                <?php endforeach; ?>
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
    
    <?php foreach ($perusahaan as $data):?>
    <div class="modal fade" id="modal-sipa<?=$data->id_perusahaan;?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Kirim e-mail</h4>
          </div>
          
          <form action="<?php echo base_url()?>perusahaan/kirimEmailSipa" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label>e-mail Tujuan</label>
              <div class="">
                <input type="text" class="form-control" name="tujuan" value="<?=$data->email?>">
              </div>
            </div>
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Kirim email</button>
          </div>
          </form>
        </div>
            <!-- /.modal-content -->
      </div>
          <!-- /.modal-dialog -->
    </div>
        <!-- /.modal -->
    <?php endforeach; ?>

    <?php foreach ($perusahaan as $data):?>
    <div class="modal fade" id="modal-tera<?=$data->id_perusahaan;?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Kirim e-mail</h4>
          </div>
          
          <form action="<?php echo base_url()?>perusahaan/kirimEmailTera" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label>e-mail Tujuan</label>
              <div class="">
                <input type="text" class="form-control" name="tujuan" value="<?=$data->email?>">
              </div>
            </div>
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Kirim email</button>
          </div>
          </form>
        </div>
            <!-- /.modal-content -->
      </div>
          <!-- /.modal-dialog -->
    </div>
        <!-- /.modal -->
    <?php endforeach; ?>

    <?php foreach ($perusahaan as $data):?>
    <div class="modal fade" id="modal-air<?=$data->id_perusahaan;?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Kirim e-mail</h4>
          </div>
          
          <form action="<?php echo base_url()?>perusahaan/kirimEmailAir" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label>e-mail Tujuan</label>
              <div class="">
                <input type="text" class="form-control" name="tujuan" value="<?=$data->email?>">
              </div>
            </div>
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Kirim email</button>
          </div>
          </form>
        </div>
            <!-- /.modal-content -->
      </div>
          <!-- /.modal-dialog -->
    </div>
        <!-- /.modal -->
    <?php endforeach; ?>