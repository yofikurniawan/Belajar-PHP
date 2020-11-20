<?php
  echo "<h3>Daftar file yang telah ter-upload:</h3>";
  $counter = 0;
  for ($i=0; $i<5; $i++) {
    $str = "file_user" . $i;
    $file_user = $_FILES[$str]["tmp_name"];
    $namafile = $_FILES[$str]["name"];
    $ukuran = $_FILES[$str]["size"];
    $tipe_mime = $_FILES[$str]["type"];

    $tujuan = "c:\\data\\" . $namafile;

    if ($file_user != "none") {
      copy($file_user, $tujuan);

      echo "Nama file: <strong>$namafile</strong><br />";
      echo "Ukuran: $ukuran<br />";
      echo "Tipe: $tipe_mime<br /><br />";
      $counter++;
    } else {
      continue;
    }
  }
  if ($counter == 0) {
    echo "Tidak ada file yang ter-upload.";
  }
?>
