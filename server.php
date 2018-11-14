<?php
session_start();

$fullname = "";
$nrp = "";
$gender = "";
$fakultas = "";
$username = "";
$password = "";

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
    if (empty($password)) { array_push($errors, "Password kosong"); }
    if ($password_1 != $password_2) {
      array_push($errors, "The two passwords do not match");
    }



}