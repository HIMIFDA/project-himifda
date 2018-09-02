 
 
<div class="jumbotron" style="background-color: #ccd9ff;">
<h3><center><img src="../images/4.png" width="100px" height="100px"><br>MODULS OF<br> INFORMATICS ENGINEERING DARMA PERSADA UNIVERSITY </h3>
 </div>

 <div class="container" >
</div>

<div class="card">
  <div class="card-header" style="background-color: #99bbff; "><b> Moduls of Informatics Engineering </b></div>
  <div class="card-body">
    <form class="forms-sample" form action="" method="POST">
      <table>
                        <div class="form-group">
                         <tr>
                         <td> <input type="text" class="form-control" id="cari" name="cari" placeholder="Search...." style="width: 950px;"></td>
                       
<td>&nbsp;<button type="submit" class="btn btn-info btn-xs">Search</button></td>
</tr>

</div>
</table>

      </form><br><br>



	<div class="alert alert-info">
  <strong>Download Moduls</strong>&nbsp; of Informatics Engineering Darma Persada University
</div>

<table class="table table-bordered">
   <thead>
    <tr>
    <th><b><center>No</center></b></th>
    <th><b><center>Semester</center></b></th>
     <th><b><center>Courses</center></b></th>
     <th><b><center>Title</center></b></th>
     <th><b><center>File</center></b></th>
     
     <th><b><center>Action</center></b></th>
     
     
                        
      </tr>
      </thead>
      <tbody>


      	<?php

            include '../config/koneksi.php';

             if(isset($_POST['cari'])){
             $cari = $_POST['cari'];
             $query = mysqli_query($konek, "SELECT id,semester,mata_kuliah,judul_materi,file FROM modul where semester like '%".$cari."%' OR mata_kuliah like '%".$cari."%' OR judul_materi like '%".$cari."%' ")or die(mysqli_error());     
             }else{





            $query = mysqli_query($konek, "SELECT id,semester,mata_kuliah,judul_materi,file FROM modul")or die(mysqli_error());
            }
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td>'.$data['semester'].'</td>';
                          echo '<td>'.$data['mata_kuliah'].'</td>';
                            echo '<td>'.$data['judul_materi'].'</td>';
                             echo '<td>'.$data['file'].'</td>';
                           echo '<td><a href="../config/download.php?id='.$data['id'].'"><center>Download File</center></a></td>';
                      
                   
                        echo '</tr>';
                        $no++;  
                      }
                    
              
                ?>
      	</table>



  </div> 
 
</div><br><hr />

