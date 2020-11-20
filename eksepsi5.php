<?php

define("__ERROR__", "ERROR: koneksi ke server MySQL gagal.");

if (isset($_POST["btnSubmit"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  try {
    error_reporting(0); // mematikan pesan "warning"
    $conn = mysqli_connect("localhost",
              $username,$password,"sipegdb");
    
    if (!$conn) {
      throw new Exception(__ERROR__);
    }
    $query = "SELECT * FROM pegawai";
    $result = mysqli_query($conn, $query);
    ?>
    <table border="1">
      <tr>
        <th>NIP</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No. HP</th>
      </tr>
      <?php
      while ($row = mysqli_fetch_row($result)) {
        ?>
        <tr>
          <td><?php echo $row[0]; ?></td>
          <td><?php echo $row[1]; ?></td>
          <td><?php echo $row[2]; ?></td>
          <td><?php echo $row[3]; ?></td>
        </tr>
        <?php
      }
      ?>
    </table>
    <?php
  } catch (Exception $e) {
    echo $e->getMessage();
  } finally {
    if ($conn) {
      mysqli_close($conn);      
    }
  }
}

?>