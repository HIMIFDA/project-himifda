<?php
 error_reporting(0);
// include 'konek.php';


// Include / load file koneksi.php
include "koneksi.php";

// Ambil data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];


$nim = $_POST['nim'];
$semester = $_POST['semester'];


$ipk = $_POST['ipk'];

$ips = $_POST['ips'];

 $querydaily		= "INSERT INTO ipk VALUES ('id','$nama','$nim','$semester','$ipk','$ips')";
 $simpandaily		= mysqli_query($connect,$querydaily)or die(mysqli_error($connect));


echo "Data telah berhasil disimpan.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=data_ip">';

?>

