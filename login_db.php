<?php
session_start();
include('server.php');


$errors = array();

if (isset($_POST['login_btn'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (count($errors) == 0) {
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        if ($row > 0) {
            $_SESSION['name'] = $row['name'];
            $_SESSION['success'] = "ลงทะเบียนสำเร็จ";
            header('location: home.php');
        } else {
            array_push($errors, "รหัสไม่ถูกต้อง");
            $_SESSION['error'] = "รหัสไม่ถูกต้อง";
            header('location: login.php');
        }
    }
}
