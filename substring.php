<head>
   <title>strstr() dan substr()</title>
</head>
<body>
<h2>Demo mencari dan mengambil substring</h2>

<?php
  $str = "Pemrograman";
  echo "\$str: $str<br /><br />";

  echo "<strong>Mencari Substring:</strong><br />";
  $substr = strstr($str, "gram");
  if ($substr) {
    echo "Subtring \"gram\" ditemukan dalam \$str ".
         "<br /><br />";
  } else {
    echo "Subtring \"gram\" tidak ditemukan ". 
         "dalam \$str<br /><br />";
  }

  echo "<strong>Mengambil Substring:</strong><br />";
  echo substr($str, 2) . "<br />";  
  echo substr($str, 2, 7);
?>

</body>
</html>
