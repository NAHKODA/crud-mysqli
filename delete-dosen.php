<?php
/*
@package : CRUD with Mysqli Procedural
@author  : Fika Ridaul Maulayya
@since   : 2016
@license : 2016 Nahkoda - Development Resource. All Rights Reserved.
*/

//include koneksi ke database
include_once('config/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tbl_dosen WHERE id_dosen = '$id'";

$result = mysqli_query($connection, $query);

if ($connection->query($query) === TRUE) {
    echo "Delete record  successfully";
    echo "<br>";
    echo "<button><a href='index.php'>Kembali</a></button>";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
    echo "<br>";
    echo "<button><a href='tambah-dosen.php'>Tambah Data Dosen</a></button>";
}

 ?>
