<?php
$nik= $_GET['nik'];

include "koneksi.php";


//untuk menghapus data di database
$sql2="DELETE FROM penduduk_keluar WHERE nik = '$nik'";
mysql_query($sql2);
echo "<strong><center>Data Terhapus";
echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=admin.php?container=pindah_keluar">';

?>

