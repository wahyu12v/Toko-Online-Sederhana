<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['kirim'])){

    // ambil data dari formulir
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $pass= $_POST['pass'];
    $nomor_hp = $_POST['nomor_hp'];
    
    // buat query
    $sql = "INSERT INTO penjual (username, pass, nama, no_hp) VALUE ('$username', '$pass', '$nama', '$nomor_hp')";
    $query = mysqli_query($db, $sql);
    
    // apakah query simpan berhasil?
    if( $query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: register-penjual.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>