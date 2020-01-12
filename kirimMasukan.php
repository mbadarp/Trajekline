<?php
  include 'koneksi.php';
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $subjek = $_POST['subjek'];
  $saran_masukan = $_POST['saran_masukan'];
  
 

  $query = "INSERT INTO `tbl_saran` (`id_saran`,`nama`,`email`, `subjek`, `saran_masukan`) VALUES (NULL, '$nama','$email  ',  '$subjek', '$saran_masukan')";
  $hasil = mysqli_query($koneksi, $query);

  // $hasil=mysqli_query($koneksi, "select * from login_user");

  if(mysqli_affected_rows($koneksi) > 0){
    echo "
      <script>
        alert ('Terima Kasih atas saran atau kritik anda');
        document.location.href = 'index.php #contact';
      </script>
    ";
  } else {
    var_dump($hasil);
    // echo "
    //   <script>
    //     alert ('Gagal membuat akun');
    //     document.location.href = 'register.php';
    //   </script>
    // ";
  }
?>
