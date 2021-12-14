<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iot-tikub";
 
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
$nama_sensor=htmlspecialchars($_GET["nama_sensor"]) ; // 'sensor_A';
$nilai=htmlspecialchars($_GET["nilai"]/1.0) ; //34;
$waktu=date("Y-m-d H:i:s");    
 
$sql = "INSERT INTO ketinggian(id_data,id_sensor,nilai_sensor) VALUES (NULL,'$nama_sensor','$nilai')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
;
 
?>
