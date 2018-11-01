<?php 

include 'koneksi.php';

$data = mysqli_query($koneksi, "SELECT * FROM paket")

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>LIST PAKET</title>
</head>
<body>
	<h3>LIST PAKET</h3>
	<table border="1">
		<tr>
			<th>TANGGAL DATANG</th>
			<th>SASARAN</th>
			<th>PENERIMA</th>
			<th>ISI PAKET</th>
			<th>STATUS</th>
			<th>TANGGAL AMBIL</th>
			<th>AKSI</th>
		</tr>
		<?php while ($paket = mysqli_fetch_assoc($data)) { ?>
			<tr>
				<td><?php echo $paket['tanggal_datang']; ?></td>
				<td><?php echo $paket['sasaran']; ?></td>
				<td><?php echo $paket['penerima']; ?></td>
				<td><?php echo $paket['isi_paket']; ?></td>
				<td><?php echo $paket['status']; ?></td>
				<td><?php echo $paket['tanggal_ambil']; ?></td>
				<td><a href="">UPDATE STATUS</a></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>