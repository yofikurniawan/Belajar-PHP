<?php
   if (isset($_POST["btnSubmit"])) {
      $nama = $_POST["nama"];
      $email = $_POST["email"];
      if (isset($nama) && isset($email)) {
         echo "<h3>Data yang dimasukkan:</h3>";
         echo "Nama: $nama<br />";
         echo "Email: $email";
      }
   }
?>
