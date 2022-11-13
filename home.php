<?php
session_start();
include('server.php');

if (isset($_GET['logout'])) {
    session_destroy();
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_SESSION['success'])) : ?>
        <?php
        echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
    <?php endif ?>
    <p>
        ยินตีต้อนรับ <?php echo $_SESSION['name']; ?>
    </p>
    <a href="home.php?logout='1'">logout</a>
</body>

</html>