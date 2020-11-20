<html>
<head>
   <title>Menggunakan File</title>
</head>
<body>
<h2>Demo menggunakan file untuk membuat buku tamu</h2>

<?php
if (isset($_POST["kirim"])) {
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $komentar = $_POST["komentar"];

  $file = "c:\\Apache24\\htdocs".
          "\\modul-php\\bukutamu.txt";

  if (!file_exists($file)) {
    $fp = fopen($file, "w");
  } else {
    $fp = fopen($file, "a");
  }

  $barisdata = $nama .";". $email .";". $komentar . "\n";
  fputs($fp, $barisdata);

  fclose($fp);

  echo "Terima kasih <strong>$nama</strong>, ".
       "komentar Anda sudah tersimpan di server kami";
}
?>

</body>
</html>
