<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url();?>assets/dist/css/print-detile.css">
</head>
<body>
<div class="container">
  <div class="body">
        <div class="header" align="center">
          <h3>Data Perusahaan</h3><br>
          <h3><b><?=$datas->nama_perusahaan?></b></h3>
        </div>
        <div class="box-body">
          <form role="form" class="col-xs-8">
            <div class="box-body table-responsive ">
              <table class="table table-striped table-bordered table-hover">
                <tr>
                  <th colspan="3">DATA UMUM</th>
                </tr>
                <tr>
                  <td>Nama Perusahaan</td>
                  <td>:</td>
                  <td><?=$datas->nama_perusahaan?></td>
                </tr>
                <tr>
                  <td>Direktur</td>
                  <td>:</td>
                  <td><?=$datas->nama_pemilik?></td>
                </tr>
                <tr>
                  <td>Bidang Usaha</td>
                  <td>:</td>
                  <td><?=$datas->jns_usaha?></td>
                </tr>

                <tr>
                  <td>Wilayah</td>
                  <td>:</td>
                  <td><?=$datas->nama_kota?></td>
                </tr>

                <tr>
                  <td>Alamat Perusahaan</td>
                  <td>:</td>
                  <td><?=$datas->alamat_perusahaan?></td>
                </tr>

                <tr>
                  <td>Status Perusahaan</td>
                  <td>:</td>
                  <td><?=$datas->status_modal?></td>
                </tr>
                <tr>
                  <td>Jumlah Kepemilikan Sumur</td>
                  <td>:</td>
                  <td><?=$datas->jmlSumur?></td>
                </tr>
                <tr>
                  <td>Telp</td>
                  <td>:</td>
                  <td><?=$datas->tlp_perusahaan?></td>
                </tr>
                <tr>
                  <td>Fax</td>
                  <td>:</td>
                  <td><?=$datas->fax_perusahaan?></td>
                </tr>
                <tr>
                  <td>E-mail</td>
                  <td>:</td>
                  <td><?=$datas->email?></td>
                </tr>
                <tr>
                  <td>Kontak Person</td>
                  <td>:</td>
                  <td><?=$datas->kontak_person?></td>
                </tr>
                <tr>
                  <td>Telp / HP Kontak Person</td>
                  <td>:</td>
                  <td><?=$datas->tlp_person?></td>
                </tr>

              </table>
            </div>
          </form>
        </div>
  </div>
      <!-- /.row -->
</div>
<!-- /.content -->
    
</body>
</html>