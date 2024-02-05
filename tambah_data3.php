<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DATA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
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

        h3 {
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

    </style>
<body>
<form action="user_act3.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label style="color:white;">Tanggal:</label>
        <input type="date" class="form-control" placeholder="Masukkan Nama" name="tanggal" required="required">
    </div>
 <div class="form-group">
    <label style="color:white;">Status :</label>
    <select class="form-control" name="status" required="required">
        <option value="Berhasil">Berhasil</option>
        <option value="Dibatalkan">Dibatalkan</option>
    </select>
</div>
    <div class="form-group">
        <label style="color:white;">Email :</label>
        <input type="text" class="form-control" placeholder="Masukkan Email" name="email" required="required">
    </div>
    <input type="submit" value="TAMBAH DATA!" class="btn btn-primary">
</form>


</body>
</html>