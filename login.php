<!DOCTYPE html>
<html>
<head>
	<title>LOGIN KARYAWAN</title>
</head>
<body>
	<table>
		<form method="post">
			<tr>
				<td>NAMA </td>
				<td>
					<input type="text" name="nama">
				</td>
			</tr>
			<tr>
				<td>NIP </td>
				<td>
					<input type="text" name="nip">
				</td>
			</tr>
			<tr><td></td>
				<td>
					<input type="submit" name="kirim" value="LOGIN">
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
	$nip = $_POST["nip"];

	$data = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nama='$nama' and nip='$nip'");

	if (mysqli_num_rows($data) > 0) {
		echo "Berhasil Login";
		session_start();
		$_SESSION['nama'] = $nama;
		header("location:menu.php");
	} else {
		echo "Gagal Login";
	}
}


 ?>