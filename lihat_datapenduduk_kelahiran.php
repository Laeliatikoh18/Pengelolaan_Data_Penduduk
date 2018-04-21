<?php
                          include "koneksi.php";
                          $no_id = $_GET['id_kelahiran'];
                          $query = mysql_query("select * from kelahiran where id_kelahiran ='$no_id'");
                          $query1 = mysql_query("select * from data_penduduk where no_id ='$no_id'");
                          $tampilData = mysql_fetch_array($query);
                          $tampilData1 = mysql_fetch_array($query1);

                          
                          
                        ?>

<div class="container">
<h2 align="center">Data Kelahiran</h2>
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
  <tr><td>ID Kelahiran</td><td>:</td><td><?php echo $tampilData['id_kelahiran']; ?></td></tr>
  <tr><td>Nama</td><td>:</td><td><?php echo $tampilData1['nama_lgkp']; ?></td></tr>
  <tr><td>Tempat lahir</td><td>:</td><td><?php echo $tampilData1['tmpt_lhr']; ?></td></tr>
  <tr><td>Tanggal Lahir</td><td>:</td><td><?php echo $tampilData1['tgl_lhr'];?></td></tr>
  <tr><td>Jenis Kelamin</td><td>:</td><td><?php echo $tampilData1['jk'];?></td></tr>
  <tr><td>Waktu Kelahiran</td><td>:</td><td><?php echo $tampilData['pukul'];?> WIB</td></tr>
  <tr><td>Jenis Kelahiran</td><td>:</td><td><?php echo $tampilData['jenis_kelahiran'];?></td></tr>
  <tr><td>Kelahiran Ke-</td><td>:</td><td><?php echo $tampilData['kelahiran_ke'];?></td></tr>
  <tr><td>Penolong Kelahiran</td><td>:</td><td><?php echo $tampilData['penolong_kelahiran'];?></td></tr>
  <tr><td>Berat Bayi</td><td>:</td><td><?php echo $tampilData['berat_bayi'];?> Kg</td></tr>
  <tr><td>Panjang Bayi</td><td>:</td><td><?php echo $tampilData['panjang_bayi'];?> Cm</td></tr>
  <tr><td>Tanggal Pernikahan Orang Tua</td><td>:</td><td><?php echo $tampilData['tanggal_pernikahan'];?></td></tr>
  <tr><td>NIK Ibu</td><td>:</td><td><?php echo $tampilData1['nik_ibu'];?></td></tr>
  <tr><td>Nama Ibu</td><td>:</td><td><?php echo $tampilData1['nama_lgkp_ibu'];?></td></tr>
  <tr><td>NIK Ayah</td><td>:</td><td><?php echo $tampilData1['nik_ayah'];?></td></tr>
  <tr><td>Nama Ayah</td><td>:</td><td><?php echo $tampilData1['nama_lgkp_ayah'];?></td></tr>
  <tr><td>NIK Saksi</td><td>:</td><td><?php echo $tampilData['nik_saksi'];?></td></tr>
  <tr><td>Nama Saksi</td><td>:</td><td><?php echo $tampilData['nama_saksi'];?></td></tr>
  <tr><td>Tanggal Lahir Saksi</td><td>:</td><td><?php echo $tampilData['tgl_lhr_saksi'];?></td></tr>
  <tr><td>Alamat Saksi</td><td>:</td><td><?php echo $tampilData['alamat_saksi'];?></td></tr>
  <tr><td>Pelapor</td><td>:</td><td><?php echo $tampilData['pelapor'];?></td></tr>
  <tr><td colspan="3">
          
          <a href="laporan_kelahiran.php?no_id=<?php echo $no_id; ?>" class="btn btn-primary" target="_blank">Cetak</a></td></tr>
  </table></center>
</div>