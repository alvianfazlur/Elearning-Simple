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
    <title>Document</title>
</head>
<body>
    <!-- Page content -->
    <?php
                    $no = $_GET['id'];
                    $sql = "SELECT * FROM upload WHERE id_tugasM = $no";
                    $tampil = mysqli_query($conn,$sql);
                    while($data = mysqli_fetch_array($tampil)) {
?>
<div class="main">
<div class="container">
        <center>
        <div class="card-body">
        <h1>Upload Tugas</h1>
        <div class="card-body">
            <form action="../simpandb.php" method="post" enctype="multipart/form-data">     <!-- Diupload ke tabel tugasmahasiswa -->
            <div class="form-group">
                <input type="hidden" name="id" value="<?=$data['id_tugasM']?>" readonly>
           </div>
           <div class="form-group">
                <input type="hidden" name="session" value="<?=$_SESSION['username']?>" readonly>
           </div>
            <div class="form-group">
                <label for="text">Masukkan Nama : </label>
                <input type="text" name = "nama" placeholder = "Nama Mahasiswa" class="form-control" required>
           </div>
                <input type="file" name="file">
            <button type="submit" class="btn btn-success" name="simpan3">Simpan</button>
            <a href="tugas.php">Back</a>
            </form>
            <br>
        </div>
        </div>
        </center>
    </div>
</div>
<?php }; ?>
</body>
</html>