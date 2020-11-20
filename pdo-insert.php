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

  $sql = "insert into pegawai(nip, nama, alamat, nohp) ".
         "values('$nip', '$nama', '$alamat', '$nohp')";
  
  $num = $conn->exec($sql);
  
  if ($num > 0) {
    echo "Data yang Anda masukkan sudah disimpan.";
    header('location: pdo-select.php');
  } else {
    echo "Data gagal disimpan ke dalam database";
  }
  
  $conn = NULL;
}
?>
