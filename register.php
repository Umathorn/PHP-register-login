<?php
session_start();
include('server.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="header mt-5">ลงทะเบียน</div>
        <hr>
        <form action="register_db.php" method="POST">
            <div class="mb-3">
                <label for="name">ชื่อ-สกุล</label>
                <input type="text" name="name" required>
            </div>
            <div class="mb-3">
                <label for="regdate">วันที่สมัคร</label>
                <input type="date" name="regdate" required>
            </div>
            <div class="mb-3">
                <label for="email">email</label>
                <input type="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="username">username</label>
                <input type="text" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password">password</label>
                <input type="password" name="password" required>
            </div>
            <div class="mb-3">
                <button type="submit" name="reg_btn" class="btn btn-primary">บันทึก</button>
            </div>
            ไปยังหน้า <a href="login.php">เข้าสู่ระบบ</a>
        </form>
    </div>
</body>

</html>