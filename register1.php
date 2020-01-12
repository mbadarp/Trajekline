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
    Home
  ============================-->
  <section id="home" class="masthead text-white text-center">
  <?php include 'koneksi.php'; ?> <!-- Panggil database -->




<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-8 col-md-5">

            <!-- Nested Row within Card Body -->
              <div class="text-center">
                <br><br><br><br>
                <h1 class="h7 text-gray-500 mb-4">Create an Account!</h1>
              </div>
              <form method="post" class="user" action="process-register.php">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="nama_depan"type="text" class="form-control form-control-user" id="exampleNamaDepan" placeholder="Nama Depan">
                  </div>
                  <div class="col-sm-6">
                    <input name="nama_belakang" type="text" class="form-control form-control-user" id="exampleNamaBelakang" placeholder="Nama Belakang">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="email"type="text" class="form-control form-control-user" id="exampleEmail" placeholder="Email">
                  </div>
                  <div class="col-sm-6">
                    <input name="no_telepon" type="text" class="form-control form-control-user" id="exampleNoTelepon" placeholder="No.Telepon">
                  </div>
                </div>
                <div class="form-group">
                   <input name="alamat" type="text" class="form-control form-control-user" id="exampleAlamat" placeholder="Alamat Lengkap">
                </div>
                <div class="form-group">
                  <input name="username" type="text" class="form-control form-control-user" id="exampleInputUsername" placeholder="Username">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password1" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input name="password" type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
                  <input class="btn btn-primary btn-user btn-block" name="register" type="submit" value="Register Account">
                <hr>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" style="color: white" href="forgot-password.html">Forgot Password?</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>






    <div class="home-container">
      
 <!--==========================
   Paket tour
  ============================-->
 
  

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
  
  <script>
        /* when jQuery laods */
        $(document).ready(function() {
      /* click on back button - will do reset and removal of previously appended children */
      $('#back').on('click', function() {
        $('li.active').filter('.active').prev('li').find('a[data-toggle="tab"]').tab('show');
        $('li').find('a[data-toggle="tab"]').removeClass('btn-success');
        $('#ok-icon').addClass('hidden');
        total_tickets = 0;
        $('#listed_t1').addClass('hidden').children().not('h4').remove();
        $('#listed_t2').addClass('hidden').children().not('h4').remove();
        $('#listed_t3').addClass('hidden').children().not('h4').remove();
        render();
      });
      /* click on continue button */
      $('#continue').on('click', function() {
        if (total_tickets > 0) {
          $('li.active').filter('.active').next('li').find('a[data-toggle="tab"]').tab('show');
          $('li').find('a[data-toggle="tab"]').addClass('btn-success');
          $('#ok-icon').removeClass('hidden');
          addTicketList(t1);
          addTicketList(t2);
          addTicketList(t3);
        }
      });
      render();
    });
    /* VARIABLES */
    var total = 0;         // total amount to be paid
    var total_tickets = 0; // total amount of tickets
    var t1 = { id: 't1', pocet: 0, hodnota: 100 }; // ticket 1st category
    var t2 = { id: 't2', pocet: 0, hodnota: 350 }; // ticket 2nd category
    var t3 = { id: 't3', pocet: 0, hodnota: 800 }; // ticket 3rd category

    /* perform either adding or substracting on a provided object */
    calculate = function(object, action) {
      if (action === 'plus') {
        total += object.hodnota;
        object.pocet++;
      } else if ((action === 'minus') && (object.pocet > 0)) {
        total -= object.hodnota;
        object.pocet--;
      }
      render();
    }

    /* recalculate and display numbers + assigning hidden inputs */
    render = function() {
      total_tickets = t1.pocet + t2.pocet + t3.pocet;
      $('#amount').html(total.toFixed(0));
      $('#t1_pocet').html(t1.pocet); $('#t2_pocet').html(t2.pocet); $('#t3_pocet').html(t3.pocet);
      /* assigning hidden inputs */
      $('#total_amount').html(total.toFixed(0));
      $('#t1_amount').html(t1.pocet); $('#t2_amount').html(t2.pocet); $('#t3_amount').html(t3.pocet);

      if (total_tickets > 0) {
        $('#continue').prop('disabled', false);
      } else {
        $('#continue').prop('disabled', true);
      }
    }

    /* add a list of tickets if multiple tickets are selected, argument is a ticket category */
    addTicketList = function(objekt) {
      if (objekt.pocet > 1 || total_tickets > 1) {
        for (var i = 0; i < objekt.pocet; i++) {
          $('#listed_' + objekt.id).removeClass('hidden').append(insert(i+1));
        }
      }
    }

    /* insert a row if multiple ticket are selected, argument passed is a ticket count (for that section) */
    var insert = function(num) {
      return (
      "<div class='row'>"+
        "<div class='col-xs-1'><label for='row' class='p-top'><span class='ticket_span'>"+ num +"#</span></label></div>"+
        "<div class='col-xs-5'><input type='text' class='form-control' name='names[]' placeholder='Full name' required></div>"+
        "<div class='col-xs-6'><input type='email' class='form-control' name='emails[]' placeholder='anothername@gmail.com' required></div>"+
      "</div>");
    }
  </script>
</body>
</html>
