 
 
<div class="jumbotron" style="background-color: #ccd9ff;">
<h3><center><img src="../images/4.png" width="100px" height="100px"><br>EVENT / KEGIATAN HIMPUNAN MAHASISWA INFORMATIKA <br> UNIVERSITAS DARMA PERSADA </center></h3>
 </div>

 <div class="container" >
</div>

<div class="card">
  <div class="card-header" style="background-color: #99bbff; "><b> Event / Kegiatan  </b> HIMIFDA </div>
  <div class="card-body">
  
  <?php

            include '../config/koneksi.php';
 $query = mysqli_query($konek, "SELECT id,kode_event,tgl,nama_kegiatan,bidang,gambar,kegiatan FROM kegiatan where kode_event='event 3'")or die(mysqli_error($konek));

  $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
        
         echo ''.$data['tgl'].'<br>';
         echo 'Bidang :&nbsp;'.$data['bidang'].'<br><br>';
         echo '<h3><b><center>'.$data['nama_kegiatan'].'</h3></b></center><br><br>';
          
         
          echo '<center><img src ='.$data['gambar'].'</center><br><br>';
           echo '<p>'.$data['kegiatan'].'</p><br><br>';
          
          
           
}
        ?>


  </div> 


 
</div><br>

