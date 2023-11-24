<?php
include("config.php");
ob_start();
session_start();
if(!isset($_SESSION['username'])){
    die("<b>Oops!</b> Access Failed.
        <p>Sistem Logout. Anda harus melakukan Login kembali.</p>
        <button type='button' onclick=location.href='./'>Back</button>");}
if( isset($_POST['checkout']) ){
// mengambil id_produk yang dipilih
    if( isset($_GET['id_produk']) ){
        $id_produk = $_GET['id_produk'];
        //ambil data yang sudah ada dari database produk
        $sql = "SELECT * FROM produk WHERE id_produk=$id_produk";
        $query = mysqli_query($db, $sql);
        while($data = mysqli_fetch_array($query)){
            $merek = $data['merek'];
            $seri_sepatu = $data['seri_sepatu'];
            $ukuran = $data['ukuran_sepatu'];
            $harga = $data['harga'];
        }
        $username = mysqli_query($db,"SELECT * FROM pembeli WHERE username='$_SESSION[username]'");
        $peg=mysqli_fetch_array($username);
        $alamat = $_POST['alamat'];
        $tanggal = date("Y-m-d H:i:s");
        $jumlah = $_POST['jumlah'];
        $total_harga = $harga * $jumlah;
    }
    // buat query update
    $input = "INSERT INTO checkout (username, id_produk, alamat, ukuran, jumlah, tanggal, seri_sepatu, total_harga) VALUE ('$peg', '$id_produk', '$alamat' , '$ukuran', '$jumlah' , '$tanggal', '$seri_sepatu', '$total_harga'";
    $query1 = mysqli_query($db, $input);

    // apakah query update berhasil?
    if( $query1) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list-produk.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: list-produk.php?status=gagal');
    }
}else {
    die("Akses dilarang...");
}
?>