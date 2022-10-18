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
    <link rel="stylesheet" href="mahasiswa.css">
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
                <div class="timetable-img text-center">
                    <img src="img/content/timetable.png" alt="">
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr class="bg-light-gray">
                                <th class="text-uppercase">Monday</th>
                                <th class="text-uppercase">Tuesday</th>
                                <th class="text-uppercase">Wednesday</th>
                                <th class="text-uppercase">Thursday</th>
                                <th class="text-uppercase">Friday</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="bg-light padding-15px-lr border-radius-5 margin-10px-bottom text-black font-size16 xs-font-size13">Matematika 2</span>
                                    <div class="margin-10px-top font-size14">08:00-09:40</div>
                                    <div class="font-size13 text-light-gray">Rosiyah Faradisa</div>
                                </td>
                                <td>
                                    <span class="bg-light padding-15px-lr border-radius-5 margin-10px-bottom text-black font-size16 xs-font-size13">Pemrograman Web</span>
                                    <div class="margin-10px-top font-size14">08:00-09:40</div>
                                    <div class="font-size13 text-light-gray">Mu'arifin</div>
                                </td>

                                <td>
                                    <span class="bg-light padding-15px-lr border-radius-5 margin-10px-bottom text-black font-size16 xs-font-size13">Basis Data</span>
                                    <div class="margin-10px-top font-size14">08:00-09:40</div>
                                    <div class="font-size13 text-light-gray">Wiratmoko Yuwono</div>
                                </td>
                                <td>
                                    <span class="bg-light padding-15px-lr border-radius-5 margin-10px-bottom text-black font-size16 xs-font-size13">Praktikum Algoritma dan Struktur Data</span>
                                    <div class="margin-10px-top font-size14">08:00-10:30</div>
                                    <div class="font-size13 text-light-gray">Tita Karlita</div>
                                </td>
                                <td>
                                    <span class="bg-light padding-15px-lr border-radius-5 margin-10px-bottom text-black font-size16 xs-font-size13">Praktikum Algoritma dan Struktur Data</span>
                                    <div class="margin-10px-top font-size14">08:00-10:30</div>
                                    <div class="font-size13 text-light-gray">Tita Karlita</div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <span class="bg-light padding-15px-lr border-radius-5 margin-10px-bottom text-black font-size16 xs-font-size13">Sistem Operasi</span>
                                    <div class="margin-10px-top font-size14">14:40-16:20</div>
                                    <div class="font-size13 text-light-gray">Isbat Uzzin Nadhori</div>
                                </td>
                                <td class="bg-light-gray">
                                <span class="bg-light padding-15px-lr border-radius-5 margin-10px-bottom text-black font-size16 xs-font-size13">Algoritma dan Struktur Data</span>
                                    <div class="margin-10px-top font-size14">09:40-11:20</div>
                                    <div class="font-size13 text-light-gray">Tita Karlita</div>
                                </td>
                                </td>
                                <td>
                                <span class="bg-light padding-15px-lr border-radius-5 margin-10px-bottom text-black font-size16 xs-font-size13">Agama</span>
                                    <div class="margin-10px-top font-size14">10:30-12:10</div>
                                    <div class="font-size13 text-light-gray">Imamul Arifin</div>
                                </td>
                                </td>
                                <td>
                                    <span class="bg-light padding-15px-lr border-radius-5 margin-10px-bottom text-black font-size16 xs-font-size13">Praktikum Sistem Operasi</span>
                                    <div class="margin-10px-top font-size14">10:30-13:00</div>
                                    <div class="font-size13 text-light-gray">Isbat Uzzin Nadhori</div>
                                </td>
                                <td>
                                    <div class="margin-10px-top font-size14"></div>
                                    <div class="font-size13 text-light-gray"></div>
                                </td>
                                <td class="bg-light-gray">
                            </tr>

                            <tr>
                                <td>
                                    <div class="margin-10px-top font-size14"></div>
                                </td>
                                <td>
                                <span class="bg-light padding-15px-lr border-radius-5 margin-10px-bottom text-black font-size16 xs-font-size13">Praktikum Sistem Operasi</span>
                                    <div class="margin-10px-top font-size14">13:50-16:20</div>
                                    <div class="font-size13 text-light-gray">Isbat Uzzin Nadhori</div>
                                </td>
                                <td>
                                <span class="bg-light padding-15px-lr border-radius-5 margin-10px-bottom text-black font-size16 xs-font-size13">Praktikum Pemrograman Web</span>
                                    <div class="margin-10px-top font-size14">14:40-17:10</div>
                                    <div class="font-size13 text-light-gray">Mu'arifin</div>
                                </td>
                                <td>
                                <span class="bg-light padding-15px-lr border-radius-5 margin-10px-bottom text-black font-size16 xs-font-size13">Praktikum Basis Data</span>
                                    <div class="margin-10px-top font-size14">13:50-16:20</div>
                                    <div class="font-size13 text-light-gray">Wiratmoko Yuwono</div>
                                <td>
                                    <div class="margin-10px-top font-size14"></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
</div>
</body>
</html>