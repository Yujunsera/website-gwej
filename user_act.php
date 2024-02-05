<?php
include "koneksi.php";

if (isset($_POST['nama'])) {
    $deskripsi = $_POST['deskripsi'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $email = $_POST['email'];

    $query = "INSERT INTO jasailustrasi (deskripsi, Nama, Jenis, Email) 
              VALUES ('$deskripsi', '$nama', '$jenis', '$email')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php#DATA");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi); 
?>