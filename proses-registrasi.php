<?php
include "koneksi_db.php";

$nama = $_POST["nama"];
$email = $_POST["email"];
$password = $_POST["password"];
$hashpass = password_hash($password, PASSWORD_DEFAULT);

$insertQuery = "INSERT INTO siswa(nama, email, password) VALUES('$nama', '$email', '$hashpass')";
$result = mysqli_query($connection, $insertQuery);

echo "<script>
    alert('Pendaftaran berhasil, silakan login');
    window.location.replace('login.php');
</script>";
