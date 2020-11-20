<html>
<head>
   <title>Operator Kondisional</title>
</head>
<body>
<h2>Demo operator kondisional (?:)</h2>
<?php
   function absolute($x) {
      $abs = ($x < 0) ? -$x : $x;
      return $abs;
   }
   
   $a = -5;
   $b = -10;
   $c = 15;
   
   echo "\$a: " . $a . "<br />";
   echo "\$b: " . $b . "<br />";
   echo "\$b: " . $c . "<br /><br />";
   echo "absolute(\$a): " . absolute($a) . "<br />";
   echo "absolute(\$b): " . absolute($b) . "<br />";
   echo "absolute(\$c): " . absolute($c);
   
?>
</body>
</html>
