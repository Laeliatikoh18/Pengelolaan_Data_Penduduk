<?php

include "koneksi.php";

$nik = $_POST['nik'];
$nama_lgkp = $_POST['nama_lgkp'];
$tgl_lhr= $_POST['tgl_lhr'];
$jk = $_POST['jk'];
$status_kwn = $_POST['status_kwn'];
$alamat_asal = $_POST['alamat_asal'];
$alamat_tujuan = $_POST['alamat_tujuan'];
$alasan_pindah = $_POST['alasan_pindah'];
$id_kelahiran = $_POST['id_kelahiran'];

$sql="INSERT INTO penduduk_keluar SET 
nik = '$nik',
nama_lgkp = '$nama_lgkp',
tgl_lhr='$tgl_lhr',
jk='$jk',
status_kwn='$status_kwn',
alamat_asal='$alamat_asal',
alamat_tujuan='$alamat_tujuan',
alasan_pindah='$alasan_pindah'";

mysql_query($sql);
$sql2="DELETE FROM data_penduduk WHERE nik = '$nik'";
mysql_query($sql2);
$sql3="DELETE FROM kelahiran WHERE id_kelahiran = '$id_kelahiran'";
mysql_query($sql3);
$sql4="DELETE FROM penduduk_masuk WHERE nik = '$nik'";
mysql_query($sql4);



echo "<center><b><h1>daftar berhasil</h1></b></center>";
echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=user.php?container=pindah_keluar">';

?>