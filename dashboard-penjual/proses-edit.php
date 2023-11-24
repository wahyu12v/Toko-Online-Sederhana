<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_produk = $_POST['id_produk'];
    $merek = $_POST['merek'];
    $seri_sepatu = $_POST['seri_sepatu'];
    $ukuran_sepatu = $_POST['ukuran_sepatu'];
    $harga = $_POST['harga'];
    $sekolah = $_POST['gambar'];

    // buat query update
    $sql = "UPDATE produk SET merek='$merek', seri_sepatu='$seri_sepatu', ukuran_sepatu='$ukuran_sepatu', harga='$harga' WHERE id_produk=$id_produk";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-produk.php
        header('Location: list-produk.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>