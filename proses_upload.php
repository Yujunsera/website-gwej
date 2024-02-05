<?php
include "koneksi.php";

if(isset($_FILES["proses"]) && isset($_POST['id']) && isset($_POST['nama']) && isset($_POST['jenis'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];

    $targetDir = "upload/";
    $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]); // Path file yang diunggah
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));


    if ($uploadOk == 0) {
        echo "Maaf, file tidak diunggah.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            $query = "INSERT INTO sample (id, image, nama, jenis) VALUES ('$id', '$targetFile', '$nama', '$jenis')";
            if(mysqli_query($koneksi, $query)) {
                echo "Data berhasil ditambahkan.";

                header("Location: index.php");
                exit();
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
            }
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file.";
        }
    }
}

mysqli_close($koneksi);
?>