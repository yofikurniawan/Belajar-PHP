<?php
    $hobi = $_POST["hobi"];
    
   echo "<p>Hobi yang Anda pilih:</p>";
   foreach ($hobi as $nilai) {
      echo "- $nilai <br />";
   }
	
?>
