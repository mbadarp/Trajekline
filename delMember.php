<?php session_start();

if(isset($_SESSION['koneksi'])){
	include "koneksi.php";
	$username=$_SESSION['username'];
		
		mysqli_query($koneksi,"DELETE FROM login_user WHERE id =".$_GET['id']); 
	
	header ("location:coba.php");
}
?>