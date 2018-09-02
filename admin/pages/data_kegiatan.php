<div class="alert alert-info">
  <strong>DATA KEGIATAN </strong>&nbsp; Himpunan Informatika Universitas Darma Persada
</div>
        <!-- /.col -->
    
                     
                        <form action="edit.php" method="POST">
                        
                        <tr>
                             <table class="table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
      <tr>
        <th>No</th>
        <th>Kode Event</th>
        <th>Tanggal</th>
        <th>Nama Kegiatan</th>
        <th>Bidang</th>
        <th>Gambar</th>
        <th>Deskripsi</th>
        <th>Kegiatan</th>


        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php

                        include 'config/koneksi.php';

                        $query = mysqli_query($connect, "SELECT id, kode_event, tgl, nama_kegiatan, bidang, gambar,deskripsi,kegiatan  FROM kegiatan")or die(mysqli_error($connect));
                                        if(mysqli_num_rows($query) == 0){   
                                            echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
                                        }
                                            else
                                        {   
                                            $no = 1;                
                                            while($data = mysqli_fetch_array($query)){  
                                                echo '<tr>';
                                                echo '<td>'.$no.'</td>';
                                                echo '<td>'.$data['kode_event'].'</td>';
                                                echo '<td>'.$data['tgl'].'</td>';
                                                echo '<td>'.$data['nama_kegiatan'].'</td>';
                                                echo '<td>'.$data['bidang'].'</td>';
                                                echo '<td>'.$data['gambar'].'</td>';
                                                echo '<td>'.$data['deskripsi'].'</td>';
                                                echo '<td>'.$data['kegiatan'].'</td>';
                                                
                                                echo '<td><a href=index.php?halaman=edit_kegiatan&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                                echo '<td><a href=config/hapus_kegiatan.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
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
    
