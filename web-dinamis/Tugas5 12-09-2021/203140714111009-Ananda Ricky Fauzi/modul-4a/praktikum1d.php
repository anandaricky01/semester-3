<?php 

	$gaji_pokok = 1100000;
	$golongan = 1;

	if ($gaji_pokok >= 1000000) {
		$pajak = $gaji_pokok * (5/100);
	} else {
		$pajak = 0;
	}

	if ($golongan === 1) {
		$tunjangan = $gaji_pokok * (35/100);
	} elseif ($golongan === 2) {
		$tunjangan = $gaji_pokok * (25/100);
	} else {
		$tunjangan = $gaji_pokok * (15/100);
	}

	$gajiBersih = $gaji_pokok + $tunjangan - $pajak;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
</head>
<body>
	<table>
		<tr>
			<td>Besar gaji pokok </td>
			<td>: <?php echo $gaji_pokok; ?></td>
		</tr>
		<tr>
			<td>Golongan</td>
			<td>: <?php echo $golongan; ?></td>
		</tr>
		<tr>
			<td>Besar Tunjangan</td>
			<td>: <?php echo $tunjangan; ?></td>
		</tr>
		<tr>
			<td>Pajak</td>
			<td>: <?php echo $pajak; ?></td>
		</tr>
		<tr>
			<td>Gaji Bersih</td>
			<td>: <?php echo $gajiBersih; ?></td>
		</tr>
	</table>
</body>
</html>