<?php
 // error_reporting();


// Include / load file koneksi.php
include "koneksi.php";

// Ambil data yang dikirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$nama_panggilan = $_POST['nama_panggilan'];
$angkatan = $_POST['angkatan'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$jabatan = $_POST['jabatan'];



 $querydaily		= "INSERT INTO anggota_resmi(id,nim,nama,nama_panggilan,angkatan,jk,alamat,no_hp,email,tempat_lahir,tgl_lahir,agama,jabatan) VALUES ('','$nim','$nama','$nama_panggilan','$angkatan','$jk','$alamat','$no_hp','$email','$tempat_lahir','$tgl_lahir','$agama','$jabatan')";
 $simpandaily		= mysqli_query($connect,$querydaily)or die(mysqli_error($connect));


echo "Data telah berhasil disimpan.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=data_anggota">';

?>

