<?php

include "koneksi.php";
$nik = $_POST['nik'];
$nama_lgkp = $_POST['nama_lgkp'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$tgl_lhr= $_POST['tgl_lhr'];
$tgl_kematian =$_POST['tgl_kematian'];
$pukul =$_POST['pukul'];
$sebab_kematian =$_POST['sebab_kematian'];
$tmpt_kematian =$_POST['tmpt_kematian'];
$yg_menerangkan =$_POST['yg_menerangkan'];
$nama_pelapor =$_POST['nama_pelapor'];
$nik_saksi =$_POST['nik_saksi'];
$nama_saksi =$_POST['nama_saksi'];
$nama_pelapor =$_POST['nama_pelapor'];
$tgl_lhr_saksi =$_POST['tgl_lhr_saksi'];
$alamat_saksi =$_POST['alamat_saksi'];
$no_id =$_POST['no_id'];

$sql="UPDATE kematian SET 
nik = '$nik',
nama_lgkp = '$nama_lgkp',
alamat = '$alamat',
jk = '$jk',
tgl_lhr='$tgl_lhr',
tgl_kematian='$tgl_kematian',
pukul='$pukul',
sebab_kematian ='$sebab_kematian',
tmpt_kematian = '$tmpt_kematian',
yg_menerangkan = '$yg_menerangkan',
nik_saksi = '$nik_saksi',
nama_saksi = '$nama_saksi',
tgl_lhr_saksi ='$tgl_lhr_saksi',
alamat_saksi ='$alamat_saksi',
send='0',
konfirm='0',
nama_pelapor = '$nama_pelapor'
WHERE no_id='$no_id'";
$query=mysql_query($sql)or die (mysql_error());


echo "<center><b><h1>daftar berhasil</h1></b></center>";
echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=admin.php?container=kematian">';

?>