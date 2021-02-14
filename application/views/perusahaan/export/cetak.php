<html>

<head>
    <title>Cetak PDF</title>
    <!-- style print -->
    <link rel="stylesheet" href="<?= base_url(); ?>public/css/print-style.css">
    <style>
        .textx {
            mso-number-format: "\@";
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="body">
            <div class="header" align="center">
                <h3>DATA PERUSAHAAN</h3>
            </div>
            <br>
            <table class="border thick">
                <thead>
                    <tr>
                        <th>No</th>
                        <th style="">Nama Perusahaan</th>
                        <th style="">Direktur</th>
                        <th style="width: 7%;">Jenis Usaha</th>
                        <th style="">No Telp</th>
                        <th style="width: 10%;">e-mail</th>
                        <th style="">Kontak Person</th>
                        <th style="">Tlp Kontak Person</th>
                        <th style="width: 5%;">Wilayah</th>
                        <th style="">Alamat</th>
                        <th style="width: 5%;">Luas Area</th>
                        <th style="">Jumlah Kepemilikan Sumur</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data->result() as $key => $data) {

                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $data->nama_perusahaan . "</td>";
                        echo "<td>" . $data->nama_pemilik . "</td>";
                        echo "<td>" . $data->jns_usaha . "</td>";
                        echo "<td class='textx'>" . $data->tlp_perusahaan . "</td>";
                        echo "<td>" . $data->email . "</td>";
                        echo "<td>" . $data->kontak_person . "</td>";
                        echo "<td class='textx'>" . $data->tlp_person . "</td>";
                        echo "<td>" . $data->nama_kota . "</td>";
                        echo "<td>" . $data->alamat_perusahaan . "</td>";
                        echo "<td style='text-align: right;'>" . number_format($data->luas_area, 0, ',', '.') . " m<sup>2</></td>";
                        echo "<td>" . $data->jmlSumur . "</td>";
                        echo "</tr>";
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
