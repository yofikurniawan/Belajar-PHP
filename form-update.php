<html>
<head>
   <title>Mengubah Data</title>
</head>
<body>
<h2>Form Perubahan Data</h2>

<?php
  $nip = $_GET["nip"];

  $conn = mysqli_connect("localhost", "root",
                         "root", "sipegdb");
  if (mysqli_connect_errno()) {
    echo "Koneksi ke server gagal";
    exit();
  }

  $query = "select nama, alamat, nohp from pegawai " .
           "where nip = '$nip'";
  $result = mysqli_query($conn, $query);
  if ($result) {
    $row = mysqli_fetch_array($result);
  }
?>

<form action="update.php" method="post">
   <strong>NIP:</strong><br />
   <?php echo $nip; ?>
   <input name="nip" type="hidden" 
     value="<?php echo $nip; ?>">
   <br /><br />
   <strong>Nama:</strong><br />
   <input name="nama" type="text" size="30" maxlength="25"
   value="<?php echo $row[0]; ?>">
   <br /><br />
   <strong>Alamat:</strong><br />
   <input name="alamat" type="text" size="50" 
   maxlength="50" value="<?php echo $row[1]; ?>">
   <br /><br />
   <strong>No. HP:</strong><br />
   <input name="nohp" type="text" size="15" maxlength="15"
   value="<?php echo $row[2]; ?>">
   <br /><br />
   <input type="submit" name="btnSubmit" value="Simpan">
</form>

</body>
</html>
