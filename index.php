<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <br><br><br><br>
    <div class="row">
    <div class="col-sm-6">
        <div class="card" >
        <div class="card-body ">
            <h3 class="card-title">Login User Pembeli</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <p class="ca">
            <form action="login-pembeli.php" method="POST">
            <label for="">Username</label>
            <input type="text" name="username_pembeli"> <br>

            <label for="">password</label>
            <input type="password" name="password_pembeli"> <br>

            <input class="btn btn-primary" type="submit" value="Login" name="submit_pembeli"> <br> <br>
            <a href="register-pembeli.php">Register Pembeli</a>
            </form>
            </p>
        </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <h3 class="card-title">Login User Penjual</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <p class="ca">
            <form action="login-penjual.php" method="POST">

            <label for="">Username</label>
            <input type="text" name="username_penjual"> <br>

            <label for="">password</label>
            <input type="password" name="password_penjual"> <br>

            <input class="btn btn-primary" type="submit" value="Login" name="submit_penjual"> <br> <br>
            <a href="register-pembeli.php">Register Pembeli</a>
            </form>
            </p>
        </div>
        </div>
    </div>
    </div>

</body>
</html>