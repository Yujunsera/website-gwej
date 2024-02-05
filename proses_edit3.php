<?php
include "koneksi.php";

if (isset($_POST['submit_edit3'])) {
    $id = $_POST['id'];
    $tanggal = $_POST['tanggal'];
    $status = $_POST['status'];
    $email = $_POST['email'];
    

    
    $query = "UPDATE transaksi SET tanggal = '$tanggal', status = '$status', Email = '$email' WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    if ($result) {

        header("Location: halamanA.php#TRANSAKSI");
        exit();
    } else {
        echo "Error dalam mengedit data: " . mysqli_error($koneksi);
    }
}
?>
