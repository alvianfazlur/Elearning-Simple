<?php
    session_start();
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($conn,"SELECT * FROM user where username='$username' and password = '$password'");
    $cek = mysqli_num_rows($data);

    if($cek > 0){
        $data = mysqli_fetch_assoc($data);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="dosen"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "dosen";
		// alihkan ke halaman dashboard pegawai
		header("location:dosen.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['level']=="mahasiswa"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "mahasiswa";
		// alihkan ke halaman dashboard pengurus
		header("location:mahasiswa.php");
 
	}else{
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}
else{
	header("location:index.php?pesan=gagal");
}

?>