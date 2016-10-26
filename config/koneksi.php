<?php
/*
@package : CRUD with Mysqli Connection
@author  : Fika Ridaul Maulayya
@since   : 2016
@license : 2016 Nahkoda - Development Resource. All Rights Reserved.
*/

//membuat deklarasi variable
$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_dosen";
//create variable connectin
$connection = mysqli_connect($hostname, $username, $password, $database);
//checking connection
if(!$connection)
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 ?>
