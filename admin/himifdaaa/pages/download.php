
<?php
error_reporting(0);
 session_start();

    if (isset($_SESSION['username']))
        
    {

?>


<html>
<title>Aplikasi Download</title>
<body>
<?php
  $konek = mysqli_connect("localhost","root","","himifda");

  $query = "SELECT * FROM struktural ORDER BY id DESC";
  $hasil = mysqli_query($konek, $query);

  while ($r = mysqli_fetch_array($hasil)){
    echo "Nama File : <b>$r[nama_file]</b> <br>";
    echo "Deskripsi : $r[deskripsi] <br>";
    echo "<a href=\"simpan.php?file=$r[nama_file]\">Download File</a><hr><br>";
  }
?>

<?php
}
else
  {
    header("location:../../index.php");
  }
?>