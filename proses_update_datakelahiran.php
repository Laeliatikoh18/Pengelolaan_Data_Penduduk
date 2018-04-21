<?php
include "koneksi.php";

$id_kelahiran =$_POST['id_kelahiran'];
$no_kk = $_POST['no_kk'];
$nama_lgkp =$_POST['nama_lgkp'];
$jk =$_POST['jk'];
$tmpt_lhr =$_POST['tmpt_lhr'];
$tgl_lhr =$_POST['tgl_lhr'];
$pukul =$_POST['pukul'];
$alamat =$_POST['alamat'];
$rt =$_POST['rt'];
$rw =$_POST['rw'];
$jenis_kelahiran =$_POST['jenis_kelahiran'];
$kelahiran_ke =$_POST['kelahiran_ke'];
$penolong_kelahiran =$_POST['penolong_kelahiran'];
$berat_bayi =$_POST['berat_bayi'];
$panjang_bayi =$_POST['panjang_bayi'];
$nik_ibu =$_POST['nik_ibu'];
$nama_lgkp_ibu =$_POST['nama_lgkp_ibu'];
$tanggal_pernikahan =$_POST['tanggal_pernikahan'];
$nik_ayah =$_POST['nik_ayah'];
$nama_lgkp_ayah =$_POST['nama_lgkp_ayah'];
$pelapor =$_POST['pelapor'];
$nik_saksi =$_POST['nik_saksi'];
$nama_saksi =$_POST['nama_saksi'];
$tgl_lhr_saksi =$_POST['tgl_lhr_saksi'];
$alamat_saksi =$_POST['alamat_saksi'];





$sql="UPDATE kelahiran SET
pukul='$pukul',
jenis_kelahiran='$jenis_kelahiran',
kelahiran_ke='$kelahiran_ke',
penolong_kelahiran='$penolong_kelahiran',
berat_bayi='$berat_bayi',
panjang_bayi='$panjang_bayi',
pelapor='$pelapor',
nik_saksi='$nik_saksi',
nama_saksi='$nama_saksi',
tgl_lhr_saksi='$tgl_lhr_saksi',
alamat_saksi='$alamat_saksi',
tanggal_pernikahan='$tanggal_pernikahan'
WHERE id_kelahiran='$id_kelahiran'";

$query=mysql_query($sql)or die (mysql_error());
$sql1="UPDATE data_penduduk SET
no_kk='$no_kk',
nama_lgkp='$nama_lgkp',
jk='$jk',
tmpt_lhr='$tmpt_lhr',
tgl_lhr='$tgl_lhr',
nik_ibu='$nik_ibu',
alamat='$alamat',
rt='$rt',
rw='$rw',
nama_lgkp_ibu='$nama_lgkp_ibu',
nik_ayah='$nik_ayah',
nama_lgkp_ayah='$nama_lgkp_ayah'
WHERE no_id='$id_kelahiran'";

$query1=mysql_query($sql1)or die (mysql_error());

echo "<center><b><h1>daftar berhasil</h1></b></center>";
echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=admin.php?container=kelahiran">';

?>
 