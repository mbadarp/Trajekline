<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Trajekline-Jember</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
 <!-- Corousel JS-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
     /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  
  .checked {
      color: orange;
  }
  </style>
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#home"><img src="#img" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#home">Home</a></li>
          <li><a href="#wisata">Paket Tour</a></li>
          
            <li class="menu-has-children"><a href="">Bantuan</a>
            <ul>
            <li><a href="aboutus.php?post=profil">Profil Trajekline</a></li>
              <li><a href="aboutus.php?post=syarat">Ketentuan & Persyaratan</a></li>
              <li><a href="aboutus.php?post=pembayaran">Cara Pembayaran</a></li>
              <li><a href="#contact">Hubungi Kami</a></li>
            </ul>
          </li>
          <?php session_start();

          	if(isset($_SESSION['username'])){

                if(isset($_POST['Edit']))
	{
		mysqlI_query($koneksi, "UPDATE login_user SET nama_depan='$_POST[nama_depan]',nama_belakang='$_POST[nama_belakang]', no_telepon='$_POST[no_telepon]', no_rek='$_POST[no_rek]', nama_rek='$_POST[nama_rek]', alamat='$_POST[alamat]', email='$_POST[email]', tipe_identitas='$_POST[tipe_identitas]', no_identitas='$_POST[no_identitas]' WHERE id= '$_POST[id]'");
	
		header('location:profil.php');
	}
	        ?>
			
			
        <li class="menu-active"><a href="profil.php" >Selamat datang, <?php echo "$_SESSION[username]"; ?></a></li>
        <li ><a  class="dropdown-toggle icon-cog" href="#"></a>
            <ul>
              <li><a href="profil.php">Profil</a></li>
              <li><a href="bookingList.php">Booking List</a></li>
              <li><a href="logout.php">Keluar</a></li>
            </ul>
          </li>
        <?php
	        }else{
	      ?>
				<li class="menu-has-children"><a href="">Register</a>
            <ul>
              <li><a href="login.php">Login</a></li>
              <li><a href="register.php">Daftar</a></li>
            </ul>
	<?php
	}
	?>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
   
  </header><!-- #header -->
  <!--==========================
    Bantuan
  ============================-->
  <section id="profilCust">

  <div class="">
    <div class="row" style="background: url(img/d-bromo2.jpg) top left no-repeat; background-size: cover; height:340px ;">
        <div class="container" style="padding: 40px 20px">
            <h1 class="fg-white place-right" >Welcome to<br /> Trajekline Tour and Travel</h1>
            <h4 class="fg-white place-right">
                Selamat datang di Website kami, kenyamanan anda adalah kepuasan kami
            </h4>
        </div>
    </div>
</div>

	
<?php
  $username =$_SESSION['username'];
	$query	=mysqli_query($koneksi,"SELECT * FROM login_user WHERE username='$username'");
	$tampil	=mysqli_fetch_array($query);
?>
    
    <!-- ---------------------------------------- ISI TAB ------------------------------------- -->
    <div class="panel panel-default">
           <div class="panel-heading"><h3>Setup Profil Trajekline Tour</h3></div>
           <div class="panel-body  ">
               <div class="row col-lg-10">
                 <form name="coba" action="editProfil.php" method="post" enctype="multipart/form-data">
                
                       <fieldset>
                           <input name="id" type="hidden" value="<?php echo $tampil[0]; ?>">
                           <fieldset>
                        	<div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>ID User</label>
                                    <input class="form-control" size="1" name="id" type="text" value="<?php echo $tampil['id']; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Nama Depan</label>
                                    <input class="form-control" name="nama_depan" type="text" value="<?php echo $tampil['nama_depan']; ?>" >
                                </div>
                                <div class="form-group">
                                    <label>Nama Belakang</label>
                                    <input class="form-control" name="nama_belakang" type="text" value="<?php echo $tampil['nama_belakang']; ?>" >
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" name="email" type="text" value="<?php echo $tampil['email']; ?>" >
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Tipe Identitas</label>
                                    <select class="form-control" name="tipe_identitas">
                                    	<?php
                                        for($i=1; $i<=4; $i++){
											if($i==1){
												$value="KTP";
												$salue="KTP";
											}else if($i==2){
												$value="SIM";
												$salue="SIM";
											}else if($i==3){
												$value="Pasport";
												$salue="Pasport";
											}else if($i==3){
												$value="Kartu Pelajar";
												$salue="Kartu Pelajar";
											}
											
											if($ngisi['tipe_identitas']==$value){
												$sel= "selected";
											}else{
												$sel= "";
											}
											echo "<option value='$value' $sel>$salue</option>";
										}
										?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nomer Identitas</label>
                                    <input class="form-control" name="no_identitas" type="text" value="<?php echo $tampil['no_identitas']; ?>" >
                                </div>
                                <div class="form-group">
                                    <label>Nomer Telepon</label>
                                    <input class="form-control" name="no_telepon" type="text" value="<?php echo $tampil ['no_telepon']; ?>" >
                                </div>
                                <div class="form-group">
                                    <label>No Rekening</label>
                                    <input class="form-control" name="no_rek" type="text" value="<?php echo $tampil['no_rek']; ?>" >
                                </div>
                       		</div>
                            <div class="col-lg-3">
                            <div class="form-group">
                                    <label>Rekening atas Nama</label>
                                    <input class="form-control" name="nama_rek" type="text" value="<?php echo $tampil['nama_rek']; ?>" >
                                </div>
                                <div class="form-group">
                                    <label>Alamat Member</label>
                                    <input class="form-control" name="alamat" type="text" value="<?php echo $tampil['alamat']; ?>" >
                                </div>
                              
                         
                         
                           
                       </fieldset>
                       <input type="submit" name="Edit" value="Simpan Perubahan">
                   </form>
               </div>
           </div>
    <!-- ---------------------------------------- ISI TAB ------------------------------------- -->

  </section>

  <!-- #paket-tour -->

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        PT. Trajekline Jember
      </div>
      <div class="credits">
        Cooperation with <a href="#soultaker">Soul Taker</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>

