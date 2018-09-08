 <?php
 error_reporting(0);
 session_start();

    if (isset($_SESSION['username']))
        
    {

?>



<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<style type="text/css">
.form-style-10{
    width:450px;
    padding:30px;
    margin:40px auto;
    background: #FFF;
    border-radius: 10px;
    -webkit-border-radius:10px;
    -moz-border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
    padding: 30px;
    background: #F8F8F8;
    border-radius: 6px;
    margin-bottom: 15px;
}
.form-style-10 h1{
    background: #2A88AD;
    padding: 20px 30px 15px 30px;
    margin: -30px -30px 30px -30px;
    border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
    display: block;
    margin-top: 2px;
    font: 13px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
    display: block;
    font: 13px Arial, Helvetica, sans-serif;
    color: #888;
    margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select {
    display: block;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 8px;
    border-radius: 6px;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border: 2px solid #fff;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
    font: normal 20px 'Bitter', serif;
    color: #2A88AD;
    margin-bottom: 5px;
}
.form-style-10 .section span {
    background: #2A88AD;
    padding: 5px 10px 5px 10px;
    position: absolute;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border: 4px solid #fff;
    font-size: 14px;
    margin-left: -45px;
    color: #fff;
    margin-top: -3px;
}
.form-style-10 input[type="button"], 
.form-style-10 input[type="submit"]{
    background: #2A88AD;
    padding: 8px 20px 8px 20px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
    font-size: 15px;
}
.form-style-10 input[type="button"]:hover, 
.form-style-10 input[type="submit"]:hover{
    background: #2A6881;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
    float: right;
    width: 250px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #4D4D4D;
    margin-top: 10px;
    text-align: right;
}
</style>


<div class="form-style-10">
<h1>Isi datamu!<span>Form ini hanya diisi oleh Alumni Himifda</span></h1>
<form  method="post" action="config/simpan_alumni.php">
 
  <input type="hidden" name="id">

    <div class="section"><span>1</span>Biodata</div>
    <div class="inner-wrap">
        <label>Nama Lengkap <input type="text" name="nama" /></label>
        <!-- <label>Nama Panggilan <input type="text" name="nama_panggilan" /></label> -->
        <label>Alamat <textarea name="alamat"></textarea></label>
        <label>Tempat Lahir <input type="text" name="tempat_lahir" /></label>
        <label>Tanggal Lahir <input type="date" name="tgl_lahir" /></label>
        <label>Jenis Kelamin <input type="text" name="jk" /></label>
        <label>Agama <input type="text" name="agama" /></label>

    </div>

    <div class="section"><span>2</span>Data Kemahasiswaan</div>
    <div class="inner-wrap">
        <label>NIM <input type="text" name="nim" /></label>
        <label>Angkatan <input type="text" name="angkatan" /></label>
        <!-- <label>Jabatan <input type="text" name="jabatan" /></label> -->
    </div>

<div class="section"><span>3</span>Kontak</div>
 <div class="inner-wrap">
        <label>Alamat E-mail <input type="email" name="email" /></label>
        <label>No. HP/Telepon <input type="text" name="no_hp" /></label>
    </div>


    <div class="button-section">
     <input type="submit" value="Submit" />
     <!-- <input type="submit" class="btn btn-default" value="Submit"> -->
   <!--   <span class="privacy-policy">
     <input type="checkbox" name="field7">You agree to our Terms and Policy. 
     </span> -->
    </div>
</form>
</div>

<?php
}
else
  {
    header("location:../../index.php");
  }
?>