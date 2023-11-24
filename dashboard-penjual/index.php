<?php
include 'config.php';

session_start();

if($_SESSION['status'] != "login") {
    header("location:../index.php");
}
?>
<header>
        <h1 style="text-align: center ; ">TokoPakedi</h1>
        <h2>Dashboard Penjual</h2>
        <?php echo "selamat datang ". $_SESSION['username']; ?>
        <a href="logout.php">Logout</a>
</header>
<br>
    <h4>Menu :</h4>
    <nav>
        <ul>
            <li><a href="list-produk.php">Katalog List Barang</a></li>
            <li><a href="input-barang.php">Input Barang</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "<script> alert('Produk berhasil di upluad!')</script>";
            } else {
                echo "<script> alert('Produk gagal!')</script>";
            }
        ?>
    </p>
    <?php endif; ?>



