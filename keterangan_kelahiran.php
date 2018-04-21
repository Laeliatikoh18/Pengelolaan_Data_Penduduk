<?php
include 'koneksi.php';

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
<h2 align="center">Surat Keterangan Kelahiran</h2>
<br><br>
  <form id="formID" action= "proses_sk_kelahiran.php" enctype="multipart/form-data"
  method= "POST" >
  <style>
    th, td {
    padding: 5px;
    }</style>

  <center><table>

 <tr><td>ID Kelahiran</td><td>No KK</td><td>Nama</td></tr>
  <tr><td style="width:350px;">
       <input type="text" class="form-control"  name="id_kelahiran" placeholder="ID Kelahiran" ></td>
       <td style="width:350px;"><input type="text" class="form-control"  name="no_kk" placeholder="NO KK" >
        </td>
      <td style="width:350px;">
        <input type="text" class="form-control"  name="nama_lgkp" placeholder="Nama Lengkap" >
      </td></tr>
  <tr><td>Jenis Kelamin</td><td>Tempat Lahir</td><td>Tanggal Lahir</td></tr>
  <tr><td style="width:350px;">
        <select name="jk" class="form-control">
              <option value="Perempuan">Perempuan</option>
              <option value="Laki Laki">Laki Laki</option>
            </select>
      </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="tmpt_lhr" placeholder="Tempat Lahir" >
      </td>
      <td style="width:350px;">
      <div class='input-group date' id='datetimepicker'>
      <input type="text" class="form-control tanggal"  name="tgl_lhr" placeholder="TANGGAL LAHIR" >
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span></div></td>
  </tr>
  <tr><td>Pukul</td><td>Jenis Kelahiran</td><td>Kelahiran ke-</td></tr>
  <tr><td style="width:350px;">
      <input type="text" class="form-control"  name="pukul" placeholder="Pukul" >
      </td>
      <td style="width:350px;">
        <input type="text" class="form-control"  name="jenis_kelahiran" placeholder="Jenis Kelahiran" >
      </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="kelahiran_ke" placeholder="Kelahiran ke" >
      </td>
  </tr>
  <tr><td>Penolong Kelahiran</td><td>Berat Bayi</td><td>Panjang Bayi</td></tr>
  <tr><td style="width:350px;">
      <select name="penolong_kelahiran" class="form-control">
              <option value="Bidan">Bidan</option>
              <option value="Dukun">Dukun</option>
              <option value="Dokter">Dokter</option>
            </select>
      </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="berat_bayi" placeholder="Berat Bayi" >
      </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="panjang_bayi" placeholder="Panjang Bayi" >
      </td>
  </tr>
  <tr><td>Alamat</td><td>RT</td><td>RW</td></tr>
  <tr><td style="width:350px;">
      <select name="alamat" class="form-control">
              <option value="Dusun Karang">Dusun Karang</option>
              <option value="Dusun Kemancan">Dusun Kemancan</option>
              <option value="Dusun Krajan">Dusun Krajan</option>
            </select>
      </td>
      <td style="width:350px;">
      <select name="rt" class="form-control">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
      </td>
      <td style="width:350px;">
      <select name="rw" class="form-control">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
      </td>
  <tr><td>NIK Ibu</td><td>Nama Ibu</td><td>Tanggal Pernikahan Orang Tua</td></tr>
  <tr><td style="width:350px;">
      <input type="text" class="form-control"  name="nik_ibu" placeholder="NIK Ibu" >
      </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="nama_lgkp_ibu" placeholder="Nama Ibu" >
      </td>
      <td style="width:350px;">
      <div class='input-group date' id='datetimepicker'>
      <input type="text" class="form-control tanggal"  name="tanggal_pernikahan" placeholder="TANGGAL PERNIKAHAN ORANG TUA" >
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span></div></td>
  </tr>
  <tr><td>NIK Ayah</td><td>Nama Ayah</td><td>Pelapor</td></tr>
  <tr><td style="width:350px;">
        <input type="text" class="form-control"  name="nik_ayah" placeholder="NIK AYAH" >
      </td>
       <td style="width:350px;">
        <input type="text" class="form-control"  name="nama_lgkp_ayah" placeholder="NAMA AYAH" >
      </td>
      <td style="width:350px;">
        <input type="text" class="form-control"  name="pelapor" placeholder="NAMA PELAPOR" >
      </td>
  </tr>
  <tr><td>NIK Saksi</td><td>Nama Saksi</td><td>Tanggal Lahir Saksi</td></tr>
  <tr><td style="width:350px;">
        <input type="text" class="form-control"  name="nik_saksi" placeholder="NIK SAKSI" >
      </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="nama_saksi" placeholder="NAMA SAKSI" >
      </td>
      <td style="width:350px;">
      <div class='input-group date' id='datetimepicker'>
      <input type="text" class="form-control tanggal"  name="tgl_lhr_saksi" placeholder="TANGGAL LAHIR" >
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span></div></td>
  </tr>
  <tr><td>Alamat Saksi</td><td style="width:350px;">FOTO</td></tr>
  <tr><td style="width:350px;">
      <textarea type="text" class="form-control"  name="alamat_saksi" placeholder="Alamat Saksi" ></textarea></td>
      <td style="width:350px;">
      <input type="file" name="fileToUpload" id="foto" ></td>
  </tr>        
  <tr><td colspan="3">
          
          <button type="submit" class="btn btn-primary">Submit</button></td></tr>
  </table></center>
</div>
<?php ?> 