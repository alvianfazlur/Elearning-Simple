<?php
session_start();
include '../koneksi.php';
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
  <a href="../mahasiswa.php">Home</a>
  <a href="jadwal.php">Jadwal Kuliah</a>
  <a href="lihatpengumuman.php">Pengumuman</a>
  <a href="tugas.php">Tugas</a>
  <a href="../logout.php">Logout</a>
</div>
<!-- Page content -->
<div class="main">
<div class="container">
        <h1 class="text-center">Pengumuman</h1>
    <div class="card">
        <div class="card-header bg-light">
       
        </div>
        <div class="card-body">
                <?php
                    $no = 1;
                    $sql = "SELECT * FROM pengumuman order by tanggal asc";
                    $tampil = mysqli_query($conn,$sql);
                    while($data = mysqli_fetch_array($tampil)) {
                ?>  
                            <h1><?=$data["tanggal"]?></h1>
                                <p><?=$data["deskripsi"]?></p>
                    <?php }; ?>
        </div>
    </div>
</div>
</div>
</body>
</html>