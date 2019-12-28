<!DOCTYPE html>
<html>
<head>
	<title>Mengurutkan!</title>
</head>
<body>
	<h1>Contoh Pengurutan</h1>
	<?php
		$data = array('A','R','K','A','D','E','M','Y');
		print_r($data);
		echo "<br>Setelah diurutkan";
		sort($data);
		print_r($data);
	?>

</body>
</html>