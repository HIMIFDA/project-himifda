<?php
  
  include '../config/koneksi.php';

  session_start();

  if(isset($_GET['halaman'])) $halaman = $_GET['halaman'];
    else $halaman = "pages";

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Himifda</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg  fixed-top" style="background-color: #003366;">
      <div class="container">
        <a class="navbar-brand" href="../index.php"><img src="../images/4.png" width="30px" height="30px"><font color= "white"> <b> HIMIFDA </b></font></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="background-color: white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" >
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../index.php"><font color= "white"> <b>Home</b></font></a>
            </li>
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
               <font color= "white"> <b>Profile</b></font>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
               

               
                <a class="dropdown-item" href="pages.php?halaman=visimisi">Vision & Mission</a>
             
                 <a class="dropdown-item" href="pages.php?halaman=struktural">Structure Organization</a>
                 
               
              </div>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="pages.php?halaman=event"><font color= "white"> <b>Events</b></font></a>
            </li>
            
              <li class="nav-item dropdown" >
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
              <font color= "white"> <b> Academic</b></font>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="pages.php?halaman=beasiswa">Scholarship Info</a>
                  <a class="dropdown-item" target="_blank" href="http://portal.unsada.ac.id/gate/index.php">Portal</a>
                  
                   <a class="dropdown-item" href="pages.php?halaman=modul">Download Moduls</a>
               
               
              </div>
            </li>
           
             
            
             <li class="nav-item">
              <a class="nav-link" href="pages.php?halaman=faq"><font color= "white"> <b>FAQ</b></font></a>
            </li>

            
           
          </ul>
        </div>
      </div>
    </nav>

    <header>
     
    </header>

    <!-- Page Content -->
    <div class="container">
   <?php
              if ($halaman=='sejarah')
              include 'sejarah.php';
             if ($halaman=='visimisi')
              include 'visimisi.php';
            if ($halaman=='event')
              include 'event.php';
             if ($halaman=='matkul')
              include 'matkul.php';

             if ($halaman=='modul')
              include 'modul.php';

             if ($halaman=='beasiswa')
              include 'beasiswa.php';


             if ($halaman=='struktural')
              include 'struktur.php';

              if ($halaman=='event1')
              include 'event1.php';

             if ($halaman=='event2')
              include 'event2.php';

             if ($halaman=='event3')
              include 'event3.php';

             if ($halaman=='event4')
              include 'event4.php';

             if ($halaman=='event5')
              include 'event5.php';

             if ($halaman=='event6')
              include 'event6.php';

            if ($halaman=='galery')
              include 'galery.php';

             if ($halaman=='faq')
              include 'faq.php';
             if ($halaman=='kalender')
              include 'kalender.php';
             if ($halaman=='berita1')
              include 'berita1.php';
             if ($halaman=='berita2')
              include 'berita2.php';
             if ($halaman=='berita3')
              include 'berita3.php';
             if ($halaman=='berita4')
              include 'berita4.php';
             if ($halaman=='berita5')
              include 'berita5.php';
             if ($halaman=='berita6')
              include 'berita6.php';
            if ($halaman=='read_more')
              include 'read_more.php';
    ?>

    
             
   
     
      </div>      <!-- /.row -->

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
      <div class="row mb-4">
        <div class="col-md-8">
         
        </div>
        <div class="col-md-4">
         
        </div>
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
   <footer>
  <div class="container">
   
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>&copy; Copyright 2018 | Himpunan Mahasiswa Informatika unsada</a>
  </p>
</div>
</footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
