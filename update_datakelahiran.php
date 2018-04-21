<?php
                          include "koneksi.php";
                          $id_kelahiran = $_GET['id_kelahiran'];
                          $query = mysql_query("select * from kelahiran where id_kelahiran ='$id_kelahiran'");
                          $query1 = mysql_query("select * from data_penduduk where no_id ='$id_kelahiran'");
                          $tampilData = mysql_fetch_array($query);
                          $tampilData1 = mysql_fetch_array($query1);

                          
                      

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
<h2 align="center">Edit Data Kelahiran</h2>
<br><br>
  <form id="formID" action= "proses_update_datakelahiran.php" method= "POST" >
  <style>
    th, td {
    padding: 5px;
    }</style>

  <center><table>

  <tr><td>ID Kelahiran</td><td>No KK</td><td>NAMA</td></tr>
  <tr><td style="width:350px;">
	     <input type="text" class="form-control"  name="id_kelahiran" value="<?php echo $tampilData['id_kelahiran']; ?>"></td>
       <td style="width:350px;"><input type="text" class="form-control"  name="no_kk" value="<?php echo $tampilData1['no_kk']; ?>">
        </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="nama_lgkp" value="<?php echo $tampilData1['nama_lgkp']; ?>"></td>
  </tr>
  <tr><td>Jenis Kelamin</td><td>Tempat Lahir</td><td>Tanggal Lahir</td></tr>
  <tr><td style="width:350px;">
        <select name="jk" class="form-control">
              <option value="Perempuan"<?php if($tampilData1['jk']=="Perempuan") echo "selected";?>>Perempuan</option>
              <option value="Laki Laki"<?php if($tampilData1['jk']=="Laki Laki") echo "selected";?>>Laki Laki</option>
            </select>
      </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="tmpt_lhr" value="<?php echo $tampilData1['tmpt_lhr']; ?>">
      </td>
      <td style="width:350px;">
      <div class='input-group date' id='datetimepicker'>
      <input type="text" class="form-control tanggal"  name="tgl_lhr" value="<?php echo $tampilData1['tgl_lhr']; ?>">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span></div></td>
      </tr>
  <tr><td>Pukul</td><td>Jenis Kelahiran</td><td>Kelahiran ke-</td></tr>
  <tr><td style="width:350px;">
      <input type="text" class="form-control"  name="pukul" value="<?php echo $tampilData['pukul']; ?>">
      </td>
      <td style="width:350px;">
        <input type="text" class="form-control"  name="jenis_kelahiran" value="<?php echo $tampilData['jenis_kelahiran']; ?>">
      </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="kelahiran_ke" value="<?php echo $tampilData['penolong_kelahiran']; ?>">
      </td>
  </tr>
  <tr><td>Penolong Kelahiran</td><td>Berat Bayi</td><td>Panjang Bayi</td></tr>
  <tr><td style="width:350px;">
      <select name="penolong_kelahiran" class="form-control">
              <option value="Bidan"<?php if($tampilData['penolong_kelahiran']=="Bidan") echo "selected";?>>Bidan</option>
              <option value="Dukun"<?php if($tampilData['penolong_kelahiran']=="Dukun") echo "selected";?>>Dukun</option>
              <option value="Dokter"<?php if($tampilData['penolong_kelahiran']=="Dokter") echo "selected";?>>Dokter</option>
            </select>
      </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="berat_bayi" value="<?php echo $tampilData['berat_bayi']; ?>">
      </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="panjang_bayi" value="<?php echo $tampilData['panjang_bayi']; ?>">
      </td>
  </tr>
  <tr><td>Alamat</td><td>RT</td><td>RW</td></tr>
  <tr><td style="width:350px;">
      <select name="alamat" class="form-control">
              <option value="Dusun Karang"<?php if($tampilData1['alamat']=="Dusun Karang") echo "selected";?>>Dusun Karang</option>
              <option value="Dusun Kemancan"<?php if($tampilData1['alamat']=="Dusun Kemancan") echo "selected";?>>Dusun Kemancan</option>
              <option value="Dusun Krajan"<?php if($tampilData1['alamat']=="Dusun Krajan") echo "selected";?>>Dusun Krajan</option>
            </select>
      </td>
      <td style="width:350px;">
      <select name="rt" class="form-control">
              <option value="1"<?php if($tampilData1['rt']=="1") echo "selected";?>>1</option>
              <option value="2"<?php if($tampilData1['rt']=="2") echo "selected";?>>2</option>
              <option value="3"<?php if($tampilData1['rt']=="3") echo "selected";?>>3</option>
              <option value="4"<?php if($tampilData1['rt']=="4") echo "selected";?>>4</option>
            </select>
      </td>
      <td style="width:350px;">
      <select name="rw" class="form-control">
              <option value="1"<?php if($tampilData1['rw']=="1") echo "selected";?>>1</option>
              <option value="2"<?php if($tampilData1['rw']=="2") echo "selected";?>>2</option>
              <option value="3"<?php if($tampilData1['rw']=="3") echo "selected";?>>3</option>
            </select>
      </td>
  <tr><td>NIK Ibu</td><td>Nama Ibu</td><td>Tanggal Pernikahan Orang Tua</td></tr>
  <tr><td style="width:350px;">
      <input type="text" class="form-control"  name="nik_ibu" value="<?php echo $tampilData1['nik_ibu']; ?>">
      </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="nama_lgkp_ibu" value="<?php echo $tampilData1['nama_lgkp_ibu']; ?>">
      <td style="width:350px;">
      <div class='input-group date' id='datetimepicker'>
      <input type="text" class="form-control tanggal"  name="tanggal_pernikahan" value="<?php echo $tampilData['tanggal_pernikahan']; ?>">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span></div></td>
  </tr>
  <tr><td>NIK Ayah</td><td>Nama Ayah</td><td>Pelapor</td></tr>
  <tr><td style="width:350px;">
        <input type="text" class="form-control"  name="nik_ayah" value="<?php echo $tampilData1['nik_ayah']; ?>">
      </td>
       <td style="width:350px;">
        <input type="text" class="form-control"  name="nama_lgkp_ayah" value="<?php echo $tampilData1['nama_lgkp_ayah']; ?>">
      </td>
      <td style="width:350px;">
        <input type="text" class="form-control"  name="pelapor" value="<?php echo $tampilData['pelapor']; ?>">
      </td>
  </tr>
  <tr><td>NIK Saksi</td><td>Nama Saksi</td><td>Tanggal Lahir Saksi</td></tr>
  <tr><td style="width:350px;">
        <input type="text" class="form-control"  name="nik_saksi" value="<?php echo $tampilData['nik_saksi']; ?>">
      </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="nama_saksi" value="<?php echo $tampilData['nama_saksi']; ?>">
      </td>
      <td style="width:350px;">
      <div class='input-group date' id='datetimepicker'>
      <input type="text" class="form-control tanggal"  name="tgl_lhr_saksi" value="<?php echo $tampilData['tgl_lhr_saksi']; ?>"" required>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span></div></td>
  </tr>
  <tr><td>Alamat Saksi</td></tr>
  <tr><td style="width:350px;">
      <textarea type="text" class="form-control"  name="alamat_saksi" ><?php echo $tampilData['alamat_saksi']; ?></textarea></td>
      <td style="width:350px;">
      
  </tr>    
  
  <tr><td colspan="3">
          
        	<button type="submit" class="btn btn-primary">Edit</button></td></tr>
  </table></center>
</div>
