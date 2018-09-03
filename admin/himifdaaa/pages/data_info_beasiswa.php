

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
      font-size: 12px;
  }

  td {
    font-size: 12px;
  }

</style>



<div class="col-md-12" style="padding:0px">
    <ol class="breadcrumb" style="margin:0;border-radius:0;">
      <li class="active"><a href="index.php?halaman=index">Dashboard</a> / Info Beasiswa</li>
    </ol>
</div>
   
<div class="col-md-12" style="min-height:500px">
  <h3><b>Info Beasiswa</b></h3>
  <hr>
     <form class="form-inline" action="" method="POST">
    <div class="form-group" style="float: right;">
      <input size="37px" type="text" name="pencarian" class="form-control" placeholder="Pencarian">
      <button type="submit" class="btn btn-primary"><i class="fa fa-search fa-fw"></i></button>
      <a href="index.php?halaman=data_info_beasiswa"><button type="button" class="btn btn-warning"><i class="fa fa-refresh fa-fw"></i></button></a>
    </div>
  </form>
  <a href=""><button type="button" class="btn btn-primary"><i class="fa fa-plus-circle fa-fw"></i>Tambah Info Beasiswa</button></a>
  <br>
  <br>
  <form class="form-horizontal" method="POST">
    <table class="table table-striped">
      <thead>
        <tr>
        <th>No</th>
        <th>Beasiswa</th>
        <th>Info Beasiswa</th>
        <th>Tanggal</th>
        <th>Penyelenggara</th>
        <th>File</th>
        <th>Deskripsi</th>

        <th colspan="2">Action</th>
      </tr>
      </thead>
      <tbody>

          <?php

            include 'config/koneksi.php';
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
              $pencarian = trim(mysqli_real_escape_string($connect, $_POST['pencarian']));
              if ($pencarian != '') {
                $sql = "SELECT id, beasiswa, info_beasiswa,tgl,penyelenggara,file,deskripsi  FROM info_beasiswa WHERE beasiswa LIKE '%$pencarian%' OR info_beasiswa LIKE '%$pencarian%' OR penyelenggara LIKE '%$pencarian%' OR tgl LIKE '%$pencarian%' ORDER BY id DESC";
                $query = $sql;
                $queryJml = $sql;
              } else {
                $query = "SELECT id, beasiswa, info_beasiswa,tgl,penyelenggara,file,deskripsi  FROM info_beasiswa ORDER BY id DESC LIMIT $posisi, $batas ";
                $queryJml = "SELECT id, beasiswa, info_beasiswa,tgl,penyelenggara,file,deskripsi  FROM info_beasiswa ORDER BY id DESC";
                $no = $posisi + 1;
              }
            } else {
              $query = "SELECT id, beasiswa, info_beasiswa,tgl,penyelenggara,file,deskripsi  FROM info_beasiswa ORDER BY id DESC LIMIT $posisi, $batas ";
              $queryJml = "SELECT id, beasiswa, info_beasiswa,tgl,penyelenggara,file,deskripsi  FROM info_beasiswa ORDER BY id DESC";
              $no = $posisi + 1;
            }


            $querydata = mysqli_query($connect, $query)or die(mysqli_error());
                    if(mysqli_num_rows($querydata) == 0){ 
                      echo '<tr><td colspan="14" align="center"><i>Tidak ada data!</i></td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($querydata)){  
                          echo '<tr>';
                                                echo '<td>'.$no.'</td>';
                                                echo '<td>'.$data['beasiswa'].'</td>';
                                                echo '<td>'.$data['info_beasiswa'].'</td>';
                                                echo '<td>'.$data['tgl'].'</td>';
                                                echo '<td>'.$data['penyelenggara'].'</td>';
                                                echo '<td>'.$data['file'].'</td>';
                                                echo '<td>'.$data['deskripsi'].'</td>';
                                               
                                                
                                                echo '<td><a href=index.php?halaman=edit_info_beasiswa&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                                echo '<td><a href=config/_info_beasiswa_b.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
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
            $pencarian = trim(mysqli_real_escape_string($connect, $_POST['pencarian']));
        echo "<div style=\"float:left;\">";
        $jml = mysqli_num_rows(mysqli_query($connect, $queryJml));
        echo "Data Hasil Pencarian: <b>$jml</b>";
        echo "</div>";
      } else { ?>
        <div style="float:left;">
          <?php
          $jml = mysqli_num_rows(mysqli_query($connect, $queryJml));
          echo "Jumlah Data: <b>$jml</b>";
          ?>
        </div>
        <div style="float:right;">
          <ul class="pagination pagination-sm" style="margin: 0">
            <?php
            $jml_hal = ceil($jml / $batas);
            for ($i=1; $i <= $jml_hal; $i++) {
              if ($i != $hal) {
                echo "<li><a href=\"index.php?halaman=data_info_beasiswa&&hal=$i\">$i</a></li>";
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
  </div>
</div>
