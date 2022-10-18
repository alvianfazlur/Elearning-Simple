<?php
    include 'koneksi.php';
    
    if(isset($_POST['simpan'])){
            $simpan = mysqli_query($conn,"INSERT INTO mahasiswa (NRP,Nama,JenisKelamin)
                                        VALUES ('$_POST[nrp]','$_POST[nama]','$_POST[jk]')
                                        ");
            if($simpan){
                echo "<script>
                    alert('Data Berhasil Dimasukkan');
                    document.location='form.php';
                </script>";
            }
        }
    if(isset($_POST['simpan1'])){
        $simpan = mysqli_query($conn,"INSERT INTO dosen (NIP,Nama,Bidang,JenisKelamin)
                                        VALUES ('$_POST[nrp]','$_POST[nama]','$_POST[bidang]','$_POST[jk]')
                                        ");
         if($simpan){
            echo "<script>
                alert('Data Berhasil Dimasukkan');
                 document.location='formdosen.php';
            </script>";
        }
    }
    if(isset($_POST['simpan2'])){
        $tipe = $_FILES['file']['type'];
        $tmpname = $_FILES['file']['tmp_name'];
        $nama = $_FILES['file']['name'];
        $size =  $_FILES['file']['size'];
        $ekstensi = array('png','jpg','pdf');
        $dirUpload = "Tugas/";

        $result = move_uploaded_file($tmpname, $dirUpload.$nama);
        if(!$result){
                echo "Error Uploading File";
        }
        $simpan = mysqli_query($conn,"INSERT INTO upload (judul,deskripsi,name,size,type)
                                VALUES ('$_POST[judul]','$_POST[deskripsi]','$nama','$size','$tipe');
                                ");
        if($simpan){
            echo "<script>
            alert('Data Berhasil Upload');
            document.location='./dosen/tugas.php';
        </script>"; 
    }
}
if(isset($_POST['simpan3'])){
    $tipe = $_FILES['file']['type'];
    $tmpname = $_FILES['file']['tmp_name'];
    $nama = $_FILES['file']['name'];
    $size =  $_FILES['file']['size'];
    $dirUpload = "Tugas/";

    $result = move_uploaded_file($tmpname, $dirUpload.$nama);
    if(!$result){
            echo "Error Uploading File";
    }
    $simpan = mysqli_query($conn,"INSERT INTO tugasmahasiswa (id_tugas,namaMHS,name,size,type,kode)
                            VALUES ('$_POST[id]','$_POST[nama]','$nama','$size','$tipe','$_POST[session]');
                            ");
    if($simpan){
        echo "<script>
        alert('Data Berhasil Upload');
        document.location='./mahasiswa/tugas.php';
    </script>"; 
}
}
if(isset($_POST['simpan4'])){
    $simpan = mysqli_query($conn,"INSERT INTO pengumuman (tanggal,deskripsi)
                                    VALUES ('$_POST[tanggal]','$_POST[isi]')
                                    ");
     if($simpan){
        echo "<script>
            alert('PEngumuman Berhasil Dibuat');
             document.location='./dosen/pengumuman.php';
        </script>";
    }
}
    if(isset($_POST['edit'])){
        $edit = mysqli_query($conn, "UPDATE mahasiswa SET
                            NRP = '$_POST[nrp]',
                            Nama = '$_POST[nama]',
                            JenisKelamin = '$_POST[jk]'
                            WHERE id_mhs = '$_POST[id]'
                            ");
        if($edit){
            echo "<script>
                alert('Data Berhasil Diedit');
                document.location='adminmahasiswa.php';
            </script>";  
        }
    }
    if(isset($_POST['edit1'])){
        $edit = mysqli_query($conn, "UPDATE dosen SET
                            NIP = '$_POST[nip]',
                            Nama = '$_POST[nama]',
                            Bidang = '$_POST[bidang]',
                            JenisKelamin = '$_POST[jk]'
                            WHERE id_dosen = '$_POST[id]'
                            ");
        if($edit){
            echo "<script>
                alert('Data Berhasil Diedit');
                document.location='admindosen.php';
            </script>";  
        }
    }
    if(isset($_GET['hal'])){
        if($_GET['hal']== "edit"){
            $tampil = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id_mhs='$_GET[id]'") ;
            $data = mysqli_fetch_array($tampil);
            if($data){
                $vNRP = $data['NRP'];
                $vnama = $data['Nama'];
                $vid = $data['id_mhs'];
            }
        }
    }
    if(isset($_GET['hal'])){
        if($_GET['hal']== "edit1"){
            $tampil = mysqli_query($conn, "SELECT * FROM dosen WHERE id_dosen='$_GET[id]'") ;
            $data = mysqli_fetch_array($tampil);
            if($data){
                $vNIP = $data['NIP'];
                $vNama = $data['Nama'];
                $viD = $data['id_dosen'];
                $vbidang = $data['Bidang'];
            }
        }
    }
     if(isset($_POST['daftar'])){
        $simpan = mysqli_query($conn,"INSERT INTO user (nama,username,password,level)
                                    VALUES ('$_POST[nama]','$_POST[username]','$_POST[pw]','$_POST[level]');
                                    ");
        if($simpan){
            echo "<script>
                alert('Berhasil Melakukan Registrasi');
                document.location='./admin/akunbaru.php';
            </script>";
        }
    }
    if(isset($_POST['tambah'])){
        $edit = mysqli_query($conn, "UPDATE tugasmahasiswa SET
                            namaMHS = '$_POST[nama]',
                            name = '$_POST[name]',
                            nilai = '$_POST[nilai]'
                            WHERE id_tugas = '$_POST[id]' AND size = '$_POST[size]'
                            ");
        if($edit){
            echo "<script>
                alert('Data Berhasil Diedit');
                document.location='./dosen/daftartugas.php';
            </script>";  
        }
    }
    if(isset($_GET['hal'])){
        if($_GET['hal']== "beri"){
            $tampil = mysqli_query($conn, "SELECT * FROM tugasmahasiswa WHERE id_tugas='$_GET[id]' AND size='$_GET[kode]'") ;
            $data = mysqli_fetch_array($tampil);
            if($data){
                $vnamafile = $data['name'];
                $vnama = $data['namaMHS'];
                $vid = $data['id_tugas'];
                $vnilai = $data['nilai'];
                $vsize = $data['size'];
            }
        }
    }
    if(isset($_GET['hal'])){
        if($_GET['hal']== "upload"){
            $tampil = mysqli_query($conn, "SELECT * FROM upload WHERE id_tugasM='$_GET[id]'") ;
            $data = mysqli_fetch_array($tampil);
            if($data){
                $vid = $data['id_tugasM'];
            }
        }
    }
    if(isset($_GET['hal'])){
        if($_GET['hal']== "lihat"){
            $tampil = mysqli_query($conn, "SELECT * FROM tugasmahasiswa WHERE id_tugas='$_GET[idt]' AND kode='$_GET[id]'") ;
            $data = mysqli_fetch_array($tampil);
            if($data){
                $vnamafile = $data['name'];
                $vnama = $data['namaMHS'];
                $vid = $data['id_tugas'];
                $vnilai = $data['nilai'];
            }
        }
    }