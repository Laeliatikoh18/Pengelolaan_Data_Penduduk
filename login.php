<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();

$id1=$_SESSION['id'];
$id2=session_id();


echo "<div id='center_content'>
	

<center>        
<form action='sclogin.php?op=in' method='post'>

<table>
<tr>
<td><h1>Login</h1></td>
<td></td>

<td></td>
</tr>

<tr>
<td>username<td>
<td>:<td>
<td>
<input type='text' name='username'>
<td>
</tr>

<tr>
<td>password<td>
<td>:<td>
<td>
<input type='password' name='password'>
<td>
</tr>


<tr>
<td><td>
<td><td>
<td>
<button type='submit' class='btn btn-sm btn-info'>Login</button>
<button type='reset' class='btn btn-sm btn-info'>Reset</button></td>
</tr>
<tr>

</tr>
</table>
</center>
</form>
</body>
</html>        
		</div>
		";

if (isset($_SESSION['level']))
{
    // jika level admin
    if ($_SESSION['level'] == "admin")
   {   
    header('admin.php');
   }
   else if ($_SESSION['level'] == "user")
   {   
    header('user.php');
   }
   else if ($_SESSION['level'] == "kades")
   {   
    header('kades.php');
   }
}

?>     


