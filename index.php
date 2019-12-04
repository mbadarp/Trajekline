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
    Home
  ============================-->
  <section id="home" class="masthead text-white text-center">
    <div class="home-container">
      <h1>Trajekline</h1>
      <h2>Buat perjalan terbaikmu dengan kami</h2>
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="tempatwisata" class="form-control form-control-lg" placeholder="Masukkan nama tempat wisata...">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Cari</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #home -->

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
      Bantuan Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Hubungi Kami</h3>
          <p class="section-description">Datang ke tempat kami atau hubungi kami di media sosial dibawah</p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      <iframe  src="https://maps.google.com/maps?width=100&amp;height=398&amp;hl=en&amp;q=Gunung%20Batu%2CKebonsari%2C%20Jember%2C%20Indonesia+(PT.%20TRAJEK%20%20GROUP)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen>></iframe>

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Jl Perumahan Gn. Batu<br>Jember, Jawa Timur</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>trajekline@gmail.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>6283847562830</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/trajeklinejember/?hl=id" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Saran&Kritik"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Kirim Masukkan</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- #bantuan -->


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
