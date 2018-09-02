<?php
// Baca lokasi file sementar dan nama file dari form (fupload)
include "config/koneksi.php";
$id = $_POST['id'];
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
// Tentukan folder untuk menyimpan file
$folder = "files/$nama_file";
// tanggal sekarang
$tgl_upload = date("Ymd");
// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";
  
  // Masukkan informasi file ke database
  // $konek = mysqli_connect("localhost","root","","himifda");

  // $query = "INSERT INTO struktural (id,nama_file, deskripsi, tgl_upload)
  //           VALUES('id',$nama_file', '$_POST[deskripsi]', '$tgl_upload')";
            
  // mysqli_query($konek, $query);
  $querydaily		= "INSERT INTO struktural VALUES ('id','$nama_file','$_POST[deskripsi]','$tgl_upload')";
 $simpandaily		= mysqli_query($connect,$querydaily)or die(mysqli_error($connect));


echo "Data telah berhasil disimpan.";
echo '<META HTTP-EQUIV="REFRESH" CONTENT ="1; url=../index.php?halaman=struktural">';
}
else{
  echo "File gagal di upload";
}
?>