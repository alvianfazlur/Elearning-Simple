<?php
    include '../koneksi.php';
    session_start();
    if($_SESSION['level'] !="dosen"){
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
    <link rel="stylesheet" href="../admin.css">
    <title>E-Learning</title>
</head>
<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-primary">
  <a class="navbar-brand">
    <img src="../avatar.png" width="50" height="50" class="d-inline-block align-top">
    <p>Selamat Datang, <b><?php echo $_SESSION['username'];?>
  </a>
</nav>
<!-- Side navigation -->
<div class="sidenav">
    <a href="../dosen.php">Home</a>
    <a href="../dosen/daftarmahasiswa.php">Daftar Mahasiswa</a>
    <a href="../dosen/tugas.php">Tugas Mahasiswa</a>
    <a href="../dosen/pengumuman.php">Pengumuman</a>
    <a href="../logout.php">Logout</a>
</div>
<!-- Page content -->
<div class="main">
<div class="container">
        <center>
        <div class="card-body">
        <h1>Upload Tugas</h1>
        <div class="card-body">
            <form action="../simpandb.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="text">Masukkan Judul : </label>
                <input type="text" name = "judul" placeholder = "Judul Tugas" class="form-control" required>
           </div>
           <div class="form-group">
                <label for="text">Deskripsi Tugas : </label>
                <input type="text" name = "deskripsi"  placeholder = "Deskripsi Tugas" class="form-control" required>
           </div>
                <input type="file" name="file">
            <button type="submit" class="btn btn-success" name="simpan2">Simpan</button>
            </form>
            <br>
        </div>
        </div>
        <a href="daftartugas.php">Beri Nilai tugas</a>
        </center>
    </div>
</div>
</body>
</html>