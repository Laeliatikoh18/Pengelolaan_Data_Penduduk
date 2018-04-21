<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
$k=$_GET['container'];
$container    = $_GET['container'];
?>
<?php
include "koneksi.php";
//include "fungsi_thumb.php";
$id_jadwal =$_POST['id_jadwal'];
$hari =$_POST['hari'];
$jam_pelajaran =$_POST['jam_pelajaran'];
$id_kelas =$_POST['id_kelas'];


$sql="INSERT INTO jadwal (
id_jadwal ,
hari,
jam_pelajaran,
id_kelas
) VALUES ('$id_jadwal','$hari','$jam_pelajaran','$id_kelas')";

$query=mysql_query($sql) or die(mysql_error());
echo "<center><b><h1>tambah berhasil</h1></b></center>";
echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=index.php?container=manajement_jadwal">';

?>
 