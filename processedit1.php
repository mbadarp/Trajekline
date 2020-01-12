<?php 
    // apabila tombol update di klik
    // maka lakukan
    if (isset($_POST['update'])) {
        // menmanggil koneksi.php
        include 'koneksi.php';

        // untuk menampung isian form ke dalam variabel
        $id = $_POST['id'];
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

        
        // query update yang disimpan dalam variabel
        $query = "UPDATE login_user SET nama_depan='$nama_depan', nama_belakang='$nama_belakang', email='$email',tipe_identitas='$tipe_identitas',no_identitas='$no_identitas', no_telepon='$no_telepon',no_rek='$no_rek', nama_rek='$nama_rek', alamat='$alamat', username='$username', password='$password', level='$level' WHERE id='$id'";
        

        // kondisi untuk mengecek query gagal atau berhasil
        if(mysqli_query($koneksi, $query)){
            
        //apabila berhasil
        echo "
            <script>
            alert ('Berhasil update data');
            document.location.href = 'index_admin_dtcustomer.php';
            </script>
        ";
        } else {
            
        //apabila gagal
        echo "
            <script>
            alert ('Gagal mengupdate data');
            document.location.href = 'index_admin_dtcustomer.php';
            </script>
        ";
        }
    }
?>