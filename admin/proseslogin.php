<?php

	include "koneksi.php";

	$username  = $_POST["username"];
	$password  = md5($_POST["password"]);

	$query     ="SELECT * FROM user WHERE username='$username' AND password='$password'";

	$login     = mysqli_query($konek,$query) or die(mysqli_error($konek));
	$jlhrecord = mysqli_num_rows($login);

	$data      = mysqli_fetch_array($login,MYSQLI_BOTH);

	$username  = $data['username'];
	$password  = $data['password'];
	$nama	   = $data['nama'];


if($jlhrecord > 0){

	session_start();
	$_SESSION['id_user']=$id_user;
	$_SESSION['username']=$username;
	$_SESSION['nama']=$nama;

	//redirect level
		header('Location:himifdaaa/index.php');}

else{

	echo "<br><br><br><strong><center><i>Maaf anda gagal login. Mungkin Username atau Password yang anda masukkan salah.<br>Silahkan masukkan Username atau Password dengan benar!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=index.php">';  
}

?>