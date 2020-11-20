<?php
if (isset($_POST["btnSubmit"])) {
  $nip = $_POST["nip"];
  $nama = $_POST["nama"];
  $alamat = $_POST["alamat"];
  $nohp = $_POST["nohp"];

  $dsn = "mysql:host=localhost;dbname=sipegdb";
  $conn = new PDO($dsn, "root", "root");

  if (!$conn) {
    echo "Koneksi ke server gagal dilakukan.";
    exit();
  }

  $sql = "update pegawai ".
         "set nama = '$nama', ".
         "    alamat = '$alamat', ".
         "    nohp = '$nohp' ".
         "where nip = '$nip'";
  
  $num = $conn->exec($sql);

  if ($num > 0) {
    echo "Perubahan data telah disimpan.";
    header('location: pdo-select.php');
  } else {
    echo "Perubahan data gagal disimpan.";
  }
  $conn = NULL;
}
?>
