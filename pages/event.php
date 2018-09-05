 
 
<div class="jumbotron" style="background-color: #ccd9ff;">
<h3><center><img src="../images/4.png" width="100px" height="100px"><br>EVENTS OF HIMIFDA</center></h3>
 </div>



 <div class="container" >

 	 <div class="row">
       <?php

            include '../config/koneksi.php';

            $query = mysqli_query($konek, "SELECT * FROM kegiatan ORDER BY id DESC LIMIT 3")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<center><i><marquee>Welcome to Himpunan Mahasiswa Informatika Universitas Darma Persada (HIMIFDA) Website || Welcome to Himpunan Mahasiswa Informatika Universitas Darma Persada (HIMIFDA) Website! || Welcome to Himpunan Mahasiswa Informatika Universitas Darma Persada (HIMIFDA) Website! || Welcome to Himpunan Mahasiswa Informatika Universitas Darma Persada (HIMIFDA) Website! || Welcome to Himpunan Mahasiswa Informatika Universitas Darma Persada (HIMIFDA) Website! || Welcome to Himpunan Mahasiswa Informatika Universitas Darma Persada (HIMIFDA) Website! || Welcome to Himpunan Mahasiswa Informatika Universitas Darma Persada (HIMIFDA) Website! || Welcome to Himpunan Mahasiswa Informatika Universitas Darma Persada (HIMIFDA) Website! || Welcome to Himpunan Mahasiswa Informatika Universitas Darma Persada (HIMIFDA) Website! || </marquee></i></center>'; 
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<div class="col-md-4">';

                        echo ' <div class="card h-100"><br>';
                        echo '<div class="caption"><b><p align="center">'.$data['nama_kegiatan'].'</p></b></div>';

                      ?>
                      <p><a href="../admin/himifdaaa/pages/files/<?php echo $data['gambar'] ?>" target="_blank"><img width="100%" src="../admin/himifdaaa/pages/files/<?php echo $data['gambar'] ?>"></a></p>
                      <?php  
                        echo '<hr>';
                        echo '<div class="caption"><p align="center">'.$data['deskripsi'].'</p></div>';
                       
                        echo '
                        <div class="card-footer">
                          <a href="../pages/pages.php?halaman=read_more&&id='.$data['id'].'" class="btn btn-primary">Read More</a>
                        </div>
                      ';
                       echo '</div>';
                        echo '</div>';
                        $no++;  
                      }
                    }
              
                ?>

      


        </div>                                                   

                                   

            </div>
        </div>

</div>

