<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <form action="proses-login.php" method="POST">
        <label>Email</label>
        <br>
        <input type="text" name="email">
        <br>
        <label>Password</label>
        <br>
        <input type="password" name="password">
        <br><br>
        <input type="submit" name="tombolLogin" value="Login">
        <button><a href="registrasi.php">Registrasi</a></button>
    </form>
</body>

</html>