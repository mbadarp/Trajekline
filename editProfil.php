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
<script type="text/javascript" src="admin/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
	tinymce.init({
			selector: "textarea",

			toolbar1: "undo redo | cut copy paste | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify",
			
			menubar: false,
			toolbar_items_size: 'small',
	});</script>
	
<?php
	$query	=mysqli_query($koneksi,"SELECT * FROM login_user WHERE username='$username'");
	$tampil	=mysqli_fetch_array($query);
?>
    
    <!-- ---------------------------------------- ISI TAB ------------------------------------- -->
    <div class="container">
        <div class="grid">
			<form name="editProfil" method="post" action="#">
			<div class="row">
				<div class="span6">
                    <fieldset>
                        <legend class="text-right">Edit</legend>
                        <lable>Nama Lengkap</lable>
                        <div class="input-control text" data-role="input-control">
							<input type="hidden" name="id" readonly
							 value="<?php echo $tampil['id'];?>">
                            <input type="text" name="nama_depan"
							 value="<?php echo $tampil['nama_depan'];?>">
							<button class="btn-clear" tabindex="-1"></button>
                            <input type="text" name="nama_belakang"
							 value="<?php echo $tampil['nama_belakang'];?>">
							<button class="btn-clear" tabindex="-1"></button>
                        </div>
						<lable>Nomor Handphone</lable>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" name="no_telepon"
							 value="<?php echo $tampil['no_telepon'];?>">
							<button class="btn-clear" tabindex="-1"></button>
                        </div>
						
						<lable>Nomor Rekening</lable>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" name="no_rek"
							 value="<?php echo $tampil['no_rek'];?>">
							<button class="btn-clear" tabindex="-1"></button>
                        </div>
						<lable>Atas Nama Rekening</lable>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" name="nama_rek"
							 value="<?php echo $tampil['nama_rek'];?>">
							<button class="btn-clear" tabindex="-1"></button>
                        </div>
						<label>Alamat</label>
                        <div class="input-control textarea" data-role="input-control">
                            <textarea name="alamat" rows="2"><?php echo $tampil['alamat']; ?></textarea>
						</div>
					</fieldset>	
				</div>
				<div class="span6">
                    <fieldset>
                        <legend>Profil</legend>
                        <lable>Email</lable>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" name="email"
							 value="<?php echo $tampil['email'];?>">
							<button class="btn-clear" tabindex="-1"></button>
                        </div>
						<lable>Tipe Identitas</lable>
                        <div class="input-control select" data-role="input-control">
                            <select name="tipe_identitas">
								<?php
								for($i=1; $i<=4; $i++){
									if($i==1){
										$value="KTP";
									}else if($i==2){
										$value="SIM";
									}else if($i==3){
										$value="Pasport";
									}else if($i==4){
										$value="Kartu Pelajar";
									}
									
									if($tampil['tipe_id']==$value){
										$sel= "selected";
									}else{
										$sel= "";
									}
									
									echo "<option value='$value' $sel>$value</option>";
								}?>
							</select>
                        </div>
						<lable>Nomor Identitas</lable>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" name="no_identitas"
							 value="<?php echo $tampil['no_identitas'];?>">
							<button class="btn-clear" tabindex="-1"></button>
                        </div>
					</fieldset>	
				</div>
				
			</div>
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

