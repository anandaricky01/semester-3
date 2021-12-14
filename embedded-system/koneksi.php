<?php 

	$koneksi = mysqli_connect('localhost', 'root', '', 'iot-tikub');

	if (!$koneksi) {
		die("Error koneksi " . mysqli_connect_errno());
	}

 ?>