<?php

include("config.php");

if( isset($_POST["submit_penjual"]) ) {

    $username = $_POST["username_penjual"];
    $pass = $_POST["password_penjual"];


    // buat query
    $sql = "SELECT * FROM penjual WHERE username='$username' AND pass='$pass'";
    $query = mysqli_query($db, $sql);

    $sama = mysqli_num_rows($query);

    if($sama > 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        header("location:dashboard-penjual/index.php");
    } else {
        header("LOCATION:index.php");
    }


}

?>