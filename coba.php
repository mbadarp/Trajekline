<?php session_start();

if(isset($_SESSION['username'])){

	//koneksi terpusat
	include "koneksi.php";
	$username	=$_SESSION['username'];
	$level	=$_SESSION['level'];
	
	$judul=ucwords(strtolower($_POST['judul']));
	if(isset($_POST['Tambah']))
	{
		mysqli_query($koneksi,"INSERT INTO login_user (`id`, `nama_depan`, `nama_belakang`, `email`,`tipe_identitas`,`no_identitas`, `no_telepon`,`no_rek`,`nama_rek`, `alamat`, `username`, `password`, `level`) VALUES (NULL, '$nama_depan', '$nama_belakang', '$email', '$tipe_identitas', '$no_identitas','$no_telepon','$no_rek', '$nama_rek', '$alamat', '$username', '$password', '$level')")
				or die(mysqli_error());
	}
	
	else if(isset($_POST['Edit']))
	{
		mysqli_query($koneksi,"UPDATE login_user SET nama_depan='$nama_depan', nama_belakang='$nama_belakang', email='$email',tipe_identitas='$tipe_identitas',no_identitas='$no_identitas', no_telepon='$no_telepon',no_rek='$no_rek', nama_rek='$nama_rek', alamat='$alamat', username='$username', password='$password', level='$level' WHERE id='$id'");
	
	}
	
	else if(isset($_POST['Delete']))
	{
		mysqli_query($koneksi,"DELETE FROM login_user WHERE id='$id'");
	
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

  <title>Setup Profil</title>

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
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Data Transaksi</span></a>
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
      
        <div id="wrapper">

<!-- <?php
// if($level=='admin'){
// include"nav.php";
// }else if($level=='operator'){
// include"nav_operator.php";
// }else{
// echo "Anda tidak punya hak access!! Hayoo!! sapa Loe??";
// }
?> -->

<div id="page-wrapper">
   <div class="row col-lg-12">
       
       <div class="panel panel-default">
           <div class="panel-heading"><h3>Setup Profil Trajekline Tour</h3></div>
           <div class="panel-body  ">
               <div class="row col-lg-10">
                 <form name="setup-profil" action="setup-profil.php" method="post" enctype="multipart/form-data">
                 <?php
								if (isset($_GET['id']))
								{
								$comot_id=mysqli_query($koneksi,"SELECT * FROM login_user WHERE id=".$_GET['id']);   
								$ngisi=mysqli_fetch_row($comot_id);
								}
													 
							?>
                       <fieldset>
                           <input name="id" type="hidden" value="<?php echo $ngisi[0]; ?>">
                           <fieldset>
                        	<div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>ID User</label>
                                    <input class="form-control" size="1" name="id" type="text" value="<?php echo $ngisi['id']; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" name="username" type="text" value="<?php echo $ngisi['username']; ?>" >
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" name="password" type="text" value="<?php echo $ngisi['password']; ?>" >
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Nama Member</label>
                                    <input class="form-control" name="nama_user" type="text" value="<?php echo $ngisi['nama_user']; ?>" >
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" name="email" type="email" value="<?php echo $ngisi['email_user']; ?>" >
                                </div>
                                <div class="form-group">
                                    <label>Handphone</label>
                                    <input class="form-control" name="no_hp" type="text" value="<?php echo $ngisi['no_hp']; ?>" >
                                </div>
                       		</div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <input class="form-control" name="jekel" type="text" value="<?php echo $ngisi['jekel']; ?>" >
                                </div>
                                <div class="form-group">
                                  <label>Alamat Member</label>
                                    <textarea name="alamat" rows="1" class="form-control" ><?php echo $ngisi['alamat']; ?></textarea>
                                </div>
                       		</div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input class="form-control" name="tgl_lahir" type="text" value="<?php echo $ngisi['tgl_lahir']; ?>" >
                                </div>
                                <div class="form-group">
                                    <label>No. Rekening</label>
                                    <input class="form-control" name="no_rek" type="text" value="<?php echo $ngisi['no_rek']; ?>" >
                                </div>
                                <div class="form-group">
                                    <label>Rekening atas Nama</label>
                                    <input class="form-control" name="nama_rek" type="text" value="<?php echo $ngisi['nama_rek']; ?>" >
                                </div>
                       		</div>
                            </div>
                           <?php
                               if (isset($_GET['id'])){
                           ?>									
                         <div class="btn-group">
                           <input name="Tambah" type="submit" value="Tambah" class="btn" disabled>
                           </div>
                         <div class="btn-group">
                           <input name="Edit" type="submit" value="Ubah" class="btn btn-info" data-hint="Klik untuk Hapus Post">
                           <input name="Delete" type="submit" value="Hapus" class="btn btn-danger" data-hint="Klik untuk Edit Post">
                           </div>
                           <?php
                               }else{
                           ?>
                           <div class="btn-group">
                           <input name="Tambah" type="submit" value="Tambah" class="btn btn-success" data-hint="Klik untuk Tambah Post">
                           </div>
                         <div class="btn-group">
                           <input name="Edit" type="submit" value="Ubah" class="btn" disabled>
                           <input name="Delete" type="submit" value="Hapus" class="btn" disabled>
                           </div>
                           <?php
                               }
                           ?>
                       </fieldset>
                   </form>
               </div>
           </div>
           
           <div class="card-body">
               <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                       <thead>
                           <tr>
                               <th class="text-left">No</th>
                               <th class="text-left">Judul</th>
                               <th class="text-left">Isi/Content</th>
                               <th class="text-right">Aksi</th>
                           </tr>
                       </thead>
                       
                       <tbody>
                       <?php
         $no=1;
                           $comot=mysqli_query($koneksi, "SELECT * FROM setup_bantuan WHERE kat_bantuan='profil' order by id_bantuan");
         while($isi_tbl=mysqli_fetch_row($comot))
         {
                       ?>
                           <tr>
                               <td><?php echo $no++ ?></td>
                               <td><?php echo $isi_tbl[2]; ?></td>
                               <td><?php $x=substr($isi_tbl[3], 0, 150); echo"$x...";?></td>
                               <td>
                               <div class="tooltip-demo">
                                   <a href="setup-profil.php?id=<?php echo $isi_tbl[0]; ?>"><button type="button" class="btn btn-primary btn-xs"data-toggle="tooltip" data-placement="top" title="Edit/Hapus Content Profil"><i class="fa fa-wrench"></i></button></a>
                              </div>
                               </td>
                           </tr>
                       <?php
                           }
                       ?>
                       </tbody>
                       
                   </table>
               </div>
 </div>
           
       </div>
       <!--.panel end -->
</div>
   
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Core Scripts - Include with every page -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<!-- SB Admin Scripts - Include with every page -->
<script src="js/sb-admin.js"></script>
<script>
$('.tooltip-demo').tooltip({
selector: "[data-toggle=tooltip]",
container: "body"
})
</script>
<!-- tinyMCE-->
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
   selector: "textarea",
   plugins: [
           "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
           "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
           "table contextmenu directionality emoticons template textcolor paste textcolor filemanager"
   ],

   toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
   toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
   toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

   menubar: false,
   toolbar_items_size: 'small',
   image_advtab: true,
   style_formats: [
           {title: 'Bold text', inline: 'b'},
           {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
           {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
           {title: 'Example 1', inline: 'span', classes: 'example1'},
           {title: 'Example 2', inline: 'span', classes: 'example2'},
           {title: 'Table styles'},
           {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
   ],

   templates: [
           {title: 'Test template 1', content: 'Test 1'},
           {title: 'Test template 2', content: 'Test 2'}
   ]
});</script>



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
 
</body>

</html>
<?php
}else{
	session_destroy();
	header('Location:login.php');
}
?>