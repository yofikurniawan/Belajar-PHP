<html>
<head>
   <title>Fitur PHP 7</title>
</head>
<body>
<h2>Demo menggunakan operator <=></h2>

<?php

echo "Membandingkan nilai bertipe int:<br />";
echo "10 &lt;=&gt; 13 : " . (10 <=> 13) . "<br />";
echo "10 &lt;=&gt; 10 : " . (10 <=> 10) . "<br />";
echo "13 &lt;=&gt; 10 : " . (13 <=> 10) . "<br /><br />";

echo "Membandingkan nilai bertipe float:<br />";
echo "10.0 &lt;=&gt; 13.0 : " . (10.0 <=> 13.0) . "<br />";
echo "10.0 &lt;=&gt; 10.0 : " . (10.0 <=> 10.0) . "<br />";
echo "13.0 &lt;=&gt; 10.0 : " . (13.0 <=> 10.0) . "<br /><br />";

echo "Membandingkan nilai bertipe string:<br />";
echo "'PHP' &lt;=&gt; 'Python' : " . ('PHP' <=> 'Python') . "<br />";
echo "'PHP' &lt;=&gt; 'PHP' : " . ('PHP' <=> 'PHP') . "<br />";
echo "'Python' &lt;=&gt; 'PHP' : " . ('Python' <=> 'PHP');

?>

</body>
</html>
