<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ESDM</title>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?=base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=base_url();?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <style>
        thead, th{
            text-transform: uppercase;
            text-align: center;
            font-size: 9px;
        }
        tbody, td{
            font-size: 9px;
        }
        h3{
            text-align: center;
        }
    </style>
</head>
<body>
<div class="wrapper">
 <div class="row">
     
 </div>
 <div class="row">
    <div class="col-sm-7">
    <h3>DATA SUMUR</h3>
     <table id="example" class="table display table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Perusahaan</th>
                <th>Wilayah</th>
                <th>No Sumur</th>
                <th>Jenis Sumur</th>
                <th>No SIPA</th>
                <th>Masa Berlaku s/d</th>
                <th>Status Sipa</th>
                <th>Debit m3</th>
                <th>Zona</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($display as $key => $row){
                    $nilai = $row->selisih;
            ?>
            <tr>
                <td><?=$key+1;?></td>
                    <td><?=$row->nama_perusahaan;?></td>
                    <td><?=$row->nama_kota;?></td>
                    <td><?=$row->no_sumur;?></td>
                    <td><?=$row->jenis_sumur;?></td>
                    <td><?=$row->no_sipa;?></td>
                    <td><?=date('d/m/Y', strtotime($row->tgl_ahir_sipa));?></td>
                    <td><?php
                    if ($nilai <= '90' && $nilai >= '0') {
                      echo "Izin akan Habis";
                    } elseif ($nilai <= '0') {
                      echo "Izin Habis";
                    } else {
                      echo "Berizin";
                    } 
                    ?></td>
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
            </tr>
            <?php } ?>
        </tbody>
     </table>
    </div>
     
 </div>
</div>

<!-- jQuery 3 -->
<script src="<?=base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- DataTables -->
<script src="<?=base_url();?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
    // text Berjalan
    $(document).ready(function (){
        var table = $('#example').DataTable({
            'scrollX'     : true,
            'lengthChange': false,
            'searching'   : false,
            'pagingType'  : "simple",
            'ordering'    : false,
            'info'        : false,
            'lengthMenu'  : [[10, 25, 50, -1], [10, 25, 50, "All"]]
        });
        setInterval(function(){ 
        var info = table.page.info();
        var pageNum = (info.page < info.pages) ? info.page + 1 : 1;
        table.page(pageNum).draw(false);    
        }, 2000);   
        
    });
</script>
</body>
</html>