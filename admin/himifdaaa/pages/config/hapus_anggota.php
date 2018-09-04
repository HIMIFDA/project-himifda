<?php

	include 'koneksi.php';

	$id = $_GET ['id'];

	$hapus 	 = "DELETE FROM anggota_resmi WHERE id='$id'";
	$query	 = mysqli_query($connect, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../index.php?halaman=data_anggota'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }	

?>