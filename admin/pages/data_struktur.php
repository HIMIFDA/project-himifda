<div class="alert alert-info">
  <strong>DATA STRUKTURAL </strong>&nbsp; Himpunan Informatika Universitas Darma Persada
</div>
        <!-- /.col -->
    
                     
                        <form action="edit.php" method="POST">
                        
                        <tr>
                             <table class="table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama File</th>
        <th>Deskripsi</th>
        <th>Tanggal Upload</th>

        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php

                        include 'config/koneksi.php';

                        $query = mysqli_query($connect, "SELECT id, nama_file, deskripsi,tgl_upload  FROM struktural")or die(mysqli_error($connect));
                                        if(mysqli_num_rows($query) == 0){   
                                            echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
                                        }
                                            else
                                        {   
                                            $no = 1;                
                                            while($data = mysqli_fetch_array($query)){  
                                                echo '<tr>';
                                                echo '<td>'.$no.'</td>';
                                                echo '<td><img src='.$data['nama_file'].'></td>';
                                                echo '<td>'.$data['deskripsi'].'</td>';
                                                echo '<td>'.$data['tgl_upload'].'</td>';
                                               
                                                
                                                echo '<td><a href=index.php?halaman=edit_visimisi&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                                echo '<td><a href=config/hapus_struktur.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
                                                echo '</tr>';
                                                $no++;  
                                            }
                                        }
                            
                                ?>

 </tbody>

                            </table>
                </tr>

<!--                 <ul class="pagination" style="align-items: center">
  
  <li class="page-item active"><a class="page-link" href="index.php?halaman=data_daily">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">4</a></li>
  <li class="page-item"><a class="page-link" href="#">5</a></li>
 -->

</ul></form>

                        </tr>
                        </tr>
                        
                        </table>
                    </div>


                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    
