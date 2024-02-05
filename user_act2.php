<?php
include "koneksi.php";

if(isset($_POST['username'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $id = $_POST['id'];

    $query = "INSERT INTO ilustrator (id, username, Email) 
              VALUES ('$id','$username', '$email')";

    if(mysqli_query($koneksi, $query)) {
        header("Location: halamanA.php#ILUSTRATOR");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>