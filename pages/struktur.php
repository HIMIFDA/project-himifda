 
<div class="jumbotron" style="background-color: #ccd9ff;">
<h3><center><img src="../images/4.png" width="100px" height="100px">
  <br>STRUCTURE ORGANIZATION OF <br> HIMIFDA</h3></center>
 </div>

 <div class="container" >
</div>

<div class="card">
  <div class="card-header" style="background-color: #99bbff; "><b> Structure Organization of HIMIFDA </b></div>
  <div class="card-body">
  	

 <?php

            include '../config/koneksi.php';
 $query = mysqli_query($konek, "SELECT id, nama_file, deskripsi FROM struktural ORDER BY id DESC LIMIT 1")or die(mysqli_error($konek));

  $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
        
         
          ?>

           <p><center><img width="100%" src="../admin/himifdaaa/images/<?php echo $data['nama_file'] ?>"></a></center></p><hr>
           <p><center><?php echo $data['deskripsi'] ?></center></p>
          <?php

          
          
           
}
        ?>
	




  </div> 
 
</div><br><hr />

