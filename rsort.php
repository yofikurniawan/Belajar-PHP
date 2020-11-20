<html>
<head>
   <title>Mengurutkan Array</title>
</head>
<body>

<?php

function judul() {
  echo "<h2>Demo mengurutkan array " .
       "secara descending</h2>";
}

judul();

$suku = array("nol"  => "Jawa", 
              "satu" => "Sunda", 
              "dua"  => "Batak", 
              "tiga" => "Minang", 
              "empat" => "Dayak");

echo "<strong>Sebelum diurutkan:</strong><br />";
foreach ($suku as $key => $value) {
   echo "$key: $value" . "<br />";
}

rsort($suku);

echo "<br /><strong>Setelah diurutkan:</strong><br />";
foreach ($suku as $key => $value) {
   echo "$key: $value" . "<br />";
}

?>

</body>
</html>
