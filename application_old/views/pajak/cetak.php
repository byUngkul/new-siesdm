<html>
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
                    <th>NO</th>
                    <th>NAMA PERUSAHAAN</th>
                    <th>NO SUMUR</th>
                    <th>IZIN</th>
                    <th>NO SIPA</th>
                    <th>BESAR PAJAK</th>
                    <th>TANGGAL</th>
                </tr>
              </thead>
          
             <tbody>
             <?php
                    $no = 1;
                    foreach($transaksi as $key => $data){
                        $tgl = date('d-m-Y', strtotime($data->tgl_pjk));
            
                        echo "<tr>";
                        echo "<td>".$no++."</td>";
                        echo "<td>".$data->nama_perusahaan."</td>";
                        echo "<td>".$data->no_sumur."</td>";
                            if($data->status_izin=='1'){
                                        echo "<td>ADA</td>";
                            } else {
                                        echo "<td>TIDAK ADA</td>";
                            }
                        echo "<td>".$data->no_sipa."</td>";
                        echo "<td>"."Rp ".number_format($data->nilai_pjk,2,',','.')." </td>";
                        echo "<td>".$tgl."</td>";
                        echo "</tr>";
                    }
                ?>
             </tbody>
          </table>
      </div>
  </div>

    
</body>
</html>
