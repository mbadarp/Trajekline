<!-- <?php  
// session_start();

// include "koneksi.php";

// if (isset($_POST['Login'])){
// 	//koneksi terpusat

// 	$username=$_POST['username'];
// 	$password=$_POST['password'];
// 	$level=$_POST['level'];
	
// 	if($level=="admin"){
// 		$query=mysqli_query($koneksi,"SELECT * FROM login_user WHERE username='$username' and password='$password' and aktif='Y' and level='$level'");
// 		$cek=mysqli_num_rows($query);
		
// 		if($cek){
// 			$_SESSION['username']=$username;
// 			$_SESSION['password']=$password;
// 			$_SESSION['level']=$level;
			
// 			?><script language="javascript">document.location.href="index_admin.php";</script><?php
			
// 		}else{
           
// 			?><script language="javascript">document.location.href="login.php";</script><?php
// 		}	
// 	}
	
// 	if($level=="customer"){
// 		$query=mysqli_query($koneksi ,"SELECT * FROM login_user WHERE username='$username' AND password='$password' and aktif='Y' and level='$level'");
// 		$cek=mysqli_num_rows($query);
		
// 		if($cek){
// 			$_SESSION['username']=$username;
// 			$_SESSION['password']=$password;
// 			$_SESSION['level']=$level;
			
// 			?><script language="javascript">document.location.href="index.php";</script><?php
			
// 		}else{
            
// 			?><script language="javascript">document.location.href="login.php";</script><?php
// 		}	
// 	}
	
// }else{
// 	unset($_POST['Login']);
// }
?> -->
<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from login_user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:home_admin.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="customer"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "customer";
		// alihkan ke halaman dashboard pegawai
		header("location:index.php");
 	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>
