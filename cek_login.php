<?php
session_start();
// Cek apakah form telah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Koneksi ke database atau pengaturan username dan password yang diharapkan
    $username_diharapkan = "yuzuru";
    $password_diharapkan = "yuzuru456";

    // Mendapatkan username dan password dari form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Memeriksa apakah username dan password cocok
    if ($username === $username_diharapkan && $password === $password_diharapkan) {
        // Menandai pengguna telah login
        $_SESSION["logged_in"] = true;
        $_SESSION["role"] = "admin"; // Atur peran sebagai admin atau pengguna biasa

        // Redirect ke halaman index.php jika login berhasil
        header("Location: halamanA.php");
        exit();
    } else {
        // Jika tidak cocok, kembali ke halaman login dengan pesan error
        header("Location: login.php?error=1");
        exit();
    }
}
?>