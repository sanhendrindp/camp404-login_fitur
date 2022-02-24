<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo "<script>
        alert('Anda belum login');
        window.location.replace('login.php');
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div style="text-align: center;">
        <h1>Home</h1>
        <p>Selamat Datang,
            <?php echo ($_SESSION["email"]) ?>
        </p>
        <a href="logout.php">Logout</a>
    </div>
</body>

</html>