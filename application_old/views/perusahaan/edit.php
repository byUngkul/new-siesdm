<section class="content">
  <div class="row">
    <div class="col-xs-12">
     <!-- star card -->
     <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Tambah Data Perusahaan</h3>
      </div>
      
      <!-- form start -->
      <form action="<?php echo base_url('perusahaan/update'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="box-body">

          <input type="hidden" name="id_perusahaan" value="<?php echo $datas->id_perusahaan?>">
          
          <div class="form-group">
            <label class="col-sm-2">Nama Perusahaan</label>
            <div class="col-sm-4">
              <input type="text" name="nama_perusahaan" class="form-control" value="<?=$datas->nama_perusahaan?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2">Direktur</label>
            <div class="col-sm-4">
              <input type="text" name="nama_pemilik" class="form-control" value="<?=$datas->nama_pemilik?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2">Jenis Usaha</label>
            <div class="col-sm-4">
              <input type="text" name="jns_usaha" class="form-control" value="<?=$datas->jns_usaha?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2">Wilayah</label>
            <div class="col-xs-3">
              <select name="id_kota" id="" class="form-control">
                <?php foreach ($kota as $row):?>
                <option <?php if($datas->id_kota==$row->id){echo "selected";}?> value="<?=$row->id?>"><?=$row->nama_kota?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2">Alamat</label>
            <div class="col-xs-6">
              <input type="text" name="alamat_perusahaan" class="form-control" value="<?=$datas->alamat_perusahaan?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2">Telp</label>
            <div class="col-sm-3">
              <input type="text" name="tlp_perusahaan" class="form-control" value="<?=$datas->tlp_perusahaan?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2">Fax</label>
            <div class="col-sm-3">
              <input type="text" name="fax_perusahaan" class="form-control" value="<?=$datas->fax_perusahaan?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2">E-mail</label>
            <div class="col-sm-3">
              <input type="text" name="email" class="form-control" value="<?=$datas->email?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2">Status</label>
            <div class="col-sm-2">
              <select name="status_modal" id="" class="form-control">
                <option <?php if($datas->status_modal=='PMDN'){echo "selected";}?> value="PMDN">PMDN</option>
                <option <?php if($datas->status_modal=='PMA'){echo "selected";}?> value="PMA">PMA</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2">Kontak Person</label>
            <div class="col-sm-4">
              <input type="text" name="kontak_person" class="form-control" value="<?=$datas->kontak_person?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2">Telp Kontak</label>
            <div class="col-sm-3">
              <input type="text" name="tlp_person" class="form-control" value="<?=$datas->tlp_person?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2">Luas Area</label>
            <div class="col-sm-1">
              <input type="text" name="luas_area" class="form-control" value="<?=$datas->luas_area?>">
            </div>m<sup>2</sup>
          </div>

          <div class="form-group">
            <label class="col-sm-2">Photo Perusahaan 1</label>
            <div class="col-xs-3">
              <input type="file" name="poto1" class="form-control-file">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2">Photo Perusahaan 2</label>
            <div class="col-xs-3">
              <input type="file" name="poto2" class="form-control-file">
            </div>
          </div>
        
        </div>
      
      <div class="box-footer">
        <a href="<?=site_url('sumur')?>" class="btn btn-info btn-flat"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
        <button type="submit" class="btn btn-primary btn-flat pull-right">Simpan  <i class="fa fa-save"></i></button>
      </div>
      </form>
      <!-- /.box-footer-->
     </div>
    <!-- /.box-body -->

    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->