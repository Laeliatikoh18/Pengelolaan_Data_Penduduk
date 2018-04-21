<?php

include "koneksi.php";
$id_kelahiran = $_POST['id_kelahiran'];
$nik = $_POST['nik'];
$nama_lgkp = $_POST['nama_lgkp'];
$jk = $_POST['jk'];
$tgl_lhr= $_POST['tgl_lhr'];
$tgl_kematian =$_POST['tgl_kematian'];
$pukul =$_POST['pukul'];
$sebab_kematian =$_POST['sebab_kematian'];
$tmpt_kematian =$_POST['tmpt_kematian'];
$yg_menerangkan =$_POST['yg_menerangkan'];
$nama_pelapor =$_POST['nama_pelapor'];
$alamat =$_POST['alamat'];
$nik_saksi =$_POST['nik_saksi'];
$nama_saksi =$_POST['nama_saksi'];
$tgl_lhr_saksi =$_POST['tgl_lhr_saksi'];
$alamat_saksi =$_POST['alamat_saksi'];


$sql="INSERT INTO kematian SET 
nik = '$nik',
nama_lgkp = '$nama_lgkp',
alamat = 'alamat',
jk = '$jk',
tgl_lhr='$tgl_lhr',
tgl_kematian='$tgl_kematian',
pukul='$pukul',
sebab_kematian ='$sebab_kematian',
tmpt_kematian = '$tmpt_kematian',
yg_menerangkan = '$yg_menerangkan',
nik_saksi = '$nik_saksi',
nama_saksi = '$nama_saksi',
tgl_lhr_saksi = '$tgl_lhr_saksi',
alamat_saksi = '$alamat_saksi',
nama_pelapor = '$nama_pelapor'";

mysql_query($sql);
$sql2="DELETE FROM data_penduduk WHERE nik = '$nik'";
mysql_query($sql2);
$sql3="DELETE FROM kelahiran WHERE id_kelahiran = '$id_kelahiran'";
mysql_query($sql3);
$sql4="DELETE FROM penduduk_masuk WHERE nik = '$nik'";
mysql_query($sql4);

echo "<center><b><h1>daftar berhasil</h1></b></center>";
echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=user.php?container=kematian">';

?>