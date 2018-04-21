<?php
                          include "koneksi.php";
                          $no_id = $_GET['no_id'];
                          $query = mysql_query("select * from penduduk_masuk where no_id ='$no_id'");
                          $query1 = mysql_query("select * from data_penduduk where no_id ='$no_id'");
                          $tampilData = mysql_fetch_array($query);
                          $tampilData1 = mysql_fetch_array($query1);

                          
                          
                        ?>

<div class="container">
<h2 align="center">Data Penduduk Masuk</h2>
<br><br>
    <style>
    th, td {
    padding: 5px;
    }</style>

  <center>
  <img src="<?php echo $tampilData1['foto']; ?>" height="150" />
  <br>

  <center>
  <table border="0">

  <tr><td>No KK</td><td>:</td><td><?php echo $tampilData1['no_kk']; ?></td></tr>
  <tr><td>NIK</td><td>:</td><td><?php echo $tampilData1['nik']; ?></td></tr>
  <tr><td>Nama</td><td>:</td><td><?php echo $tampilData1['nama_lgkp']; ?></td></tr>
  <tr><td>Alamat</td><td>:</td><td><?php echo $tampilData1['alamat']; ?></td></tr>
  <tr><td>RT</td><td>:</td><td><?php echo $tampilData1['rt']; ?></td></tr>
  <tr><td>RW</td><td>:</td><td><?php echo $tampilData1['rw']; ?></td></tr>
  <tr><td>Status Hubungan Dalam Rumah Tangga</td><td>:</td><td><?php echo $tampilData1['shdk']; ?></td></tr>
  <tr><td>Tempat lahir</td><td>:</td><td><?php echo $tampilData1['tmpt_lhr']; ?></td></tr>
  <tr><td>Tanggal Lahir</td><td>:</td><td><?php echo $tampilData1['tgl_lhr'];?></td></tr>
  <tr><td>Jenis Kelamin</td><td>:</td><td><?php echo $tampilData1['jk'];?></td></tr>
  <tr><td>Golongan Darah</td><td>:</td><td><?php echo $tampilData1['gol_darah'];?></td></tr>
  <tr><td>Status Kawin</td><td>:</td><td><?php echo $tampilData1['status_kwn'];?></td></tr>
  <tr><td>No Akta Lahir</td><td>:</td><td><?php echo $tampilData1['no_akta_lhr'];?></td></tr>
  <tr><td>No Akta Kawin</td><td>:</td><td><?php echo $tampilData1['no_akta_kwn'];?></td></tr>
  <tr><td>NIK Ibu</td><td>:</td><td><?php echo $tampilData1['nik_ibu'];?></td></tr>
  <tr><td>Nama Ibu</td><td>:</td><td><?php echo $tampilData1['nama_lgkp_ibu'];?></td></tr>
  <tr><td>NIK Ayah</td><td>:</td><td><?php echo $tampilData1['nik_ayah'];?></td></tr>
  <tr><td>Nama Ayah</td><td>:</td><td><?php echo $tampilData1['nama_lgkp_ayah'];?></td></tr>
  <tr><td>Agama</td><td>:</td><td><?php echo $tampilData1['agama'];?></td></tr>
  <tr><td>Pendidikan</td><td>:</td><td><?php echo $tampilData1['pendidikan'];?></td></tr>
  <tr><td>Pekerjaan</td><td>:</td><td><?php echo $tampilData1['pekerjaan'];?></td></tr>
  <tr><td>Alamat Asal</td><td>:</td><td><?php echo $tampilData['alamat_asal'];?></td></tr>
  <tr><td>Alasan Pindah</td><td>:</td><td><?php echo $tampilData['alasan_pindah'];?></td></tr>
  <tr><td colspan="3">
          
           <a href="laporan_pindahmasuk.php?no_id=<?php echo $no_id; ?>" class="btn btn-primary" target="_blank">Cetak</a></td></tr>
  </table></center>
</div>