<?php
                          include "koneksi.php";
                          $no_id = $_GET['no_id'];
                          $query = mysql_query("select * from penduduk_masuk where no_id ='$no_id'");
                          $query1 = mysql_query("select * from data_penduduk where no_id ='$no_id'");
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
<h2 align="center">Edit Data Penduduk Masuk</h2>
<br><br>
  <form id="formID" action= "proses_update_datapendudukmasuk.php" method= "POST" >
  <style>
    th, td {
    padding: 5px;
    }</style>

  <center><table>

  <tr><td>NIK</td><td>Nama</td><td>Jenis Kelamin</td></tr>
  <tr><td style="width:350px;">
	     <input type="text" class="form-control"  name="nik" value="<?php echo $tampilData1['nik']; ?>"></td>
       <td style="width:350px;"><input type="text" class="form-control"  name="nama_lgkp" value="<?php echo $tampilData1['nama_lgkp']; ?>">
        </td>
      <td style="width:350px;">
        <select name="jk" class="form-control">
              <option value="Perempuan"<?php if($tampilData1['jk']=="Perempuan") echo "selected";?>>Perempuan</option>
              <option value="Laki Laki"<?php if($tampilData1['jk']=="Laki Laki") echo "selected";?>>Laki Laki</option>
            </select>
      </td></tr>
  <tr><td>Tanggal Lahir</td><td>Agama</td><td>Status Kawin</td></tr>
  <tr><td style="width:350px;">
      <div class='input-group date' id='datetimepicker'>
      <input type="text" class="form-control tanggal"  name="tgl_lhr" value="<?php echo $tampilData1['tgl_lhr']; ?>">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span></div></td>
      <td style="width:350px;">
      <select name="agama" class="form-control">
              <option value="Islam"<?php if($tampilData1['agama']=="Islam") echo "selected";?>>Islam</option>
              <option value="Kristen"<?php if($tampilData1['agama']=="Kristen") echo "selected";?>>Kristen</option>
              <option value="Katolik"<?php if($tampilData1['agama']=="Katolik") echo "selected";?>>Katolik</option>
              <option value="Hindu"<?php if($tampilData1['agama']=="Hindu") echo "selected";?>>Hindu</option>
              <option value="Budha"<?php if($tampilData1['agama']=="Budha") echo "selected";?>>Budha</option>
              <option value="Konghuchu"<?php if($tampilData1['agama']=="Konghuchu") echo "selected";?>>Konghuchu</option>
            </select>
      </td>
     <td style="width:350px;">
       <select name="status_kwn" class="form-control">
              <option value="Kawin"<?php if($tampilData1['status_kwn']=="Kawin") echo "selected";?>>Kawin</option>
              <option value="Belum Kawin"<?php if($tampilData1['status_kwn']=="Belum Kawin") echo "selected";?>>Belum Kawin</option>
            </select> 
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

  </tr>
  <tr><td>Alamat Asal</td><td>Alasan Pindah</td><td>No Id</td></tr>
  <tr><td style="width:350px;">
      <textarea type="text" class="form-control"  name="alamat_asal" ><?php echo $tampilData['alamat_asal']; ?></textarea> 
      </td>
      <td style="width:350px;">
      <textarea type="text" class="form-control"  name="alasan_pindah" ><?php echo $tampilData['alasan_pindah']; ?></textarea> </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="no_id" value="<?php echo $tampilData['no_id']; ?>"></td>
      </td>
  </tr>
  
  
  <tr><td colspan="3">
          
        	<button type="submit" class="btn btn-primary">Edit</button></td></tr>
  </table></center>
</div>
