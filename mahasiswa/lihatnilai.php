<?php
session_start();
include '../koneksi.php';
include '../simpandb.php';
if($_SESSION['level'] !="mahasiswa"){
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
    <title>Document</title>
</head>
<body>
<div class="container">
        <h3 class="text-center">Nilai</h3>
    <div class="card">
    <div class="card-header bg-primary">
        
    </div>
    <div class="card-body">
    <form action="../simpandb.php" method="post">
            <div class="form-group">
                <input type="hidden" name = "id" value="<?=@$vid?>"class="form-control" readonly>
           </div>
           <div class="form-group">
                <label for="text">Nama File : </label>
                <input type="text" name = "name" value="<?=@$vnamafile?>"class="form-control" readonly>
           </div>
           <div class="form-group">
                <label for="text">Nama Mahasiswa : </label>
                <input type="text" name = "nama" value="<?=@$vnama?>" class="form-control" readonly>
           </div>
           <div class="form-group">
                <label for="text">Nilai : </label>
                <input type="text" name = "nilai" value="<?=@$vnilai?>"class="form-control" readonly>
           </div>
            <a href="tugas.php">Back</a>
       </form>
    </div>
    </div>
</div>
</body>
</html>