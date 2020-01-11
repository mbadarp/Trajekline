<?php 
    // apabila tombol update di klik
    // maka lakukan
    if (isset($_POST['update'])) {
        // menmanggil koneksi.php
        include 'koneksi.php';

        // untuk menampung isian form ke dalam variabel
        $id_request = $_POST['id_request'];
        $kota_tujuan = $_POST['kota_tujuan'];
        $jumlah_orang = $_POST['jumlah_orang'];
        $lama_hari = $_POST['lama_hari'];
        $tgl_berangkat = $_POST['tgl_berangkat'];
        $tujuan_wisata = $_POST['tujuan_wisata'];
        $tiket = $_POST['tiket'];
        $penginapan = $_POST['penginapan'];
        $fasilitas = $_POST['fasilitas'];

        
        // query update yang disimpan dalam variabel
        $query = "UPDATE data_request SET kota_tujuan='$kota_tujuan', jumlah_orang='$jumlah_orang', lama_hari='$lama_hari', tgl_berangkat='$tgl_berangkat', tujuan_wisata='$tujuan_wisata', tiket='$tiket', penginapan='$penginapan', fasilitas='$fasilitas' WHERE id_request='$id_request'";
        

        // kondisi untuk mengecek query gagal atau berhasil
        if(mysqli_query($koneksi, $query)){
            
        //apabila berhasil
        echo "
            <script>
            alert ('Berhasil update data');
            document.location.href = 'index_admin_request.php';
            </script>
        ";
        } else {
            
        //apabila gagal
        echo "
            <script>
            alert ('Gagal mengupdate data');
            document.location.href = 'index_admin_request.php';
            </script>
        ";
        }
    }
?>