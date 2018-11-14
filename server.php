<?php
session_start();

$fullname = "";
$nrp = "";
$gender = "";
$fakultas = "";
$username = "";

$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'konekin');

if (isset($_POST['daftar'])) {
    
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $nrp = mysqli_real_escape_string($db, $_POST['nrp']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $fakultas = mysqli_real_escape_string($db, $_POST['fakultas']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $pass1 = mysqli_real_escape_string($db, $_POST['pass1']);
    $pass2 = mysqli_real_escape_string($db, $_POST['pass2']);

    if (empty($fullname)) { array_push($errors, "Nama lengkap kosong"); }
    if (empty($nrp)) { array_push($errors, "NRP kosong"); }
    if (empty($gender)) { array_push($errors, "Gender kosong"); }
    if (empty($fakultas)) { array_push($errors, "Fakultas kosong"); }
    if (empty($username)) { array_push($errors, "Username kosong"); }
    if (empty($pass1)) { array_push($errors, "Password kosong"); }
    if ($pass1 != $pass2) {
        array_push($errors, "password gk sama");
    }

    $user_check_query = "SELECT * FROM user WHERE username='$username' OR nrp='$nrp' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, "Username sudah terpakai");
        }
    
        if ($user['nrp'] === $nrp) {
            array_push($errors, "NRP sudah ada");
        }
    }

    if (count($errors) == 0) {
        $password = md5($pass1);//encrypt the password before saving in the database

        $query = "INSERT INTO user (fullname, nrp, gender, fakultas, username, password) 
                    VALUES('$fullname', '$nrp', '$gender', '$fakultas', '$username', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: home.php');
    }
}

if (isset($_POST['masuk'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username masih kosong");
    }
    if (empty($password)) {
        array_push($errors, "Password masih kosong");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: home.php');
        }else {
            array_push($errors, "Username/password salah");
        }
    }
}

?>