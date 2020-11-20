<html>
<head>
   <title>Fitur PHP 7</title>
</head>
<body>
<h2>Demo menggunakan operator <em>NULL Coalesing</em> (??)</h2>

<?php

echo "Sebelum variabel \$b didefinisikan:<br />";
$a = $b ?? 0;
echo "\$a = \$b ?? 0;<br />";
echo "Nilai \$a = $a<br /><br />";

// mendefinisikan variabel $b dengan nilai 10;
$b = 10;

echo "Setelah variabel \$b didefinisikan:<br />";
$a = $b ?? 0;
echo "\$a = \$b ?? 0;<br />";
echo "Nilai \$a = $a";
                 
?>

</body>
</html>
