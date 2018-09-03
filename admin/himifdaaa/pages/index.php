<?php
    
    session_start();

    // if (isset($_SESSION['username']))

    // {

    if(isset($_GET['halaman'])) $halaman = $_GET['halaman']; 
        else $halaman = "index";

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Himifda</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php?halaman=index">Admin Himifda</a>
            </div>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <br>
                        <center><img width="200" src="../../../images/logo.png"></center>
                        <br>
                        <li>
                            <a href="index.php?halaman=index"><i></i>Dashboard</a>
                        </li>
                        <li>
                           
                        <li>
                            <a href="index.php?halaman=data_anggota"><i></i> Anggota Resmi</a>
                        </li>
                        <li>
                            <a href="index.php?halaman=data_visimisi"><i></i> Visi Misi</a>
                        </li>
                        <li>
                            <a href="index.php?halaman=data_struktur"><i></i> Struktural </a>
                        </li>
                       <!--  <li>
                            <a href="index.php?halaman=data_sejarah"><i></i> Sejarah </a>
                        </li> -->
                        <li>
                            <a href="index.php?halaman=data_kegiatan"><i></i> Events </a>
                        </li>
                        <li>
                            <a href="index.php?halaman=data_alumni"><i></i> Alumni </a>
                        </li>
                        <li>
                            <a href="index.php?halaman=data_ip"><i></i> Indeks Prestasi </a>
                        </li>
                        <!-- <li>
                            <a href="index.php?halaman=data_kalender_akademik"><i></i> Kalender Akademik </a>
                        </li> -->
                       <!--  <li>
                            <a href="index.php?halaman=data_mata_kuliah"><i></i> Mata Kuliah </a>
                        </li> -->
                        <li>
                            <a href="index.php?halaman=data_kritiksaran"><i></i> Kritik & Saran </a>
                        </li>
                        <li>
                            <a href="index.php?halaman=data_faq"><i></i> FAQ </a>
                        </li>
                       <!--  <li>
                            <a href="index.php?halaman=data_galery"><i></i> Galeri </a>
                        </li> -->
                        <li>
                            <a href="index.php?halaman=data_modul"><i></i> Modul </a>
                        </li><!-- 
                        <li>
                            <a href="index.php?halaman=data_berita"><i></i> Berita </a>
                        </li> -->
                        <li>
                            <a href="index.php?halaman=data_info_beasiswa"><i></i> Info Beasiswa </a>
                        </li>
                        <li>
                            <a href="logout.php"><i></i> Logout </a>
                        </li>
                       
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
      
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <!-- <p align="center"><i>Selamat datang di Dashboard Admin HIMIFDA</i></p> -->
                        <!-- <h1 class="page-header">Blank</h1> -->
                        <?php

                        if ($halaman=='index')
                            include 'dashboard.php';
                        elseif ($halaman=='input_faq')
                            include 'input_faq.php';

                        //CRUD anggota
                        elseif ($halaman=='data_anggota')
                            include 'data_anggota.php';
                        elseif ($halaman=='input_anggota')
                            include 'input_anggota.php';

                        //CRUD visimisi
                        elseif ($halaman=='data_visimisi')
                            include 'data_visimisi.php';
                        

                        //CRUD Struktural


                        //CRUD Event


                        //CRUD alumni  
                        elseif ($halaman=='data_alumni')
                            include 'data_alumni.php';
                        elseif ($halaman=='input_alumni')
                            include 'input_alumni.php';
                        elseif ($halaman=='edit_alumni')
                            include 'edit_alumni.php';
                        

                        //CRUD IP
                        elseif ($halaman=='data_ip')
                            include 'data_ip.php'; 
                        elseif ($halaman=='input_ip')
                            include 'input_ip.php';


                        //CRUD Kritik dan Saran 
                        elseif ($halaman=='data_kritiksaran')
                            include 'data_kritiksaran.php';
                        elseif ($halaman=='input_kritiksaran')
                            include 'input_kritiksaran.php';


                        //CRUD FAQ  
                        elseif ($halaman=='data_faq')
                            include 'data_faq.php';


                        //CRUD Modul


                        //CRUD Info Beasiswa


                        elseif ($halaman=='gallery')
                            include 'gallery.php'; 
                        elseif ($halaman=='struktur')
                            include 'struktur.php';  
                        elseif ($halaman=='data_struktur')
                            include 'data_struktur.php';
                        elseif ($halaman=='data_kalender_akademik')
                            include 'data_kalender_akademik.php';
                         elseif ($halaman=='data_sejarah')
                            include 'data_sejarah.php';
                         elseif ($halaman=='data_kegiatan')
                            include 'data_kegiatan.php';
                        elseif ($halaman=='data_mata_kuliah')
                            include 'data_mata_kuliah.php';
                        elseif ($halaman=='data_faq')
                            include 'data_faq.php';
                        elseif ($halaman=='data_galery')
                            include 'data_galery.php';
                        elseif ($halaman=='data_modul')
                            include 'data_modul.php';
                        elseif ($halaman=='data_berita')
                            include 'data_berita.php';
                        elseif ($halaman=='data_info_beasiswa')
                            include 'data_info_beasiswa.php';
                        elseif ($halaman=='edit_visimisi')
                            include 'edit_visimisi.php';
                        elseif ($halaman=='edit_sejarah')
                            include 'edit_sejarah.php';
                        elseif ($halaman=='edit_kritiksaran')
                            include 'edit_kritiksaran.php';
                        elseif ($halaman=='edit_faq')
                            include 'edit_faq.php';
                        elseif ($halaman=='edit_galery')
                            include 'edit_galery.php';
                        elseif ($halaman=='edit_berita')
                            include 'edit_berita.php';
                        elseif ($halaman=='edit_info_beasiswa')
                            include 'edit_info_beasiswa.php';
                        elseif ($halaman=='edit_struktur')
                            include 'edit_struktur.php';

                                       
                     ?>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
<!-- <?php
// }
// else
//   {
//     header("location:../../index.php");
//   }
?> -->