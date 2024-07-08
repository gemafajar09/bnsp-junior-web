<?php
    require "koneksi.php";
    require "mail.php";
    
    $con = Database::connect();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $pesan = htmlspecialchars($_POST['pesan']);

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