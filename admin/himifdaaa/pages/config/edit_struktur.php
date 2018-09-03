<?php
error_reporting(0);
include 'koneksi.php';
// menyimpan data kedalam variabel
$id = $_POST['id']; // Ambil data nis dan masukkan ke variabel nis
$nama_file = $_POST['nama_file']; // Ambil data nama dan masukkan ke variabel nama
$deskripsi = $_POST['deskripsi'];
$tgl_upload = $_POST['tgl_upload'];


	
	

// query SQL untuk insert data

$edit = mysqli_query($connect,"UPDATE struktural SET id='$id', deskripsi='$deskripsi', tgl_upload='$tgl_upload' WHERE id='$id'");

echo "Data telah berhasil diedit.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=data_struktur">';			

?>

                     