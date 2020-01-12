<?php session_start();

if(isset($_SESSION['username'])){

	//koneksi terpusat
	include "koneksi.php";
	$username	=$_SESSION['username'];
	$level	=$_SESSION['level'];
    
    if(isset($_POST['Edit']))
	{
		mysqlI_query($koneksi, "UPDATE login_user SET nama_depan='$_POST[nama_depan]',nama_belakang='$_POST[nama_belakang]', no_telepon='$_POST[no_telepon]', no_rek='$_POST[no_rek]', nama_rek='$_POST[nama_rek]', alamat='$_POST[alamat]', email='$_POST[email]', tipe_identitas='$_POST[tipe_identitas]', no_identitas='$_POST[no_identitas]' WHERE id= '$_POST[id]'");
	
		header('location:profil.php');
	}
	
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Saran</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body id="page-top">
  

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

    
      <!-- Divider -->
      <hr class="sidebar-divider">

      
      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data Perusahaan
      </div>
  <!-- Nav Item - Pages Collapse Menu -->
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="home_admin.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Dashboard Customer</span></a>
      </li>
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="index_admin_validasi.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Validasi Booking</span></a>
      </li>
  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Data Bantuan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Daftar Bantuan:</h6>
            <a class="collapse-item" href="setup-profil.php">Setup Profil</a>
            <a class="collapse-item" href="setup-syarat.php">Setup Syarat</a>
            <a class="collapse-item" href="setup-pembayaran.php">Setup Cara Bayar</a>
          </div>
        </div>
      </li>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="index_admin_dtcustomer.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Data Customer</span></a>
      </li>

      

      
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="index_admin.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Data Paket Tour</span></a>
      </li>
      
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="index_admin_request.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Data Request Paket Tour</span></a>
      </li>
        <!-- Nav Item - Charts -->
        <li class="nav-item">
        <a class="nav-link" href="index_admin_saran.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Data Saran</span></a>
      </li>
    
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                      aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

           
           
              

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']; ?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="process-logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Berikut adalah percobaan CRUD dengan template SB Admin</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid sapiente commodi deleniti, distinctio natus ab ducimus molestias dicta in enim perferendis. Deleniti in ipsam magni rem esse eveniet aut ex.</p>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary datatable">Data Pesan Paket Tour</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">ID Pesan</th>
                      <th scope="col">Nama Customer</th>
                      <th scope="col">Tanggal Pesan</th>
                      <th scope="col">Tanggal Tour</th>
                      <th scope="col">Nama Paket</th>
                      <th scope="col">Nama Wisata</th>
                      <th scope="col">Harga Paket</th>
                      <th scope="col">Harga Total</th>
                      <th scope="col">Status</th>
                      <th scope="col">
                        <center><span>Action</span></center>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'koneksi.php';
                    $nomor = 1;
                   
                    $query=mysqli_query($koneksi, "SELECT * FROM tbl_pesan, paket_tour, login_user WHERE tbl_pesan.id=login_user.id AND tbl_pesan.id_paket=paket_tour.id_paket")or die(mysqli_error($koneksi));

                    while($isi_tbl=mysqli_fetch_array($query)){
                      
                  
                  ?>
                    <tr>
                      <!-- mencetak nomor otomatis, secara increment -->
                      <td class="bold"><?php echo $nomor++; ?></td>
                      <!-- mencetak data record dari tb_siswa -->
                      <td><?php echo $isi_tbl['id_pesan']; ?></td>
                      <td><?php echo $isi_tbl['nama_depan']; ?> <?php echo $isi_tbl['nama_belakang']; ?></td>
                      <td><?php echo $isi_tbl['tgl_pesan']; ?></td>
                      <td><?php
                      $now= date("Y-m-d");
										if($isi_tbl['tgl_tour']<$now){
											$txtS="Kadaluarsa!!";
											echo "<div class='tooltip-demo'><span data-toggle='tooltip' data-placement='top' title='".$txtS."'><div class='text-danger'><i class='fa fa-warning'></i>&nbsp".$isi_tbl['tgl_tour']."</div></span></div>";
										}else{
											echo $isi_tbl['tgl_tour']; 
										}?></td>
                      <td><?php echo $isi_tbl['nama_paket']; ?></td>
                      <td><?php echo $isi_tbl['nama_wisata']; ?></td>
                      <td><?php echo $isi_tbl['harga']; ?></td>
                      <td><?php echo $isi_tbl['harga']; ?></td>
                      <td><?php
                                        	if($isi_tbl['status']=='S1'){
												$stat="Menunggu";
											}else if($isi_tbl['status']=='S2'){
												$stat="Lunas";
											}else if($isi_tbl['status']=='S3'){
												$stat="Bayar diTempat";
											}else if($isi_tbl['status']=='S4'){
												$stat="Telah Tour";
											}else{
												$stat="";
											}
											echo $stat;
											?>			
								</td>
                     <td>   <div class="btn btn-group">
                          <button class="btn btn-success btn-sm editbtn" type="button">Edit</button>
                          <span>&nbsp</span>
                          <!-- echo untuk mencetak id tertentu yang akan dihapus -->
                          <!-- data dikirim ke processhapus.php -->
                          <a href="hapusPesan.php?id_pesan=<?php echo $data['id_pesan']; ?>"
                            onclick="return confirm('Anda yakin ingin menghapus data?');"><button
                              class="btn btn-danger btn-sm" type="button" name="delete">Delete</button></a>
                        </div>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <!-- modal edit-->
      <?php
                    include 'koneksi.php';
                    $nomor = 1;
                   
                    $query=mysqli_query($koneksi, "SELECT * FROM tbl_pesan, paket_tour, login_user WHERE tbl_pesan.id=login_user.id AND tbl_pesan.id_paket=paket_tour.id_paket AND username=login_user.username")or die(mysqli_error($koneksi));

                    while($isi_tbl=mysqli_fetch_array($query)){
                      
                  ?>
      <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">

            <!-- head -->
            <div class="modal-header">
              <h5 class="modal-tittle" id="insertModalLabel">Ganti Status Booking</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <!-- body -->
            <div class="modal-body">
              <form action="process-validasi.php" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
              <input id="id_pesan" type="hidden" name="id_pesan">
              <input type="text" name="id" type="hidden" value="<?php echo $isi_tbl['id']; ?>" size="1">
              <input type="text" name="id_paket" type="hidden" value="<?php echo $isi_tbl['id_paket']; ?>" size="1">
                <div class="form-row">
                  <div class="col">
                    <label for="">Nama Customer</label>
                    <input class="form-control" size="1" name="id" type="text" value="<?php echo $isi_tbl['nama_depan']; ?> <?php echo $isi_tbl['nama_belakang']; ?>" readonly>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Nama terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="tgl_pesan">Tanggal Pesan</label>
                    <input class="form-control" size="1" name="tgl_pesan" type="date" value="<?php echo $isi_tbl['tgl_pesan']; ?>" readonly>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Tgl terlebih dahulu
                    </div>
                  </div>
                  <div class="col">
                    <label for="tgl_tour">Tanggal Tour</label>
                    <input class="form-control" size="1" name="tgl_tour" type="date" value="<?php echo $isi_tbl['tgl_tour']; ?>" readonly>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Tgl terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="nama_paket">Nama Paket</label>
                    <input class="form-control" size="1" name="nama_paket" type="text" value="<?php echo $isi_tbl['nama_paket']; ?>" readonly>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Nama Paket terlebih dahulu
                    </div>
                  </div>
                  <div class="col">
                    <label for="nama_wisata">Nama Wisata</label>
                    <input class="form-control" size="1" name="nama_wisata" type="text" value="<?php echo $isi_tbl['nama_wisata']; ?>" readonly>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Nama Wisata terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="harga">Harga Paket</label>
                    <input class="form-control" size="1" name="harga" type="text" value="<?php echo $isi_tbl['harga']; ?>" readonly>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Harga Paket terlebih dahulu
                    </div>
                  </div>
                  <div class="col">
                    <label for="harga">Harga Paket</label>
                    <input class="form-control" size="1" name="harga" type="text" value="<?php echo $isi_tbl['harga']; ?>" readonly>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Harga Paket terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                <div class="col">
                    <label for="status">Status</label>
                        <select class="form-control" name="status">
                                    	<?php
                                        for($i=0; $i<=4; $i++){
											if($i==1){
												$value="S1";
												$salue="Menunggu";
											}else if($i==2){
												$value="S2";
												$salue="Lunas";
											}else if($i==3){
												$value="S3";
												$salue="Bayar diTempat";
											}else if($i==4){
												$value="S4";
												$salue="Telah Tour";
											}else{
												$value="";
												$salue="-- Pilih --";
											}
											
											if($ngisi['status']==$value){
												$sel= "selected";
											}else{
												$sel= "";
											}
											echo "<option value='$value' $sel>$salue</option>";
										}
										?>
                                    </select>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Pilih Kelas Anda Terlebih Dahulu
                    </div>
                  </div>
                </div>
                </div>
                <!-- footer -->
                <div class="modal-footer">
                  <button name="update" type="submit" value="add" class="btn btn-primary"
                    onclick="return confirm('Anda yakin ingin menyimpan data?');">Input</button>
                </div>

              </form>
            </div>
                                    <?php }?>

          </div>
        </div>
      </div>
      <!-- modal akhir -->

     
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="process-logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <!-- koneksi kepada jQuery, popper.min.js, dan bootstrap.min.js -->
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict';
      window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
          form.addEventListener('submit', function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();

    $(document).ready(function () {
      $('.editbtn').on('click', function () {
        $('#updateModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
          return $(this).text();
        }).get();

        console.log(data);

        $('#id_pesan').val(data[1]);
        $('#nama_depan').val(data[2]);
        $('#nama_belakang').val(data[3]);
        $('#tgl_pesan').val(data[4]);
        $('#tgl_tour').val(data[5]);
        $('#nama_paket').val(data[6]);
        $('#nama_wisata').val(data[7]);
        $('#harga').val(data[8]);
        $('#status').val(data[9]);
        
       
      });
    });

    $(document).ready(function () {
      $('.btninsert').on('click', function () {
        $('#insertModal').modal();
        console.log('test');
      });
    });
  </script>
</body>

</html>
<?php
}else{
	session_destroy();
	header('Location:login.php');
}
?>