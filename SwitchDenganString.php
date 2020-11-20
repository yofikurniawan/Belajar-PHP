<html>
<head>
   <title>Statemen switch</title>
</head>
<body>
<h3>Demo menggunakan switch dengan ekspresi string</h3>

<?php
   $pilihan = "empat";

   switch ($pilihan) {
      case "satu":  echo "Pilihan ke-1"; break;
      case "dua":   echo "Pilihan ke-2"; break;
      case "tiga":  echo "Pilihan ke-3"; break;
      case "empat": echo "Pilihan ke-4"; break;
      case "lima":  echo "Pilihan ke-5"; break;
      default:
         echo "Pilihan default";
   }
?>

</body>
</html>
