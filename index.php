<?php
if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo "<script>
                alert('Username / Password Salah');
                document.location='index.php';
            </script>";
    }
    else if($_GET['pesan'] == "nologin"){
        echo "<script>
                alert('Silahkan Login Kembali');
                document.location='index.php';
            </script>";
    }
    else if($_GET['pesan'] == "logout"){
        echo "<script>
                alert('Logout Berhasil');
                document.location='index.php';
            </script>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="kotak_login">
		<p class="tulisan_login">Selamat Datang di E-Learning</p>
        <img src="mortarboard.png">
 
		<form action="ceklogin.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		</form>
		
	</div>
</body>
</html>