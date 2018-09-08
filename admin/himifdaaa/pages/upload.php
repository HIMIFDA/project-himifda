 <?php

error_reporting(0);
 session_start();

    if (isset($_SESSION['username']))
        
    {

?>


<html>
<title>Form Upload</title>
<body>
<form enctype="multipart/form-data" method="POST" action="proses.php">
File yang di upload : <input type="file" name="fupload"><br>
Deskripsi File : <br>
<textarea name="deskripsi" rows="8" cols="40"></textarea><br>
<input type=submit value=Upload>
</form>


<?php
}
else
  {
    header("location:../../index.php");
  }
?>