<?php
include "koneksi.php";

if (isset($_POST['hapus'])) {
    $id = $_POST['id'];

    
    $query = "DELETE FROM jasailustrasi WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
      
        header("Location: halamanA.php#DATA");
        exit();
    } else {
        echo "Error dalam menghapus data.";
    }
}
?>