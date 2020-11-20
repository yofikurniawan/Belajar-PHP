<html>
<head>
   <title>Email</title>
</head>
<body>
<h2>Demo mengirim email (Bagian 3)</h2>
<form action="mail3.php" method="post">
  <table>
    <tr>
      <td>Ke:</td>
      <td><input type="text" name="penerima"
           size="40"></td>
    </tr>
    <tr>
      <td>Cc (carbon copy):</td>
      <td><input type="text" name="cc"
           size="40"></td>
    </tr>
    <tr>
      <td>Bcc (blind carbon copy):</td>
      <td><input type="text" name="bcc"
           size="40"></td>
    </tr>
    <tr>
      <td>Dari:</td>
      <td><input type="text" name="pengirim"
           size="40"></td>
    </tr>
    <tr>
      <td>Judul:</td>
      <td><input type="text" name="judul"
           size="40"></td>
    </tr>
    <tr>
      <td>Pesan:</td>
      <td><textarea name="pesan"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnSubmit"
           value="Kirim"></td>
    </tr>
  </table>
</form>

</body>
</html>
