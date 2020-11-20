<html>
<head>
   <title>Destruktor</title>
</head>
<body>
<h2>Demo destruktor (Bagian 2)</h2>

<?php
  class FileTeks {
    private $file;

    // konstruktor
    public function __construct($namafile) {
      echo "Membuat dan membuka file...<br/>";
      $this->file = fopen($namafile, "w+r");
    }
    public function tulisData($str) {
      fputs($this->file, $str . "\n");
    }
    public function bacaData() {
      // posisi awal file
      fseek($this->file, 0); 
      // membaca per baris
      while (!feof($this->file)) {
        $baris = fgets($this->file);
        echo "<strong>$baris</strong><br/>";
      }
    }
    // destruktor
    public function __destruct() {
      echo "Menutup file...<br/>";
      fclose($this->file);
    }
  }

  // membuat objek FileTeks
  $f = new FileTeks("destruktor.txt");

  // menulis data ke dalam file
  $f->tulisData("Baris data ke-1");
  $f->tulisData("Baris data ke-2");
  $f->tulisData("Baris data ke-3");
  $f->tulisData("Baris data ke-4");

  // membaca data dari dalam file
  echo "Isi file:<br/>";
  $f->bacaData();

  // di akhir skrip, destruktor akan dipanggil
  // dan file akan ditutup
?>

</body>
</html>
