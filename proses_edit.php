<?php
include "koneksi.php";

if (isset($_POST['submit_edit'])) {
    $id = $_POST['id'];
    $deskripsi = $_POST['deskripsi'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    

    
    $query = "UPDATE jasailustrasi SET deskripsi = '$deskripsi', Nama = '$nama', Jenis = '$jenis' WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    if ($result) {

        header("Location: index.php#DATA");
        exit();
    } else {
        echo "Error dalam mengedit data: " . mysqli_error($koneksi);
    }
}
?>
