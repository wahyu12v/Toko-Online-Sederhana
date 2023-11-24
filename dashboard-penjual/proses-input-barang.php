<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['upload'])){

    // ambil data dari formulir
    $merek = $_POST['merek'];
    $seri_sepatu = $_POST['seri_sepatu'];
    $ukuran_sepatu = $_POST['ukuran_sepatu'];
    $harga = $_POST['harga'];
    // $gambar = $_POST['gambar'];
    $directory = "img/";
    $file_name=$FILES['NameFile']['name'];
    move_uploaded_file($FILES['NameFile']['tmp_name'],$directory.$file_name);
    $koneksi = mysqli_connect("localhost", "root", "", "tokopakedi");
    mysqli_query($koneksi, "insert into dokumen set file='$file_name'");


    // buat query
    $sql = "INSERT INTO produk (merek, seri_sepatu, ukuran_sepatu, harga, gambar) VALUE ('$merek', '$seri_sepatu', '$ukuran_sepatu', '$harga', '$gambar')";
    $query = mysqli_query($db, $sql);

    // //mendata jumlah produk guna menentukan id_produk
    // $data_produk = mysqli_query($db,"SELECT * FROM produk");
    // $jumlah_produk = mysqli_num_rows($data_produk);
    
    // apakah query simpan berhasil?
    if( $query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>