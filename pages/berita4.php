 
 
<div class="jumbotron" style="background-color: #ccd9ff;">
<h3><center><img src="../images/4.png" width="100px" height="100px"><br>BERITA / ARTIKEL HIMPUNAN MAHASISWA INFORMATIKA <br> UNIVERSITAS DARMA PERSADA </center></h3>
 </div>

 <div class="container" >
</div>

<div class="card">
  <div class="card-header" style="background-color: #99bbff; "><b> Berita / Artikel  </b> HIMIFDA </div>
  <div class="card-body">
  
  <?php

            include '../config/koneksi.php';
 $query = mysqli_query($konek, "SELECT id,kode_berita,tgl,judul,foto,deskripsi FROM berita where kode_berita='berita 4'")or die(mysqli_error($konek));

  $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
        
         echo ''.$data['tgl'].'<br>';
         echo 'Bidang :&nbsp;'.$data['judul'].'<br><br>';
        
         
          echo '<center><img src ='.$data['gambar'].'</center><br><br>';
           echo '<p>'.$data['deskripsi'].'</p><br><br>';
          
          
           
}
        ?>


  </div> 


 
</div><br>

