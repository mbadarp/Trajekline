<?php 
    // memanggil koneksi.php
    include 'koneksi.php';

    // menangkap isian id pada tabel
    // disimpan dalam variabel
    $id_paket = $_GET['id_paket'];

    // query untuk menghapus data dengan id tertentu
    mysqli_query($koneksi, "DELETE FROM paket_tour WHERE id_paket='$id_paket'");

    // kondisi untuk mengecek apakah query berhasil atau tidak
    if (mysqli_affected_rows($koneksi) > 0) {
        // apabila berhasil
    echo "
        <script>
        alert ('Data berhasil dihapus');
        document.location.href = 'index_admin.php';
        </script>
    ";
    } else {
        // apabila gagal
    echo "
        <script>
        alert ('Data gagal dihapus');
        document.location.href = 'index_admin.php';
        </script>
    ";
    }

    
?>