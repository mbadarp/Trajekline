<?php
  // apabila tombol input di klik
  // maka lakukan tugas
  if (isset($_POST['input'])) {
    // memanggil koneksi.php untuk koneksi database
    include 'koneksi.php';

    // menangkap inputan dari form, dan simpan ke dalam variabel
    $kota_tujuan = $_POST['kota_tujuan'];
    $jumlah_orang = $_POST['jumlah_orang'];
    $lama_hari = $_POST['lama_hari'];
    $tgl_berangkat = $_POST['tgl_berangkat'];
    $tujuan_wisata = $_POST['tujuan_wisata'];
    $tiket = $_POST['tiket'];
    $penginapan = $_POST['penginapan'];
    $fasilitas = $_POST['fasilitas'];

    // fungsi mysqli_query() untuk insert ke database
    $query = "INSERT INTO `data_request` (`id_request`, `kota_tujuan`, `jumlah_orang`, `lama_hari`, `tgl_berangkat`, `tujuan_wisata`, `tiket`, `penginapan`, `fasilitas`) VALUES (NULL, '$kota_tujuan', '$jumlah_orang', '$lama_hari', '$tgl_berangkat', '$tujuan_wisata', '$tiket', '$penginapan', '$fasilitas')";
    $hasil = mysqli_query($koneksi, $query);

    // apabila mysqli_affected_rows($host) > 0
    // (query berhasil)
    if (mysqli_affected_rows($koneksi) > 0) {
      // apabila berhasil, maka muncul alert berhasil
      echo "
        <script>
          alert ('Data berhasil diinput');
          document.location.href = 'index_admin_request.php';
        </script>
      ";
    } else {
      // apabila gagal maka muncul alert gagal
      echo "
        <script>
          alert ('Gagal menginput data');
          document.location.href = 'index_admin_request.php';
        </script>
      ";
    }
  }
  
?>
