<!DOCTYPE html>
<html>
<head>
    <title>Register Akun Pembeli</title>
</head>

<body>
    <header>
        <h3>Register Akun Pembeli</h3>
        <a href="./index.php">Kembali</a>
    </header>

    <form action="proses-register-pembeli.php" method="POST">

        <fieldset>

        <p>
            <label for="username">Username: </label>
            <input type="text" name="username" placeholder="contoh: ucup_tamvan" />
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="contoh: ucup markucup" />
        </p>
        <p>
            <label for="password">Buat Password: </label>
            <input type="password" name="pass" />
        </p>
        <p>
            <label for="nomor_hp">Nomor Hp: </label>
            <input type="number" name="nomor_hp" placeholder="contoh: 08144454353" />
        </p>




        <p>
            <br>
            <input type="submit" value="Kirim" name="kirim" />
            <input type="reset" value="Reset">
        </p>

        </fieldset>

    </form>

    </body>
</html>