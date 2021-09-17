<?php 

$roti = "Bluder";
$$roti = "Donat";

if ($roti == "Bluder") {
	$harga = 10000;
} else if($roti == "Donat"){
	$harga = 8000;
} else {
	$harga = 2000;
}

if ($$roti == "Bluder") {
	$$harga = 10000;
} else if($$roti == "Donat"){
	$$harga = 8000;
} else {
	$$harga = 2000;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
</head>
<body>

	<?php echo "Harga dari roti $roti adalah $harga"; ?><br>
	<?php echo "Harga dari roti ${$roti} adalah ${$harga}"; ?><br>

</body>
</html>

