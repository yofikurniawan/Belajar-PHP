<?php
if (isset($_POST["btnSubmit"])) {
  $nip = $_POST["nip"];
  $nama = $_POST["nama"];
  $alamat = $_POST["alamat"];
  $nohp = $_POST["nohp"];

  $conn = mysqli_connect("localhost", "root",
                         "root", "sipegdb");
  if (mysqli_connect_errno()) {
    echo "Koneksi ke server gagal";
    exit();
  }

  $sql = "insert into pegawai(nip, nama, alamat, nohp) ".
         "values('$nip', '$nama', '$alamat', '$nohp')";
  
  mysqli_query($conn, $sql);
  $num = mysqli_affected_rows($conn);

  if ($num > 0) {
    echo "Data yang Anda masukkan sudah disimpan.";
  } else {
    echo "Data gagal disimpan ke dalam database";
  }
}
?>
