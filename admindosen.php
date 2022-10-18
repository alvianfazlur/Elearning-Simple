<?php
    include 'koneksi.php';
    
    session_start();
    if($_SESSION['level'] !="admin"){
        header("location:index.php?pesan=nologin");
    }
    if(isset($_GET['hal'])){
        if($_GET['hal']== "hapus"){
           $hapus = mysqli_query($conn, "DELETE FROM dosen WHERE id_dosen='$_GET[id]'");
           if($hapus){
            echo "<script>
                alert('Data Dihapus');
                document.location='admindosen.php';
            </script>"; 
           }
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
    <link rel="stylesheet" href="admin.css">
    <title>E-Learning</title>
</head>
<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-primary">
  <a class="navbar-brand">
    <img src="avatar.png" width="50" height="50" class="d-inline-block align-top">
    <p class=>Selamat Datang, <b><?php echo $_SESSION['username'];?>
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
        <h1 class="text-center">Data Dosen</h1>
    <div class="card">
        <div class="card-header bg-success">
       
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No.</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Bidang</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
                <?php
                    $no = 1;
                    $sql = "SELECT * FROM dosen order by NIP asc";
                    $tampil = mysqli_query($conn,$sql);
                    while($data = mysqli_fetch_array($tampil)) {
                ?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$data["NIP"]?></td>
                            <td><?=$data["Nama"]?></td>
                            <td><?=$data["Bidang"]?></td>
                            <td><?=$data["JenisKelamin"]?></td>
                            <td>
                                <a href="formeditdosen.php?hal=edit1&id=<?=$data['id_dosen']?>" class="btn btn-warning"> Edit </a>
                                <a href="admindosen.php?hal=hapus&id=<?=$data['id_dosen']?>" onclick="return confirm('Yakin Melakukan Hapus Data?')" class="btn btn-danger"> Hapus </a>
                            </td>
                        </tr>
                    <?php }; ?>
            </table>
        </div>
    </div>
</div>
</div>
</body>
</html>