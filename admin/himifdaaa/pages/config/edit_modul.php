<?php
error_reporting(0);
include 'koneksi.php';
// menyimpan data kedalam variabel
$id = $_POST['id']; // Ambil data nis dan masukkan ke variabel nis
$Semester = $_POST['Semester']; // Ambil data nama dan masukkan ke variabel nama
$Mata_Kuliah = $_POST['Mata_Kuliah'];
$Judul_Materi = $_POST['Judul_Materi'];	



// query SQL untuk insert data

$edit = mysqli_query($connect,"UPDATE modul SET id='$id', Semester='$Semester', Mata_Kuliah='$Mata_Kuliah', Judul_Materi='$Judul_Materi' WHERE id='$id'");

echo "Data telah berhasil diedit.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=data_modul">';			


?>

                     