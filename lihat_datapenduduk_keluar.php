<?php
                          include "koneksi.php";
                          $nik = $_GET['nik'];
                          $query = mysql_query("select * from penduduk_keluar where nik ='$nik'");
                          $tampilData = mysql_fetch_array($query);
                          

                          
                          
                        ?>

<div class="container">
<h2 align="center">Data Penduduk Keluar</h2>
<br><br>
    <style>
    th, td {
    padding: 5px;
    }</style>

  <center>
  <table border="0">


  <tr><td>NIK</td><td>:</td><td><?php echo $tampilData['nik']; ?></td></tr>
  <tr><td>Nama</td><td>:</td><td><?php echo $tampilData['nama_lgkp']; ?></td></tr>
  <tr><td>Tanggal Lahir</td><td>:</td><td><?php echo $tampilData['tgl_lhr'];?></td></tr>
  <tr><td>Jenis Kelamin</td><td>:</td><td><?php echo $tampilData['jk'];?></td></tr>
  <tr><td>Status Kawin</td><td>:</td><td><?php echo $tampilData['status_kwn'];?></td></tr>
  <tr><td>Alamat Asal</td><td>:</td><td><?php echo $tampilData['alamat_asal'];?></td></tr>
  <tr><td>Alamat Tujuan</td><td>:</td><td><?php echo $tampilData['alamat_tujuan'];?></td></tr>
  <tr><td>Alasan Pindah</td><td>:</td><td><?php echo $tampilData['alasan_pindah'];?></td></tr>
  <tr><td colspan="3">
          
      <a href="laporan_pindahkeluar.php?nik=<?php echo $nik; ?>" class="btn btn-primary" target="_blank">Cetak</a></td></tr>
  </table></center>
</div>