<?php 

	$array = array(100,99,55,34,78);
	$tuker = 0;
	$jumlah = count($array);

	$koma = 1;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
</head>
<body>
	<p>Terdapat nilai array : <?php foreach ($array as $arr) { echo "$arr"; if ($koma < $jumlah) {
		echo ", ";
		$koma++;
	}} $koma = 1;?></p><br>

	<!-- pengurutan array -->
	<?php 

	for ($i = 1; $i < $jumlah; $i++) { 

		for ($j = $jumlah - 1; $j >= $i; $j--) { 

			if ($array[$j] < $array[$j - 1]) {

				$tuker = $array[$j];
				$array[$j] = $array[$j - 1];
				$array[$j - 1] = $tuker; 
			}
		}
	}

	?>

	<p>Data yang terurut : <?php foreach ($array as $arr) { echo "$arr"; if ($koma < $jumlah) {
		echo ", ";
		$koma++;
	}}?></p>
</body>
</html>