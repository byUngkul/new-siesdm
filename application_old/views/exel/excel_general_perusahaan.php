<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
<h2>Data Induk Izin Pengolahan Aia Tanah</h2>
<table border="1" width="100%">
 	<thead>
 		<tr>
 			<th>#</th>>
            <th>Nama Perusahaan</th>
            <th>Direktur</th>
            <th>Bidang USaha</th>
            <th>Status Perusahaan</th>
            <th>Jumlah Kepemilikan Sumur</th>
            <th>Telp</th>
            <th>Fax</th>
            <th>E-mail</th>
            <th>Kontak Person</th>
            <th>Tlp/Hp Kontak Person</th>
            <th>Alamat</th>			
 		</tr>
 	</thead>
 	<tbody>
 	  <?php foreach ($perusahaan as $key => $data): ?>
		<tr>
			<td><?=$key+1?></td>
			<td><?=$data->nama_perusahaan;?></td>
			<td><?=$data->nama_pemilik;?></td>
			<td><?=$data->jns_usaha;?></td>
			<td><?=$data->status_modal;?></td>
			<td><?=$data->jmlSumur;?></td>
			<td><?=$data->tlp_perusahaan;?></td>
			<td><?=$data->fax_perusahaan;?></td>
			<td><?=$data->email;?></td>
			<td><?=$data->kontak_person;?></td>
			<td><?=$data->tlp_person;?></td>
			<td><?=$data->alamat_perusahaan;?></td>
		</tr>
 	  <?php endforeach;?>
 	</tbody>
 </table>