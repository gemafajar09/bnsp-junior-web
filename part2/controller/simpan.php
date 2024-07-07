<?php
    require "koneksi.php";
    $con = Database::connect();

    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];

        $simpan = $con->query("INSERT INTO tb_kontak (nama, email, pesan) VALUE ('$nama','$email', '$pesan')");

        if($simpan){
            Database::disconect();
            echo "<script>
                alert(`Berhasil`)
                window.location='../index.php'
                </script>";
        }else{
            Database::disconect();
            echo "<script>
                alert(`Berhasil`)
                window.location='../index.php'
            </script>";
        }
    }