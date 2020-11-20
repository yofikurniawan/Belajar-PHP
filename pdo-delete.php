<?php

$nip = $_GET["nip"];

$dsn = "mysql:host=localhost;dbname=sipegdb";
$conn = new PDO($dsn, "root", "root");

if (!$conn) {
  echo "Koneksi ke server gagal dilakukan.";
  exit();
}

$sql = "delete from pegawai where nip = '$nip'";
  
$num = $conn->exec($sql);

if ($num > 0) {
  header('location: pdo-select.php');
} else {
  echo "Data gagal dihapus.";
}

$conn = NULL;

?>
