<?php
	
include '../config/koneksi.php';


$email=$_POST['email'];
$kritik=$_POST['kritik'];
$saran=$_POST['saran'];






$input="INSERT INTO kritiksaran(id,email,kritik,saran)values('','$email','$kritik','$saran')";
$data=mysqli_query($konek,$input) or die (mysqli_error($konek));

if($data){

	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "0; URL=../index.php">'; 
}

?>


