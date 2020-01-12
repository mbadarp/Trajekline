<?php
  include 'koneksi.php';
  $nama_depan = $_POST['nama_depan'];
  $nama_belakang = $_POST['nama_belakang'];
  $email = $_POST['email'];
  $no_telepon = $_POST['no_telepon'];
  $alamat = $_POST['alamat'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password_hash = password_hash($password, PASSWORD_DEFAULT);

  $query = "INSERT INTO `login_user` (`id`, `nama_depan`, `nama_belakang`, `email`, `no_telepon`, `alamat`, `username`, `password`, `level`) VALUES (NULL, '$nama_depan', '$nama_belakang', '$email', '$no_telepon', '$alamat', '$username', '$password', 'customer')";
  $hasil = mysqli_query($koneksi, $query);

  // $hasil=mysqli_query($koneksi, "select * from login_user");

  if(mysqli_affected_rows($koneksi) > 0){
    echo "
      <script>
        alert ('Berhasil membuat akun');
        document.location.href = 'login.php';
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
