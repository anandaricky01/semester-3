<?php 
	
	$gaji = 1000000;
	$gol = 3;

	if ($gol == 1) {
		$tunj = $gaji * (35/100);
	} else if ($gol == 2) {
		$tunj = $gaji * (25/100);
	} else {
		$tunj = $gaji * (15/100);
	}

	if ($gaji >= 1000000) {
		$pajak = $gaji * (5/100);
	} else {
		$pajak = 0;
	}

	$gajiBersih = $gaji + $tunj - $pajak;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
</head>
<body>
	
	<?php echo "Besar gaji pokok: $gaji" ;?><br>
	<?php echo "Golongan : $gol" ;?><br>
	<?php echo "Besar Tunjangan: $tunj";?><br>
	<?php echo "Pajak : $pajak";?><br>
	<?php echo "Gaji Bersih : $gajiBersih";?>

</body>
</html>