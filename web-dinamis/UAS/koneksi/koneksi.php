<?php 

	$koneksi = mysqli_connect('localhost', 'root', '', 'uaswebdinamis');

	if (!$koneksi) {
		die("Error koneksi " . mysqli_connect_errno());
	}

 ?>