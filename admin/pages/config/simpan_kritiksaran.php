<?php
 error_reporting(0);
// include 'konek.php';


// Include / load file koneksi.php
include "koneksi.php";

// Ambil data yang dikirim dari form
$id = $_POST['id'];
$email = $_POST['email'];

$kritik = $_POST['kritik'];
$saran = $_POST['saran'];




 $querydaily		= "INSERT INTO kritiksaran VALUES ('id','$email','$kritik','$saran')";
 $simpandaily		= mysqli_query($connect,$querydaily)or die(mysqli_error($connect));


echo "Data telah berhasil disimpan.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=input_kritiksaran">';

?>

