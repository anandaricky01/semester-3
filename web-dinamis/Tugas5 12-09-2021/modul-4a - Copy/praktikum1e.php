<?php 

	$batas = 10;
	$hasil = 0;
	for ($i=0; $i <= $batas; $i++) { 
		$hasil += $i;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
</head>
<body>
	<?php echo "Bilangan maksimum : $batas"; ?><br>
	<?php echo "Total nilai adalah : $hasil"; ?>
</body>
</html>