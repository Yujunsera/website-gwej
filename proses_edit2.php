<?php
include "koneksi.php";

if (isset($_POST['submit_edit2'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    
    
    $query = "UPDATE ilustrator SET Email = '$email', username = '$username' WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    if ($result) {

        header("Location: halamanA.php#ILUSTRATOR");
        exit();
    } else {
        echo "Error dalam mengedit data: " . mysqli_error($koneksi);
    }
}
?>