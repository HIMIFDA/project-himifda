<div class="alert alert-info">
  <strong>DATA KALENDER AKADEMIK </strong>&nbsp; Himpunan Informatika Universitas Darma Persada
</div>
        <!-- /.col -->
    
                     
                        <form action="edit.php" method="POST">
                        
                        <tr>
                             <table class="table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
      <tr>
        <th>No</th>
        <th>Kegiatan</th>
        <th>Tanggal Mulai</th>
        <th>Tanggal Selesai</th>
        <th>Keterangan</th>
        <th>Libur</th>


        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php

                        include 'config/koneksi.php';

                        $query = mysqli_query($connect, "SELECT id, kegiatan, tglmulai, tglselesai, keterangan, libur  FROM kalender_akademik")or die(mysqli_error($connect));
                                        if(mysqli_num_rows($query) == 0){   
                                            echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
                                        }
                                            else
                                        {   
                                            $no = 1;                
                                            while($data = mysqli_fetch_array($query)){  
                                                echo '<tr>';
                                                echo '<td>'.$no.'</td>';
                                                echo '<td>'.$data['kegiatan'].'</td>';
                                                echo '<td>'.$data['tglmulai'].'</td>';
                                                echo '<td>'.$data['tglselesai'].'</td>';
                                                echo '<td>'.$data['keterangan'].'</td>';
                                                echo '<td>'.$data['libur'].'</td>';
                                                


                                                
                                                echo '<td><a href=index.php?halaman=edit_kalender_akademik&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                                echo '<td><a href=config/hapus_kalender_akademik.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
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
    
