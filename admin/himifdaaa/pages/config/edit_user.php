<?php
error_reporting(0);
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_user = $_POST['id_user']; // Ambil data nis dan masukkan ke variabel nis
$nama = $_POST['nama']; // Ambil data nama dan masukkan ke variabel nama
$username = $_POST['username']; 
$password = md5($_POST['password']);


$edit = mysqli_query($connect,"UPDATE user SET id_user='$id_user', nama='$nama', username='$username', password='$password' WHERE id_user='$id_user'");

echo "Data telah berhasil diedit.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=manajemen_user">';			


?>

                     