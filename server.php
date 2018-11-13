<?php
session_start();

$fullname = "";
$nrp = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'konekin');

if (isset($_POST['daftar'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $pass1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $pass2 = mysqli_real_escape_string($db, $_POST['password_2']);
}