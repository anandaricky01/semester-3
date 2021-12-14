<?php 

	$roti = "Bluder";
	$$roti = "Donat";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
</head>
<body>
	<?php if ($roti === "Bluder" && $$roti === "Donat") {
		echo "Harga dari roti $roti adalah 10000 <br>";
		echo "Harga dari roti ${$roti} adalah 8000";
	} ?>
</body>
</html>