<html>
<head>
   <title>Email</title>
</head>
<body>
<h2>Demo mengirim email (Bagian 2)</h2>

<?php
  if (isset($_POST["btnSubmit"])) {
    $penerima = $_POST["penerima"];
    $judul = $_POST["judul"];
    $pesan = $_POST["pesan"];

    if (mail($penerima,$judul,$pesan)) {
      echo "Email telah terkirim...";
    } else {
      echo "Email gagal dikirim...";
    }
  }
?>

</body>
</html>
