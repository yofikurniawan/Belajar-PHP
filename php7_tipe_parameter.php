<html>
<head>
   <title>Fitur PHP 7</title>
</head>
<body>
<h2>Demo deklarasi tipe parameter</h2>

<?php

function cetak(string $s, int $i, bool $newline=false) {
  printf("%s %d", $s, $i);
  if ($newline) {
    echo "<br />";
  }
}

cetak("PHP", 7, true);
cetak("Python", 3);
                 
?>

</body>
</html>
