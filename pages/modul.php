 
 
<div class="jumbotron" style="background-color: #ccd9ff;">
<h3><center><img src="../images/4.png" width="100px" height="100px"><br>MODUL MATERI INFORMATIKA UNIVERSITAS DARMA PERSADA </h3>
 </div>

 <div class="container" >
</div>

<div class="card">
  <div class="card-header" style="background-color: #99bbff; "><b> Modul Materi Teknik Informatika </b></div>
  <div class="card-body">
    <form class="forms-sample" form action="" method="POST">
      <table>
                        <div class="form-group">
                         <tr>
                         <td> <input type="text" class="form-control" id="cari" name="cari" placeholder="Masukkan Pencarian...." style="width: 950px;"></td>
                       
<td>&nbsp;<button type="submit" class="btn btn-info btn-xs">Cari Data</button></td>
</tr>

</div>
</table>

      </form><br><br>



	<div class="alert alert-info">
  <strong>Download Modul Materi</strong>&nbsp; Teknik Informatika Unsada
</div>

<table class="table table-bordered">
   <thead>
    <tr>
    <th><b><center>No</center></b></th>
    <th><b><center>Semester</center></b></th>
     <th><b><center>Mata Kuliah</center></b></th>
     <th><b><center>Judul Materi</center></b></th>
     <th><b><center>File Materi</center></b></th>
     
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

