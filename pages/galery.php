 
 
<div class="jumbotron" style="background-color: #ccd9ff;">
<h3><center><img src="../images/4.png" width="100px" height="100px">
  <br>WELCOME TO GALERY HIMPUNAN MAHASISWA INFORMATIKA <br> UNIVERSITAS DARMA PERSADA </h3></center>
 </div>

 <div class="container" >
</div>


<div class="row">
 <?php
 


            include '../config/koneksi.php';

            
      

            $query = mysqli_query($konek, "SELECT id,foto,caption FROM galery")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="5" align="center">Tidak ada faq untuk saat ini!</td></tr>';  
                    }
                      else
                    { 

                       $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                         
                          echo '<div class="col-md-4">';
                           echo '<div class="thumbnail">';
                            echo ' <img src='.$data['foto'].' alt="Lights" style="width:100%">';
                             echo '<div class="caption">';
                             echo '<hr>';
                           echo '<p>'.$data['caption'].'</p>';
                           echo '</div>';
                           echo '</div>';
                           echo '</div>';
                          
                       
                      
                        $no++;  
                      }
                    }
              
        ?>



</div>


  




</div> 
 
</div>