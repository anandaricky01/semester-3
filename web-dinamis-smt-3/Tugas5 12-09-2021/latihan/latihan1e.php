<?php

	$batas = 10;
	$hasil = 0;

	for ($i = 1; $i <= $batas; $i++) { 
		$hasil = $hasil + $i;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo "Bilangan maksimum : $batas"; ?><br>
	<?php echo "Total nilai adalah : $hasil"; ?>
</body>
</html>