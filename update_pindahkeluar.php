<?php
                          include "koneksi.php";
                          $nik = $_GET['nik'];
                          $query = "select * from penduduk_keluar where nik ='$nik'";
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
<h2 align="center">Edit Data Penduduk Keluar</h2>
<br><br>
  <form id="formID" action= "proses_update_datapendudukkeluar.php" method= "POST" >
  <style>
    th, td {
    padding: 5px;
    }</style>

  <center><table>

  <tr><td>No Id</td><td>NIK</td><td>Nama</td></tr>
  <tr><td style="width:350px;">
       <input type="text" class="form-control"  name="no_id" value="<?php echo $tampilData['no_id']; ?>"></td><td style="width:350px;">
	     <input type="text" class="form-control"  name="nik" value="<?php echo $tampilData['nik']; ?>"></td>
       <td style="width:350px;">
       <input type="text" class="form-control"  name="nama_lgkp" value="<?php echo $tampilData['nama_lgkp']; ?>">
        </td>
      </tr>
  <tr><td>Tanggal Lahir</td><td>Status Kawin</td><td>Jenis Kelamin</td></tr>
  <tr><td style="width:350px;">
      <div class='input-group date' id='datetimepicker'>
      <input type="text" class="form-control tanggal"  name="tgl_lhr" value="<?php echo $tampilData['tgl_lhr']; ?>">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span></div></td>
      
     <td style="width:350px;">
       <select name="status_kwn" class="form-control">
              <option value="Kawin"<?php if($tampilData['status_kwn']=="Kawin") echo "selected";?>>Kawin</option>
              <option value="Belum Kawin"<?php if($tampilData['status_kwn']=="Belum Kawin") echo "selected";?>>Belum Kawin</option>
            </select> 
      </td>
      <td style="width:350px;">
        <select name="jk" class="form-control">
              <option value="Perempuan"<?php if($tampilData['jk']=="Perempuan") echo "selected";?>>Perempuan</option>
              <option value="Laki Laki"<?php if($tampilData['jk']=="Laki Laki") echo "selected";?>>Laki Laki</option>
            </select>
      </td>
      </tr>
  <tr><td>Alamat Asal</td><td>Alamat Tujuan</td><td>Alasan Pindah</td></tr>
  <tr><td style="width:350px;">
      <textarea type="text" class="form-control"  name="alamat_asal" ><?php echo $tampilData['alamat_asal']; ?></textarea> 
      </td>
      <td style="width:350px;">
      <textarea type="text" class="form-control"  name="alamat_tujuan" ><?php echo $tampilData['alamat_tujuan']; ?></textarea> 
      </td>
      <td style="width:350px;">
      <textarea type="text" class="form-control"  name="alasan_pindah" ><?php echo $tampilData['alasan_pindah']; ?></textarea> 
      </td>
  </tr>
  
  
  <tr><td colspan="3">
          
        	<button type="submit" class="btn btn-primary">Edit</button></td></tr>
  </table></center>
</div>
<?php } ?> 