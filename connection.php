<?php
    // <!-- connection -->
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "addressbook";

    $con = mysqli_connect($servername,$username,$password,$database);

    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Gagal koneksi ke MySQL: " . mysqli_connect_error();
    }else{
        // echo "wowo";
    }
?>