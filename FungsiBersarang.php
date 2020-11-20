<html>
<head>
   <title>Fungsi bersarang</title>
</head>
<body>
<h3>Demo fungsi bersarang</h3>

<?php

function zerofill($number, $len) {
   if (!function_exists('IntToStr')) {
      // fungsi lokal (fungsi di dalam fungsi)
      function IntToStr($x) {
         return strval($x);
      }
   }
   $temp = '';
   if ($len > strlen(IntToStr($number))) {
      $zcount = $len - strlen(IntToStr($number));		
      for ($i=0; $i<$zcount; $i++) {
         $temp .= '0';
      }
      $temp .= IntToStr($number);
   }
   return $temp;
}

echo zerofill(123, 4) . "<br />";
echo zerofill(123, 5) . "<br />";
echo zerofill(123, 6) . "<br />";
echo zerofill(123, 7);

?>

</body>
</html>

