<html>
<head>
   <title>Overload</title>
</head>
<body>
<h2>Demo overload terhadap metode</h2>

<?php
  class Overload {
    public function __call($nama, $param) {
      if ($nama == "tulis") {
        for ($i=0; $i<sizeof($param); $i++) {
          echo $param[$i] . "<br/>";
        }
      }
    }
  }

  // membuat objek
  $obj = new Overload();

  // memanggil tulis() dengan 1 parameter
  echo "Pemanggilan dengan 1 parameter:<br/>";
  $obj->tulis("PHP");
  echo "<br/>";

  echo "Pemanggilan dengan 2 parameter:<br/>";
  // memanggil tulis() dengan 2 parameter
  $obj->tulis("PHP","Perl");
  echo "<br/>";

  echo "Pemanggilan dengan 3 parameter:<br/>";
  // memanggil tulis() dengan 3 parameter
  $obj->tulis("PHP","Perl","Python");
?>

</body>
</html>
