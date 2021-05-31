<?php 
session_start();

include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM `admin` WHERE username='".$username."' AND password='".$password."'";
$query = mysqli_query($db, $sql);
$check = mysqli_num_rows($query);

if($check > 0)
{
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin.php");
}else{
	header("location:login.php?pesan=failed");
}
?>