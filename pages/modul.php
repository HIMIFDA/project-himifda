    
<style>
  
  table {
      border-collapse: collapse;
      width: 100%;
  }

  th, td {
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even){background-color: #bbdfed;}

  th {
      background-color: #3bacd6;
      color: white;
      font-size: 14px;
  }

  td {
    font-size: 14px;
  }

</style>
 
 
<div class="jumbotron" style="background-color: #ccd9ff;">
<h3><center><img src="../images/4.png" width="100px" height="100px"><br>MODULS OF<br> INFORMATICS ENGINEERING DARMA PERSADA UNIVERSITY </h3>
 </div>

 <div class="container" >
</div>

<div class="card">
  <div class="card-header" style="background-color: #99bbff; "><b> Moduls of Informatics Engineering </b></div>
  <div class="card-body">
    <form class="forms-sample" form action="" method="POST">
     


      </form>



	<div class="alert alert-info">
  <strong>Download Moduls</strong>&nbsp; of Informatics Engineering Darma Persada University
</div>



 <form class="form-inline" action="" method="POST">
    <div class="form-group" style="float: right;">
      <input size="120px" type="text" name="pencarian" class="form-control" placeholder="Pencarian">
      &nbsp;&nbsp;<button type="submit" class="btn btn-primary">Search</button>
      <a href="pages.php?halaman=modul">&nbsp;&nbsp;<button type="button" class="btn btn-warning">Refresh</button></a>
    </div>
  </form><br>
  <form class="form-horizontal" method="POST">
    <table class="table table-striped">
      <thead>
        <tr>
    <th><b><center>No</center></b></th>
    <th><b><center>Semester</center></b></th>
     <th><b><center>Courses</center></b></th>
     <th><b><center>Title</center></b></th>
     <th><b><center>File</center></b></th>
     
     <th><b><center>Action</center></b></th>
     
     
                        
      </tr>
      </tr>
      </thead>
      <tbody>

          <?php

            include '../config/koneksi.php';
            //error_reporting(0);

            $batas  = 8;
            $hal    = @$_GET['hal'];
            if (empty($hal)) {
              $posisi = 0;
              $hal    = 1;
            } else {
              $posisi = ($hal - 1) * $batas;
            }
            if($_SERVER['REQUEST_METHOD'] == "POST") {
              $pencarian = trim(mysqli_real_escape_string($konek, $_POST['pencarian']));
              if ($pencarian != '') {
                $sql = "SELECT id,Semester,Mata_Kuliah,Judul_Materi,file FROM modul WHERE Semester LIKE '%$pencarian%' OR Judul_Materi LIKE '%$pencarian%' OR Mata_Kuliah LIKE '%$pencarian%'  OR file LIKE '%$pencarian%' ORDER BY Semester";
                $query = $sql;
                $queryJml = $sql;
              } else {
                $query = "SELECT id,Semester,Mata_Kuliah,Judul_Materi,file FROM modul ORDER BY Semester LIMIT $posisi, $batas ";
                $queryJml = "SELECT id,Semester,Mata_Kuliah,Judul_Materi,file FROM modul ORDER BY Semester";
                $no = $posisi + 1;
              }
            } else {
              $query = "SELECT id,Semester,Mata_Kuliah,Judul_Materi,file FROM modul ORDER BY Semester LIMIT $posisi, $batas ";
              $queryJml = "SELECT id,Semester,Mata_Kuliah,Judul_Materi,file FROM modul ORDER BY Semester";
              $no = $posisi + 1;
            }


            $querydata = mysqli_query($konek, $query)or die(mysqli_error());
                    if(mysqli_num_rows($querydata) == 0){ 
                      echo '<tr><td colspan="14" align="center"><i>Tidak ada data!</i></td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($querydata)){  
                         echo '<tr>';
                        echo '<td><center>'.$no.'</center></td>';
                        echo '<td>'.$data['Semester'].'</td>';
                          echo '<td>'.$data['Mata_Kuliah'].'</td>';
                            echo '<td>'.$data['Judul_Materi'].'</td>';
                             echo '<td>'.$data['file'].'</td>';
                           echo '<td><a href="../config/download.php?id='.$data['id'].'"><center>Download File</center></a></td>';
                      
                   
                        echo '</tr>';
                        $no++;  
                      }
                    }
              
            ?>              
      </tbody>
    </table>
  </form>
    <?php
     if($_SERVER['REQUEST_METHOD'] == "POST") {
            $pencarian = trim(mysqli_real_escape_string($konek, $_POST['pencarian']));
        echo "<div style=\"float:left;\">";
        $jml = mysqli_num_rows(mysqli_query($konek, $queryJml));
        echo "Data Hasil Pencarian: <b>$jml</b>";
        echo "</div>";
      } else { ?>
        <div style="float:left;">
          <?php
          $jml = mysqli_num_rows(mysqli_query($konek, $queryJml));
          echo "Jumlah Data: <b>$jml</b>";
          ?>
        </div>
        <div style="float:right;">
          <ul class="pagination pagination-sm" style="margin: 0">
            <?php
            $jml_hal = ceil($jml / $batas);
            for ($i=1; $i <= $jml_hal; $i++) {
              if ($i != $hal) {
                echo "<li><a href=\"pages.php?halaman=modul&&hal=$i\">$i</a></li>";
              } else {
                echo "<li class=\"active\"><a>$i</a></li>";
              }
            }
          }
            ?>  
          </ul>
        </div>
</div>



  </div> 
 
</div><br><hr />

