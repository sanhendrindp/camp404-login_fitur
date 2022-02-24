<?php
$inputEmail = $_POST["email"];
$inputPassword = $_POST["password"];

$kunciEmail = "sanhendrin.dwip@gmail.com";
$kunciPassword = "user12345";

session_start();

if ($inputEmail == $kunciEmail && $inputPassword == $kunciPassword) {
    $_SESSION["email"] = $inputEmail;

    echo "<script>
            alert('Login berhasil');
            window.location.replace('home.php');
        </script>";
} else {
    echo "<script>
            alert('Login gagal');
            window.location.replace('login.php');
        </script>";
}
