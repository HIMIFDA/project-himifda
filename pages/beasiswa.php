 
 
<div class="jumbotron" style="background-color: #ccd9ff;">
<h3><center><img src="../images/4.png" width="100px" height="100px"><br>SCHOLARSHIPS INFO OF<br> INFORMATICS ENGINEERING DARMA PERSADA UNIVERSITY </h3></center>
 </div>

 <div class="container" >
</div>

<div class="card">
  <div class="card-header" style="background-color: #99bbff; "><b> Scholarships Info  </b></div>
  <div class="card-body">
  
  <?php

            include '../config/koneksi.php';
 $query = mysqli_query($konek, "SELECT id,beasiswa,info_beasiswa,tgl,penyelenggara,file,deskripsi FROM info_beasiswa ORDER BY id DESC")or die(mysqli_error($konek));

  $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
        
         echo ''.$data['tgl'].'<br>';
         echo ' penyelenggara :&nbsp;'.$data['penyelenggara'].'<br>';
          
          echo '<b><h3>'.$data['info_beasiswa'].'</b></h3>'; 
          echo '<img height="150" width="100" src ='.$data['file'].'<br>';
           echo '<p align="justify">'.$data['deskripsi'].'</p><hr>';
          
          
           
}
        ?>


  </div> 

