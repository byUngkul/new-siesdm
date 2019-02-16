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
          <h3>Data Pengusahaan Air Tanah </h3><br>
          <h3><b><?=$sumur->nama_perusahaan?></b></h2><br>
          <h3>Data Sumur <?=$sumur->no_sumur?></h3>
        </div>
        <br>
              <table class="border">
                <tr>
                  <td class="col-xs-2">Nomor Sumur</td>
                  <td>:</td>
                  <td><?=$sumur->no_sumur?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Jenis Sumur</td>
                  <td>:</td>
                  <td><?=$sumur->jenis_sumur?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Nomor SIPA</td>
                  <td>:</td>
                  <td><?=$sumur->no_sipa?></td>
                </tr>
              
                <tr>
                  <td class="col-xs-2">Berizin / Blm</td>
                  <td>:</td>
                  <td>
                    <?php if($sumur->status_izin == '1'){
                                echo "ADA";
                            } else {
                                echo "TIDAK ADA";
                            } ?>
                    
                  </td>
                </tr>
                <tr>
                  <td class="col-xs-2">Tanggal Terbit SIPA</td>
                  <td>:</td>
                  <td><?=$sumur->tgl_terbit_sipa?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Masa Berlaku SIPA</td>
                  <td>:</td>
                  <td><?=$sumur->tgl_ahir_sipa?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Lokasi</td>
                  <td>:</td>
                  <td><?=$sumur->lokasi_sumur?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Zonasi</td>
                  <td>:</td>
                  <td>
                    <?php switch ($sumur->id_zona) {
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
                        } ?>
                  </td>
                </tr>
                <tr>
                  <td class="col-xs-2">Koordinat</td>
                  <td>:</td>
                  <td>
                    <table class="noborder" id="koordinat">
                      <tr>
                        <td width="">L/S</td>
                        <td >:</td>
                        <td width="20%"><?=$sumur->koor_d_ls?><sup>o</sup><?=$sumur->koor_m_ls?><strong>'</strong><?=$sumur->koor_s_ls?><strong>"</strong></td>
                      </tr>
                      <tr>
                        <td width="">B/T</td>
                        <td>:</td>
                        <td><?=$sumur->koor_d_bt?><sup>o</sup><?=$sumur->koor_m_bt?><strong>'</strong><?=$sumur->koor_s_bt?><strong>"</strong></td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td class="col-xs-2">Kedalaman</td>
                  <td>:</td>
                  <td><?=$sumur->kedalaman_sumur?> m</td>
                </tr>
                <tr>
                  <td class="col-xs-2">Debit yang di Izinkan</td>
                  <td>:</td>
                  <td><?=$sumur->debit_izin?> m<sup>3</sup>/hari</td>
                </tr>
                <tr>
                  <th colspan="3">DATA POMPA</th>
                </tr>
                <tr>
                  <td class="col-xs-2">Merek / Jenis</td>
                  <td>:</td>
                  <td><?=$sumur->brand_pompa?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">No Seri</td>
                  <td>:</td>
                  <td><?=$sumur->no_seri_pompa?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Type</td>
                  <td>:</td>
                  <td><?=$sumur->type_pompa?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Kapasitas</td>
                  <td>:</td>
                  <td><?=$sumur->kapasit_pompa?> HP</td>
                </tr>
                <tr>
                  <td class="col-xs-2">Posisi</td>
                  <td>:</td>
                  <td><?=$sumur->posisi_pompa?> m bmt</td>
                </tr>
                <tr>
                  <th colspan="3">DATA PIPA</th>
                </tr>
                <tr>
                  <td class="col-xs-2">Material</td>
                  <td>:</td>
                  <td><?=$sumur->material_pipa?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Ukuran Pipa Konstr.</td>
                  <td>:</td>
                  <td><?=$sumur->dia_pipa_kons?> Inch</td>
                </tr>
                <tr>
                  <td class="col-xs-2">Ukuran Pipa Naik</td>
                  <td>:</td>
                  <td><?=$sumur->dia_pipa_naik?> m</td>
                </tr>
                <tr>
                  <td class="col-xs-2">Ukuran Pipa Isap</td>
                  <td>:</td>
                  <td><?=$sumur->dia_pipa_isap?>1.25 Inch</td>
                </tr>
                <tr>
                  <th colspan="3">DATA METER AIR</th>
                </tr>
                <tr>
                  <td class="col-xs-2">Merek</td>
                  <td>:</td>
                  <td><?=$sumur->brand_meter_air?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Nomor</td>
                  <td>:</td>
                  <td><?=$sumur->no_meter_air?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Angka Awal</td>
                  <td>:</td>
                  <td><?=$sumur->angka_awal?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">No. Tera</td>
                  <td>:</td>
                  <td><?=$sumur->no_tera?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Tanggal Tera</td>
                  <td>:</td>
                  <td><?=$sumur->tgl_tera?></td>
                </tr>
                <tr>
                  <td class="col-xs-2">Masa Berlaku</td>
                  <td>:</td>
                  <td><?=$sumur->tgl_ahir_tera?></td>
                </tr>
              </table>
        
  </div>
      <!-- /.row -->
</div>
<!-- /.content -->
    
</body>
</html>