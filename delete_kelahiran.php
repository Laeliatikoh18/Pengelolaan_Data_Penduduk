<?php
$id_kelahiran= $_GET['id_kelahiran'];

include "koneksi.php";


//untuk menghapus data di database
$sql="DELETE FROM data_penduduk WHERE no_id = '$id_kelahiran'";
mysql_query($sql);
$sql2="DELETE FROM kelahiran WHERE id_kelahiran = '$id_kelahiran'";
mysql_query($sql2);


echo "<strong><center>Data Terhapus";
echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=admin.php?container=kelahiran">';

?>

