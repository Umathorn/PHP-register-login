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
        <form action="login_db.php" method="POST">
            <div class="mb-3">
                <label for="username">username</label>
                <input type="text" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password">password</label>
                <input type="password" name="password" required>
            </div>
            <p>
                <?php if (isset($_SESSION['error'])) : ?>
                    <?php echo $_SESSION['error'];
                    unset($_SESSION['error']); ?>
                <?php endif ?>
            </p>
            <div class="mb-3">
                <button type="submit" name="login_btn" class="btn btn-primary">บันทึก</button>
            </div>
            ไปยังหน้า <a href="register.php">ลงทะเบียน</a>
        </form>
    </div>
</body>

</html>