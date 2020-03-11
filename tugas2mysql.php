<!DOCTYPE html>
<html>
<head>
	<title>TUGAS 2 BUKU TAMU</title>
</head>
<body>
	<?php
	include('koneksi.php');
	  ?>
		<h1>Buku Tamu</h1>
		<p>Silahkan isi buku tamu di bawah ini untuk meninggalkan pesan Anda!</p>
		<form method="post" action="send.php">
			<p><b>Nama Lengkap :</b><br><input type="text" name="nama"/></p>
			<p><b>Email :</b><br><input type="text" name="email" /></p>
			<p><b>Isi Pesan:</b><br><textarea name="isi" rows="5" cols="50" ></textarea></p>
			<p><input type="submit" name="send" value="Kirim">
				<input type="reset" name="del" value="Hapus"></p>
		</form>
</body>
</html>