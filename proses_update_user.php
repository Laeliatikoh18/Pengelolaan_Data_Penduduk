        <?php
$no	  = $_POST['no'];
$username = $_POST['username'];
$password =$_POST['password'];
$passwordbaru =md5($_POST['passwordbaru']);
$level =$_POST['level'];


include "koneksi.php";


$sql="UPDATE `user` SET
username='$username',
password= '$passwordbaru',
level= '$level'
WHERE `no` = '$no'";



mysql_query($sql);
echo "<center><b><h1>update data user berhasil</h1></b></center>";
echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=admin.php?container=manajement_user">';
	



?>




		