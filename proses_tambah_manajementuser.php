        <?php

$username = $_POST['username'];
$password	  = md5($_POST['password']);
$level =$_POST['level'];

include "koneksi.php";



$sql="INSERT INTO `user`  (
`no`,
`username` ,
`password`,
`Valid`,
`level`
)
VALUES (  NULL,'$username',  '$password','1','$level'
)";


mysql_query($sql);
echo "<center><b><h1>daftar berhasil</h1></b></center>";
echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=admin.php?container=manajement_user">';
		
?>


