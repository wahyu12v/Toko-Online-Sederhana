<?php

include("config.php");

if( isset($_POST["submit_pembeli"]) ) {

    $username = $_POST["username_pembeli"];
    $pass = $_POST["password_pembeli"];


    // buat query
    $sql = "SELECT * FROM pembeli WHERE username='$username' AND pass='$pass'";
    $query = mysqli_query($db, $sql);

    $sama = mysqli_num_rows($query);

    if($sama > 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        header("location:dashboard-pembeli/index.php");
    } else {
        header("LOCATION:index.php");
    }


}

?>