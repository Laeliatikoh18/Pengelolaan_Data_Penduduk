<?php
                          include "koneksi.php";
                          $nik = $_GET['nik'];
                          $query = "select * from kematian where nik ='$nik'";
                          $tampil = mysql_query($query) or die("Gagal dalam menampilkan data");
                          while($tampilData = mysql_fetch_array($tampil)){

                          
                          
                        ?>

<div class="container">
<h2 align="center">Data Penduduk</h2>
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
  <tr><td>Tanggal Kematian</td><td>:</td><td><?php echo $tampilData['tgl_kematian'];?></td></tr>
  <tr><td>Waktu Kematian</td><td>:</td><td><?php echo $tampilData['pukul'];?></td></tr>
  <tr><td>Sebab Kematian</td><td>:</td><td><?php echo $tampilData['sebab_kematian'];?></td></tr>
  <tr><td>Tempat Kematian</td><td>:</td><td><?php echo $tampilData['tmpt_kematian'];?></td></tr>
  <tr><td>Yang Menerangkan</td><td>:</td><td><?php echo $tampilData['yg_menerangkan'];?></td></tr>
  <tr><td>NIK Saksi</td><td>:</td><td><?php echo $tampilData['nik_saksi'];?></td></tr>
  <tr><td>Nama Saksi</td><td>:</td><td><?php echo $tampilData['nama_saksi'];?></td></tr>
  <tr><td>Tanggal Lahir Saksi</td><td>:</td><td><?php echo $tampilData['tgl_lhr_saksi'];?></td></tr>
  <tr><td>Alamat Saksi</td><td>:</td><td><?php echo $tampilData['alamat_saksi'];?></td></tr>
  <tr><td>Nama Pelapor</td><td>:</td><td><?php echo $tampilData['nama_pelapor'];?></td></tr>
  
  
  </td></tr>
  <tr><td colspan="3">
          
  <a href="laporan_kematian.php?nik=<?php echo $nik; ?>" class="btn btn-primary" target="_blank">Cetak</a>
  </table></center>
</div>
<?php } ?>