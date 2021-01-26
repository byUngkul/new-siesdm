
 <section class="content">
    <div class="row">
      <div class="col-sm-12">
          <!-- star card -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Pengguna Aplikasi</h3>
            </div>
            
            <div class="box-header">
            <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
              
              <table id="order_data" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Nama</th>
                    <th>Usrename</th>
                    <th>level</th>      
                  </tr>
                </thead>
                <tbody style="font-size: 12px">
                  <?php
                     foreach ($user as $key => $data){
                       
                      ?>
                  <tr>
                    <td><?=$key+1?></td>
                    <td>
                        <a href="<?=base_url('user/edit/'.$data->id)?>" type="button" class="btn btn-social btn-warning btn-flat btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" type="button" class="btn btn-social btn-danger btn-flat btn-xs"><i class="fa fa-trash-o"></i> Hapus</a>
                    </td>
                    <td><?=$data->nama?></td>
                    <td><?=$data->uname?></td>
                    <td><?=$data->level?></td>
                    
                  </tr>
                <?php 
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