<html>
<head>
	<title>Cetak PDF</title>
	
	<style>
	.table1 {
    	color: #232323;
    	border-collapse: collapse;
	}
 
	.table1, th, td {
    	border: 1px solid #999;
    	padding: 8px 8px;
	}
	</style>
</head>
<body>
    <b><?php echo $ket; ?></b><br /><br />
    
	<table class="table1">
	<tr>
		<th>No</th>
		<th>Nama Perusahaan</th>
		<th>No Sumur</th>
		<th>No SIPA</th>
		<th>Status Izin</th>
		<th>Nilai Pajak</th>
		<th>Tanggal</th>
	</tr>

    <?php
    if( ! empty($transaksi)){
    	$no = 1;
    	foreach($transaksi as $key => $data){
            $tgl = date('d-m-Y', strtotime($data->tgl_pjk));

    		echo "<tr>";
    		echo "<td>".$no++."</td>";
    		echo "<td>".$data->nama_perusahaan."</td>";
    		echo "<td>".$data->no_sumur."</td>";
    		echo "<td>".$data->no_sipa."</td>";
			if($data->status_izin=='1'){
                            echo "<td>ADA</td>";
                        } else {
                            echo "<td>TIDAK ADA</td>";
                        }
                      
    		echo "<td>"."Rp ".number_format($data->nilai_pjk,2,',','.')." </td>";
    		echo "<td>".$tgl."</td>";
    		echo "</tr>";
    		$no++;
    	}
    }
    ?>
	</table>
</body>
</html>
