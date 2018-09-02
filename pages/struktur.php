 
 
<div class="jumbotron" style="background-color: #ccd9ff;">
<h3><img src="../images/4.png" width="50px" height="50px">&nbsp;STRUKTURAL ORGANISASI HIMPUNAN MAHASISWA <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INFORMATIKA UNIVERSITAS DARMA PERSADA </h3>
 </div>

 <div class="container" >
</div>

<div class="card">
  <div class="card-header" style="background-color: #99bbff; "><b> Struktural Organisasi HIMIFDA </b></div>
  <div class="card-body">
  	

 <?php

            include '../config/koneksi.php';
 $query = mysqli_query($konek, "SELECT id,struktural FROM struktural")or die(mysqli_error($konek));

  $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
        
         
          echo '<center><img src ='.$data['struktural'].'</center><br><br>';
          
          
           
}
        ?>
	




  </div> 
 
</div><br><hr />

