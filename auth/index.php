<?php
error_reporting(0);
session_start();

  if (!empty($_SESSION['username'] && $_SESSION['password'])) {

    header('location:dashboard.php');
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LOGIN </title>
    </head>
  <body>
    <h1>LOGIN</h1>
    <form class="" action="aksi.php" method="post">
      <table border="1">
        <tr>
          <td>Username</td>
          <td><input type="text" name="username"></td>
        </tr>

        <tr>
          <td>Password</td>
          <td><input type="password" name="password"></td>
        </tr>

        <tr>
          <td><button type="submit">Login</button></td>
        </tr>

      </table>
    </form>

  </body>
</html>
