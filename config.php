<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "airport_db";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db )
{
    die("FAILED to connect to database: " . mysqli_connect_error());
}

?>