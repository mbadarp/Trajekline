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



<form id="regForm" action="process-request.php" method="post">
  <h1>Form Transaksi</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab"><h3>Lengkapi Data Pemesana Paket Tour</h3>
  
  <div class="form-group row">
  <div class="container-fluid">
          <h3>Tanggal dan Waktu</h3>
          <hr>
          <div class="row">
            <div class="col-6">
              
               
                <div class="form-group">
                  <label for="exampleTglBerangkat">Tanggal Berangkat</label>
                  <input type="date" class="form-control" id="exampleTglBerangkat">
                </div>
        <div class="form-group">
                  <label for="exampleTglPulang">Tanggal Pulang</label>
                  <input type="date" class="form-control" id="exampleTglPulang">
                </div>
        <div class="form-group">
                  <label for="exampleJamBerangkat">Jam Berangkat</label>
                  <input type="time" class="form-control" id="exampleJamBerangkat">
                </div>
                   
                <div class="form-group">
                  <label for="exampleNamaKendaraan">Nama Kendaraan</label>
                  <input type="text" class="form-control" id="exampleNamaKendaraan">
                </div>  
             
            </div>
            <div class="col-6">
              <div class="row">
                <div class="col-12">
                  <table class="table">
                    <tbody>
                      <tr class="btn-warning">
                        <th>Nama Kendaraan</th>
                        <th></th>
                      </tr>
                      <tr>
                        <td class="td-padding">Avanza</td>
                        <td class="td-padding">Rp.600.000</td>
                      </tr>
                      <tr>
                        <td class="td-padding">Pajero</td>
                        <td class="td-padding">Rp.1.000.000</td>
                      </tr>
                      <tr>
                        <td class="td-padding">Jeep</td>
                        <td class="td-padding">Rp.800.000</td>
                      </tr>
                      <tr>
                        <td class="td-padding">Rush</td>
                        <td class="td-padding">Rp.900.000</td>
                      </tr>
                      <tr>
                        <td class="td-padding">Terios</td>
                        <td class="td-padding">Rp. 650.000</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


          <hr>
        </div> <!-- end container fluid -->
      </div> <!-- end Tab1 content -->
  </div>
  <!-- step2 -->
  <div class="tab"><h3>Step 2</h3>
  <div class="form-group row">
  <div class="row">
            <div class="col-6">
              <form>
              <div class="form-group">
                  <label for="exampleJumOrang">Jumlah Orang</label>
                  <input type="text" class="form-control" id="exampleJumOrang">
                </div> 
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal keberangkatan</label>
                  <input type="date" class="form-control" id="exampleInputPassword1">
                </div>
        <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal kepulangan</label>
                  <input type="date" class="form-control" id="exampleInputPassword1">
                </div>
            </form>
        </div>
   
    <div class="col-6">

          <table class="table">
          
            <tbody>
              <tr class="btn-warning">
                <th>Jumlah Orang</th>
                <th>Harga</th>
              </tr>
              <tr>
                <td class="td-padding">6 Orang</td>
                <td class="td-padding">Rp.600.000</td>
              </tr>
              <tr>
                <td class="td-padding">5 Orang</td>
                <td class="td-padding">Rp.700.000</td>
              </tr>
              <tr>
                <td class="td-padding">4 Orang</td>
                <td class="td-padding">Rp.800.000</td>
              </tr>
              <tr>
                <td class="td-padding">3 orang</td>
                <td class="td-padding">Rp.900.000</td>
              </tr>
              <tr>
                <td class="td-padding">2 orang</td>
                <td class="td-padding">Rp.1.000.000</td>
              </tr>

              
            </tbody>
            
          </table>
     
  </div> 
      </div>
      
  
      
          <hr>
          

        </div>
      </div> <!-- end container-fluid -->
    </div> <!-- end Tab2 content -->
    
    <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
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
