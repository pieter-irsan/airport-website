<?php 

include("config.php");
	
session_start();
if($_SESSION['status']!="login")
{
	die;
}

if( isset($_GET['kode_penerbangan']) )
{
	$kode_penerbangan = $_GET['kode_penerbangan'];
	$sql = "DELETE FROM kedatangan WHERE kode_penerbangan='$kode_penerbangan'";
	$query = mysqli_query($db, $sql);
	
    if( $query )
    {
		header('Location: admin_arrival.php');
    } else
    {
		die("Delete FAILED");
	}
} else
{
	die("Access DENIED");
}

?>