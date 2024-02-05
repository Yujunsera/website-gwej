<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DATA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<form action="masukan_gambar.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Pilih gambar:</label>
        <input type="file" name="foto" required="required">
    </div>
    <div class="form-group">
        <label>Nama:</label>
        <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="required">
    </div>
    <input type="submit" class="btn btn-primary">
</form>
 
</body>
</html>