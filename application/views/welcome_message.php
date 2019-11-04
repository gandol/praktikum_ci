<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Selamat datang di CodeIgniter</title>
</head>
<body>
<table border='1'>
	<?php
	foreach ($data_toko_kirim as $data) {
		?>
			<tr>
				<td><?= $data->kode ?></td>
				<td><?= $data->nama_toko?></td>
			</tr>
		<?php
	}
	?>
</table>
</body>
</html>
