<!DOCTYPE html>
<html>
<head>
    <title>Keranjang</title>
</head>

<body>
    <header>
        <h3>Keranjang</h3>
    </header>

    <form action="proses-input-barang.php" method="POST">

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
            <input type="submit" value="Uload Produk" name="upload" />
        </p>

        </fieldset>

    </form>

    </body>
</html>