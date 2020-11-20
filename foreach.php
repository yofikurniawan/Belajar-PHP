<html>
<head>
   <title>Struktur pengulangan foreach</title>
</head>
<body>
<h3>Demo pengulangan menggunakan struktur foreach</h3>

<?php
$pegawai = array("manajer"	=> "Aas",
                 "dirut"		=> "Jajang",
                 "umum"		=> "Dadan",
                 "teknisi"	=> "Renra");

foreach($pegawai as $nama) {
   echo "Hallo, $nama<br />";
}

?>

</body>
</html>
