<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- <title>Preview Cetak</title> -->
	<!-- style print -->
	<link rel="stylesheet" href="<?= base_url(); ?>public/css/print-style.css">
</head>

<body>
	<div class="container">
		<div class="body">
			<div class="header" style="text-align: center; padding-bottom: 10px;">
				<span style="font-size: 14px; font-weight: 700;">DATA SUMUR</span>
				<span style="font-size: 14px; font-weight: 700;"><?= ($kota != null) ? $kota['nama_kota'] : ''
																	?></span>
			</div>

			<table class="border thick">
				<thead>
					<tr>
						<th style="background: rgb(107, 137, 235);">No</th>
						<th style="background: rgb(107, 137, 235);">Nama Perusahaan</th>
						<th style="background: rgb(107, 137, 235);">Wilayah</th>
						<th style="background: rgb(107, 137, 235);">Alamat</th>
						<th style="background: rgb(107, 137, 235);">No Sumur</th>
						<th style="background: rgb(107, 137, 235);">Jenis Sumur</th>
						<th style="background: rgb(107, 137, 235);">No SIPA</th>
						<th style="background: rgb(107, 137, 235);">Tanggal</th>
						<th style="background: rgb(107, 137, 235);">Masa Berlaku s/d</th>
						<th style="background: rgb(107, 137, 235);">Debit m3</th>
						<th style="background: rgb(107, 137, 235);">Zona</th>
						<th style="background: rgb(107, 137, 235);">Status Izin SIPA</th>
					</tr>
				</thead>

				<tbody>
					<?php
					foreach ($data as $key => $row) {
					?>
						<tr>
							<td><?= $key + 1; ?></td>
							<td><?= $row->nama_perusahaan ?></td>
							<td><?= $row->nama_kota ?></td>
							<td><?= $row->lokasi_sumur ?></td>
							<td><?= $row->no_sumur
								?></td>
							<td><?= $row->jenis_sumur
								?></td>
							<td><?= $row->no_sipa ?></td>
							<td><?= date('d/m/Y', strtotime($row->tgl_terbit_sipa))
								?></td>
							<td><?= date('d/m/Y', strtotime($row->tgl_ahir_sipa))
								?></td>
							<td><?= $row->debit_izin ?></td>
							<td><?= $row->type_zona ?></td>
							<td>
								<?php

								if ($row->selisih <= '90' && $row->selisih >= '0') {
									echo "Izin akan Habis";
								} elseif ($row->selisih <= '0') {
									echo "Izin Habis";
								} else {
									echo "Berizin";
								}
								?>
							</td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
			<br>

			<!-- <div id="table">
				<div id="row">
					<div id="cell">
						<p>Jumlah Perusahaan</p>
					</div>
					<div id="cell">
						<p><?php //echo $tot_prs;
							?></p>
					</div>
				</div>
				<div id="row">
					<div id="cell">
						<p>Jumlah Sumur</p>
					</div>
					<div id="cell">
						<p><?php //echo $tot_sumur;
							?></p>
					</div>
				</div>
				<div id="row">
					<div id="cell">
						<p>Jumlah Sumur Dangkal</p>
					</div>
					<div id="cell">
						<p><?php //echo $sm_dangkal;
							?></p>
					</div>
				</div>
				<div id="row">
					<div id="cell">
						<p>Jumlah Sumur Dalam</p>
					</div>
					<div id="cell">
						<p><?php //echo $sm_dalam;
							?></p>
					</div>
				</div>
				<div id="row">
					<div id="cell">
						<p>Jumlah Sumur Imbuhan</p>
					</div>
					<div id="cell">
						<p><?php //echo $sm_imbuhan;
							?></p>
					</div>
				</div>
				<div id="row">
					<div id="cell">
						<p>Jumlah Sumur Pantau</p>
					</div>
					<div id="cell">
						<p><?php //echo $sm_pantau;
							?></p>
					</div>
				</div>
				<div id="row">
					<div id="cell">
						<p>Jumlah Sumur ASR</p>
					</div>
					<div id="cell">
						<p><?php //echo $sm_asr;
							?></p>
					</div>
				</div>
				<div id="row">
					<div id="cell">
						<p>Jumlah Sumur Resapan</p>
					</div>
					<div id="cell">
						<p><?php //echo $sm_resapan;
							?></p>
					</div>
				</div>
			</div> -->

		</div>
	</div>
</body>

</html>
