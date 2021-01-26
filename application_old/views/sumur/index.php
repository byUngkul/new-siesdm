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
                    <div class="form-group">
                      <label >Urutkan</label>
                      <select name="filter1" id="filter1" class="form-control select1">
                        <option value="">Pilih</option>
                      <?php if($this->session->userdata('akses') == '1'):?>
                        <!-- hanya di akses admin -->
                        <option value="1">Wilayah</option>
                      <?php endif;?>
                        <option value="2">Perusahaan</option>
                        <option value="3">Masa Izin</option>
                        <option value="4">Jenis Sumur</option>
                        <option value="5">Zonasi</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div id="form-zona" class="form-group">
                      <label>Zonasi</label>
                      <select name="zona" id="" class="form-control select2">
                        <option value="">Pilih</option>
                        <option value="1">AMAN</option>
                        <option value="2">RAWAN</option>
                        <option value="3">KRITIS</option>
                        <option value="4">RESAPAN</option>
                      </select>
                    </div>

                    <div id="form-wilayah" class="form-group">
                      <label>Wilayah</label>
                      <select name="wilayah" id="" class="form-control select2">
                        <option value="">Pilih</option>
                        <?php foreach($f_wilayah as $data): ?>
                          <option value="<?=$data->id;?>"><?=$data->nama_kota;?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>

                    <div id="form-perusahaan1" class="form-group">
                      <label>Perusahaan</label>
                      <select name="perusahaan" id="" class="form-control select2">
                        <option value="">Pilih</option>
                        <?php foreach($perusahaan as $data): ?>
                          <option value="<?=$data->id_perusahaan;?>"><?=$data->nama_perusahaan;?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>

                    <div id="form-izin" class="form-group">
                      <label>Jenis Izin</label>
                      <select name="izin" id="" class="form-control select2">
                        <option value="">Pilih</option>
                        <option value="1">Izin SIPA</option>
                        <option value="2">Sertifikat Tera Meter</option>
                      </select>
                    </div>

                    <div id="form-satus" class="form-group">
                      <label>Status</label>
                      <select name="status" id="" class="form-control select2">
                        <option value="">Pilih</option>
                        <option value="1">Akan Habis</option>
                        <option value="2">Sudah Habis</option>
                      </select>
                    </div>

                    <div id="form-jenis" class="form-group">
                      <label>Jenis Sumur</label>
                      <select name="jns_sumur" id="" class="form-control select2">
                        <option value="">Pilih</option>
                        <?php foreach($jenis_sumur as $data): ?>
                          <option value="<?=$data->id?>"><?=$data->jenis_sumur?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-2">
                    
                  </div>
                  <!-- end of column -->
                </div>
                <!-- end of row -->
                <div class="row">
                  <div class="col-xs-10">
                    <button type="submit" class="btn btn-social btn-primary btn-flat btn-sm"><i class="fa fa-search"></i>Tampilkan</button>

                    <a href="<?=site_url()?>sumur" class="btn btn-social btn-flat btn-default btn-sm" title="Tambah Data"><i class="fa fa-repeat"></i>Reset</a>

                    <div class="btn-group">
                      <btton type="button" class="btn btn-social btn-flat btn-info btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i>Pilih Aksi</btton>
                      <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="<?=site_url()?>sumur/add" class="btn btn-social btn-flat btn-sm" title="Tambah Data"><i class="fa fa-plus"></i>Tambah Data</a>
                        </li>
                        <li>
                          <a href="<?php echo $url_cetak; ?>" target="_blank" class="btn btn-social btn-flat btn-sm" title="Cetak ke Excel"><i class="fa fa-print"></i>Cetak</a>
                        </li>
                        <li>
                          <a href="<?php echo $url_excel; ?>" class="btn btn-social btn-flat btn-sm " title="Cetak ke Excel"><i class="fa fa-file-excel-o"></i>Export ke Excel</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example2" class="table table-bordered table-striped dataTable table-hover nowrap">
                <thead class="bg-gray disabled color-palette">
                  <tr>
                    <th>#</th>
                    <th>Aksi</th>
                    <th>Nama Perusahaan</th>
                    <th>No Sumur</th>
                    <th>Status Izin SIPA</th>
                    <th>Pajak</th>
                    <th>No SIPA</th>
                    <th>Jenis Sumur</th>
                    <th>Masa Berlaku SIPA</th>
                    <th>Wilayah</th>
                    <th>Lokasi Sumur</th>
                    <th>Zona</th>
                    <th>Debit Izin</th>
                    <th>No Pompa</th>
                    <th>No Meter Air</th>
                    
                  </tr>
                </thead>
                <tbody style="font-size: 12px">
                  <?php
                      
                     foreach ($sumur as $key => $data):
                      $nilai =  $data->selisih;
                      $id_smr = $data->id_sumur;
                      ?>
                  <tr>
                    <td><?=$key+1?></td>
                    <td nowrap>
                      <div class="btn-group">
                        <btton type="button" class="btn btn-social btn-flat btn-info btn-xs dropdown-toggle" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i>Pilih Aksi</btton>
                        <ul class="dropdown-menu" role="menu">
                          <li>
                            <a href="<?=site_url('sumur/detile/'.$data->id_sumur)?>" type="button" class="btn btn-social btn-flat btn-xs"><i class="fa fa-info-circle"></i> Detile</a>    
                          </li>

                          <li>
                            <a href="<?=site_url('sumur/edit/'.$data->id_sumur)?>" type="button" class="btn btn-social btn-flat btn-xs"><i class="fa fa-edit"></i> Edit</a>
                          </li>

                          <li>
                            <a href="<?=site_url('sumur/delete/'.$data->id_sumur)?>" type="button" class="btn btn-social btn-flat btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
                          </li>

                          <li>
                            <a href="<?php echo base_url()."sumur/downloadSipa/".$data->sipa?>" class="btn btn-social btn-flat btn-xs" target="_blank"><i class="fa fa-download"></i>Download SIPA</a>
                          </li>

                          <li>
                            <a href="<?php echo base_url(); ?>sumur/downloadPeta/<?php echo $data->peta_lok; ?>" class="btn btn-social btn-flat btn-xs" target="_blank"><i class="fa fa-download"></i>Download Peta Sumur</a>
                          </li>

                          <li>
                            <a href="<?php echo base_url(); ?>sumur/downloadTera/<?php echo $data->tera_meter; ?>" class="btn btn-social btn-flat btn-xs" target="_blank"><i class="fa fa-download"></i>Download Sert. Tera Meter</a>
                          </li>

                          <li>
                            <a href="<?php echo base_url(); ?>sumur/downloadUji/<?php echo $data->hasil_uji_air; ?>" class="btn btn-social btn-flat btn-xs" target="_blank"><i class="fa fa-download"></i>Download Uji Kualitas Air</a>
                          </li>
                        </ul>
                      </div>

                    </td>
                    <td><?=$data->nama_perusahaan?></td>
                    <td><?=$data->no_sumur?></td>
                    <td><?php
                    if ($nilai <= '90' && $nilai >= '0') {
                      echo "<label class='label label-warning'>Izin akan Habis</lable>";
                    } elseif ($nilai <= '0') {
                      echo "<label class='label label-danger'>Izin Habis</lable>";
                    } else {
                      echo "<label class='label label-info'>Berizin</lable>";
                    } 
                    ?></td>
                    <td>
                      <?php
                      if($cek_pajak->getById_sumur($id_smr)->num_rows() > 0){
                        echo "Sudah";
                      } else {
                        echo "Belum";
                      }
                      ?>
                    </td>
                    <td><?=$data->no_sipa?></td>
                    <td><?=$data->jenis_sumur?></td>
                    <td><?=$data->tgl_ahir_sipa?></td>
                    <td><?=$data->nama_kota?></td>
                    <td><?=$data->lokasi_sumur?></td>
                    <td>
                      <?php
                        switch ($data->id_zona) {
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
                        } 
                      ?>
                    </td>
                    <td><?=$data->debit_izin?> m<sup>3</sup>/hari</td>
                    <td><?=$data->no_seri_pompa?></td>
                    <td><?=$data->no_meter_air?></td>
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