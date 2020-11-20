<html>
<head>
   <title>Email</title>
</head>
<body>
<h2>Demo mengirim email (Bagian 1)</h2>

<?php
  $penerima = "mbraharjo@gmail.com";
  $judul = "PHP Email";
  $isi = "Ini adalah contoh email ".  
         "yang dikirim menggunakan PHP";

  // mengirim email
  $berhasil = mail($penerima, $judul, $isi);
  if ($berhasil) {
    echo "Email telah terkirim...";
  } else {
    echo "Email gagal dikirim...";
  }
?>

</body>
</html>
