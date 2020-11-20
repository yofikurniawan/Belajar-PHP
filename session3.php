<?php
  session_start();
?>

<html>
<head>
   <title>Menggunakan Session</title>
</head>
<body>
<h2>Demo menggunakan session (Bagian 3)</h2>

<?php
  $_SESSION["nama"] = "Rizki Dwi Mulyana";
  $_SESSION["kelas"] = "Web Programmer";
  $_SESSION["nilai"] = array(
                       "Algoritma" => "A",
                       "SQL" => "A",
                       "HTML & CSS" => "B",
                       "PHP" => "A");
  echo "Selamat Datang, " .
  "<strong>" . $_SESSION["nama"] . "</strong>";
?>
<br /><br />
<a href="nilaikursus.php">Lihat nilai kursus</a>

</body>
</html>
