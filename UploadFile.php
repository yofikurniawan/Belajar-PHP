<?php
  $file_user = $_FILES["file_user"]["tmp_name"];
  $namafile = $_FILES["file_user"]["name"];

  $tujuan = "c:\\data\\" . $namafile;

  if ($file_user != "none") {
    copy($file_user, $tujuan);
    echo "<h3>Proses upload telah dilakukan.</h3>";
    echo "\$file_user: $file_user<br />";
    echo "\$tujuan: $tujuan";
  } else {
    echo "<h3>Upload Error!</h3>";
    echo "Anda belum memilih file yang akan di-upload.";
  }
?>
