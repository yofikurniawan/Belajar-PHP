<html>
<head>
   <title>Statemen goto</title>
</head>
<body>
<h3>Demo mengggunakan goto</h3>

<?php
$i = 0;

// membuat label
mulai:

if ($i < 10) {   
   echo "Baris ke-" . $i . "<br />";
   $i++;
   goto mulai; // memindahkan eksekusi ke label "mulai"
}
?>

</body>
</html>
