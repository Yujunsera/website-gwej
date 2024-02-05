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

        h4 {
            text-align: center;
            color: white; /* Warna teks judul */
            opacity: 0.8; /* Opasitas judul */
            style:bold;
        }
        
    </style>
<body>
    <div class="div">
    <h4> Masukan Data </h4>
    
    
<form action="user_act2.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label style="color:white;">Username :</label>
        <input type="text" class="form-control" placeholder="masukan username" name="username" required="required">
    </div>
    <div class="form-group">
        <label style="color:white;">Email :</label>
        <input type="text" class="form-control" placeholder="Masukkan email" name="email" required="required">
    </div>
    <input type="submit" value="Tambah" class="btn btn-primary">
</form>
</div>
</body>
</html>