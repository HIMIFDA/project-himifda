<div class="alert alert-info">
  <strong>DATA ANGGOTA </strong>&nbsp; Himpunan Informatika Universitas Darma Persada
</div>
        <!-- /.col -->
    
                     
                        <form action="edit.php" method="POST">
                        
                        <tr>
                             <table class="table1" width="600" border="1" cellspacing="0" cellpadding="2">
    <thead>
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Nama Panggilan</th>
        <th>Angkatan</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>E-mail</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Agama</th>
        <th>Jabatan</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php

                        include 'config/koneksi.php';

                        $query = mysqli_query($connect, "SELECT id,nim,nama,nama_panggilan,angkatan,jk,alamat,no_hp,email,tempat_lahir,tgl_lahir,agama, jabatan FROM anggota_resmi")or die(mysqli_error($connect));
                                        if(mysqli_num_rows($query) == 0){   
                                            echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
                                        }
                                            else
                                        {   
                                            $no = 1;                
                                            while($data = mysqli_fetch_array($query)){  
                                                echo '<tr>';
                                                echo '<td>'.$no.'</td>';
                                                echo '<td>'.$data['nim'].'</td>';
                                                echo '<td>'.$data['nama'].'</td>';
                                                echo '<td>'.$data['nama_panggilan'].'</td>';
                                                echo '<td>'.$data['angkatan'].'</td>';
                                                echo '<td>'.$data['jk'].'</td>';
                                                echo '<td>'.$data['alamat'].'</td>';
                                                echo '<td>'.$data['no_hp'].'</td>';
                                                echo '<td>'.$data['email'].'</td>';
                                                echo '<td>'.$data['tempat_lahir'].'</td>';
                                                echo '<td>'.$data['tgl_lahir'].'</td>';
                                                echo '<td>'.$data['agama'].'</td>';
                                                echo '<td>'.$data['jabatan'].'</td>';
                                                echo '
                                                <td>
                                                    <a href=index.php?halaman=read_anggota&&id='.$data['id'].'><span class="glyphicon glyphicon-eye">
                                                    </a>
                                                    <a href=index.php?halaman=edit_anggota&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a>
                                                </td>';
                                                // echo '<td><a href=index.php?halaman=edit_anggota&&id='.$data['id'].'><span class="glyphicon glyphicon-edit"></a></td>';
                                                // echo '<td><a href=config/hapus_anggota.php?id='.$data['id'].'><span class="glyphicon glyphicon-remove-sign"></span></a></td>';
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
    
