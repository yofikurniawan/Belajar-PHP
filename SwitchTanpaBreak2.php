<html>
<head>
   <title>Switch tanpa break</title>
</head>
<body>
<h3>Demo ke-2 menggunakan switch tanpa break</h3>

<?php
   $a = 2;
   switch($a) {
      case 1: echo "Nilai konstan 1<br />";
      case 2: echo "Nilai konstan 2<br />";
      case 3: echo "Nilai konstan 3<br />";
      case 4: echo "Nilai konstan 4<br />";
      case 5: echo "Nilai konstan 5<br />";
      default:
         echo "Bagian default";
   }
?>

</body>
</html>
