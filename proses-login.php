<?php
$inputEmail = $_POST["email"];
$inputPassword = $_POST["password"];

include "koneksi_db.php";
$sql = "SELECT * FROM siswa WHERE email = '$inputEmail'";
$dataSiswa = mysqli_query($connection, $sql);
$kolom = mysqli_fetch_assoc($dataSiswa);

session_start();

if ($inputEmail == $kolom["email"]) {
    $verifikasiPass = password_verify($inputPassword, $kolom["password"]);

    if ($verifikasiPass == true) {
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
}
