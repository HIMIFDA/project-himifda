 
 
<div class="jumbotron" style="background-color: #ccd9ff;">
<h3><center><img src="../images/4.png" width="100px" height="100px"><br>BEASISWA INFORMATIKA UNIVERSITAS DARMA PERSADA </h3></center>
 </div>

 <div class="container" >
</div>

<div class="card">
  <div class="card-header" style="background-color: #99bbff; "><b> Info Beasiswa  </b></div>
  <div class="card-body">
  
  <?php

            include '../config/koneksi.php';
 $query = mysqli_query($konek, "SELECT id,beasiswa,info_beasiswa,tgl,penyelenggara,file,deskripsi FROM info_beasiswa where beasiswa='beasiswa 1'")or die(mysqli_error($konek));

  $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
        
         echo ''.$data['tgl'].'<br>';
         echo ' penyelenggara :&nbsp;'.$data['penyelenggara'].'<br><br>';
          
          echo '<b><center><h3>'.$data['info_beasiswa'].'</b></center></h3><br><br>'; 
          echo '<center><img src ='.$data['file'].'</center><br><br>';
           echo ''.$data['deskripsi'].'<br><br>';
          
          
           
}
        ?>


  </div> 


 
</div><br>

<div class="card">
  <div class="card-header" style="background-color: #99bbff; "><b> Info Beasiswa  </b></div>
  <div class="card-body">
  
  <?php

            include '../config/koneksi.php';
 $query = mysqli_query($konek, "SELECT id,beasiswa,info_beasiswa,tgl,penyelenggara,file,deskripsi FROM info_beasiswa where beasiswa='beasiswa 2'")or die(mysqli_error($konek));

  $no = 1;        
  while($data = mysqli_fetch_array($query)){  
        
         echo ''.$data['tgl'].'<br>';
         echo ' penyelenggara :&nbsp;'.$data['penyelenggara'].'<br><br>';
          
          echo '<b><center><h3>'.$data['info_beasiswa'].'</b></center></h3><br><br>'; 
          echo '<center><img src ='.$data['file'].'</center><br><br>';
           echo ''.$data['deskripsi'].'<br><br>';
          
          
           
}
        ?>


  </div> 

</div><br>
<div class="card">
  <div class="card-header" style="background-color: #99bbff; "><b> Info Beasiswa  </b></div>
  <div class="card-body">
  
  <?php

            include '../config/koneksi.php';
 $query = mysqli_query($konek, "SELECT id,beasiswa,info_beasiswa,tgl,penyelenggara,file,deskripsi FROM info_beasiswa where beasiswa='beasiswa 3'")or die(mysqli_error($konek));

  $no = 1;        
  while($data = mysqli_fetch_array($query)){  
        
         echo ''.$data['tgl'].'<br>';
         echo ' penyelenggara :&nbsp;'.$data['penyelenggara'].'<br><br>';
          
          echo '<b><center><h3>'.$data['info_beasiswa'].'</b></center></h3><br><br>'; 
          echo '<center><img src ='.$data['file'].'</center><br><br>';
           echo ''.$data['deskripsi'].'<br><br>';
          
          
           
}
        ?>


  </div> 