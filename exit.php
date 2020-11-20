<?php
$a = $_POST["pembilang"];
$b = $_POST["penyebut"];

if (isset($a) && isset($b)) {
   if ($b == 0) {
      echo "Bilangan pembagi tidak boleh NOL";
      exit();
   }
   $c = $a / $b;
   echo "Hasil bagi = " . $c;
}
?>
