<?php
include 'simpandb.php';
session_start();
if($_SESSION['level'] !="admin"){
    header("location:index.php?pesan=nologin");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form Insert Data</title>
</head>
<body>
<div class="container">
        <h1 class="text-center">Formulir Data Mahasiswa</h1>
    <div class="card">
    <div class="card-header bg-primary">
        
    </div>
    <div class="card-body">
       <form action="simpandb.php" method="post">
            <div class="form-group">
                <label for="text">Nomor Id_Mahasiswa</label>
                <input type="text" name = "id" value="<?=@$vid?>"class="form-control" readonly>
           </div>
           <div class="form-group">
                <label for="text">Masukkan NRP : </label>
                <input type="text" name = "nrp" value="<?=@$vNRP?>" placeholder = "Masukkan NRP" class="form-control" required>
           </div>
           <div class="form-group">
                <label for="text">Masukkan Nama : </label>
                <input type="text" name = "nama" value="<?=@$vnama?>" placeholder = "Masukkan Nama" class="form-control" required>
           </div>
           <div class="form-group">
                <label for="text">Jenis Kelamin : </label>
                <input type="radio" name = "jk" required value=Laki-Laki > L <input type="radio" name = "jk" required value=Perempuan > P<br>
           </div>
            <br><button type="submit" class="btn btn-warning" name="edit">Edit</button>
            <a href="admin.php" class="btn btn-warning">Kembali</a>
       </form>
    </div>
    </div>
</div>
</body>
</html>