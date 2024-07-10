<?php
    require "koneksi.php";
    require "mail.php";
    
    $con = Database::connect();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];

        $simpan = $con->query("INSERT INTO tb_kontak (nama, email, pesan) VALUE ('$nama','$email', '$pesan')");

        Mailer::KirimEmail($nama, 'noreply@yahoo.com',$email,'pesan','pesan baru sudag datang');

        echo json_encode($simpan);
    }