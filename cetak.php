<?php
session_start();
// Cek jika user belum login atau bukan admin, arahkan ke halaman login
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true || $_SESSION["role"] !== "admin") {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>COMISSION ART</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body style="background-color: white;" id="page-top">
                <div class="resume-section-content">
                    <h2 class="mb-5">PESANAN</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">


        <a href="cetak.php">CETAK</a>
        <table class="table table-striped">

            <tr>
            <th>id</th>
            <th>deskripsi</th>
            <th>nama</th>
            <th>jenis</th>
            
            </tr>

            <?php 
            include"koneksi.php";

            $no =1;
            $data= mysqli_query($koneksi,"SELECT * FROM jasailustrasi");
            while ($hasil= mysqli_fetch_array($data)) {
                ?>


                <tr>
                    <td><?php echo $hasil['id']; ?></td>
                    <td><?php echo $hasil['deskripsi']; ?></td>
                    <td><?php echo $hasil['Nama']; ?></td>
                    <td><?php echo $hasil['Jenis']; ?></td>
                    <td>
                    
            <?php
                }

    
                

    ?>
            </table>

                   <script>
                    window.print();
                   </script>    
    </body>
</html>
