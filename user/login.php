<?php session_start(); ?>
<?php include "../layout/heder.php" ?>
<?php

if(isset($_SESSION['username'])) {
header('location:../index.php'); }
require_once("koneksi.php");
?>

<title>Form Login</title>

<center>
   <form action="proseslogin.php" method="post">
    <div>&nbsp;</div>
    <table>
      <tbody>
        <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
        <td>&nbsp;</td>
        <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
        <tr><td colspan="2" align="right"><input value="Masuk!" type="submit"><a href="daftar.php" class="btn btn">Daftar</a></td>
      </tbody>
    </table>
  </form>
</centers