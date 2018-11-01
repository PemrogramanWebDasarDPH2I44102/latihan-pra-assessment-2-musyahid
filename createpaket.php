<!DOCTYPE html>
<html>
<head>
	<title>CREATE PAKET</title>
</head>
<body>
	<h2>CREATE PAKET</h2>
	<table>
		<form method="post">
			<tr>
				<td>ISI PAKET</td>
				<td>
					<input type="text" name="isi_paket">
				</td>
			</tr>
			<tr>
				<td>SASARAN PAKET</td>
				<td>
					<input type="text" name="sasaran">
				</td>
			</tr>
			<tr>
				<td>PENERIMA</td>
				<td>
					<input type="text" name="penerima">
				</td>
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
	$isi_paket = $_POST["isi_paket"];
	$sasaran = $_POST["sasaran"];
	$penerima = $_POST["penerima"];

	$data = mysqli_query($koneksi, "INSERT INTO paket VALUES('','$sasaran', '$penerima', '$isi_paket','','')");

	if (mysqli_affected_rows($koneksi) > 0) {
		echo "<script>
		alert('Create Berhasil')
		document.location.href = 'listpaket.php'
		</script>";
	}
}


 ?>