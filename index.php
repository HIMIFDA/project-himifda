
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Himifda</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg  fixed-top" style="background-color: #003366;">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/4.png" width="30px" height="30px"><font color= "white"> <b> HIMIFDA </b></font></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="background-color: white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" >
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php"><font color= "white"> <b>Home</b></font></a>
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
               <font color= "white"> <b>Profile</b></font>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                               <a class="dropdown-item" href="pages/pages.php?halaman=visimisi">Vision & Mission</a>
               
                 <a class="dropdown-item" href="pages/pages.php?halaman=struktural">Structure Organization</a>
                </div>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="pages/pages.php?halaman=event"><font color= "white"> <b>Events</b></font></a>
            </li>
            
              <li class="nav-item dropdown" >
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
              <font color= "white"> <b> Academic</b></font>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
               <!--  <a class="dropdown-item" href="pages/pages.php?halaman=matkul">Mata Kuliah Informatika</a>
                <a class="dropdown-item" href="pages/pages.php?halaman=kalender">Kalender AKademik</a> -->
                <a class="dropdown-item" href="pages/pages.php?halaman=beasiswa">Scholarship Info</a>
                  <a class="dropdown-item" target="_blank" href="http://portal.unsada.ac.id/gate/index.php">Portal</a>
                  
                   <a class="dropdown-item" href="pages/pages.php?halaman=modul">Download Moduls</a>
               
               
              </div>
            </li>
           
             
              <li class="nav-item">
              <a class="nav-link" href="pages/pages.php?halaman=faq"><font color= "white"> <b>FAQ</b></font></a>
            </li>

            
           
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('images/lop.png')">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/satu.jpeg')">
            <div class="carousel-caption d-none d-md-block">
              <h3> HIMIFDA </h3>
           
              <p>Himpunan Mahasiswa Informatika Universitas Darma Persada</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/dua.jpeg')">
            <div class="carousel-caption d-none d-md-block">
              <h3> HIMIFDA </h3>
            
              <p>Himpunan Mahasiswa Informatika Universitas Darma Persada</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container"><br>
       
       <div class="row">
         
        <?php

            include 'config/koneksi.php';

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
                      <p><a href="admin/himifdaaa/pages/files/<?php echo $data['gambar'] ?>" target="_blank"><img width="100%" src="admin/himifdaaa/pages/files/<?php echo $data['gambar'] ?>"></a></p>
                      <?php  
                        echo '<hr>';
                        echo '<div class="caption"><p align="center">'.$data['deskripsi'].'</p></div>';
                       
                        echo '
                        <div class="card-footer">
                          <a href="pages/pages.php?halaman=read_more&&id='.$data['id'].'" class="btn btn-primary">Read More</a>
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



                                   

            </div>
        </div>
    <!-- /.row -->

      <!-- Portfolio Section -->
     
      <!-- /.row -->

      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6">
         
         
        
        </div>
        <div class="col-lg-6">
         
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
     

    </div>

    <footer class="py-5" style="background-color: #003366;"><br><br>
       
      <div class="container">
          <div class="row">

   
 <div class="col m4 s12">
            <h5 class="white-text"><b><font color="white">MEDIA SOCIAL</font></b></h5><hr>
            <button type="button" class="btn btn-primary"><a href="https://www.facebook.com/himifda.unsada/"><font color="white">Facebook</font></a></button>
            <button type="button" class="btn btn-warning"><a href="https://www.instagram.com/himifda/?hl=id"><font color="white">Instagram</font></a></button>
            <button type="button" class="btn btn-info"><a href="https://twitter.com/himifda08"><font color="white">Twitter</font></a></button><br><br>
            <button type="button" class="btn btn-success"><a href=""><font color="white">Line: @uuw2562z</font></a></button>
            <button type="button" class="btn btn-danger"><a href="https://www.youtube.com/channel/UCfaMHmPmMF0HHsbqsWJdH7Q"><font color="white">Youtube</font></a></button><br><br>
             <button type="button" class="btn btn-default">Email : himifda08@gmail.com</button>

          </div>
             <div class="col m4 s12">
            <h5 class="white-text"><font color="white">HIMIFDA OFFICE</font></h5><hr>
            <p ><font color="white">4th Floor of Engineering Faculty Building<br>Raden Inten Street', RT.8 / RW.6, Pd. Klp., Duren Sawit, East Jakarta City, Jakarta Capital City 13450</font></p>
          </div>
          <div class="col m4 s12">
            <h5 align="justify" class="white-text"><font size="5" color="white"><b>Hello, you can contact us by media social beside this text! You also can add some suggest or critics by fill the form below this text. Thank you!</b></font></h5>
              <a class="grey-text text-lighten-3"><font color="white"></font></a>
          </div>



        </div><br>

          <div class="card">
 
  <div class="card-body">

    <p align="center"><b>HERE YOU CAN GIVE A SUGGESTION OR CRITIC FOR INFORMATICS ENGINEERING OF DARMA PERSADA UNIVERSITY.</b></p><hr>
      <form action="config/simpan-kritiksaran.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Enter your email" name="email" required>
    </div>

    

   <div class="form-group">
  <label for="comment">Critics:</label>
  <textarea class="form-control" rows="2" name="kritik" placeholder="Enter your critics" required></textarea>
</div>

   <div class="form-group">
  <label for="comment">Suggestion:</label>
  <textarea class="form-control" rows="2" name="saran" placeholder="Enter your suggestion" required></textarea>
</div>  
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  </div> 

 
</div>
      </div>
      <br>
<p class="m-0 text-center text-white"><b>&copy; Copyright 2018 | Himpunan Mahasiswa Informatika Unsada </b></p>

     

      <!-- /.container -->
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
