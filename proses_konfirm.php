<?php
include 'koneksi.php';
	$nik= $_GET['nik'];
	$sql = "update kematian set send='1', konfirm='1' where nik='$nik'";
    mysql_query($sql);
    echo "<META HTTP-EQUIV='REFRESH' CONTENT = '1; URL=admin.php?container=kematian'>";
?>