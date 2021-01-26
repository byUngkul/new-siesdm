<?php
 header("Content-type: application/vnd-ms-excel");
 header("Content-Disposition: attachment; filename=$title.xls");
 header("Pragma: no-cache"); 
 header("Expires: 0");
?>
<h2>Data Induk Izin Pengolahan Air Tanah</h2>
<table border="1" width="100%">
 	<thead>
 		<tr>
 			<th>#</th>>
            <th>Nama Perusahaan</th>
            <th>No Sumur</th>
            <th>No SIPA</th>
            <th>Tanggal Terbit SIPA</th>
            <th>Masa Berlaku SIPA</th>
            <th>Jenis Sumur</th>
            <th>Lokasi Sumur</th>
            <th colspan="2">Koordniat</th>
            <th>Kedalaman Sumur</th>
            <th>Debit Izin</th>
            <th>Material Pipa</th>
            <th>Ukuran Pipa Kons (inch)</th>
            <th>Ukuran Pipa Naik (inch)</th>
            <th>Ukuran Pipa Isap (inch)</th>
            <th>Merek Pompa</th>
            <th>No Seri Pompa</th>
            <th>Type Pompa</th>
            <th>Kapasitas Pompa</th>
            <th>Merek Meter Air</th>
            <th>No Meter Air</th>
            <th>Angka Awal</th>
            <th>No Tera</th>
            <th>Tanggal Tera</th>
            <th>Masa Berlaku Tera</th>			
 		</tr>
 	</thead>
 	<tbody>
 	  <?php foreach ($sumur as $key => $data): ?>
		<tr>
			<td><?=$key+1?></td>
			<td><?=$data->nama_perusahaan;?></td>
			<td><?=$data->no_sumur;?></td>
			<td><?=$data->no_sipa;?></td>
			<td><?=$data->tgl_terbit_sipa;?></td>
			<td><?=$data->tgl_ahir_sipa;?></td>
			<td><?=$data->jenis_sumur;?></td>
			<td><?=$data->lokasi_sumur;?></td>
			<td>L/S <?=$data->koor_d_ls;?><sup>O</sup><?=$data->koor_m_ls;?>'<?=$data->koor_s_ls;?></td>
			<td>B/T <?=$data->koor_d_bt;?><sup>O</sup><?=$data->koor_m_bt;?>'<?=$data->koor_s_bt;?></td>
			<td><?=$data->kedalaman_sumur;?></td>
			<td><?=$data->debit_izin;?></td>
			<td><?=$data->material_pipa;?></td>
			<td><?=$data->dia_pipa_kons;?></td>
			<td><?=$data->dia_pipa_naik;?></td>
			<td><?=$data->dia_pipa_isap;?></td>
			<td><?=$data->brand_pompa;?></td>
			<td><?=$data->no_seri_pompa;?></td>
			<td><?=$data->type_pompa;?></td>
			<td><?=$data->kapasit_pompa;?></td>
			<td><?=$data->brand_meter_air;?></td>
			<td><?=$data->no_meter_air;?></td>
			<td><?=$data->angka_awal;?></td>
			<td><?=$data->no_tera;?></td>
			<td><?=$data->tgl_tera;?></td>
			<td><?=$data->tgl_ahir_tera;?></td>
		</tr>
 	  <?php endforeach;?>
 	</tbody>
 </table>