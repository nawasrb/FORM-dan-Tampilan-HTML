<!DOCTYPE html>
<html>
<head>
	<title> VALIDASI</title>
</head>
<body>
	<h2>PHP FORM VALIDATION</h2>
<form action="" method="post">
	<label>Nama :</label><br><input type="text" name="nama"><br>
	<label>Umur :</label><br><input type="text" name="umur"><br>
	<label>Username :</label><br><input type="text" name="username"><br>
	<input type="submit" name="simpan" value="simpan">
</form>
<?php
$nama=@$_POST['nama'];
$umur=@$_POST['umur'];
$username=@$_POST['username'];

if (@$_POST['simpan']) {
	if ($nama=="") {
		echo "Nama tidak boleh kosong";
	}
	if ($umur=="") {
		echo "Umur tidak boleh kosong";
	}
	if ($username=="") {
		echo "Username tidak boleh kosong";
	}
	else{
		echo "Berhasil";
	}
}
?>
</body>
</html>