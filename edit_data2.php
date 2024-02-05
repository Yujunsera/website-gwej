<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style>
        body {
            background-image: url('assets/img/back2.jpg'); /* Ganti URL_GAMBAR dengan URL gambar yang Anda inginkan */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8); /* Transparansi latar belakang formulir */
            padding: 20px;
            border-radius: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px; /* Lebar maksimum formulir */
            width: 100%;
        }

        h4 {
            text-align: center;
            color: blue; /* Warna teks judul */
            opacity: 0.8; /* Opasitas judul */
        }

        input[type="text"],
        input[type="number"],
        input[type="deskripsi"]
        {
            width: 500px;
            margin-bottom: 10px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #007bff; /* Warna latar tombol Submit */
            color: blue; /* Warna teks tombol Submit */
            cursor: pointer;
        }

        input[type="text"] {
        width: 500px;
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box; /* Pastikan padding dan border tidak menambah lebar input */
    }

    /* Ubah style label agar lebih menonjol */
    label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }
    </style>


<body>

<?php
include "koneksi.php";



if (isset($_POST['edit2'])) {
    $id = $_POST['id'];

    
    $query = "SELECT * FROM ilustrator WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        
        ?>
        <form method="post" action="proses_edit2.php">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <label for="username">Username:</label>
    <input type="text" name="username" value="<?php echo $data['username']; ?>"><br>
    <label for="email">Email:</label>
    <input type="text" name="email" value="<?php echo $data['Email']; ?>"><br>
    <button type="submit" name="submit_edit2">Simpan Perubahan</button>
</form>
        <?php
    } else {
        echo "Data tidak ditemukan.";
    }
}
?>



</body>
</head>





<?php
include "koneksi.php";



