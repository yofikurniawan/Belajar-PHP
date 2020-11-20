<html>
<head>
  <title>PDO: Mengubah Data</title>
</head>
<body>
<h2>Demo mengubah data di dalam database (PDO)</h2>
<?php

$dsn = "mysql:host=localhost;dbname=sipegdb";
$conn = new PDO($dsn, "root", "root");

if (!$conn) {
   echo "Koneksi ke server gagal dilakukan.";
   exit();
}

$query = "select nip, nama, alamat, nohp " . 
         "from pegawai order by nip";
$result = $conn->query($query);

if ($result) {
   ?>
     <h4><u>Daftar Pegawai PT. Multidimension:</u></h4>
     <table border="1">
	    <tr>
	      <th width="80">NIP</th>
	      <th width="110">Nama</th>
	      <th width="200">Alamat</th>
	      <th width="130">No. HP</th>
         <th width="110">Ubah Data</th>
         <th width="110">Hapus Data</th>
	    </tr>
      <?php
      while ($row = $result->fetch(PDO::FETCH_NUM)) {
      ?>
	      <tr>
	        <?php
           $nip = $row[0];
           $nama = $row[1];
           $alamat = $row[2];
           $nohp = $row[3];      
           ?>
           <td><?php echo $nip;?></td>
           <td><?php echo $nama;?></td>
           <td><?php echo $alamat;?></td>
           <td><?php echo $nohp;?></td>
           <td align="center">
             <a href="pdo-update-form.html?nip=<?php echo $nip; ?>">Ubah</a>
           </td>
           <td align="center">
             <a href="pdo-delete.php?nip=<?php echo $nip; ?>">Hapus</a>
           </td>
        </tr>
	   <?php
     }
     ?>
     </table>
     <p><a href="pdo-insert-form.html">Tambah Data</a></p>
   <?php   
}

// menutup koneksi
$conn = NULL;
?>
</body>
</html>
