<html>
<head>
	<title>Cetak PDF</title>

    <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">	
	
</head>
<body>
    <b><?php echo $ket; ?></b><br /><br />
    
	<table class="table1 tabel">
	<tr>
		<th>NO</th>
		<th>PERUSAHAAN</th>
		<th>NO SUMUR</th>
		<th>NO SIPA</th>
		<th>KOTA</th>
        <th>ALAMAT</th>
		<th>BULAN</th>
		<th>TAHUN</th>
		<th>PENGAMBILAN AIR</th>
        <th>DEBIT IZIN</th>
        <th>STATUS</th>
	</tr>

    <?php
    if( ! empty($transaksi)){
    	$no = 1;
    	foreach($transaksi as $key => $data){
            $debit = $data->debit_izin*30;
    		echo "<tr>";
    		echo "<td>".$no++."</td>";
    		echo "<td>".$data->nama_perusahaan."</td>";
    		echo "<td>".$data->no_sumur."</td>";
    		echo "<td>".$data->no_sipa."</td>";
            echo "<td>".$data->nama_kota."</td>";
    		echo "<td>".$data->lokasi_sumur."</td>";
            $bln = $data->bulan;
                        switch ($bln) {
                          case '1':
                            echo "<td>Januari</td>";
                            break;
                          case '2':
                            echo "<td>Februari</td>";
                            break;
                          case '3':
                            echo "<td>Maret</td>";
                            break;
                          case '4':
                            echo "<td>April</td>";
                            break;
                          case '5':
                            echo "<td>Mei</td>";
                            break;
                          case '6':
                            echo "<td>Juni</td>";
                            break;
                          case '7':
                            echo "<td>Juli</td>";
                            break;
                          case '8':
                            echo "<td>Agustus</td>";
                            break;
                          case '9':
                            echo "<td>September</td>";
                            break;
                          case '10':
                            echo "<td>Oktober</td>";
                            break;
                          case '11':
                            echo "<td>Nopember</td>";
                            break;
                          case '12':
                            echo "<td>Desember</td>";
                            break;
                        }
            echo "<td>".$data->tahun."</td>";
            echo "<td>".$data->debit_air."m<sup>3</sup>/bulan</td>";
    		echo "<td>".$debit." m<sup>3</sup>/bulan</td>";
                        if ($data->debit_air > $debit) {
                          echo "<td><label class='label label-danger'>Melebihi Izin</label></td>";
                        } else{
                          echo "<td><label class='label label-info'>Sesuai Izin</label></td>";
                        }
    		echo "</tr>";
    		$no++;
    	}
    }
    ?>
	</table>
</body>
</html>
