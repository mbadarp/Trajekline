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
  <link href="css/request.css" rel="stylesheet">

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
              include "koneksi.php";
	            $username=$_SESSION['username'];
              
            	if(isset($_POST['Submit']))
	{
		mysqli_query($koneksi,"INSERT INTO tbl_pesan (id, id_paket, id_kendaraan, tgl_pesan, tgl_tour, status)
				value ('$_POST[id]','$_POST[id_paket]','$_POST[id_kendaraan]',NOW(),'$_POST[tgl_tour]','$_POST[status]')") or die(mysqli_error());
		
		header("location:bookingList.php");
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
   
  </header><!-- #header -->><!-- #header -->

  <?php
  $username = $_SESSION['username']
	$query	=mysqli_query($koneksi,"SELECT * FROM login_user, data_paket, tbl_kendaraan WHERE username='$username', id_paket='$id_paket', ");
	$tampil	=mysqli_fetch_array($query);


?>

<form id="regForm" action="process-request.php" method="post">
  <h1>Buat Paket Tour Anda</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab"><h3>Step 1</h3>
  <div class="form-group row">
      <div class="col-sm-6 mb-3 mb-sm-0">
      <label for="nama_lengkap">Nama Lengkap</label>
      <input type="hidden" name="id" readonly
								value="<?php echo $tampil['id'];?>">
                            <input type="text" name="nama" readonly
							 value="<?php echo $tampil['nama_depan'];?> <?php echo $tampil['nama_belakang'];?>">
      </div>
      <div class="col-sm-6">
      <label for="email">Email</label>
         <input name="email"type="text" class="form-control form-control-user" id="exampleEmail" placeholder="Masukkan Email Anda">
      </div>
      </div>
  <div class="form-group row">
      <div class="col-sm-6 mb-3 mb-sm-0">
      <label for="kota_tujuan">Tentukan kota tujuan anda</label>
         <input name="kota_tujuan"type="text" class="form-control form-control-user" id="exampleKotaTujuan" placeholder="Masukkan Kota Tujuan">
      </div>
      <div class="col-sm-6">
      <label for="jumlah_orang">Pilih Jumlah Orang</label>
          <select name="jumlah_orang" class="custom-select" id="jumlah_orang" required>
          
              <option value="2 Orang">2 Orang</option>
              <option value="3 Orang">3 Orang</option>
              <option value="4 Orang">4 Orang</option>
              <option value="5 Orang">5 Orang</option>
              <option value="6 Orang">6 Orang</option>
              <option value="7 Orang">7 Orang</option>
              <option value="8 Orang">8 Orang</option>
              <option value="9 Orang">9 Orang</option>
              <option value="10 Orang">10 Orang</option>
              <option value="11 Orang">11 Orang</option>
              <option value="12 Orang">12 Orang</option>
              <option value="13 Orang">13 Orang</option>
              <option value="14 Orang">14 Orang</option>
              <option value="15 Orang">15 Orang</option>
              <option value="16 Orang">16 Orang</option>
              <option value="17 Orang">17 Orang</option>
              <option value="18 Orang">18 Orang</option>
              <option value="19 Orang">19 Orang</option>
              <option value="20 sOrang">20 Orang</option>

         </select>
      </div>
      </div>
      <div class="form-group row">
          <div class="col-sm-6 mb-3 mb-sm-0">
              <label for="lama_hari">Berapa lama waktu berlibur ?</label>
              <select name="lama_hari" class="custom-select" id="lama_hari" required>
          
              <option value="1 HARI">1 HARI</option>
              <option value="2 HARI 1 MALAM">2 HARI 1 MALAM</option>
              <option value="3 HARI 2 MALAM">3 HARI 2 MALAM</option>
              <option value="4 HARI 3 MALAM">4 HARI 3 MALAM</option>
              <option value="5 HARI 4 MALAM">5 HARI 4 MALAM</option>
              <option value="6 HARI 5 MALAM">6 HARI 5 MALAM</option>
              </select>
          </div>
          <div class="col-sm-6">
            <label for="tgl_berangkat">Tanggal keberangkatan</label>
            <input name="tgl_berangkat" type="date" class="form-control form-control-user" id="exampleTglBerangkat" placeholder="Pilih Tanggal">
          </div>
      </div>
    <div class="col-sm-12 mb-6 mb-sm-0">
    <label for="tujuan_wisata">Tujuan Wisata</label>
    <input name="tujuan_wisata" type="text" class="form-control form-control-user" id="exampleTujuanWisata" placeholder="Tempat mana saja yang ingin anda kunjungi">
    </div>
  </div>
  <!-- step2 -->
  <div class="tab"><h3>Step 2</h3>
  <div class="form-group row">
          <div class="col-sm-6 mb-3 mb-sm-0">
              <label for="tiket">Sudah memiliki tiket pesawat/kereta ?</label>
              <select name="tiket" class="custom-select" id="tiket" required>
                 <option value="YA">Ya, Saya sudah memiliki tiket pesawat/kereta</option>
                 <option value="TIDAK">Tidak, Saya tidak memiliki tiket pesawat/kereta</option>
              </select>
          </div>
          <div class="col-sm-6">
          <label for="penginapan">Jenis penginapan yang diinginkan </label>
              <select name="penginapan" class="custom-select" id="penginapan" required>
                 <option value="Tanpa Penginapan">Tanpa Penginapan / saya akan pesan sendiri</option>
                 <option value="Home Stay">Home Stay/Guest House</option>
                 <option value="Bintang 2">Hotel Bintang 2</option>
                 <option value="Bintang 3">Hotel Bintang 3</option>
                 <option value="Bintang 4">Hotel Bintang 4</option>
                 <option value="Bintang 5">Hotel Bintang 5</option>
                 
              </select>
          </div>
      </div>
      <div class="col-sm-6 mb-3 mb-sm-0">
      <label for="fasilitas">Jenis Fasilitas </label>
              <select name="fasilitas" class="custom-select" id="fasilitas" required>
                 <option value="Ekonomi">Kelas Ekonomi</option>
                 <option value="Bisnis">Kelas Bisnis</option>
                 <option value="Eksekutif">Kelas Eksekutif</option>
                 
              </select>
      </div>
  </div>
 
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

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

</body>
</html>
