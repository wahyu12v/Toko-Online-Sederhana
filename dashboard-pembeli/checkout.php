<?php 
include("config.php"); 
ob_start();
session_start();
if(!isset($_SESSION['username'])){
    die("<b>Oops!</b> Access Failed.
        <p>Sistem Logout. Anda harus melakukan Login kembali.</p>
        <button type='button' onclick=location.href='./'>Back</button>");}
?>

<!DOCTYPE html>
<html>
<head>
    <title>checkout Produk</title>
</head>

<body>
    <header>
        <h3>checkout Produk</h3>
        <a href="./index.php">Kembali</a>
    </header>

    <fieldset>
    <table border="1">
    <thead>
        <tr>
            <th>username</th>
            <th>Id Barang</th>
            <th>Merek</th>
            <th>Seri Sepatu</th>
            <th>Ukuran Sepatu</th>
            <th>Harga</th>
            <th>Gambar</th>
        </tr>
    </thead>
    <tbody>

        <?php
        if( isset($_GET['id_produk']) ){

            // ambil id dari query string
            $id_produk = $_GET['id_produk'];
        }
        $sql = "SELECT * FROM produk WHERE id_produk=$id_produk";
        $username = mysqli_query($db,"SELECT username FROM pembeli WHERE username='$_SESSION[username]'");
        $query = mysqli_query($db, $sql);
        $tampilPeg    =mysqli_query($db, "SELECT * FROM pembeli WHERE username='$_SESSION[username]'");
        $peg    =mysqli_fetch_array($tampilPeg);

        while($produk = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$peg['username']."</td>";
            echo "<td>".$produk['id_produk']."</td>";
            echo "<td>".$produk['merek']."</td>";
            echo "<td>".$produk['seri_sepatu']."</td>";
            echo "<td>".$produk['ukuran_sepatu']."</td>";
            echo "<td>".$produk['harga']."</td>";
            
            echo "<td>".$produk['gambar']."</td>";

            echo "</tr>";
        }
        ?>
    </tbody>
    </table>
        <br>
    <form action="proses_checkout.php" method="POST">
        <p>
            <label for="alamat">alamat: </label>
            <input type="text" name="alamat" placeholder="contoh: Jl.Tuanku Tambusai" />
        </p>
        <p>
            <label for="jumlah:">jumlah: </label>
            <input type="number" name="jumlah" />
        </p>
        <input type="submit" value="checkout Produk" name="checkout" />
    </form>
    </body>
</html>