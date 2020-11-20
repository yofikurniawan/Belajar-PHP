<html>
<head>
   <title>Mengurutkan Array</title>
</head>
<body>

<?php

function judul() {
  echo "<h2>Demo mengurutkan array " .
       "menggunakan fungsi asort()</h2>";
}

judul();

$suku = array("0" => "Jawa", 
              "1" => "Sunda", 
              "2" => "Batak", 
              "3" => "Minang", 
              "4" => "Dayak");

echo "<strong>Sebelum diurutkan:</strong><br />";
foreach ($suku as $key => $value) {
   echo "$key: $value" . "<br />";
}

asort($suku);

echo "<br /><strong>Setelah diurutkan:</strong><br />";
foreach ($suku as $key => $value) {
   echo "$key: $value" . "<br />";
}

?>
</body>
</html>
