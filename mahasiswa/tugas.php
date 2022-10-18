<?php
error_reporting(0);
session_start();
include '../koneksi.php';
if($_SESSION['level'] !="mahasiswa"){
    header("location:index.php?pesan=nologin");
}
if(isset($_GET['hal'])){
    if($_GET['hal']== "download"){
        $id = $_GET['id'];
        $dir='Tugas/';
        $filename=$_GET['nama'];
        $file_path=$dir.$filename;
        $query = "SELECT name, type, size, content FROM upload WHERE id_tugasM = '$id'";
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
    <link rel="stylesheet" href="tugas.css">
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
<?php
                    $sql = "SELECT * FROM upload";
                    $tampil = mysqli_query($conn,$sql);
                    while($data = mysqli_fetch_array($tampil)) {
?>
<div class="main">
<section>
    <div class="container">
        <div class="row mt-60">
            <div class="col-lg-4 col-md-6 margin-30px-bottom xs-margin-20px-bottom">
                <div class="service-block4 h-100">
                    <div class="service-icon">
                        <i class="icon-tools"></i>
                    </div>
                    <div class="service-desc">
                        <tr>
                            <td><input type="hidden" name="id" value="<?=$data['id_tugasM']?>" readonly></td>
                            <p> <td><?=$data["judul"]?></td></p>
                            <td><?=$data["deskripsi"]?></td>
                            <td><a href="tugas.php?hal=download&id=<?=$data['id_tugasM']?>&nama=<?=$data['name']?>" class="btn btn-light">Download</a></td>
                            <td><a href="uploadtugas.php?hal=upload&id=<?=$data['id_tugasM']?>" class="btn btn-light">Upload Tugas</a></td>
                            <td><a href="lihatnilai.php?hal=lihat&id=<?=$_SESSION['username']?>&idt=<?=$data['id_tugasM']?>" class="btn btn-light"> Lihat Nilai </a></td>
                        </tr>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <?php }; ?>
</section>
</div>
</body>
</html>