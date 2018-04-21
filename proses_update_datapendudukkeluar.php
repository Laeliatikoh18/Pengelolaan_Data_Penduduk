<?php
include "koneksi.php";

$nik =$_POST['nik'];
$nama_lgkp =$_POST['nama_lgkp'];
$jk =$_POST['jk'];
$tgl_lhr =$_POST['tgl_lhr'];
$status_kwn =$_POST['status_kwn'];
$alamat_asal =$_POST['alamat_asal'];
$alamat_tujuan =$_POST['alamat_tujuan'];
$alasan_pindah =$_POST['alasan_pindah'];
$no_id =$_POST['no_id'];


$sql="UPDATE penduduk_keluar SET
nik='$nik',
nama_lgkp='$nama_lgkp',
jk='$jk',
tgl_lhr='$tgl_lhr',
status_kwn='$status_kwn',
alamat_asal='$alamat_asal',
alamat_tujuan='$alamat_tujuan',
alasan_pindah='$alasan_pindah'
WHERE no_id='$no_id'";

$query=mysql_query($sql)or die (mysql_error());
echo "<center><b><h1>edit berhasil</h1></b></center>";
echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=admin.php?container=pindah_keluar">';

?>
 