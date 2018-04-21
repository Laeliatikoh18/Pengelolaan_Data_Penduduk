<?php
$no_id= $_GET['no_id'];

include "koneksi.php";


//untuk menghapus data di database
$sql1="DELETE FROM data_penduduk WHERE no_id = '$no_id'";
mysql_query($sql1);
$sql2="DELETE FROM penduduk_masuk WHERE no_id = '$no_id'";
mysql_query($sql2);
echo "<strong><center>Data Terhapus";
echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=admin.php?container=pindah_masuk">';

?>

