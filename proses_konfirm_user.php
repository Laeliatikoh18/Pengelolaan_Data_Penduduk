<?php
include 'koneksi.php';
	$nik= $_GET['nik'];
	$sql = "update kematian set send='2' where nik='$nik'";
    mysql_query($sql);
    echo "<META HTTP-EQUIV='REFRESH' CONTENT = '1; URL=user.php?container=permintaan_user'>";
?>