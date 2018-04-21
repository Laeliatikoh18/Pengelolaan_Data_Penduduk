<?php
$no_id= $_GET['no_id'];

include "koneksi.php";


//untuk menghapus data di database
$sql2="DELETE FROM data_penduduk WHERE no_id = '$no_id'";
mysql_query($sql2);
$sql="DELETE FROM penduduk_masuk WHERE no_id = '$no_id'";
mysql_query($sql);
$sql3="DELETE FROM kelahiran WHERE id_kelahiran = '$no_id'";
mysql_query($sql3);
echo "<strong><center>Data Terhapus";
echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=admin.php?container=penduduk">';

?>

