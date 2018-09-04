<?php

	include 'koneksi.php';

	$id = $_GET ['id'];

	$hapus 	 = "DELETE FROM kritiksaran WHERE id='$id'";
	$query	 = mysqli_query($connect, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../index.php?halaman=data_kritiksaran'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Gagal Diubah!\");
	    			history.back(-1);
	    		</script>";
	    }	

?>