		<?php
$no	  = $_GET['no'];

include "koneksi.php";


//untuk menghapus data di database
$sql2="DELETE FROM `kp`.`user` WHERE `no` = $no ";
mysql_query($sql2);
echo "<strong><center>Data Terhapus";
echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=admin.php?container=manajement_user">';

?>

