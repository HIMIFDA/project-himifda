 
 
<div class="jumbotron" style="background-color: #ccd9ff;">
<h3><center><img src="../images/4.png" width="100px" height="100px">
  <br>FREQUENTLY ANSWER & QUESTION <br> HIMPUNAN MAHASISWA INFORMATIKA UNIVERSITAS DARMA PERSADA </h3></center>
 </div>

 <div class="container" >
</div>

<div class="card">
  <div class="card-header" style="background-color: #99bbff; "><b>FAQ</b> <font color="white"> Himpunan Mahasiswa Informatika Unsada</font></div>
  <div class="card-body">
  <br><br>


   <table class="table table-striped">
    <thead>
      <?php


            include '../config/koneksi.php';

            
      

            $query = mysqli_query($konek, "SELECT id,answer,question FROM faq")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="5" align="center">Tidak ada faq untuk saat ini!</td></tr>';  
                    }
                      else
                    { 

                       $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                         echo '<tr>';
                       
                        echo '<td style="background-color:#ccd9ff;"><h6>'.$data['question'].' </h6></td>';
                       
                          echo '</tr>';

                           echo '<tr>';
                       
                        echo '<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$data['answer'].' <center></td>';
                       
                          echo '</tr>';
                        $no++;  
                      }
                    }
              
        ?>

      
    </thead>
    <tbody>
     
    </tbody>
  </table>

 






  </div> 
 
</div><br><hr />




</div> 
 
</div>