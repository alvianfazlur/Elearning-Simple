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
    <link rel="stylesheet" href="admin.css">
    <title>Form Insert Data</title>
</head>
<body>
       <!-- Image and text -->
<nav class="navbar navbar-light bg-primary">
  <a class="navbar-brand">
    <img src="avatar.png" width="50" height="50" class="d-inline-block align-top">
    <p>Selamat Datang, <b><?php echo $_SESSION['username'];?>
  </a>
</nav>
<!-- Side navigation -->
<div class="sidenav">
<a href="admin.php">Home</a>
  <a href="adminmahasiswa.php">Daftar Mahasiswa</a>
  <a href="admindosen.php">Daftar Dosen</a>
  <a href="form.php">Pendaftaran Mahasiswa Baru</a>
  <a href="formdosen.php">Pendaftaran Dosen</a>
  <a href="./admin/akunbaru.php">Buat Akun</a>
  <a href="logout.php">Logout</a>
</div>
<!-- Page content -->
<div class="main">
<div class="container">
        <h1 class="text-center">Formulir Data Mahasiswa</h1>
    <div class="card">
    <div class="card-header bg-primary">
        
    </div>
    <div class="card-body">
       <form action="simpandb.php" method="post">
           <div class="form-group">
                <label for="text">Masukkan NRP : </label>
                <input type="text" name = "nrp" placeholder = "Masukkan NRP" class="form-control" required>
           </div>
           <div class="form-group">
                <label for="text">Masukkan Nama : </label>
                <input type="text" name = "nama"  placeholder = "Masukkan Nama" class="form-control" required>
           </div>
           <div class="form-group">
                <label for="text">Jenis Kelamin : </label>
                <input type="radio" name = "jk" required value=Laki-Laki > L <input type="radio" name = "jk" required value=Perempuan > P<br>
           </div>
            <br><button type="submit" class="btn btn-success" name="simpan">Simpan</button>
       </form>
    </div>
    </div>
</div>
</div>
</body>
</html>
