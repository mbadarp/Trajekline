<?php 
    // apabila tombol update di klik
    // maka lakukan
    if (isset($_POST['update'])) {
        // menmanggil koneksi.php
        include 'koneksi.php';

        // untuk menampung isian form ke dalam variabel
        $id_pesan = $_POST['id_pesan'];
        $id = $_POST['id'];
        $id_paket = $_POST['id_paket']; 
        $tgl_pesan = $_POST['tgl_pesan'];
        $tgl_tour = $_POST['tgl_tour'];
        $status = $_POST['status'];
        

        
        // query update yang disimpan dalam variabel
        $query = "UPDATE tbl_pesan SET id='$id', id_paket='$id_paket', tgl_pesan='$tgl_pesan',tgl_tour='$tgl_tour',status='$status' WHERE id_pesan='$id_pesan'";
        
        $hasil = mysqli_query($koneksi, $query);
        // kondisi untuk mengecek query gagal atau berhasil
        if(mysqli_query($koneksi, $query)){
            
        //apabila berhasil
        echo "
            <script>
            alert ('Berhasil update data');
            document.location.href = 'index_admin_validasi.php';
            </script>
        ";
        } else {
            var_dump($hasil);
        //apabila gagal
        // echo "
        //     <script>
        //     alert ('Gagal mengupdate data');
        //     document.location.href = 'index_admin_transaksi.php';
        //     </script>
        // ";
         }
    }
?>