<?php if ($this->session->flashdata('success')): ?>
<div class="col-xs-6">
  <div class="callout callout-info">
      <h4>Berhasil !</h4>
      <p><?php echo $this->session->flashdata('success'); ?></p>
  </div>
</div>
<?php endif; ?>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
     <!-- star card -->
     <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Tambah Data Penggunaan Air</h3>
      </div>
      
      <!-- form start -->
      <form action="<?php echo base_url('pengambilan_air/save'); ?>" class="form-horizontal" method="post">
        <div class="box-body">
          
           <div class="form-group">
              <label class="col-xs-2">Pilih Perusahaan</label>
              <div class="col-xs-3">
                <select name="id_perusahaan"  id="perusahaan" class="form-control">
                  <option value="">--pilih--</option>
                <?php foreach($perusahaan as $row): ?>
                  <option value="<?php echo $row->id_perusahaan?>"><?php echo $row->nama_perusahaan?></option>
                <?php endforeach; ?>
                      
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-2">Pilih Sumur</label>
              <div class="col-xs-2">
                <select name="id_sumur" id="sumur" class="form-control">
                        <option value="">--pilih--</option>
                </select>
              </div>
            </div> 

            <div class="form-group">
              <label class="col-xs-2">Debit Air</label>
              <div class="col-xs-1">
                <input type="text" name="debit_air" class="form-control"> 
              </div>m<sup>3</sup>
            </div> 

            <div class="form-group">
              <label class="col-xs-2">Bulan</label>
              <div class="col-xs-2">
                <select class="form-control" name="bulan" id="">
                          <option value="">Pilih</option>
                          <option value="1">Januari</option>
                          <option value="2">Februari</option>
                          <option value="3">Maret</option>
                          <option value="4">April</option>
                          <option value="5">Mei</option>
                          <option value="6">Juni</option>
                          <option value="7">Juli</option>
                          <option value="8">Agustus</option>
                          <option value="9">September</option>
                          <option value="10">Oktober</option>
                          <option value="11">Nopember</option>
                          <option value="12">Desember</option>
                      </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-xs-2">Tahun</label>
              <div class="col-xs-2">
                <input type="text" name="tahun" class="form-control">
              </div>
            </div> 
        
        </div>
      
      <div class="box-footer">
        <button onclick="history.go(-1);" class="btn btn-info btn-flat"><i class="fa fa-arrow-circle-left"></i> Kembali</button>
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