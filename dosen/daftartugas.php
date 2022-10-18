<?php
include '../koneksi.php';
session_start();
if($_SESSION['level'] !="dosen"){
    header("location:index.php?pesan=nologin");
}
if(isset($_GET['hal'])){
    if($_GET['hal']== "download"){
        $id = $_GET['id'];
        $dir='Tugas/';
        $filename=$_GET['nama'];
        $file_path=$dir.$filename;
        $query = "SELECT name, type, size, content FROM tugasmahasiswa WHERE id_tugas = '$id'";
        $ctype = "application/octet-stream";
        $result = mysqli_query($conn, $query);
        list($name, $type, $size, $content) = mysqli_fetch_array($result);
        header("Pragma:public");
        header("Expired:0");
        header("Cache-Control:must-revalidate");
        header("Content-Control:public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=\"".basename($file_path)."\"");
        header("Content-Transfer-Encoding:binary");
        header("Content-Length:".filesize($file_path));
        header("Content-type: $ctype");
        flush();
        readfile($file_path);
        echo $content;
        exit;
    }
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
    <h1 class="text-center">Data Tugas Mahasiswa</h1>
    <div class="card">
        <div class="card-header bg-success">
       
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Download</th>
                    <th>Nilai</th>
                </tr>
                <?php
                    $no = 1;
                    $sql = "SELECT * FROM tugasmahasiswa";
                    $tampil = mysqli_query($conn,$sql);
                    while($data = mysqli_fetch_array($tampil)) {
                ?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$data["name"]?></td>
                            <td><a href="daftartugas.php?hal=download&id=<?=$data['id_tugas']?>&nama=<?=$data['name']?>">Download</a></td>
                            <td><a href="formnilai.php?hal=beri&id=<?=$data['id_tugas']?>&kode=<?=$data['size']?>" class="btn btn-success"> Beri Nilai </a></td>
                        </tr>
                    <?php }; ?>
            </table>
        </div>
    </div>
    </div>
</div>
</body>
</html>