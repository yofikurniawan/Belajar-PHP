<?php

   $nama = $_POST["nama"];
   $gender = $_POST["gender"];
    
   echo "<p>Data yang dimasukkan:</p>";
   echo "<strong>Nama:</strong> $nama <br />";
   echo "<strong>Jenis kelamin:</strong> ";

   if ($gender == "P") {
      echo "Pria";
   } else {
      echo "Wanita";      
   }	
?>
