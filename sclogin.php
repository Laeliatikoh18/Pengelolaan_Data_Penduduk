<?php
session_start();
mysql_connect("localhost","root","") or die("Tidak bisa koneksi");
mysql_select_db("kp");

$username = $_POST['username'];
$password = md5($_POST['password']);
$op = $_GET['op'];

if($op=="in"){


	$cek = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password' AND Valid='1'  "  )	;

	if(mysql_num_rows($cek)==1){
		$c = mysql_fetch_array($cek);
		$_SESSION['username'] = $c['username'];
		$_SESSION['level'] = $c['level'];


		if($c['level']=="user"){		
			echo "<script>window.location='user.php'</script>";
		}else if($c['level']=="admin"){
			echo "<script>window.location='admin.php'</script>";
		}else if($c['level']=="kades"){
			echo "<script>window.location='kades.php'</script>";
		}
	}else{
	
	
		die("<center>Password  yang anda masukan salah  atau akun anda belum di validasi admin<br><h3> <a href=\"javascript:history.back()\">kembali</a><h3></center>");
	}
}

?>


