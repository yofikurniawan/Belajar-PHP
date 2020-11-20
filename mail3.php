<html>
<head>
   <title>Email</title>
</head>
<body>
<h2>Demo mengirim email (Bagian 3)</h2>

<?php
  if (isset($_POST["btnSubmit"])) {
    $penerima = $_POST["penerima"];
    $cc = $_POST["cc"];
    $bcc = $_POST["bcc"];
    $pengirim = $_POST["pengirim"];
    $judul = $_POST["judul"];
    $pesan = $_POST["pesan"];

    $header = "Cc: $cc\r\n".
              "Bcc: $bcc\r\n".
              "From: $pengirim";

    if (mail($penerima,$judul,$pesan,$header)) {
      echo "Email telah terkirim...";
      echo "<br/><br/>";
      echo "Ke: $penerima<br/>";
      echo "Cc: $cc<br/>";
      echo "Bcc: $bcc<br/>";
      echo "Judul: $judul<br/>";
      echo "Pesan: $pesan";
    } else {
      echo "Email gagal dikirim...";
    }
  }
?>

</body>
</html>
