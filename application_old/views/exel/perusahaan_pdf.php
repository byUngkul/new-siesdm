<html>
<head>
	<title>Cetak PDF</title>
	
	<style>
	.table1 {
    	color: #232323;
    	border-collapse: collapse;
		width: 595pt;
		word-wrap: break-word;
		white-space: nowrap;
		table-layout: fixed;
	}
 
	.table1, th, td {
    	border: 1px solid #999;
    	padding: 8px 8px;
		font-size: 12px;
	}
	</style>
</head>
<body>
    <b><?php echo $ket; ?></b><br /><br />
    
	<table class="table1">
	<tr>
		<th>No</th>
		<th>Nama Perusahaan</th>
        <th>Direktur</th>
        <th>Jenis Usaha</th>
        <th>e-mail</th>
        <th>Kontak Person</th>
        <th>Tlp Kontak Person</th>
		<th>Wilayah</th>
        <th>Alamat</th>
        <th>Luas Area</th>
		<th>Jumlah Kepemilikan Sumur</th>
	</tr>

    <?php
    if( ! empty($transaksi)){
    	$no = 1;
    	foreach($transaksi as $key => $data){

    		echo "<tr>";
    		echo "<td>".$no++."</td>";
    		echo "<td>".$data->nama_perusahaan."</td>";
    		echo "<td>".$data->nama_pemilik."</td>";
            echo "<td>".$data->jns_usaha."</td>";
            echo "<td>".$data->email."</td>";
            echo "<td>".$data->kontak_person."</td>";
            echo "<td>".$data->tlp_person."</td>";
    		echo "<td>".$data->nama_kota."</td>";
            echo "<td>".$data->alamat_perusahaan."</td>";
            echo "<td>".$data->luas_area."</td>";
            echo "<td>".$data->jmlSumur."</td>";
    		echo "</tr>";
    		$no++;
    	}
    }
    ?>
	</table>
</body>
</html>
