<html>
<head>
   <title>Generator</title>
</head>
<body>
<h2>Demo membuat dan menggunakan generator</h2>

<?php

// membuat generator
function xrange($start, $limit, $step=1) {
   if ($start < $limit) {
      if ($step <= 0) {
         echo "Nilai \$step harus positif";
         exit();
      }
      for ($i=$start; $i<$limit; $i += $step) {
         yield $i;
      }
   } else {
      if ($step >= 0) {
         echo "Nilai \$step harus negatif";
         exit();
      }
      for ($i=$start; $i>$limit; $i += $step) {
         yield $i;
      }
   }
}

function iterate($generator) {
   $temp = "[";
   foreach($generator as $elemen) {
      $temp .= strval($elemen) . ','; 
   }
   // menghilangkan tanda koma terakhir
   $temp = substr($temp,0,strlen($temp)-1);
   // menampilkan semua elemen
   echo $temp . "]";
}

// menggunakan generator
$a = xrange(0,11);
echo "xrange(0,11) : ";
iterate($a);
echo "<br />";

$b = xrange(0,11,2);
echo "xrange(0,11,2) : ";
iterate($b);
echo "<br />";

$c = xrange(10,-1,-1);
echo "xrange(10,-1,-1) : ";
iterate($c);
echo "<br />";

$d = xrange(10,-1,-2);
echo "xrange(10,-1,-2) : ";
iterate($d);

?>
</body>
</html>
