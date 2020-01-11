<?php
  include 'koneksi.php';
  $kota_tujuan = $_POST['kota_tujuan'];
  $jumlah_orang = $_POST['jumlah_orang'];
  $lama_hari = $_POST['lama_hari'];
  $tgl_berangkat = $_POST['tgl_berangkat'];
  $tujuan_wisata = $_POST['tujuan_wisata'];
  $tiket = $_POST['tiket'];
  $penginapan = $_POST['penginapan'];
  $fasilitas = $_POST['fasilitas'];
 

  $query = "INSERT INTO `data_request` (`id_request`, `kota_tujuan`, `jumlah_orang`, `lama_hari`, `tgl_berangkat`, `tujuan_wisata`, `tiket`, `penginapan`, `fasilitas`) VALUES (NULL, '$kota_tujuan', '$jumlah_orang', '$lama_hari', '$tgl_berangkat', '$tujuan_wisata', '$tiket', '$penginapan', '$fasilitas')";
  $hasil = mysqli_query($koneksi, $query);

  // $hasil=mysqli_query($koneksi, "select * from login_user");

  if(mysqli_affected_rows($koneksi) > 0){
    echo "
      <script>
        alert ('Berhasil membuat paket tour');
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
