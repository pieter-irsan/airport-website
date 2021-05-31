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
	$tujuan = $_POST['tujuan'];
	$maskapai = $_POST['maskapai'];
	$kode_penerbangan = $_POST['kode_penerbangan'];
	$terminal = $_POST['terminal'];
	$keterangan = $_POST['keterangan'];
	
	$sql = "UPDATE keberangkatan SET waktu='$waktu', tujuan='$tujuan', maskapai='$maskapai', terminal='$terminal', keterangan='$keterangan' 
	WHERE kode_penerbangan='$kode_penerbangan'";
	$query = mysqli_query($db, $sql);
	
	if( $query )
	{
		header('Location: admin_departure.php');
	} else
	{
		die("Update FAILED");
	}
} else 
{
	die("Access DENIED");
}

?>