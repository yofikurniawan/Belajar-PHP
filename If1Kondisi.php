<?php
    $angka = $_POST["angka"];
   if ($angka < 1 || $angka > 10) {
      echo "Anda memasukkan bilangan $angka.<br />";
      echo "ERROR: Bilangan harus ". 
           "dalam rentang 1 sampai 10.";
      exit();
   }
   echo "Bilangan yang Anda masukkan adalah $angka";
?>
