 <section class="content">
    <div class="row">
      <div class="col-sm-6">
          <!-- star card -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit User</h3>
            </div>
            
            <div class="box-header">
            <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            
            <form action="<?php echo base_url('user/update')?>" method="post" class="form-horizontal">
            
            <div class="box-body">
            
              
              <input type="hidden" name="id" value="<?=$user->id?>">
              
              <div class="form-group">
                <label class="col-xs-3">Nama</label>
                <div class="col-xs-4">
                  <input type="text" name="nama" class="form-control" value="<?=$user->nama?>">
                </div>
              </div>

              <div class="form-group">
                <label class="col-xs-3">User Name</label>
                <div class="col-xs-4">
                  <input type="username" name="username" class="form-control" value="<?=$user->uname?>">
                </div>
              </div>

              <div class="form-group">
                <label class="col-xs-3">Password</label>
                <div class="col-xs-4">
                  <input type="text" name="password" class="form-control" value="">
                </div>
              </div>

              <div class="form-group">
                <label class="col-xs-3">Level</label>
                <div class="col-xs-4">
                  <select name="level" id="" class="form-control">
                    <option value="">Pilih</option>
                    <option value="1">Admin</option>
                    <option value="4">Admin Kota Cimahi</option>
                    <option value="5">Admin Kota Bandung</option>
                    <option value="6">Admin Kab. Bandung Barat</option>
                    <option value="7">Admin Kab. Subang</option>
                  </select>
                </div>
              </div>
            </div>
            
            <div class="box-footer">
              <button type="submit" class="btn btn-primary btn-flat">Simpan  <i class="fa fa-save"></i></button>
            </div>
              
            </form>              
            
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