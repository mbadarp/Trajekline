<?php 
    // apabila tombol update di klik
    // maka lakukan
    if (isset($_POST['update'])) {
        // menmanggil koneksi.php
        include 'koneksi.php';

        // untuk menampung isian form ke dalam variabel
        $id_paket = $_POST['id_paket'];
        $nama_paket = $_POST['nama_paket'];
        $nama_wisata = $_POST['nama_wisata'];
        $harga = $_POST['harga'];
        $fasilitas = $_POST['fasilitas'];
        $deskripsi = $_POST['deskripsi'];
        $kategori =$_POST['kategori'];
        $foto = $_FILES['foto']['name'];

    //     // query update yang disimpan dalam variabel
    //     $query = "UPDATE paket_tour SET nama_paket='$nama_paket', nama_wisata='$nama_wisata', harga='$harga', fasilitas='$fasilitas', deskripsi='$deskripsi' WHERE id_paket='$id_paket'";

    //     // kondisi untuk mengecek query gagal atau berhasil
    //     if(mysqli_query($koneksi, $query)){
    //     // apabila berhasil
    //     echo "
    //         <script>
    //         alert ('Berhasil update data');
    //         document.location.href = 'index_admin.php';
    //         </script>
    //     ";
    //     } else {
    //     // apabila gagal
    //     echo "
    //         <script>
    //         alert ('Gagal mengupdate data');
    //         document.location.href = 'index_admin.php';
    //         </script>
    //     ";
    //     }
    // }
     //cek dulu jika merubah gambar produk jalankan coding ini
  if($foto != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_foto_baru = $angka_acak.'-'.$foto; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'img/destinasi/'.$nama_foto_baru); //memindah file gambar ke folder gambar
                      
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE paket_tour SET nama_paket='$nama_paket', nama_wisata='$nama_wisata', harga='$harga', fasilitas='$fasilitas', deskripsi='$deskripsi', kategori='$kategori', foto='$nama_foto_baru' ";
                   $query .= "WHERE id_paket = '$id_paket'";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='index_admin.php';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='index_admin.php';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE paket_tour SET nama_paket='$nama_paket', nama_wisata='$nama_wisata', harga='$harga', fasilitas='$fasilitas', deskripsi='$deskripsi', kategori='$kategori' ";
      $query .= "WHERE id_paket = '$id_paket'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='index_admin.php';</script>";
      }
    }
}
?>