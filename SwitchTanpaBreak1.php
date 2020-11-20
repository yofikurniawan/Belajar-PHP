<html>
<head>
   <title>Switch tanpa break</title>
</head>
<body>
<h3>Demo ke-1 menggunakan switch tanpa break</h3>

<?php
   $a = 2;

   switch($a) {
      case 1: $b = $a + 1;
      case 2: $b = $a + 2;
      case 3: $b = $a + 3;
      case 4: $b = $a + 4;
      case 5: $b = $a + 5;
      default:
         $b = 0;
   }

   echo "Nilai b = $b";
?>

</body>
</html>
