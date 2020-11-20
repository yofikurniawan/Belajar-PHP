<?php
  session_start();
  $idsession = session_id();
  if (!isset($_SESSION["count"])) {    
    $_SESSION["count"] = 1;
  }
?>

<html>
<head>
   <title>Menggunakan Session</title>
</head>
<body>
<h2>Demo menggunakan session (Bagian 1)</h2>

<?php
  echo "ID Session: <strong>$idsession</strong><br />";
  echo "Anda telah mengunjungi halaman ini sebanyak " .
       $_SESSION["count"] . " kali.";
  $_SESSION["count"] = $_SESSION["count"] + 1;
?>

</body>
</html>
