<?php
include "koneksi.php";

$nik =$_POST['nik'];
$nama_lgkp =$_POST['nama_lgkp'];
$jk =$_POST['jk'];
$tgl_lhr =$_POST['tgl_lhr'];
$agama =$_POST['agama'];
$status_kwn =$_POST['status_kwn'];
$rt =$_POST['rt'];
$rw =$_POST['rw'];
$alamat_asal =$_POST['alamat_asal'];
$alasan_pindah =$_POST['alasan_pindah'];
$no_id =$_POST['no_id'];




$sql="UPDATE penduduk_masuk SET
alamat_asal='$alamat_asal',
alasan_pindah='$alasan_pindah'
WHERE no_id='$no_id'";

$sql1="UPDATE data_penduduk SET
nik='$nik',
nama_lgkp='$nama_lgkp',
jk='$jk',
tgl_lhr='$tgl_lhr',
agama='$agama',
status_kwn='$status_kwn',
rt='$rt',
rw='$rw'
WHERE no_id='$no_id'";


$query=mysql_query($sql)or die (mysql_error());
$query1=mysql_query($sql1)or die (mysql_error());
echo "<center><b><h1>daftar berhasil</h1></b></center>";
echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=admin.php?container=pindah_masuk">';

?>
 