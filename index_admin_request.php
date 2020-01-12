<?php session_start();

if(isset($_SESSION['username'])){

	//koneksi terpusat
	include "koneksi.php";
	$username	=$_SESSION['username'];
	$level	=$_SESSION['level'];
	
	
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Request Paket</title>

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
              <h6 class="m-0 font-weight-bold text-primary datatable">Data User</h6>
              <button class="btn btn-primary btn-sm btninsert" data-toggle="modal" data-target="#insertModal">+ Input Data</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">ID. Request </th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">Email</th>
                      <th scope="col">Kota Tujuan</th>
                      <th scope="col">Jumlah Orang</th>
                      <th scope="col">Lama Hari</th>
                      <th scope="col">Tgl. Berangkat</th>
                      <th scope="col">Tujuan Wisata</th>
                      <th scope="col">Tiket</th>
                      <th scope="col">Penginapan</th>
                      <th scope="col">Fasilitas</th>
                      <th scope="col">Status</th>
                      <th scope="col">
                        <center><span>Action</span></center>
                      </th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th scope="col">No.</th>
                      <th scope="col">ID Request</th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">Email</th>
                      <th scope="col">Kota Tujuan</th>
                      <th scope="col">Jumlah Orang</th>
                      <th scope="col">Lama Hari</th>
                      <th scope="col">Tgl. Berangkat</th>
                      <th scope="col">Tujuan Wisata</th>
                      <th scope="col">Tiket</th>
                      <th scope="col">Penginapan</th>
                      <th scope="col">Fasilitas</th>
                      <th scope="col">Status</th>
                      <th scope="col">
                        <center><span>Action</span></center>
                      </th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    // memanggil file koneksi.php untuk koneksi database
                    include "koneksi.php";

                    // variabel $query_mysql untuk menyimpan hasil dari fungsi mysqli_query()
                    // mengambil semua data dari tb_siswa
                    $query_mysql = mysqli_query($koneksi, "SELECT * FROM data_request")or die(mysqli_error($koneksi));

                    // membuat variavel $nomor untuk penomoran baris otomatis tabel
                    $nomor = 1;

                    // perulangan untuk mencetak tiap" record dari hasil query
                    // hasil query tersimpan dalam bentuk array
                    // digunakan fungsi mysqli_fetch_array() untuk mengambil nilai dari tiap baris record dari array
                    while($data = mysqli_fetch_array($query_mysql)) {
                  ?>
                    <tr>
                      <!-- mencetak nomor otomatis, secara increment -->
                      <td class="bold"><?php echo $nomor++; ?></td>
                      <!-- mencetak data record dari tb_siswa -->
                      <td><?php echo $data['id_request']; ?></td>
                      <td><?php echo $data['nama_lengkap']; ?></td>
                      <td><?php echo $data['email']; ?></td>
                      <td><?php echo $data['kota_tujuan']; ?></td>
                      <td><?php echo $data['jumlah_orang']; ?></td>
                      <td><?php echo $data['lama_hari']; ?></td>
                      <td><?php echo $data['tgl_berangkat']; ?></td>
                      <td><?php echo $data['tujuan_wisata']; ?></td>
                      <td><?php echo $data['tiket']; ?></td>
                      <td><?php echo $data['penginapan']; ?></td>
                      <td><?php echo $data['fasilitas']; ?></td>
                      <td><?php
                                        	if($data['status']=='S1'){
												$stat="Menunggu";
											}else if($data['status']=='S2'){
												$stat="Lunas";
											}else if($data['status']=='S3'){
												$stat="Bayar diTempat";
											}else if($data['status']=='S4'){
												$stat="Telah Tour";
											}else{
												$stat="";
											}
											echo $stat;
											?></td>
                      <td>
                        <div class="btn btn-group">
                          <button class="btn btn-success btn-sm editbtn" type="button">Edit</button>
                          <span>&nbsp</span>
                          <!-- echo untuk mencetak id tertentu yang akan dihapus -->
                          <!-- data dikirim ke processhapus.php -->
                          <a href="processhapus2.php?id_request=<?php echo $data['id_request']; ?>"
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
      <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">

            <!-- head -->
            <div class="modal-header">
              <h5 class="modal-tittle" id="updateModalLabel">Edit Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <!-- body -->
            <div class="modal-body">
              <form action="processedit2.php" method="post" class="needs-validation" novalidate>
                <input id="id_request" type="hidden" name="id_request">
                <div class="form-row">
                  <div class="col">
                    <label for="nama_lengkap">Nama_Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" placeholder="Masukkan Nama" name="nama_lengkap" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Nama Lengkap terlebih dahulu
                    </div>
                  </div>
                  <div class="col">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Email terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="kota_tujuan">Kota Tujuan</label>
                    <input type="text" class="form-control" id="kota_tujuan" placeholder="Masukkan Kota Tujuan" name="kota_tujuan" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Kota Tujuan terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="jumlah_orang">Jumlah Orang</label>
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
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Jumlah Orang terlebih dahulu
                    </div>
                  </div>
                  <div class="col">
                    <label for="lama_hari">Lama Hari</label>
                    <select name="lama_hari" class="custom-select" id="lama_hari" required>
                        <option value="1 HARI">1 HARI</option>
                        <option value="2 HARI 1 MALAM">2 HARI 1 MALAM</option>
                        <option value="3 HARI 2 MALAM">3 HARI 2 MALAM</option>
                        <option value="4 HARI 3 MALAM">4 HARI 3 MALAM</option>
                        <option value="5 HARI 4 MALAM">5 HARI 4 MALAM</option>
                        <option value="6 HARI 5 MALAM">6 HARI 5 MALAM</option>
                    </select>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Lama Hari terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="tgl_berangkat">Tgl. Berangkat</label>
                    <input name="tgl_berangkat" type="date" class="form-control form-control-user" id="exampleTglBerangkat" placeholder="Pilih Tanggal">
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Tgl. Berangkat terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="tujuan_wisata">Tujuan Wisata</label>
                    <input name="tujuan_wisata" type="text" class="form-control form-control-user" id="exampleTujuanWisata" placeholder="Tempat mana saja yang ingin anda kunjungi">
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Tujuan Wisata terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="tiket">Sudah memiliki tiket pesawat/kereta ?</label>
                    <select name="tiket" class="custom-select" id="tiket" required>
                        <option value="YA">Ya, Saya sudah memiliki tiket pesawat/kereta</option>
                        <option value="TIDAK">Tidak, Saya tidak memiliki tiket pesawat/kereta</option>
                    </select>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Tiket terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="penginapan">Jenis penginapan yang diinginkan</label>
                    <select name="penginapan" class="custom-select" id="penginapan" required>
                         <option value="Tanpa Penginapan">Tanpa Penginapan / saya akan pesan sendiri</option>
                         <option value="Home Stay">Home Stay/Guest House</option>
                         <option value="Bintang 2">Hotel Bintang 2</option>
                         <option value="Bintang 3">Hotel Bintang 3</option>
                         <option value="Bintang 4">Hotel Bintang 4</option>
                         <option value="Bintang 5">Hotel Bintang 5</option>
                    </select>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Penginapan terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="fasilitas">Jenis Fasilitas</label>
                    <select name="fasilitas" class="custom-select" id="fasilitas" required>
                        <option value="Ekonomi">Kelas Ekonomi</option>
                        <option value="Bisnis">Kelas Bisnis</option>
                        <option value="Eksekutif">Kelas Eksekutif</option>
                 
                    </select>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Pilih Kelas Anda Terlebih Dahulu
                    </div>
                  </div>
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
                <!-- footer -->
                <div class="modal-footer">
                  <button name="update" type="submit" value="add" class="btn btn-success"
                    onclick="return confirm('Anda yakin ingin mengupdate data?');">Update</button>
                </div>

              </form>
            </div>


          </div>
        </div>
      </div>
      <!-- modal akhir -->

      <!-- modal input -->
      <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">

            <!-- head -->
            <div class="modal-header">
              <h5 class="modal-tittle" id="insertModalLabel">Insert Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <!-- body -->
            <div class="modal-body">
              <form action="processinput2.php" method="post" class="needs-validation" novalidate>
                <input id="id_request" type="hidden" name="id_request">
                <div class="form-row">
                  <div class="col">
                    <label for="nama_lengkap">Nama_Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" placeholder="Masukkan Nama" name="nama_lengkap" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Nama Lengkap terlebih dahulu
                    </div>
                  </div>
                  <div class="col">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Email terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="kota_tujuan">Kota Tujuan</label>
                    <input type="text" class="form-control" id="kota_tujuan" placeholder="Masukkan Kota Tujuan" name="kota_tujuan" required>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Kota Tujuan terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="jumlah_orang">Jumlah Orang</label>
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
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Jumlah Orang terlebih dahulu
                    </div>
                  </div>
                  <div class="col">
                    <label for="lama_hari">Lama Hari</label>
                    <select name="lama_hari" class="custom-select" id="lama_hari" required>
                        <option value="1 HARI">1 HARI</option>
                        <option value="2 HARI 1 MALAM">2 HARI 1 MALAM</option>
                        <option value="3 HARI 2 MALAM">3 HARI 2 MALAM</option>
                        <option value="4 HARI 3 MALAM">4 HARI 3 MALAM</option>
                        <option value="5 HARI 4 MALAM">5 HARI 4 MALAM</option>
                        <option value="6 HARI 5 MALAM">6 HARI 5 MALAM</option>
                    </select>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Lama Hari terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="tgl_berangkat">Tgl. Berangkat</label>
                    <input name="tgl_berangkat" type="date" class="form-control form-control-user" id="exampleTglBerangkat" placeholder="Pilih Tanggal">
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Tgl. Berangkat terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="tujuan_wisata">Tujuan Wisata</label>
                    <input name="tujuan_wisata" type="text" class="form-control form-control-user" id="exampleTujuanWisata" placeholder="Tempat mana saja yang ingin anda kunjungi">
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Tujuan Wisata terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="tiket">Sudah memiliki tiket pesawat/kereta ?</label>
                    <select name="tiket" class="custom-select" id="tiket" required>
                        <option value="YA">Ya, Saya sudah memiliki tiket pesawat/kereta</option>
                        <option value="TIDAK">Tidak, Saya tidak memiliki tiket pesawat/kereta</option>
                    </select>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Tiket terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="penginapan">Jenis penginapan yang diinginkan</label>
                    <select name="penginapan" class="custom-select" id="penginapan" required>
                         <option value="Tanpa Penginapan">Tanpa Penginapan / saya akan pesan sendiri</option>
                         <option value="Home Stay">Home Stay/Guest House</option>
                         <option value="Bintang 2">Hotel Bintang 2</option>
                         <option value="Bintang 3">Hotel Bintang 3</option>
                         <option value="Bintang 4">Hotel Bintang 4</option>
                         <option value="Bintang 5">Hotel Bintang 5</option>
                    </select>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Masukkan Penginapan terlebih dahulu
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label for="fasilitas">Jenis Fasilitas</label>
                    <select name="fasilitas" class="custom-select" id="fasilitas" required>
                        <option value="Ekonomi">Kelas Ekonomi</option>
                        <option value="Bisnis">Kelas Bisnis</option>
                        <option value="Eksekutif">Kelas Eksekutif</option>
                 
                    </select>
                    <div class="valid-feedback">
                      Muantull!!
                    </div>
                    <div class="invalid-feedback">
                      Pilih Kelas Anda Terlebih Dahulu
                    </div>
                  </div>
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
                <!-- footer -->
                <div class="modal-footer">
                  <button name="input" type="submit" value="add" class="btn btn-primary"
                    onclick="return confirm('Anda yakin ingin menyimpan data?');">Input</button>
                </div>

              </form>
            </div>


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

        $('#id_request').val(data[1]);
        $('#nama_lengkap').val(data[2]);
        $('#email').val(data[3]);
        $('#kota_tujuan').val(data[4]);
        $('#jumlah_orang').val(data[5]);
        $('#lama_hari').val(data[6]);
        $('#tgl_berangkat').val(data[7]);
        $('#tujuan_wisata').val(data[8]);
        $('#tiket').val(data[9]);
        $('#penginapan').val(data[10]);
        $('#fasilitas').val(data[11]);
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