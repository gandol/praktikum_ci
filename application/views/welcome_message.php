<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>
<div class="container">
	<table border='1' id="tabelToko" class="table table-striped table-bordered" cellspacing="0" width="100%"> 
		<thead>
			<tr>
			<th>Kode Toko</th>
			<th>Nama Toko</th>
			</tr>
		</thead>
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
</div>
</body>
