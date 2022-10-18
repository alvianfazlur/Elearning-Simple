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
        <div class="card-body">
        <h1>Upload Tugas</h1>
        <div class="card-body">
            <form action="../simpandb.php" method="post">
            <div class="form-group">
                <label for="text">Masukkan Tanggal (DD-MM-YYYY) : </label>
                <input type="text" name = "tanggal" placeholder = "Tanggal" class="form-control" required>
           </div>
           <div class="form-group">
                <label for="text">Isi Pengumuman : </label>
                <input type="text" name = "isi"  placeholder = "Deskripsi Tugas" class="form-control" required>
           </div><br>
            <button type="submit" class="btn btn-success" name="simpan4">Simpan</button>
            </form>
            <br>
        </div>
        </div>
    </div>
</div>
</body>
</html>