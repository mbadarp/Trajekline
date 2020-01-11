<?php
  // apabila tombol input di klik
  // maka lakukan tugas
  if (isset($_POST['input'])) {
    // memanggil koneksi.php untuk koneksi database
    include 'koneksi.php';

    // menangkap inputan dari form, dan simpan ke dalam variabel
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $email = $_POST['email'];
    $tipe_identitas = $_POST['tipe_identitas'];
    $no_identitas = $_POST['no_identitas'];
    $no_telepon = $_POST['no_telepon'];
    $no_rek = $_POST['no_rek'];
    $nama_rek = $_POST['nama_rek'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    // fungsi mysqli_query() untuk insert ke database
    $query = "INSERT INTO `login_user` (`id`, `nama_depan`, `nama_belakang`, `email`,`tipe_identitas`,`no_identitas`, `no_telepon`,`no_rek`,`nama_rek`, `alamat`, `username`, `password`, `level`) VALUES (NULL, '$nama_depan', '$nama_belakang', '$email', '$tipe_identitas', '$no_identitas','$no_telepon','$no_rek', '$nama_rek', '$alamat', '$username', '$password', '$level')";
    $hasil = mysqli_query($koneksi, $query);

    // apabila mysqli_affected_rows($host) > 0
    // (query berhasil)
    if (mysqli_affected_rows($koneksi) > 0) {
      // apabila berhasil, maka muncul alert berhasil
      echo "
        <script>
          alert ('Data berhasil diinput');
          document.location.href = 'index_admin_dtcustomer.php';
        </script>
      ";
    } else {
      // apabila gagal maka muncul alert gagal
      echo "
        <script>
          alert ('Gagal menginput data');
          document.location.href = 'index_admin_dtcustomer.php';
        </script>
      ";
    }
  }
  
?>
