<?php
include "koneksi.php";

if (isset($_POST['tanggal'])) {
    $tanggal = $_POST['tanggal'];
    $status = $_POST['status'];
    $email = $_POST['email'];

    $query = "INSERT INTO transaksi (tanggal, status, Email) VALUES ('$tanggal', '$status', '$email')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: halamanA.php#TRANSAKSI");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>