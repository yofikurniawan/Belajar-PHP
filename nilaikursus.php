<?php
   session_start();
?>
<html>
<head>
  <title>Daftar Nilai</title>
</head>
<body>
<h3>Daftar Nilai Peserta Kursus</h3>
Nama: <?php echo $_SESSION["nama"]; ?><br />
Kelas: <?php echo $_SESSION["kelas"]; ?><br /><br />

<?php
  $daftarnilai = $_SESSION["nilai"];
?>

<table border="1">
  <tr>
    <th width="250">Materi Kursus</th>
    <th width="60">Nilai</th>
  </tr>
  <?php
  foreach($daftarnilai as $materi => $nilai) {
    ?>
    <tr>
      <td><?php echo $materi; ?></td>
      <td align="center"><?php echo $nilai; ?></td>
    </tr>
    <?php
  }
  ?>
</table>

</body>
</html>
