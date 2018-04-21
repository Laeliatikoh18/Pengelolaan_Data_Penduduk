<?php
                          include "koneksi.php";
                          $nik = $_GET['nik'];
                          $query = "select * from kematian where nik ='$nik'";
                          $tampil = mysql_query($query) or die("Gagal dalam menampilkan data");
                          while($tampilData = mysql_fetch_array($tampil)){

                          
                          
                        ?>
<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
     <link href="datepicker/css/datepicker.css" rel="stylesheet">
      <!-- jQuery -->
    <script src="js/jquery.js"></script>
  <script src="datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="jquery.autocomplete.js"></script>

  <style>
    th, td {
    padding: 5px;
    }
  .datepicker
    </style>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.tanggal').datepicker({
      format:'yyyy-mm-dd',
    });
  });
  
  </script>
<div class="container">
  <h2 align="center">Edit Data Kematian</h2>
  <form id="formID" action= "proses_update_datakematian.php" method= "POST" >

  <br>
	   
        <center>
        <table>
  
  <tr><td style="width:350px;">
      <input type="hidden" class="form-control"  name="no_id"   value="<?php echo $tampilData['no_id']; ?>"></td></tr>
 <tr><td>NIK</td><td>Nama</td><td>Alamat</td></tr>
  <tr><td style="width:350px;">
      <input type="text" class="form-control"  name="nik"   value="<?php echo $tampilData['nik']; ?>"></td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="nama_lgkp" value="<?php echo $tampilData['nama_lgkp']; ?>"></td>
      <td style="width:350px;">
      <textarea type="text" class="form-control"  name="alamat" ><?php echo $tampilData['alamat']; ?></textarea> 
      </td></tr>
  <tr><td>Jenis Kelamin</td><td>Tanggal Lahir</td><td>Tanggal Kematian</td></tr>
  <tr><td style="width:350px;">
      <select name="jk" class="form-control" >
              <option value="Perempuan"<?php if($tampilData['jk']=="Perempuan") echo "selected";?>>Perempuan</option>
              <option value="Laki Laki"<?php if($tampilData['jk']=="Laki Laki") echo "selected";?>>Laki Laki</option>
            </select></td>
      <td style="width:350px;">
      <div class='input-group date' id='datetimepicker'>
      <input type="text" class="form-control tanggal"  name="tgl_lhr" value="<?php echo $tampilData['tgl_lhr']; ?>">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span></div></td>
      <td style="width:350px;">
      <div class='input-group date' id='datetimepicker'>
      <input type="text" class="form-control tanggal"  name="tgl_kematian" value="<?php echo $tampilData['tgl_kematian']; ?>">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span></div></td>
  </tr>
  <tr><td>Pukul</td><td>Sebab Kematian</td><td>Tempat Kematian</td></tr>
  <tr><td style="width:350px;">
      <input type="text" class="form-control"  name="pukul" value="<?php echo $tampilData['pukul']; ?>"></td>
      <td style="width:350px;">
      <select name="sebab_kematian" class="form-control">
              <option value="Sakit biasa/ tua"<?php if($tampilData['sebab_kematian']=="Sakit biasa/ tua") echo "selected";?>>Sakit biasa/ tua</option>
              <option value="Wabah Penyakit"<?php if($tampilData['sebab_kematian']=="Wabah Penyakit") echo "selected";?>>Wabah Penyakit</option>
              <option value="Kecelakaan"<?php if($tampilData['sebab_kematian']=="Kecelakaan") echo "selected";?>>Kecelakaan</option>
              <option value="Kriminalitas"<?php if($tampilData['sebab_kematian']=="Kriminalitas") echo "selected";?>>Kriminalitas</option>
              <option value="Bunuh Diri"<?php if($tampilData['sebab_kematian']=="Bunuh Diri") echo "selected";?>>Bunuh Diri</option>
              <option value="Keracunan"<?php if($tampilData['sebab_kematian']=="Keracunan") echo "selected";?>>Keracunan</option>
            </select>
      </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="tmpt_kematian" value="<?php echo $tampilData['tmpt_kematian']; ?>">
      </td>
  </tr>
  <tr><td>Yang Menerangkan</td><td>NIK Saksi</td><td>Nama Saksi</td></tr>
  <tr><td style="width:350px;">
      <select name="yg_menerangkan" class="form-control">
              <option value="Dokter"<?php if($tampilData['yang_menerangkan']=="Dokter") echo "selected";?>>Dokter</option>
              <option value="Tenaga Kesehatan"<?php if($tampilData['yg_menerangkan']=="Tenaga Kesehatan") echo "selected";?>>Tenaga Kesehatan</option>
              <option value="Kepolisian"<?php if($tampilData['yg_menerangkan']=="Kepolisian") echo "selected";?>>Kepolisian</option>
              <option value="Kerabat Dekat"<?php if($tampilData['yg_menerangkan']=="Kerabat Dekat") echo "Kerabat Dekat";?>>Kerabat Dekat</option>
            </select>
      </td>
  <td style="width:350px;">
        <input type="text" class="form-control"  name="nik_saksi" value="<?php echo $tampilData['nik_saksi']; ?>">
      </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="nama_saksi" value="<?php echo $tampilData['nama_saksi']; ?>">
      </td>
  </tr>
  <tr><td>Tanggal Lahir Saksi</td><td>Alamat Saksi</td><td>Pelapor</td></tr>
  <tr>
      <td style="width:350px;">
      <div class='input-group date' id='datetimepicker'>
      <input type="text" class="form-control tanggal"  name="tgl_lhr_saksi" value="<?php echo $tampilData['tgl_lhr_saksi']; ?>">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span></div></td>
      <td style="width:350px;">
      <textarea type="text" class="form-control"  name="alamat_saksi"><?php echo $tampilData['alamat_saksi']; ?></textarea></td>
      <td style="width:350px;">
        <input type="text" class="form-control"  name="nama_pelapor" value="<?php echo $tampilData['nama_pelapor']; ?>">
      </td>
  </tr>
  
  
  <tr><td colspan="3">
          
          <button type="submit" class="btn btn-primary">Edit</button></td></tr>
  </table></center></div>
<?php } ?> 



 