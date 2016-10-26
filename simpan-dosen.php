<?php
/*
@package : CRUD with Mysqli Procedural
@author  : Fika Ridaul Maulayya
@since   : 2016
@license : 2016 Nahkoda - Development Resource. All Rights Reserved.
*/

//include koneksi ke database
include_once('config/koneksi.php');
//deklarasi variable
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO tbl_dosen (nama, email, alamat)
VALUES ('$nama', '$email', '$alamat')";

if ($connection->query($query) === TRUE) {
    echo "New record created successfully";
    echo "<br>";
    echo "<button><a href='index.php'>Kembali</a></button>";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
    echo "<br>";
    echo "<button><a href='tambah-dosen.php'>Tambah Data Dosen</a></button>";
}

 ?>
