 <?php

    error_reporting(0);

    include '../config/koneksi.php';

    $id = $_GET['id'];

    $edit    = "SELECT * FROM kegiatan WHERE id = '$id'";
    $hasil   = mysqli_query($konek, $edit)or die(mysql_error());
    $data    = mysqli_fetch_array($hasil);

?>
 
<div class="jumbotron" style="background-color: #ccd9ff;">
<h3><center><img src="../images/4.png" width="100px" height="100px">
  <br>EVENTS OF INFORMATICS ENGINEERING <br> DARMA PERSADA UNIVERSITY </h3></center>
 </div>

 <div class="container" >
    <div class="col-md-12" style="min-height:500px">
    <div class="thumbnail">
        <div class="caption">
            <h2 align="center"><b>" <?php echo $data['nama_kegiatan']; ?> "</b></h2>
            <hr>
            <p align="center"><img src="../admin/himifdaaa/pages/files/<?php echo $data['gambar']; ?>"  class="img-rounded" alt="Cinque Terre"></p>
            <br>
            <p align="justify"><i><?php echo $data['deskripsi']; ?></i></p>
            <p align="justify"><b><i><?php echo $data['kegiatan']; ?></i></b></p>
        </div>
    </div>
</div>
</div>
</div>
</div>
 
</div>