<?php

$username = $_POST['username'];
$pass     = $_POST['password'];

$user = 'admin'; //untuk set username
$pass = 'admin'; //untuk set password

if ($username == $user && $pass == $pass){

  session_start();

  //echo "berhasil login";

  $_SESSION['username'] = $user;
  $_SESSION['password'] = $pass;

  //halaman user setelah berhasil login
  header('location:dashboard.php');

}else {
  //pesan keluar jika login gagal
  echo "gagal login";
}

?>
