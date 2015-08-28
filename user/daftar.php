<?php include "../layout/awal.php" ?>
<?php
session_start();
if(isset($_SESSION['username'])) {
header('location:../index.php'); }
?>

<title>Form Pendaftaran</title>

<center>
  <form action="prosesdaftar.php" method="post">
    <table>
      <tbody>
        <tr><td colspan="2" align="center"><h1>Daftar Baru</h1></td></tr>
        <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
        <td>&nbsp;</td>
        <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
        <td>&nbsp;</td>
        <tr><td colspan="2" align="right"><input value="Daftar" type="submit"></td></tr>
      </tbody>
    </table>
  </form>
</center>