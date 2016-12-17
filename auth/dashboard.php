<?php
error_reporting(0);
session_start();

  if (empty($_SESSION['username'] && $_SESSION['password'])) {

    header('location:index.php');
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Selamat Datang Di Dashboard</title>
  </head>
  <body>
    <h3>Hello World</h3>
    <?php echo $_SESSION['username']; ?>
    <a href="logout.php">logout</a>
  </body>
</html>
