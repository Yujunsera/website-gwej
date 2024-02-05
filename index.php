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
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">COMISSION ART SERVICE</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/ico.jpg" alt="..." /></span>
            </a>
            

            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">ADMIN</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ABOUT">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#DATA">DATA PESANAN</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#GALERY">GALERY</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ILUSTRATOR">ILUSTRATOR</a></li>
                    
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- ABOUT -->
            <section class="resume-section" id="ABOUT">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        JASA
                        <span style="color: aliceblue";class="text-primary">GAMBAR</span>
                    </h1>
                    <div class="subheading mb-5">
                        COMISSION ART SERVICE ·
                        <a style="color:antiquewhite";href="mailto:envywraith653@email.com">envywraith653@email.com</a>
                    </div>
                    <p class="lead mb-5"> menyediakan layanan jasa menggambar<div class="social-icons">
                        <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />

            <!-- DATA SAMPLE-->
            <section class="resume-section" id="DATA">
                <div class="resume-section-content">

                <form class="d-flex" method="get" action="#DATA">
                    <input class="form-control me-2" type="search" placeholder="Search" name="cari" aria-label="cari">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>

                    <h2 class="mb-5">PESANAN</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">


        
        <table class="table table-striped">

        <?php
include "koneksi.php";

if (isset($_GET['cari'])) {
    $pencarian = $_GET['cari'];
    $query = "SELECT * FROM jasailustrasi WHERE id LIKE '%$pencarian%' OR nama LIKE '%$pencarian%' OR Email LIKE '%$pencarian%' OR Jenis LIKE '%$pencarian%' OR deskripsi LIKE '%$pencarian%'";
} else {
    $query = "SELECT * FROM jasailustrasi";
}

// Eksekusi query
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query error: " . mysqli_error($koneksi));
}

?>

            <tr>
            <th>id</th>
            <th>deskripsi</th>
            <th>nama</th>
            <th>jenis</th>
            <th>email</th>
    
            </tr>

            <?php
    while ($hasil = mysqli_fetch_assoc($result)) {
    ?>

            

                <tr>
                    <td><?php echo $hasil['id']; ?></td>
                    <td><?php echo $hasil['deskripsi']; ?></td>
                    <td><?php echo $hasil['Nama']; ?></td>
                    <td><?php echo $hasil['Jenis']; ?></td>
                    <td><?php echo $hasil['Email']; ?></td>
            </tr>
            <?php
                }

    
                

    ?>
            </table>

                        </div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- GALERY -->
            
            <section class="resume-section" id="GALERY">

            
                <div class="resume-section-content">
                <img src="assets/img/sam2.jpg" alt="Sample Illustration" style="width: 25%; height: auto;">
                <img src="assets/img/sam3.jpg" alt="Sample Illustration" style="width: 25%; height: auto;">
                <img src="assets/img/sam4.png" alt="Sample Illustration" style="width: 25%; height: auto;">
            <div>
            <img src="assets/img/sam5.jpg" alt="Sample Illustration" style="width: 25%; height: auto; margin-top: 10px;">
            <img src="assets/img/log.png" alt="Sample Illustration" style="width: 25%; height: auto; margin-top: 10px;">
            <img src="assets/img/sam6.jpg" alt="Sample Illustration" style="width: 25%; height: auto; margin-top: 10px;">
                
            </div>  
                <div>
                <a href="tambah_data.php" class="btn btn-primary" style="margin-top: 10px;">PESAN SEKARANG</a>
                </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- ILUSTRATOR -->
            <section class="resume-section" id="ILUSTRATOR">
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">

                        <h2 class="mb-5"> ILUSTRATOR & DESAINER</h2>

        

        
        <table class="table table-striped">

            <tr>
            <th>id</th>
            <th>nama</th>
            <th>email</th>
            </tr>

            <?php 
            include"koneksi.php";

            $no =1;
            $data= mysqli_query($koneksi,"SELECT * FROM ilustrator");
            while ($hasil= mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $hasil['id']; ?></td>
                    <td><?php echo $hasil['username']; ?></td>
                    <td><?php echo $hasil['Email']; ?></td>
                    <td>
                </td>
            </tr>
            <?php
                }

    
                

    ?>
            </table>
                </div>
            </section>
            <hr class="m-0" />
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
