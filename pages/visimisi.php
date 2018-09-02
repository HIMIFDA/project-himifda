 
 
<div class="jumbotron" style="background-color: #ccd9ff;">
<h3><center><img src="../images/4.png" width="100px" height="100px">
  <br>VISI & MISI HIMPUNAN MAHASISWA INFORMATIKA <br> UNIVERSITAS DARMA PERSADA </h3></center>
 </div>

 <div class="container" >
</div>

<div class="card">
  <div class="card-header" style="background-color: #99bbff; "><b>VISI Himpunan Mahasiswa Informatika Unsada </b></div>
  <div class="card-body">Visi Himpunan Mahasiswa Informatika Teknik Universitas Darma Persada Adalah :
  <br><br>

 <?php

            include '../config/koneksi.php';
 $query = mysqli_query($konek, "SELECT visi FROM visimisi ")or die(mysqli_error($konek));

  $no = 1;        
  while($data = mysqli_fetch_array($query)){  

  	   echo '<ul>';
       echo '<li>'.$data['visi'].'</li>';
       echo '</ul>';
        
         $no++;  
                         
           
}
        ?>






  </div> 
 
</div><br><hr />

<div class="card">
  <div class="card-header" style="background-color: #99bbff; "><b>MISI Himpunan Mahasiswa Informatika Unsada </b></div>
  <div class="card-body">Misi Himpunan Mahasiswa Informatika Teknik Universitas Darma Persada Adalah :
  <br><br>

 <?php

            include '../config/koneksi.php';
 $query = mysqli_query($konek, "SELECT misi FROM visimisi ")or die(mysqli_error($konek));

  $no = 1;        
  while($data = mysqli_fetch_array($query)){  

  	   echo '<ul>';
       echo '<li>'.$data['misi'].'</li>';
       echo '</ul>';
        
         $no++;  
                         
           
}
        ?>


</div> 
 
</div>