<?php
                          include "koneksi.php";
                          $no_id = $_GET['no_id'];
                          $query = "select * from data_penduduk where no_id ='$no_id'";
                          $tampil = mysql_query($query) or die("Gagal dalam menampilkan data");
                          $tampilData = mysql_fetch_array($tampil);

                          
                          
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
<div 
<div class="container">
<h2 align="center">Edit Data Penduduk</h2>
<br><br>
  <form id="formID" action= "proses_update_datapenduduk.php" method= "POST" enctype="multipart/form-data" >
  <style>
    th, td {
    padding: 5px;
    }</style>

  <center><table>

  <tr><td>No KK</td><td>Tempat Lahir</td><td>NIK Ibu</td></tr>
  <tr><td style="width:350px;">
	     <input type="text" class="form-control"  name="no_kk" value="<?php echo $tampilData['no_kk']; ?>"></td>
       <td style="width:350px;"><input type="text" class="form-control"  name="tmpt_lhr" value="<?php echo $tampilData['tmpt_lhr']; ?>">
        </td>
      <td style="width:350px;">
        <input type="text" class="form-control"  name="nik_ibu" value="<?php echo $tampilData['nik_ibu']; ?>">
      </td></tr>
  <tr><td>NIK</td><td>Tanggal Lahir</td><td>Nama Lengkap Ibu</td></tr>
  <tr><td style="width:350px;">
      <input type="text" class="form-control"  name="nik" value="<?php echo $tampilData['nik']; ?>"></td>
      <td style="width:350px;">
      <div class='input-group date' id='datetimepicker'>
      <input type="text" class="form-control tanggal"  name="tgl_lhr" value="<?php echo $tampilData['tgl_lhr']; ?>">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span></div></td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="nama_lgkp_ibu" value="<?php echo $tampilData['nama_lgkp_ibu']; ?>">
      </td>
      </tr>
  <tr><td>Nama</td><td>Jenis Kelamin</td><td>NIK Ayah</td></tr>
  <tr><td style="width:350px;">
      <input type="text" class="form-control"  name="nama_lgkp" value="<?php echo $tampilData['nama_lgkp']; ?>">
      </td>
      <td style="width:350px;">
        <select name="jk" class="form-control" >
              <option value="Perempuan"<?php if($tampilData['jk']=="Perempuan") echo "selected";?>>Perempuan</option>
              <option value="Laki Laki"<?php if($tampilData['jk']=="Laki Laki") echo "selected";?>>Laki Laki</option>
            </select>
      </td>
      <td style="width:350px;">
        <input type="text" class="form-control"  name="nik_ayah" value="<?php echo $tampilData['nik_ayah']; ?>">
      </td>
  </tr>
  <tr><td>Alamat</td><td>Golongan Darah</td><td>Nama Lengkap Ayah</td></tr>
  <tr><td style="width:350px;">
      <select name="alamat" class="form-control">
              <option value="Dusun Karang"<?php if($tampilData['alamat']=="Dusun Karang") echo "selected";?>>Dusun Karang</option>
              <option value="Dusun Kemancan"<?php if($tampilData['alamat']=="Dusun Kemancan") echo "selected";?>>Dusun Kemancan</option>
              <option value="Dusun Krajan"<?php if($tampilData['alamat']=="Dusun Krajan") echo "selected";?>>Dusun Krajan</option>
            </select>
      </td>
      <td style="width:350px;">
      <select name="gol_darah" class="form-control">
              <option value="A"<?php if($tampilData['gol_darah']=="A") echo "selected";?>>A</option>
              <option value="B"<?php if($tampilData['gol_darah']=="B") echo "selected";?>>B</option>
              <option value="AB"<?php if($tampilData['gol_darah']=="AB") echo "selected";?>>AB</option>
              <option value="O"<?php if($tampilData['gol_darah']=="O") echo "selected";?>>O</option>
            </select>
      </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="nama_lgkp_ayah" <option value="<?php echo $tampilData['nama_lgkp_ayah']; ?>"></option>
      </td>
  </tr>
  <tr><td>RT</td><td>Status Kawin</td><td>Agama</td></tr>
  <tr><td style="width:350px;">
      <select name="rt" class="form-control">
              <option value="1"<?php if($tampilData['rt']=="1") echo "selected";?>>1</option>
              <option value="2"<?php if($tampilData['rt']=="2") echo "selected";?>>2</option>
              <option value="3"<?php if($tampilData['rt']=="3") echo "selected";?>>3</option>
              <option value="4"<?php if($tampilData['rt']=="4") echo "selected";?>>4</option>
            </select>
      </td>
      <td style="width:350px;">
       <select name="status_kwn" class="form-control">
              <option value="Kawin"<?php if($tampilData['status_kwn']=="Kawin") echo "selected";?>>Kawin</option>
              <option value="Belum Kawin"<?php if($tampilData['status_kwn']=="Belum Kawin") echo "selected";?>>Belum Kawin</option>
            </select> 
      </td>
      <td style="width:350px;">
      <select name="agama" class="form-control">
              <option value="Islam"<?php if($tampilData['agama']=="Islam") echo "selected";?>>Islam</option>
              <option value="Kristen"<?php if($tampilData['agama']=="Kristen") echo "selected";?>>Kristen</option>
              <option value="Katolik"<?php if($tampilData['agama']=="Katolik") echo "selected";?>>Katolik</option>
              <option value="Hindu"<?php if($tampilData['agama']=="Hindu") echo "selected";?>>Hindu</option>
              <option value="Budha"<?php if($tampilData['agama']=="Budha") echo "selected";?>>Budha</option>
              <option value="Konghuchu"<?php if($tampilData['agama']=="Konghuchu") echo "selected";?>>Konghuchu</option>
            </select>
      </td>
  </tr>
  <tr><td>RW</td><td>NO Akta Lahir</td><td>Pendidikan</td></tr>
  <tr><td style="width:350px;">
      <select name="rw" class="form-control">
              <option value="1"<?php if($tampilData['rw']=="1") echo "selected";?>>1</option>
              <option value="2"<?php if($tampilData['rw']=="2") echo "selected";?>>2</option>
              <option value="3"<?php if($tampilData['rw']=="3") echo "selected";?>>3</option>
            </select>
      </td>
      <td style="width:350px;">
        <input type="text" class="form-control"  name="no_akta_lhr" <option value="<?php echo $tampilData['no_akta_lhr']; ?>"></option>
      </td>
      <td style="width:350px;">
        <select name="pendidikan" class="form-control">
              <option value="Belum/ Tidak Sekolah"<?php if($tampilData['pendidikan']=="Belum/ Tidak Sekolah") echo "selected";?>>Belum/ Tidak Sekolah</option>
              <option value="SD"<?php if($tampilData['pendidikan']=="SD") echo "selected";?>>SD</option>
              <option value="SLTP Sederajat"<?php if($tampilData['pendidikan']=="SLTP Sederajat") echo "selected";?>>SLTP Sederajat</option>
              <option value="SLTA Sederajat"<?php if($tampilData['pendidikan']=="SLTA Sederajat") echo "selected";?>>SLTA Sederajat</option>
              <option value="Diploma I"<?php if($tampilData['pendidikan']=="Diploma I") echo "selected";?>>Diploma I</option>
              <option value="Diploma II"<?php if($tampilData['pendidikan']=="Diploma II") echo "selected";?>>Diploma II</option>
              <option value="Diploma III"<?php if($tampilData['pendidikan']=="Diploma III") echo "selected";?>>Diploma III</option>
              <option value="Diploma IV" <?php if($tampilData['pendidikan']=="Diploma IV") echo "selected";?>>Diploma IV</option>
              <option value="Sarjana I(S1)"<?php if($tampilData['pendidikan']=="Sarjana I(S1)") echo "selected";?>>Sarjana I(S1)</option>
            </select>
      </td>
  </tr>
  <tr><td>SHDK</td><td>NO Akta Kawin</td><td>Pekerjaan</td></tr>
  <tr><td style="width:350px;">
      <select name="shdk" class="form-control">
              <option value="KK"<?php if($tampilData['shdk']=="KK") echo "selected";?>>KK</option>
              <option value="Istri"<?php if($tampilData['shdk']=="Istri") echo "selected";?>>Istri</option>
              <option value="Anak"<?php if($tampilData['shdk']=="Anak") echo "selected";?>>Anak</option>
              <option value="Orang Tua"<?php if($tampilData['shdk']=="Orang Tua") echo "selected";?>>Orang Tua</option>
            </select>
      </td>
      <td style="width:350px;">
        <input type="text" class="form-control"  name="no_akta_kwn" <option value="<?php echo $tampilData['no_akta_kwn']; ?>"></option>
      </td>
      <td style="width:350px;">
        <select name="pekerjaan" class="form-control">
              <option value="Belum/ Tidak Bekerja"<?php if($tampilData['pekerjaan']=="Belum/ Tidak Bekerja") echo "selected";?>>Belum/ Tidak Bekerja</option>
              <option value="Petani"<?php if($tampilData['pekerjaan']=="Petani") echo "selected";?>>Petani</option>
              <option value="Pedagang"<?php if($tampilData['pekerjaan']=="Pedagang") echo "selected";?>>Pedagang</option>
              <option value="Buruh Harian Lepas"<?php if($tampilData['pekerjaan']=="Buruh Harian Lepas") echo "selected";?>>Buruh Harian Lepas</option>
              <option value="Karyawan Swasta"<?php if($tampilData['pekerjaan']=="Karyawan Swasta") echo "selected";?>>Karyawan Swasta</option>
              <option value="PNS"<?php if($tampilData['pekerjaan']=="PNS") echo "selected";?>>PNS</option>
              <option value="Perangkat Desa"<?php if($tampilData['pekerjaan']=="Perangkat Desa") echo "selected";?>>Perangkat Desa</option>
              <option value="Pelajar/ Mahasiswa"<?php if($tampilData['pekerjaan']=="Pelajar/ Mahasiswa") echo "selected";?>>Pelajar/ Mahasiswa</option>
              <option value="Mengurus Rumah Tangga"<?php if($tampilData['pekerjaan']=="Mengurus Rumah Tangga") echo "selected";?>>Mengurus Rumah Tangga</option>
            </select>
      </td>
  </tr>
  <tr><td>No Id</td><td>FOTO</td></tr>
  <tr><td style="width:350px;">
      <input type="text" class="form-control"  name="no id" <option value="<?php echo $tampilData['no_id']; ?>"></option>
      <td style="width:350px;">
      <input type="file" name="fileToUpload" id="foto" ></td>
  </tr>
  
  <tr><td colspan="3">
          
        	<input type="submit" name="submit" class="btn btn-primary" value="Edit"></td></tr>
  </table></center>
  </form>
</div>
