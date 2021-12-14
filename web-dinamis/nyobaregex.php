<?php 

$text = 'hello halo helo hilo hklo';
if(preg_match_all("/h.lo/", $text, $match)) {
   echo 'Terdapat pola yaitu : <br>';
   var_dump($match);
   foreach ($match[0] as $pola) {
	  echo $pola.'<br>';
   }
 }


	// untuk menemukan angka
	// if (preg_match("/[0-9]{1,5}/", $text, $match)) {
	// 	echo "Terdapat pola : <br>";
	// 	foreach($match as $pola){
	// 		echo $pola;
	// 		echo "<br>";
	// 	}
	// }
	// atau dapat menggunakan escape character 'd'
	// if (preg_match("/\d{1,5}/", $text, $match)) {
	// 	echo "Terdapat pola : <br>";
	// 	foreach($match as $pola){
	// 		echo $pola;
	// 		echo "<br>";
	// 	}
	// }
	else {
		echo "Tidak ditemukan pola";
	}

 ?>