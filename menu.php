<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	session_start();
	echo "SELAMAT DATANG ".$_SESSION['nama'];

	 ?>
	<table border="1" align="center" height="200px" width="200px">
		<td align="center">
			<a href="createpaket.php">Create paket</a><br>
			<a href="lispaket.php">List paket</a><br>
			<a href="">Update Paket</a><br>
			<a href="createpenghuni.php">Create penghuni</a>
		</td>
	</table>
</body>
</html>