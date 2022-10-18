<?php
session_start();
include 'koneksi.php';
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
    <title>E-Learning</title>
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
    <img src="logo.png" alt="Logo">
</div>
</body>
</html>