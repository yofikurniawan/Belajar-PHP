<html>
<head>
   <title>Statemen switch</title>
</head>
<body>
<h3>Demo menggunakan switch dengan ekspresi boolean</h3>

<?php
   $x = -4;
   
   $boolExpr = ($x < 0);   

   switch ($boolExpr) {
      case TRUE:  echo "Harga mutlak: " . -$x; break;
      case FALSE: echo "Harga mutlak: " . $x; break;
   }
?>

</body>
</html>
