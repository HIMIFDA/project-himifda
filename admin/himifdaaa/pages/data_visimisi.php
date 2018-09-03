

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
  }

  td {
    font-size: 14px;
  }

</style>

<div class="col-md-12" style="padding:0px">
  <ol class="breadcrumb" style="margin:0;border-radius:0;">
    <li class="active"><a href="index.php?halaman=index">Dashboard</a> / Visi Misi</li>
  </ol>
</div>
   
<div class="col-md-12" style="min-height:500px">
  <h3><b>Visi Misi</b></h3>
    <hr>
 
    <form class="form-horizontal" method="POST">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Visi</th>
            <th>Misi</th>
            <th width="70">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          error_reporting(0);

            include 'config/koneksi.php';

            $query = mysqli_query($connect, "SELECT id, visi, misi  FROM visimisi")or die(mysqli_error());
                    if(mysqli_num_rows($query) == 0){ 
                      echo '<tr><td colspan="4" align="center">Tidak ada data!</td></tr>';    
                    }
                      else
                    { 
                      $no = 1;        
                      while($data = mysqli_fetch_array($query)){  
                        echo '<tr>';
                                                echo '<td>'.$no.'</td>';
                                                echo '<td>'.$data['visi'].'</td>';
                                                echo '<td>'.$data['misi'].'</td>';
                                               
                                                
                                                echo '<td><a href=index.php?halaman=edit_visimisi&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                              /*  echo '<td><a href=config/hapus_visimisi.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';*/
                                                echo '</tr>';
                        $no++;  
                      }
                    }
              
                ?>
                    
        </tbody>
      </table>
    </form>
  </div>


  </div>
</div>
    
