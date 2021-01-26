<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preview Cetak</title>
    <!-- style print -->
    <link rel="stylesheet" href="<?=base_url();?>assets/dist/css/print-style.css">
</head>
<body>
  <div class="container">
      <div class="body">
          <div class="header" align="center">
              <h3><?php echo $ket;?></h3>
          </div>
          <br>
          <table class="border thick">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama Perusahaan</th>
                      <th>Wilayah</th>
                      <th>Alamat</th>
                      <th>No Sumur</th>
                      <th>Jenis Sumur</th>
                      <th>No SIPA</th>
                      <th>Tanggal</th>
                      <th>Masa Berlaku s/d</th>
                      <th>Debit m3</th>
                      <th>Zona</th>
                      <th>Status Izin SIPA</th>
                  </tr>
              </thead>
          
             <tbody>
                <?php
                foreach ($isi_data as $key => $row){
                  $nilai =  $row->selisih;
                ?>
                <tr>
                    <td><?=$key+1;?></td>
                    <td><?=$row->nama_perusahaan;?></td>
                    <td><?=$row->nama_kota;?></td>
                    <td><?=$row->lokasi_sumur;?></td>
                    <td><?=$row->no_sumur;?></td>
                    <td><?=$row->jenis_sumur;?></td>
                    <td><?=$row->no_sipa;?></td>
                    <td><?=date('d/m/Y', strtotime($row->tgl_terbit_sipa));?></td>
                    <td><?=date('d/m/Y', strtotime($row->tgl_ahir_sipa));?></td>
                    <td><?=$row->debit_izin;?></td>
                    <td>
                      <?php
                        switch ($row->id_zona) {
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
                    <td><?php
                    if ($nilai <= '90' && $nilai >= '0') {
                      echo "Izin akan Habis";
                    } elseif ($nilai <= '0') {
                      echo "Izin Habis";
                    } else {
                      echo "Berizin";
                    } 
                    ?></td>
                </tr>
                <?php
                }
                ?>
             </tbody>
          </table>
          <br>

          <div id="table">
            <div id="row">
              <div id="cell">
                <p>Jumlah Perusahaan</p>
              </div>
              <div id="cell">
                <p><?php echo $tot_prs;?></p>
              </div>
            </div>
            <div id="row">
              <div id="cell">
                <p>Jumlah Sumur</p>
              </div>
              <div id="cell">
                <p><?php echo $tot_sumur;?></p>
              </div>
            </div>
            <div id="row">
              <div id="cell">
                <p>Jumlah Sumur Dangkal</p>
              </div>
              <div id="cell">
                <p><?php echo $sm_dangkal;?></p>
              </div>
            </div>
            <div id="row">
              <div id="cell">
                <p>Jumlah Sumur Dalam</p>
              </div>
              <div id="cell">
                <p><?php echo $sm_dalam;?></p>
              </div>
            </div>
            <div id="row">
              <div id="cell">
                <p>Jumlah Sumur Imbuhan</p>
              </div>
              <div id="cell">
                <p><?php echo $sm_imbuhan;?></p>
              </div>
            </div>
            <div id="row">
              <div id="cell">
                <p>Jumlah Sumur Pantau</p>
              </div>
              <div id="cell">
                <p><?php echo $sm_pantau;?></p>
              </div>
            </div>
            <div id="row">
              <div id="cell">
                <p>Jumlah Sumur ASR</p>
              </div>
              <div id="cell">
                <p><?php echo $sm_asr;?></p>
              </div>
            </div>
            <div id="row">
              <div id="cell">
                <p>Jumlah Sumur Resapan</p>
              </div>
              <div id="cell">
                <p><?php echo $sm_resapan;?></p>
              </div>
            </div>
          </div>
          
      </div>
  </div>
</body>
</html>