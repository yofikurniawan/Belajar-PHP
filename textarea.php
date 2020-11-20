<?php
   if (isset($_POST["btnSubmit"])) {
      $nama = $_POST["nama"];
      $email = $_POST["email"];
      $website = $_POST["website"];
      $komentar = $_POST["komentar"];
      echo "<h3>Data yang dimasukkan:</h3>";
      echo "<strong>Nama:</strong> $nama<br />";
      echo "<strong>Email:</strong> $email<br>";
      echo "<strong>Website:</strong> $website<br>";
      echo "<strong>Komentar:</strong> $komentar<br>";
   }
?>
