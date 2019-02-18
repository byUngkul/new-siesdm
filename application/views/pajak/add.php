
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
        <h3 class="box-title">Tambah Data Pajak</h3>
      </div>
      <!-- form start -->
      <form action="<?php echo base_url('pajak/save'); ?>" class="form-horizontal" method="post">
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
              <label class="col-xs-2">Nilai Pajak</label>
              <div class="col-xs-2">
                <input type="text" name="nilai_pajak" class="form-control"> 
              </div>
            </div> 

            <div class="form-group">
              <label class="col-xs-2">Tanggal Pembayaran</label>
              <div class="col-xs-2">
                <input type="text" name="tgl_pjk" class="form-control datepicker">
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