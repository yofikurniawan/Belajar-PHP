<html>
<head>
   <title>Parameter Dinamis</title>
</head>
<body>
<h2>Demo variable-length argument</h2>

<?php

function sum(...$data) {
   $total = 0;
   foreach($data as $nilai) {
      $total += $nilai;
   }
   return $total;
}

function avg(...$data) {
   $total = 0;
   foreach($data as $nilai) {
      $total += $nilai;
   }
   return $total / sizeof($data);
}

echo "Memanggil fungsi sum() dan avg() dengan 4 argumen:<br />";
echo "sum(1,2,3,4) = " . sum(1,2,3,4) . "<br />";
echo "avg(1,2,3,4) = " . avg(1,2,3,4) . "<br /><br />";

echo "Memanggil fungsi sum() dan avg() dengan 6 argumen:<br />";
echo "sum(1,2,3,4,5,6) = " . sum(1,2,3,4,5,6) . "<br />";
echo "avg(1,2,3,4,5,6) = " . avg(1,2,3,4,5,6);

?>
</body>
</html>
