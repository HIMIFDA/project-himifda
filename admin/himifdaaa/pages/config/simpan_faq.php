<?php
 error_reporting(0);
// include 'konek.php';


// Include / load file koneksi.php
include "koneksi.php";

// Ambil data yang dikirim dari form
$id = $_POST['id'];
$answer = $_POST['answer'];


$question = $_POST['question'];



 $querydaily		= "INSERT INTO faq VALUES ('id','$answer','$question')";
 $simpandaily		= mysqli_query($connect,$querydaily)or die(mysqli_error($connect));


echo "Data telah berhasil disimpan.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=data_faq">';

?>

