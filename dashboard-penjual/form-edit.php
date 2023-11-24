<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_produk']) ){
    header('Location: list-produk.php');
}

//ambil id dari query string
$id = $_GET['id_produk'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM produk WHERE id_produk=$id";
$query = mysqli_query($db, $sql);
$produk = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Produk</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>
            <input type="hidden" name="id_produk" value="<?php echo $produk['id_produk'] ?>" />
            <p>
                <label for="merek">Merek: </label>
                <input type="text" name="merek" placeholder="contoh: Nike" />
            </p>
            <p>
                <label for="seri_sepatu:">Seri Sepatu: </label>
                <input type="text" name="seri_sepatu" placeholder="contoh: NK-4021" />
            </p>
            <p>
                <label for="ukuran_sepatu">Ukuran: </label>
                <select name="ukuran_sepatu">
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                    <option>32</option>
                </select>
            </p>
            <p>
                <label for="harga">Harga Rp: </label>
                <input type="number" name="harga" placeholder="contoh: 400000" />
            </p>
            <p>
                <label for="gambar">Gambar Produk: </label>
                <input type="file" name="gambar">
            </p>
            <p>
                <br>
                <input type="submit" value="Simpan" name="simpan" />
                <input type="reset" value="Reset">
            </p>

            </fieldset>
    


    </form>

    </body>
</html>