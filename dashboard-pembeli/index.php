<!DOCTYPE html>
<html>
<head>
    <title>TokoPakedi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1 style="text-align: center ; ">TokoPakedi</h1>
        <h2>Dashboard Pembeli</h2>
    </header>

    <br>
    <h4>Menu :</h4>
    <nav>
        <ul>
            <li><a href="list-produk.php">Katalog List Barang</a></li>
            <li><a href="input-barang.php">Checkout</a></li>
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
    </body>
</html>
