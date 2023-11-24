<?php include("config.php"); ?>

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
            <th>Id Barang</th>
            <th>Merek</th>
            <th>Seri Sepatu</th>
            <th>Ukuran Sepatu</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM produk";
        $query = mysqli_query($db, $sql);

        while($produk = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$produk['id_produk']."</td>";
            echo "<td>".$produk['merek']."</td>";
            echo "<td>".$produk['seri_sepatu']."</td>";
            echo "<td>".$produk['ukuran_sepatu']."</td>";
            echo "<td>".$produk['harga']."</td>";
            
            echo "<td>".$produk['gambar']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id_produk=".$produk['id_produk']."'>Edit</a> | ";
            echo "<a href='hapus.php?id_produk=".$produk['id_produk']."'>Hapus</a> | ";
            echo "<a href='checkout.php?id_produk=".$produk['id_produk']."'>Checkout</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total Produk: <?php echo mysqli_num_rows($query) ?></p>

    </fieldset>
    </body>
</html>