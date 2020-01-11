
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
    Detail Paket tour
  ============================-->
  <section id="detail">
 
  <?php
  include 'koneksi.php';
							$comot_id = $_GET['id_paket'];
								$comot_id=mysqli_query($koneksi,"SELECT * FROM paket_tour WHERE id_paket=".$_GET['id_paket']);   
								$detail=mysqli_fetch_array($comot_id);
								
													 
							?>
  <div class="container">
  <h3 class="section-title">Paket <?php echo $detail['nama_paket']; ?></h3>
  

 <!-- Corousel Item --> 
  <div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="img/detailpaket/d-bromo.jpg" alt="G.Bromo1" width="1100" height="500">
  </div>
  <div class="carousel-item">
    <img src="img/detailpaket/d-bromo2.jpg" alt="G.Bromo2" width="1100" height="500">
  </div>
  <div class="carousel-item">
    <img src="img/detailpaket/d-bromo3.jpg" alt="G.Bromo3" width="1100" height="500">
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>
 <!-- Akhir Corousel item --> 

   <!-- Keterangan Paket --> 
  <div class="container " >
  <div class="container" id="infopaket1" >
    <tr>
      <td><h5 class="section-title"><?php echo $detail['nama_wisata']; ?> </h5></td>
      <hr style="border:3px solid #f1f1f1">
    </tr>
    <span class="heading">User Rating</span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star"> </span> <p>4.1 average based on 254 reviews.</p>

    <tr>
      <td>Rp<?php echo number_format($detail['harga'],0,',','.'); ?>/pax</td>
      <br>Tempat Bertemu:<td>Jember</td>
    </tr>
    <div class="col-6 col-md-3">
       <button type="submit" class="btn btn-block btn-lg btn-primary" value="pesan">Pesan</button>
    </div>
  </div>
<!--Akhir Keterangan Paket --> 


<!-- Deskripsi Wisata --> 
  <div class="container" id="deskripsi" >
  <h2 ><?php echo $detail['nama_wisata']; ?></h2>
<p><span id="dots"><?php echo $detail['deskripsi']; ?></span>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
  </div>
<!--Akhir Deskripsi Wisata -->   


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
