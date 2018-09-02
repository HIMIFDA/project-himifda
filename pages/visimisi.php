 
 
<div class="jumbotron" style="background-color: #ccd9ff;">
<h3><center><img src="../images/4.png" width="100px" height="100px">
  <br>VISION & MISSION OF INFORMATICS ENGINEERING <br> DARMA PERSADA UNIVERSITY </h3></center>
 </div>

 <div class="container" >
</div>

<div class="card">
  <div class="card-header" style="background-color: #99bbff; "><b>VISION</b></div>
  <div class="card-body">
 

 <?php

            include '../config/koneksi.php';
 $query = mysqli_query($konek, "SELECT visi FROM visimisi ORDER BY id ASC LIMIT 1 ")or die(mysqli_error($konek));

  $no = 1;        
  while($data = mysqli_fetch_array($query)){  

  	   echo '<ul>';
       echo '<li>'.$data['visi'].'</li>';
       echo '</ul>';
        
       
                         
           
}
        ?>






  </div> 
 
</div><br><hr />

<div class="card">
  <div class="card-header" style="background-color: #99bbff; "><b>MISSION</b></div>
  <div class="card-body">

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