<!DOCTYPE html>
<html>
<head>
	<title>CREATE PENGHUNI</title>
</head>
<body>
	<h3>CREATE PENGHUNI</h3>
	<table>
		<form method="post">
			<tr>
				<td>NAMA </td>
				<td>
					<input type="text" name="nama">
				</td>
			</tr>
			<tr>
				<td>UNIT </td>
				<td>
					<select name="unit">
						<option>---PILIH UNIT----</option>
						<option value="ASRAMA 1">ASRAMA 1</option>
						<option value="ASRAMA 2">ASRAMA 2</option>
						<option value="ASRAMA 3">ASRAMA 3</option>
						<option value="ASRAMA 4">ASRAMA 4</option>
						<option value="ASRAMA 5">ASRAMA 5</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>NO KTP</td>
				<td><input type="text" name="no_ktp"></td>
			</tr>
			<tr><td></td>
				<td>
					<input type="submit" name="kirim" value="CREATE">
				</td>
			</tr>
		</form>
	</table>
</body>
</html>

<?php 

include 'koneksi.php';

if (isset($_POST["kirim"])) {
	$nama = $_POST["nama"];
	$unit = $_POST["unit"];
	$no_ktp = $_POST["no_ktp"];

	$data = mysqli_query($koneksi, "INSERT INTO penghuni VALUES ('$nama','$unit','$no_ktp')");

	if (mysqli_affected_rows($koneksi) > 0) {
		echo "<script>
		alert('Data Berhasil disimpan')
		</script>";
	}else {
		echo "Gagal";
	}
}


 ?>
