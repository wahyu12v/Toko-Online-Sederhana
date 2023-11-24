<!DOCTYPE html>
<html>
<head>
    <title>Input Barang</title>
</head>

<body>
    <header>
        <h3>Input Barang</h3>
        <a href="./index.php">Kembali</a>
    </header>

    <form action="proses-input-barang.php" method="POST" enctype="multipart/form-data">
    <!-- <form action="proses-input-barang.php" method="POST" autocomplete="off" enctype="multipart/form-data"> -->

        <fieldset>

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
            <input type="submit" value="Upload Produk" name="upload" />
            <input type="reset" value="Reset">
        </p>

        </fieldset>

    </form>

    </body>
</html>