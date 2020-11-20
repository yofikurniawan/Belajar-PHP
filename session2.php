<?php
  session_start();  
  $idsession = session_id();
?>

<html>
<head>
   <title>Menggunakan Session</title>
</head>
<body>
<h2>Demo menggunakan session (Bagian 2)</h2>

<?php
  echo "ID Session: <strong>$idsession</strong><br />";
  $_SESSION["nama"] = "Bimo Haryo Hanggoro";
  $_SESSION["usia"] = 40;

  echo "\$_SESSION[\"nama\"] = " . $_SESSION["nama"] .
       "<br />";
  echo "\$_SESSION[\"usia\"] = " . $_SESSION["usia"];
?>

</body>
</html>
