<?php 

	$pensil = 15;
	$jumlahAnak = 7;

	$hasilPembagian = (int) ($pensil/$jumlahAnak);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
</head>
<body>
	<p>Masing-masing anak mendapatkan <?php echo $hasilPembagian; ?> pensil</p>
</body>
</html>