 
 
<div class="jumbotron" style="background-color: #ccd9ff;">
<h3><center><img src="../images/4.png" width="100px" height="100px"><br>EVENT / KEGIATAN HIMPUNAN MAHASISWA INFORMATIKA <br> UNIVERSITAS DARMA PERSADA </center></h3>
 </div>



 <div class="container" >

 	 <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">

           
            <h4 class="card-header">
              
            </h4>
            <div class="card-body">
              <p class="card-text">  

       <?php

            include '../config/koneksi.php';
           $query = mysqli_query($konek, "SELECT id,kode_event,tgl,nama_kegiatan,bidang,gambar,kegiatan FROM kegiatan where kode_event='event 1'")or die(mysqli_error($konek));

            $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
        
        
            echo '<h3><b>'.$data['nama_kegiatan'].'</h3></b><br><br>';
          
          
         
          echo '<center><img src ='.$data['gambar'].'</center><br><br>';
           echo ''.$data['kegiatan'].'<br><br>';
          
          
           
}
        ?> </p>
            </div>
            <div class="card-footer">
              <a href="pages.php?halaman=event1" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header"></h4>
            <div class="card-body">
              <p class="card-text">
                
                <?php

            include '../config/koneksi.php';
            $query = mysqli_query($konek, "SELECT id,kode_event,tgl,nama_kegiatan,bidang,gambar,kegiatan FROM kegiatan where kode_event='event 2'")or die(mysqli_error($konek));

            $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
        
        
            echo '<h3><b>'.$data['nama_kegiatan'].'</h3></b><br><br>';
          
          
         
          echo '<center><img src ='.$data['gambar'].'</center><br><br>';
           echo ''.$data['kegiatan'].'<br><br>';
          
          
           
}
        ?> 
              </p>
            </div>
            <div class="card-footer">
              <a href="pages.php?halaman=event2" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header"></h4>
            <div class="card-body">
              <p class="card-text">
                <?php

            include '../config/koneksi.php';
           $query = mysqli_query($konek, "SELECT id,kode_event,tgl,nama_kegiatan,bidang,gambar,kegiatan FROM kegiatan where kode_event='event 3'")or die(mysqli_error($konek));

            $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
        
        
            echo '<h3><b>'.$data['nama_kegiatan'].'</h3></b><br><br>';
          
          
         
          echo '<center><img src ='.$data['gambar'].'</center><br><br>';
           echo ''.$data['kegiatan'].'<br><br>';
          
          
           
}
        ?> 
              </p>
            </div>
            <div class="card-footer">
              <a href="pages.php?halaman=event3" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>

 <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header"></h4>
            <div class="card-body">
              <p class="card-text">
              <?php

            include '../config/koneksi.php';
          $query = mysqli_query($konek, "SELECT id,kode_event,tgl,nama_kegiatan,bidang,gambar,kegiatan FROM kegiatan where kode_event='event 4'")or die(mysqli_error($konek));

            $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
        
        
            echo '<h3><b>'.$data['nama_kegiatan'].'</h3></b><br><br>';
          
          
         
          echo '<center><img src ='.$data['gambar'].'</center><br><br>';
           echo ''.$data['kegiatan'].'<br><br>';
          
          
           
}
        ?>  </p>
            </div>
            <div class="card-footer">
              <a href="pages.php?halaman=event4" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header"></h4>
            <div class="card-body">
              <p class="card-text">
                <?php

            include '../config/koneksi.php';
          $query = mysqli_query($konek, "SELECT id,kode_event,tgl,nama_kegiatan,bidang,gambar,kegiatan FROM kegiatan where kode_event='event 5'")or die(mysqli_error($konek));


            $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
        
        
            echo '<h3><b>'.$data['nama_kegiatan'].'</h3></b><br><br>';
          
          
         
          echo '<center><img src ='.$data['gambar'].'</center><br><br>';
           echo ''.$data['kegiatan'].'<br><br>';
          
          
           
}
        ?> 
              </p>
            </div>
            <div class="card-footer">
              <a href="pages.php?halaman=event5" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header"></h4>
            <div class="card-body">
              <p class="card-text"> 
              <?php

            include '../config/koneksi.php';
           $query = mysqli_query($konek, "SELECT id,kode_event,tgl,nama_kegiatan,bidang,gambar,kegiatan FROM kegiatan where kode_event='event 6'")or die(mysqli_error($konek));

            $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
        
        
            echo '<h3><b>'.$data['nama_kegiatan'].'</h3></b><br><br>';
          
          
         
          echo '<center><img src ='.$data['gambar'].'</center><br><br>';
           echo ''.$data['kegiatan'].'<br><br>';
          
          
           
}
        ?> </p>
            </div>
            <div class="card-footer">
              <a href="pages.php?halaman=event6" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div> 


      


        </div>                                                   

                                   

            </div>
        </div>

</div>

