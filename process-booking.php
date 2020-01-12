<?php
  include 'koneksi.php';
  $id = $_POST['id'];
  $id_paket = $_POST['id_paket'];
  $tgl_pesan = $_POST['tgl_pesan'];
  $tgl_tour = $_POST['tgl_tour'];
  


  $query = "INSERT INTO `tbl_pesan` (`id_pesan`,`id`,`id_paket`, `tgl_pesan`,`tgl_tour`) VALUES (NULL, '$id','$id_paket', '$tgl_pesan', $tgl_tour)";
  $hasil = mysqli_query($koneksi, $query);

  // $hasil=mysqli_query($koneksi, "select * from login_user");

  if(mysqli_affected_rows($koneksi) > 0){
    echo "
      <script>
        alert ('Berhasil membuat paket tour, Detail Paket Akan Kami kirim Melalui Email');
        document.location.href = 'index.php #wisata';
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

