<?php
session_start();
include('server.php');


$errors = array();

if (isset($_POST['reg_btn'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $regdate = mysqli_real_escape_string($conn, $_POST['regdate']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (count($errors) == 0) {
        $sql = "INSERT INTO users (name, regdate, email, username, password) VALUES ('$name', '$regdate', '$email', '$username', '$password')";
        $result = mysqli_query($conn, $sql);

        $_SESSION['success'] = "ลงทะเบียนสำเร็จ";
        header('location: index.php');
    } else {
        header('location: register.php');
    }
}
