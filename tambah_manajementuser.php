<div class="container">		
<form action="proses_tambah_manajementuser.php" method="post" id="formID" class="formular" enctype="multipart/form-data">
<br><br><br><br>
<h1><center> Tambah User</h1></center>
<center>
<style>
th, td {
    padding: 5px;
}</style>
<table>

  <tr>
    <td>Username </td>
    <td>:</td>
    <td>
	<input type="text" name="username" class="validate[required,custom[integer]] text-input"  >
	
	</td>
  </tr>
  
  <tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="password" class="validate[required,custom[onlyLetterSp]] text-input"></td>
  </tr>
   
  <tr>
    <td>Level </td>
    <td>:</td>
    <td>
    <select name="level" class="form-control">
              <option value="admin">admin</option>
              <option value="user">user</option>
              <option value="kades">kades</option>
    </select>
		
	</td>
  </tr>

    
    <td colspan=3><button type='submit' class='btn btn-sm btn-info'>Kirim</button></td></tr>


	</table>


</center>	
</form>
</div>

