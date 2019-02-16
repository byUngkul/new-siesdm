<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<thead>
		<tr>
			<th>tgl ahir</th>
			<th>tgl sekarang</th>
			<th>selishih</th>
		</tr>
		</thead>
		<tbody>
			<?php foreach ($waktu as $key):?>
				<tr>
					<td><?=$key->tgl_ahir_sipa?></td>
					<td><?=$key->tgl_sekarang?></td>
					<td><?=$key->selisih?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>