<html>
<head>
   <title>Statemen continue</title>
</head>
<body>
<h3>Demo mengggunakan continue</h3>

<?php
for ($i=0; $i<10; $i++) {
   if ($i % 2 == 0) continue;
   echo $i . " ";
}
?>

</body>
</html>
