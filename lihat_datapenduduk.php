<?php
                          include "koneksi.php";
                          $no_id = $_GET['no_id'];
                          $query = "select * from data_penduduk where no_id ='$no_id'";
                          $tampil = mysql_query($query) or die("Gagal dalam menampilkan data");
                          $tampilData = mysql_fetch_array($tampil)
                            //$image        = $tampilData['foto'];

                          
                          
                        ?>

<div class="container">
<h2 align="center">Data Penduduk</h2>
<br><br>
    <style>
    th, td {
    padding: 5px;
    }</style>

  <center>
  <img src="<?php echo $tampilData['foto']; ?>" height="150" />
  <br>
  <table border="0">

  <tr><td>No KK</td><td>:</td><td><?php echo $tampilData['no_kk']; ?></td></tr>
  <tr><td>NIK</td><td>:</td><td><?php echo $tampilData['nik']; ?></td></tr>
  <tr><td>Nama</td><td>:</td><td><?php echo $tampilData['nama_lgkp']; ?></td></tr>
  <tr><td>Alamat</td><td>:</td><td><?php echo $tampilData['alamat']; ?></td></tr>
  <tr><td>RT</td><td>:</td><td><?php echo $tampilData['rt']; ?></td></tr>
  <tr><td>RW</td><td>:</td><td><?php echo $tampilData['rw']; ?></td></tr>
  <tr><td>Status Hubungan Dalam Rumah Tangga</td><td>:</td><td><?php echo $tampilData['shdk']; ?></td></tr>
  <tr><td>Tempat lahir</td><td>:</td><td><?php echo $tampilData['tmpt_lhr']; ?></td></tr>
  <tr><td>Tanggal Lahir</td><td>:</td><td><?php echo $tampilData['tgl_lhr'];?></td></tr>
  <tr><td>Jenis Kelamin</td><td>:</td><td><?php echo $tampilData['jk'];?></td></tr>
  <tr><td>Golongan Darah</td><td>:</td><td><?php echo $tampilData['gol_darah'];?></td></tr>
  <tr><td>Status Kawin</td><td>:</td><td><?php echo $tampilData['status_kwn'];?></td></tr>
  <tr><td>No Akta Lahir</td><td>:</td><td><?php echo $tampilData['no_akta_lhr'];?></td></tr>
  <tr><td>No Akta Kawin</td><td>:</td><td><?php echo $tampilData['no_akta_kwn'];?></td></tr>
  <tr><td>NIK Ibu</td><td>:</td><td><?php echo $tampilData['nik_ibu'];?></td></tr>
  <tr><td>Nama Ibu</td><td>:</td><td><?php echo $tampilData['nama_lgkp_ibu'];?></td></tr>
  <tr><td>NIK Ayah</td><td>:</td><td><?php echo $tampilData['nik_ayah'];?></td></tr>
  <tr><td>Nama Ayah</td><td>:</td><td><?php echo $tampilData['nama_lgkp_ayah'];?></td></tr>
  <tr><td>Agama</td><td>:</td><td><?php echo $tampilData['agama'];?></td></tr>
  <tr><td>Pendidikan</td><td>:</td><td><?php echo $tampilData['pendidikan'];?></td></tr>
  <tr><td>Pekerjaan</td><td>:</td><td><?php echo $tampilData['pekerjaan'];?></td></tr>
  </table></center>
</div>