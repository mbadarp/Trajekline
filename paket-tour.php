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
          <li><a href="destinasiwisata.php">Destinasi Wisata</a></li>
          <li class="menu-has-children"><a href="">Register</a>
            <ul>
              <li><a href="login.php">Login</a></li>
              <li><a href="register.php">Daftar</a></li>
            </ul>
            <li class="menu-has-children"><a href="">Bantuan</a>
            <ul>
              <li><a href="#petunjuk">Petunjuk</a></li>
              <li><a href="#contact">Hubungi Kami</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
   
  </header><!-- #header -->

  <!--==========================
   Paket tour
  ============================-->
  <section id="wisata">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Paket Tour</h3>
          <p class="section-description">Pilih paket yang anda inginkan</p>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <ul id="wisata-flters">
              <li data-filter=".filter-gunung, .filter-pantai, .filter-tamanbermain, .filter-wisatapendidikan" class="filter-active">All</li>
              <li data-filter=".filter-gunung">Gunung</li>
              <li data-filter=".filter-pantai">Pantai</li>
              <li data-filter=".filter-tamanbermain">Taman Bermain</li>
              <li data-filter=".filter-wisatapendidikan">Wisata Pendidikan</li>
            </ul>
          </div>
        </div>

        <div class="jumbotron text-center" id="buatpaket" >
            <div id="judulfitur">
             <h1 style="color:black;">Buat Paket Tour Anda Sendiri</h1>
             <p style="color:black; font-weight:bold;">Tentukan paket terbaik untuk anda</p> 
             </div>
             <a href="#" class="btn btn-info" role="button">Buat Paket</a>
        </div>

     

        <div class="row" id="wisata-wrapper">
          <div class="col-lg-3 col-md-6 wisata-item filter-gunung">
            <a href="">
              <img src="img/destinasi/bromo.jpg" alt="">
              <div class="details">
                <h4>Tour Bromo</h4>
                <span>Mulai dari Rp. 250.000</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 wisata-item filter-gunung">
            <a href="">
              <img src="img/destinasi/gambir.jpg" alt="">
              <div class="details">
                <h4>Tour Gunung Gambir</h4>
                <span>Mulai dari Rp. 100.000</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 wisata-item filter-gunung">
            <a href="">
              <img src="img/destinasi/ijen.jpg" alt="">
              <div class="details">
                <h4>Tour Kawah Ijen</h4>
                <span>Mulai dari Rp. 250.000</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 wisata-item filter-pantai">
            <a href="">
              <img src="img/destinasi/nanggelan.jpg" alt="">
              <div class="details">
                <h4>Tour Nanggelan</h4>
                <span>Mulai dari Rp. 100.000</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 wisata-item filter-pantai">
            <a href="">
              <img src="img/destinasi/papuma.jpg" alt="">
              <div class="details">
                <h4>Tour Papuma</h4>
                <span>Mulai dari Rp. 150.000</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 wisata-item filter-pantai">
            <a href="">
              <img src="img/destinasi/payangan.jpg" alt="">
              <div class="details">
                <h4>Tour Payangan</h4>
                <span>Mulai dari Rp. 100.000</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 wisata-item filter-tamanbermain">
            <a href="">
              <img src="img/destinasi/bns.jpg" alt="">
              <div class="details">
                <h4>Tour Batu Night Spectacular</h4>
                <span>Mulai dari 400.000</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 wisata-item filter-wisatapendidikan">
            <a href="">
              <img src="img/destinasi/borobudur.jpg" alt="">
              <div class="details">
                <h4>Tour Borobudur</h4>
                <span>Mulai dari Rp. 800.000</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 wisata-item filter-tamanbermain">
            <a href="">
              <img src="img/destinasi/jtp2.jpg" alt="">
              <div class="details">
                <h4>Tour Jatim Park 2</h4>
                <span>Mulai dari Rp. 450.000</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 wisata-item filter-tamanbermain">
            <a href="">
              <img src="img/destinasi/jtp3.jpg" alt="">
              <div class="details">
                <h4>Tour Jatim Park 3</h4>
                <span>Mulai dari Rp. 500.000</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 wisata-item filter-wisatapendidikan">
            <a href="">
              <img src="img/destinasi/keraton.jpg" alt="">
              <div class="details">
                <h4>Tour Keraton Yogyakarta</h4>
                <span>Mulai dari Rp. 600.000</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 wisata-item filter-wisatapendidikan">
            <a href="">
              <img src="img/destinasi/prambanan.jpg" alt="">
              <div class="details">
                <h4>Tour Prambanan</h4>
                <span>Mulai dari Rp. 700.000</span>
              </div>
            </a>
          </div>

        </div>

      </div>
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
