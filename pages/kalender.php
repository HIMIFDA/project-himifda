 
 
<div class="jumbotron" style="background-color: #ccd9ff;"><br>
<h3><center><img src="../images/4.png" width="100px" height="100px"><br>MATA KULIAH INFORMATIKA UNIVERSITAS DARMA PERSADA </h3></center>
 </div>

 <div class="container" >
</div>

<div class="card">
  <div class="card-header" style="background-color: #99bbff; "><b> Mata Kuliah Teknik Informatika </b></div>
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
  <strong>Daftar Mata Kuliah</strong>&nbsp; Teknik Informatika Unsada
</div>

<table class="table table-bordered">
   <thead>
    <tr>
    <th style="background-color:  #99bbff; "><b><center>No</center></b></th>
    <th style="background-color:  #99bbff;"><b><center>Kegiatan</center></b></th>
     <th style="background-color: #99bbff;" ><b><center>Tanggal Mulai</center></b></th>
     <th style="background-color: #99bbff;"><b><center>Tanggal Selesai</center></b></th>
     <th style="background-color: #99bbff;"><b><center>Keterangan</center></b></th>
     <th style="background-color: #99bbff;"><b><center>Libur</center></b></th>
     
                        
      </tr>
      </thead>
      <tbody>


      	<?php

            include '../config/koneksi.php';

             if(isset($_POST['cari'])){
             $cari = $_POST['cari'];
             $query = mysqli_query($konek, "SELECT id,kegiatan,tglmulai,tglselesai,keterangan,libur FROM kalender_akademik where kegiatan like '%".$cari."%' OR tglmulai like '%".$cari."%' OR tglselesai like '%".$cari."%' OR keterangan like '%".$cari."%' OR libur like '%".$cari."%' ")or die(mysqli_error());     
             }else{





            $query = mysqli_query($konek, "SELECT id,kegiatan,tglmulai,tglselesai,keterangan,libur FROM kalender_akademik")or die(mysqli_error($konek));
            }
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td>'.$data['kegiatan'].'</td>';
                          echo '<td>'.$data['tglmulai'].'</td>';
                            echo '<td>'.$data['tglselesai'].'</td>';
                             echo '<td>'.$data['keterangan'].'</td>';
                           
                            echo '<td>'.$data['libur'].'</td>';
                           
                           
                           
                       
                   
                        echo '</tr>';
                        $no++;  
                      }
                    
              
                ?>
      	</table>



  </div> 
 
</div><br><hr />

