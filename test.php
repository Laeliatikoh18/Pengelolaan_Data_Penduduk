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
<h2 align="center">Tambah Data Penduduk</h2>
<br><br>
  <form id="formID" action= "proses_tambah_datapenduduk.php" method= "POST" >
  <style>
    th, td {
    padding: 5px;
    }</style>

  <center><table>

  <tr><td>No KK</td><td>Tempat Lahir</td><td>NIK Ibu</td></tr>
  <tr><td style="width:350px;">
	     <input type="text" class="form-control"  name="no_kk" placeholder="NO KK" required></td>
       <td style="width:350px;"><input type="text" class="form-control"  name="tmpt_lhr" placeholder="TEMPAT LAHIR" required>
        </td>
      <td style="width:350px;">
        <input type="text" class="form-control"  name="nik_ibu" placeholder="NIK IBU" required>
      </td></tr>
  <tr><td>NIK</td><td>Tanggal Lahir</td><td>Nama Lengkap Ibu</td></tr>
  <tr><td style="width:350px;">
      <input type="text" class="form-control"  name="nik" placeholder="NIK" required></td>
      <td style="width:350px;">
      <div class='input-group date' id='datetimepicker'>
                    <input type='text' class="form-control tanggal"  name="tgl_lhr" placeholder="TANGGAL LAHIR" required>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
            </div>
      </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="nama_lgkp_ibu" placeholder="NAMA IBU" required>
      </td>
      </tr>
  <tr><td>Nama</td><td>Jenis Kelamin</td><td>NIK Ayah</td></tr>
  <tr><td style="width:350px;">
      <input type="text" class="form-control"  name="nama_lgkp" placeholder="NAMA LENGKAP" required>
      </td>
      <td style="width:350px;">
        <select name="jk" class="form-control">
              <option value="Perempuan">Perempuan</option>
              <option value="Laki Laki">Laki Laki</option>
            </select>
      </td>
      <td style="width:350px;">
        <input type="text" class="form-control"  name="nik_ayah" placeholder="NIK AYAH" required>
      </td>
  </tr>
  <tr><td>Alamat</td><td>Golongan Darah</td><td>Nama Lengkap Ayah</td></tr>
  <tr><td style="width:350px;">
      <select name="alamat" class="form-control">
              <option value="Dusun Karang">Dusun Karang</option>
              <option value="Dusun Kemancan">Dusun Kemancan</option>
              <option value="Dusun Krajan">Dusun Krajan</option>
            </select>
      </td>
      <td style="width:350px;">
      <select name="gol_darah" class="form-control">
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="AB">AB</option>
              <option value="O">O</option>
            </select>
      </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="nama_lgkp_ayah" placeholder="NAMA AYAH" required>
      </td>
  </tr>
  <tr><td>RT</td><td>Status Kawin</td><td>Agama</td></tr>
  <tr><td style="width:350px;">
      <select name="rt" class="form-control">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
      </td>
      <td style="width:350px;">
       <select name="status_kwn" class="form-control">
              <option value="Kawin">Kawin</option>
              <option value="Belum Kawin">Belum Kawin</option>
            </select> 
      </td>
      <td style="width:350px;">
      <select name="agama" class="form-control">
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Katolik">Katolik</option>
              <option value="Hindu">Hindu</option>
              <option value="Budha">Budha</option>
              <option value="Kongkhuchu">Kongkhuchu</option>
            </select>
      </td>
  </tr>
  <tr><td>RW</td><td>NO Akta Lahir</td><td>Pendidikan</td></tr>
  <tr><td style="width:350px;">
      <select name="rw" class="form-control">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
      </td>
      <td style="width:350px;">
        <input type="text" class="form-control"  name="no_akta_lhr" placeholder="NO AKTA LAHIR" required>
      </td>
      <td style="width:350px;">
        <select name="pendidikan" class="form-control">
              <option value="Belum/ Tidak Sekolah">Belum/ Tidak Sekolah</option>
              <option value="SD">SD</option>
              <option value="SLTP Sederajat">SLTP Sederajat</option>
              <option value="SLTA Sederajat">SLTA Sederajat</option>
              <option value="Diploma I">Diploma I</option>
              <option value="Diploma II">Diploma II</option>
              <option value="Diploma III">Diploma III</option>
              <option value="Diploma IV">Diploma IV</option>
              <option value="Sarjana I(S1)">Sarjana I(S1)</option>
            </select>
      </td>
  </tr>
  <tr><td>SHDK</td><td>NO Akta Kawin</td><td>Pekerjaan</td></tr>
  <tr><td style="width:350px;">
      <select name="shdk" class="form-control">
              <option value="KK">KK</option>
              <option value="Istri">Istri</option>
              <option value="Anak">Anak</option>
              <option value="Orang Tua">Orang Tua</option>
            </select>
      </td>
      <td style="width:350px;">
        <input type="text" class="form-control"  name="no_akta_kwn" placeholder="NO AKTA KAWIN" required>
      </td>
      <td style="width:350px;">
        <select name="pekerjaan" class="form-control">
              <option value="Belum/ Tidak Bekerja">Belum/ Tidak Bekerja</option>
              <option value="Petani">Petani</option>
              <option value="Pedagang">Pedagang</option>
              <option value="Buruh Harian Lepas">Buruh Harian Lepas</option>
              <option value="Karyawan Swasta">Karyawan Swasta</option>
              <option value="PNS">PNS</option>
              <option value="Pelajar/ Mahasiswa">Pelajar/ Mahasiswa</option>
            </select>
      </td>
  </tr>
  
  <tr><td colspan="3">
          
        	<button type="submit" class="btn btn-primary">Tambah</button></td></tr>
  </table></center>
</div>
<?php ?> 
  