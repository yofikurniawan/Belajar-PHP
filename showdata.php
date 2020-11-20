<html>
<head>
  <title>Menghapus Data</title>
</head>
<body>
<h2>Demo menghapus data</h2>
<?php

$dbname = "sipegdb";
$host = "localhost";
$username = "root";
$password = "root";

$conn = mysqli_connect($host, $username, $password, 
                       $dbname);

if (mysqli_connect_errno()) {
   echo "Koneksi ke server gagal dilakukan.";
   exit();
}

$query = "select nip, nama, alamat, nohp " . 
         "from pegawai order by nip";
$result = mysqli_query($conn, $query);

if ($result) {
   ?>
     <h4><u>Daftar Pegawai PT. Multidimension:</u></h4>
     <form action="delete.php" method="post"> 
     <table border="1">
	    <tr>
         <th></th>
         <th width="80">NIP</th>
         <th width="110">Nama</th>
         <th width="200">Alamat</th>
         <th width="130">No. HP</th>
	    </tr>
      <?php
      while ($row = mysqli_fetch_row($result)) {
      ?>
	      <tr>
	        <?php
           $nip = $row[0];
           $nama = $row[1];
           $alamat = $row[2];
           $nohp = $row[3];      
           ?>
           <td>
             <input name="data[]" type="checkbox" 
             Value="<?php echo $nip; ?>">
           </td>
           <td><?php echo $nip;?></td>
           <td>
             <a href="form-update.php?nip=<?php 
                echo $nip;?>">
                <?php echo $nama;?></a></td>
           <td><?php echo $alamat;?></td>
           <td><?php echo $nohp;?></td>
        </tr>
	   <?php
     }
     ?>
     </table>
     <br />
     <strong>Keterangan: </strong>
     Pilih data yang akan dihapus dengan memberi tanda
     cek pada kotak yang tersedia!
     <br /><br />
     <input type="submit" name="btnSubmit" value="Hapus">
     </form>
   <?php
   mysqli_free_result($result);
}

mysqli_close($conn);
?>
</body>
</html>
