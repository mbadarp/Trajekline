<?php
  // apabila tombol input di klik
  // maka lakukan tugas
  if (isset($_POST['input'])) {
    // memanggil koneksi.php untuk koneksi database
    include 'koneksi.php';

    // menangkap inputan dari form, dan simpan ke dalam variabel
    $nama_paket = $_POST['nama_paket'];
    $nama_wisata = $_POST['nama_wisata'];
    $harga = $_POST['harga'];
    $fasilitas = $_POST['fasilitas'];
    $deskripsi = $_POST['deskripsi'];
    $kategori =$_POST['kategori'];
    $foto = $_FILES['foto']['name'];


//cek dulu jika ada gambar produk jalankan coding ini
if($foto != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['foto']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_foto_baru = $angka_acak.'-'.$foto; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'img/destinasi/'.$nama_foto_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query =  "INSERT INTO `paket_tour` (`id_paket`, `id_transaksi`, `nama_paket`, `nama_wisata`, `harga`, `fasilitas`, `deskripsi`, `kategori`, `foto` ) VALUES (NULL, '', '$nama_paket', '$nama_wisata',  '$harga', '$fasilitas' , '$deskripsi', '$kategori', '$nama_foto_baru')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index_admin.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='index_admin.php';</script>";
            }
} else {
   $query = "INSERT INTO `paket_tour` (`id_paket`, `id_transaksi`, `nama_paket`, `nama_wisata`, `harga`, `fasilitas`, `deskripsi`, `kategori`, `foto` ) VALUES ('', '$nama_paket', '$nama_wisata',  '$harga', '$fasilitas' , '$deskripsi', '$kategori', null)";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index_admin.php';</script>";
                  }
}}
?>