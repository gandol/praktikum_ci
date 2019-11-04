<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
