<?php 

include("config.php");
	
session_start();
if($_SESSION['status']!="login")
{
	die;
}

if(isset($_POST['simpan']))
{
	$waktu = $_POST['waktu'];
	$asal = $_POST['asal'];
	$maskapai = $_POST['maskapai'];
	$kode_penerbangan = $_POST['kode_penerbangan'];
	$terminal = $_POST['terminal'];
	$keterangan = $_POST['keterangan'];
	
	$sql = "UPDATE kedatangan SET waktu='$waktu', asal='$asal', maskapai='$maskapai', terminal='$terminal', keterangan='$keterangan' 
	WHERE kode_penerbangan='$kode_penerbangan'";
	$query = mysqli_query($db, $sql);
	
	if( $query )
	{
		header('Location: admin_arrival.php');
	} else
	{
		die("Update FAILED");
	}
} else 
{
	die("Access DENIED");
}

?>