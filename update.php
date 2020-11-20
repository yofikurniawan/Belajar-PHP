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

  $sql = "update pegawai ".
         "set nama = '$nama', ".
         "    alamat = '$alamat', ".
         "    nohp = '$nohp' ".
         "where nip = '$nip'";

  mysqli_query($conn, $sql);
  $num = mysqli_affected_rows($conn);

  if ($num > 0) {
    echo "Perubahan data telah disimpan.";
    ?><br /><br />
    <a href="showdata.php">Lihat perubahan</a><?php
  } else {
    echo "Perubahan data gagal disimpan.";
  }
}
?>
