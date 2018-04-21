<?php
include 'koneksi.php';
	$nik= $_GET['nik'];
	$sql = "update kematian set konfirm='2' where nik='$nik'";
    mysql_query($sql);
    echo "<META HTTP-EQUIV='REFRESH' CONTENT = '1; URL=kades.php?container=permintaan_kades'>";
?>