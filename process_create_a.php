<?php 

include("config.php");
	
session_start();
if($_SESSION['status']!="login")
{
	die;
}

if(isset($_POST['tambah']))
{
	$kode_penerbangan = $_POST['kode_penerbangan'];
	$waktu = $_POST['waktu'];
	$asal = $_POST['asal'];
	$maskapai = $_POST['maskapai'];
	$terminal = $_POST['terminal'];
	$keterangan = $_POST['keterangan'];
	
	$sql = "INSERT INTO kedatangan (kode_penerbangan, waktu, asal, maskapai, terminal, keterangan) 
			VALUE ('$kode_penerbangan', '$waktu', '$asal', '$maskapai', '$terminal', '$keterangan')";
	$query = mysqli_query($db, $sql);
	
	if( $query )
	{
		header('Location: admin_arrival.php');
	} else
	{
		die("Flight Registration FAILED");
	}	
} else
{
	die("Access DENIED...");
}

?>