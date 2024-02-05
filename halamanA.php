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
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/log.png" alt="..." /></span>
            </a>
            

            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php" onclick="return confirm('Yakin ingin logout?')">Logout</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#DATA">DATA PESANAN</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#ILUSTRATOR">ILUSTRATOR</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#TRANSAKSI">DATA TRANSAKSI</a></li>
                
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
                        <span style="color: brown";class="text-primary">GAMBAR</span>
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
            <hr class="m-0" />
            <!-- DATA PESANAN-->
            <section class="resume-section" id="DATA">
                <div class="resume-section-content">
                <form method="get" action="halamanA.php#DATA">
    <label for="cari">Cari Data:</label>
    <input type="text" name="cari" id="cari" placeholder="Masukkan kata kunci...">
    <button type="submit">Cari</button>
</form>
                    <h2 class="mb-5">PESANAN</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">


        <a href="cetak.php" target="_BLANK">CETAK</a>
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
                    <td>
                    <form method="post" action="edit_data.php">
        <input type="hidden" name="id" value="<?php echo $hasil['id']; ?>">
        <button type="submit" name="edit" class="btn btn-primary">EDIT</button>
    </form>
               <form method="post" action="hapus_data.php" onsubmit="return confirm('Anda yakin ingin menghapus data ini?');">
        <input type="hidden" name="id" value="<?php echo $hasil['id']; ?>">
        <button type="submit" name="hapus" class="btn btn-primary">DELETE</button>
    </form>
                </td>
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
            
            <!-- ILUSTRATOR -->
            <section class="resume-section" id="ILUSTRATOR">
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                        <h2 class="mb-5"> ILUSTRATOR & DESAINER</h2>

        <a href="tambah_data2.php" class="btn btn-primary">Tambah Data</a>



        
        <table class="table table-striped">

            <tr>
            <th>id</th>
            <th>username</th>
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
                    <form method="post" action="edit_data2.php">
        <input type="hidden" name="id" value="<?php echo $hasil['id']; ?>">
        <button type="submit" name="edit2" class="btn btn-primary">EDIT</button>
    </form>
                    <form method="post" action="hapus_data2.php">
        <input type="hidden" name="id" value="<?php echo $hasil['id']; ?>">
        <button type="submit" name="hapus" class="btn btn-primary">DELETE</button>
    </form>
                </td>
            </tr>
            <?php
                }

    
                

    ?>
            </table>
                </div>
            </section>
            <hr class="m-0" />


 <section class="resume-section" id="TRANSAKSI">
 <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
 <div class="flex-grow-1">

<form method="get" action="halamanA.php#TRANSAKSI">
<label for="filter_tanggal">Tanggal:</label>
<input type="date" name="filter_tanggal" id="filter_tanggal">

<label for="filter_email">Email:</label>
<input type="text" name="filter_email" id="filter_email">

<label for="filter_status">Status:</label>
<select name="filter_status" id="filter_status">
        <option value="">Semua</option>
        <option value="Berhasil">Berhasil</option>
        <option value="Dibatalkan">Dibatalkan</option>
</select>
<label for="sort_by">Urutkan berdasarkan:</label>
    <select name="sort_by" id="sort_by">
        <option value="id">ID Transaksi</option>
        <option value="tanggal">Tanggal Transaksi</option>
        <option value="status">Status</option>
        <option value="Email">Email</option>
    </select>

    <label for="sort_order">Urutan:</label>
    <select name="sort_order" id="sort_order">
        <option value="ASC">UP</option>
        <option value="DESC">DOWN</option>
    </select>
<button type="submit">Filter</button>
            </form>
 


            <h2 class="mb-5"> DATA TRANSAKSI</h2>

            <a href="tambah_data3.php" class="btn btn-primary">Tambah Data</a>
            <div><br>
                <a href="cetak2.php" class="btn btn-primary">PRINT DATA</a>
            </div><br>

            <?php
            include "koneksi.php";

            // Inisialisasi filter
            $filter_tanggal = isset($_GET['filter_tanggal']) ? $_GET['filter_tanggal'] : "";
            $filter_email = isset($_GET['filter_email']) ? $_GET['filter_email'] : "";
            $filter_status = isset($_GET['filter_status']) ? $_GET['filter_status'] : "";

            // Membuat query berdasarkan filter
            $query = "SELECT * FROM transaksi WHERE 1";

            if (!empty($filter_tanggal)) {
                $query .= " AND tanggal = '$filter_tanggal'";
            }

            if (!empty($filter_email)) {
                $query .= " AND Email LIKE '%$filter_email%'";
            }

            if (!empty($filter_status)) {
                $query .= " AND status = '$filter_status'";
            }

            $result = mysqli_query($koneksi, $query);

            

            if (!$result) {
                die("Query error: " . mysqli_error($koneksi));
            }

            $sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : 'id';
            $sort_order = isset($_GET['sort_order']) ? $_GET['sort_order'] : 'ASC';

            $query .= " ORDER BY $sort_by $sort_order";

            $result = mysqli_query($koneksi, $query);

           if (!$result) {
           die("Query error: " . mysqli_error($koneksi));
        }

            // Menampilkan hasil filtering
            if (mysqli_num_rows($result) > 0) {
                ?>
                <table class="table table-striped">
                    <tr>
                        <th>id transaksi</th>
                        <th>tanggal transaksi</th>
                        <th>status</th>
                        <th>Email</th>
                    </tr>
                    <?php
                    while ($hasil = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $hasil['id']; ?></td>
                            <td><?php echo $hasil['tanggal']; ?></td>
                            <td><?php echo $hasil['status']; ?></td>
                            <td><?php echo $hasil['Email']; ?></td>
                            <td>
                                <form method="post" action="edit_data3.php">
                                    <input type="hidden" name="id" value="<?php echo $hasil['id']; ?>">
                                    <button type="submit" name="edit3" class="btn btn-primary">EDIT</button>
                                </form><br>
                                <form method="post" action="hapus_data3.php" onsubmit="return confirm('Anda yakin ingin menghapus data ini?')";>
                                    <input type="hidden" name="id" value="<?php echo $hasil['id']; ?>">
                                    <button type="submit" name="hapus" class="btn btn-primary">DELETE</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <?php
            } else {
                echo "Tidak ada data yang sesuai dengan filter.";
            }

            
            ?>


        </div>
    </div>
</section>
            <hr class="m-0" />
            

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script>
    function printTable() {
        var printContents = document.getElementById('').outerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
    </body>
</html>
