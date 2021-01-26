<section class="content">
  <div class="row">
    <div class="col-xs-12">
     <!-- star card -->
     <div class="box box-info">
      <div class="box-header with-border">
        <h2 class="box-title">Ubah Data Sumur</h2>
      </div>
      
      <!-- form start -->
      <form action="<?php echo site_url('sumur/update'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="box-body">

         <input type="hidden" name="id_sumur" value="<?php echo $sumur->id_sumur?>">
         
         <div class="col-xs-12"> 
          <table class="table" cellpadding="2">
            <tr>
              <td><label>Nama Perusahaan</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-4">
                    <select name="id_perusahaan" class="form-control select2" data-placeholder="Select a State" autofocus>
                    <?php foreach ($data as $row):?>
                      <option  <?php if($sumur->id_perusahaan==$row->id_perusahaan){echo "selected";}?> value="<?=$row->id_perusahaan?>"><?=$row->nama_perusahaan?></option>
                    <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td><label>Nomor Sumur</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-2">
                    <input type="text" name="no_sumur" class="form-control" value="<?=$sumur->no_sumur?>" >
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td><label>Jenis Sumur</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-3">
                    <select name="id_jenis_sumur" class="form-control" id="">
                    <?php foreach ($jenis as $row):?>
                      <option  <?php if($sumur->id_jenis_sumur==$row->id){echo "selected";}?> value="<?=$row->id?>"><?=$row->jenis_sumur?></option>
                    <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td><label>Status Perizinan</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-2">
                    <select name="status_izin" class="form-control select2" data-placeholder="Select a State" autofocus>
                      <option <?php if($sumur->status_izin=='1'){echo "selected";}?> value="1">ADA</option>
                      <option <?php if($sumur->status_izin=='2'){echo "selected";}?> value="2">TIDAK ADA</option>
                    </select>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td><label>Nomor SIPA</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-4">
                    <input type="text" name="no_sipa" class="form-control" value="<?=$sumur->no_sipa?>">
                  </div>
                  <input type="file" name="file_sipa" class="form-control-file">
                </div>
              </td>
            </tr>

            <tr>
              <td><label>Tanggal Trbit SIPA</label></td>
              <td>
                <div class="input-group col-xs-3 date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tgl_terbit_sipa" class="form-control pull-right datepicker" value="<?=$sumur->tgl_terbit_sipa?>">
                </div>
              </td>
            </tr>
            
            <tr>
              <td><label>Masa Berlaku SIPA</label></td>
              <td>
                <div class="input-group col-xs-3 date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tgl_ahir_sipa" class="form-control pull-right datepicker" value="<?=$sumur->tgl_ahir_sipa?>">
                </div>
              </td>
            </tr>

            <tr>
              <td width="20%"><label>Koordinat</label></td>
              <td>
                <table width="60%">
                  <tr>
                    <td colspan="3">L/S</td>
                    <td></td>
                    <td colspan="3">B/T</td>
                  </tr>
                  <tr>
                    <!-- L/S -->
                    <td width="10%"><input type="text" name="koor_d_ls" class="form-control" value="<?=$sumur->koor_d_ls?>" ></td>
                    <td width="10%"><input type="text" name="koor_m_ls" class="form-control" value="<?=$sumur->koor_m_ls?>"></td>
                    <td width="15%"><input type="text" name="koor_s_ls" class="form-control" value="<?=$sumur->koor_s_ls?>"></td>
                    
                    <td width="5%"><span></span></td>
                    <!-- B/T -->
                    <td width="10%"><input type="text" name="koor_d_bt" class="form-control" value="<?=$sumur->koor_d_bt?>"></td>
                    <td width="10%"><input type="text" name="koor_m_bt" class="form-control" value="<?=$sumur->koor_m_bt?>" ></td>
                    <td width="15%"><input type="text" name="koor_s_bt" class="form-control" value="<?=$sumur->koor_s_bt?>"></td>
                    <td width="2"></td>
                  </tr>
                </table>
              </td>
            </tr>
            
            <tr>
              <td><label>Lokasi Sumur</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-5">
                    <input type="text" name="lokasi_sumur" class="form-control" value="<?=$sumur->lokasi_sumur?>" >
                  </div>
                  <input type="file" name="peta_lok" class="form-control-file">
                </div>
              </td>
            </tr>

            <tr>
              <td><label>Type Zona</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-2">
                    <select name="id_zona" class="form-control select2" data-placeholder="Select a State" autofocus>
                      <option <?php if($sumur->status_izin=='1'){echo "selected";}?> value="1">AMAN</option>
                      <option <?php if($sumur->status_izin=='2'){echo "selected";}?> value="2">RAWAN</option>
                      <option <?php if($sumur->status_izin=='3'){echo "selected";}?> value="3">KRITIS</option>
                      <option <?php if($sumur->status_izin=='4'){echo "selected";}?> value="4">RESAPAN</option>
                    </select>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <th colspan="3" class="label-info text-center">DATA TEKNIS</th>
            </tr>

            <tr>
              <td><label>Kedalaman Sumur</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-2">
                    <input type="text" name="kedalaman_sumur" class="form-control" value="<?=$sumur->kedalaman_sumur?>" >
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td><label>Foto Sumur</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-3">
                    <input type="file" name="poto_sumur" class="form-control-file">
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td><label>Sertifikat Uji Kualitas Air</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-3">
                    <input type="file" name="hasil_uji_air" class="form-control-file">
                  </div>
                </div>
              </td>
            </tr>
            
            <tr>
              <td><label>Debit Izin</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-2">
                    <input type="text" name="debit_izin" class="form-control" value="<?=$sumur->debit_izin?>" >
                  </div>m<sup>3</sup> /hari
                </div>
              </td>
            </tr>
            
            <tr>
              <td><label>Material Pipa</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-3">
                    <input type="text" name="material_pipa" class="form-control" value="<?=$sumur->material_pipa?>">
                  </div>
                </div>
              </td>  
            </tr>

            <tr>
              <td><label>Ukuran Pipa Konstruksi</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-2">
                    <input type="text" name="dia_pipa_kons" class="form-control col-sm-2" value="<?=$sumur->dia_pipa_kons?>">
                  </div>Inch
                </div>
              </td>
            </tr>

            <tr>
              <td><label>Ukuran Pipa Naik</label></td>
              <td>
                <div class="row">
                   <div class="col-xs-2">
                     <input type="text" name="dia_pipa_naik" class="form-control" value="<?=$sumur->dia_pipa_naik?>">
                   </div> Inch
                 </div> 
              </td>
            </tr>
            
            <tr>
              <td><label>Ukuran Pipa Isap</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-2">
                    <input type="text" name="dia_pipa_isap" class="form-control" value="<?=$sumur->dia_pipa_isap?>">
                  </div>Inch
                </div>
              </td>
            </tr>

            <tr>
              <th colspan="3" class="label-info text-center">DATA MESIN POMPA</th>
            </tr>

            <tr>
              <td><label>Merek Mesin Pompa</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-3">
                    <input type="text" name="brand_pompa" class="form-control" value="<?=$sumur->brand_pompa?>">
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td><label>No Seri Mesin Pompa</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-3">
                    <input type="text" name="no_seri_pompa" class="form-control" value="<?=$sumur->no_seri_pompa?>">
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td><label>Type Mesin Pompa</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-3">
                    <input type="text" name="type_pompa" class="form-control" value="<?=$sumur->type_pompa?>">
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td><label>Kapasitas</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-2">
                    <input type="text" name="kapasit_pompa" class="form-control" value="<?=$sumur->kapasit_pompa?>">
                  </div>HP
                </div>
              </td>
            </tr>

            <tr>
              <td><label>Posisi Pompa</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-2">
                    <input type="text" name="posisi_pompa" class="form-control" value="<?=$sumur->posisi_pompa?>">
                  </div>m bmt
                </div>
              </td>
            </tr>
             
            <tr>
              <th colspan="3" class="label-info text-center">DATA METERAN AIR</th>
            </tr>

            <tr>
              <td><label>Merek Meter Air</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-3">
                    <input type="text" name="brand_meter_air" class="form-control" value="<?=$sumur->brand_meter_air?>">
                  </div>
                </div>
              </td>
            </tr>
            
            <tr>
              <td><label>No Seri Meter Air</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-3">
                    <input type="text" name="no_meter_air" class="form-control" value="<?=$sumur->no_meter_air?>">
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td><label>Angka Awal</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-2">
                    <input type="text" name="angka_awal" class="form-control" value="<?=$sumur->angka_awal?>">
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td><label>No Tera</label></td>
              <td>
                <div class="row">
                  <div class="col-xs-3">
                    <input type="text" name="no_tera" class="form-control" value="<?=$sumur->no_tera?>">
                  </div>
                  <input type="file" name="tera" class="form-control-file">
                  <!-- input type="hidden" name="tera_lama" value="<?=$sumur->tera_meter?>" -->
                </div>
              </td>
            </tr>

            <tr>
              <td><label>Tanggal Tera Meter</label></td>
              <td>
                <div class="input-group col-xs-3 date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tgl_tera" class="form-control pull-right datepicker" value="<?=$sumur->tgl_tera?>">
                </div>
              </td>
            </tr>

            <tr>
              <td><label>Masa Berlaku Tera</label></td>
              <td>
                <div class="input-group col-xs-3 date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tgl_ahir_tera" class="form-control pull-right datepicker" value="<?=$sumur->tgl_ahir_tera?>">
                </div>
              </td>
            </tr>

          </table>
      </div>
      
      <div class="box-footer">
        <button onclick="<?=site_url('sumur')?>" class="btn btn-info btn-flat"><i class="fa fa-arrow-circle-left"></i> Kembali</button>
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