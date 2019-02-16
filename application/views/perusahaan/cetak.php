<html>
<head>
	<title>Cetak PDF</title>
    <!-- style print -->
    <link rel="stylesheet" href="<?=base_url();?>assets/dist/css/print-style.css">
    <style>
	    .textx{mso-number-format:"\@";}
	</style>
</head>
<body>
    <div class="container">
        <div class="body">
            <div class="header" align="center">
                <h3><?php echo $ket; ?></h3>
            </div>
            <br>
            <table class="border thick">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>Direktur</th>
                        <th>Jenis Usaha</th>
                        <th>No Telp</th>
                        <th>e-mail</th>
                        <th>Kontak Person</th>
                        <th>Tlp Kontak Person</th>
                        <th>Wilayah</th>
                        <th>Alamat</th>
                        <th>Luas Area</th>
                        <th>Jumlah Kepemilikan Sumur</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($isi_data as $key => $data){

                        echo "<tr>";
                        echo "<td>".$no++."</td>";
                        echo "<td>".$data->nama_perusahaan."</td>";
                        echo "<td>".$data->nama_pemilik."</td>";
                        echo "<td>".$data->jns_usaha."</td>";
                        echo "<td class='textx'>".$data->tlp_perusahaan."</td>";
                        echo "<td>".$data->email."</td>";
                        echo "<td>".$data->kontak_person."</td>";
                        echo "<td class='textx'>".$data->tlp_person."</td>";
                        echo "<td>".$data->nama_kota."</td>";
                        echo "<td>".$data->alamat_perusahaan."</td>";
                        echo "<td>".$data->luas_area."</td>";
                        echo "<td>".$data->jmlSumur."</td>";
                        echo "</tr>";
                        
                    }
                
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
