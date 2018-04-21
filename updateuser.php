		 <?php
													include "koneksi.php";
													$no = $_GET['no'];
													$query = "select * from user where no ='$no'";
													$tampil = mysql_query($query) or die("Gagal dalam menampilkan data");
													while($tampilData = mysql_fetch_array($tampil)){

													
													
												?>
<div class = "container">
<form action="proses_update_user.php" method="post" id="formID" class="formular" enctype="multipart/form-data">
<br><br><br><br>
<h1><center>Edit User</h1></center>
<center>
<table>
  <tr>
    <td>No</td>
    <td>:</td>
    <td><input type="text" name="no" value="<?php echo $tampilData['no']; ?>"class="validate[required,custom[onlyLetterSp]] text-input"></td>
  </tr>

  <tr>
    <td>Username </td>
    <td>:</td>
    <td>
	<input type="text" name="username" value="<?php echo $tampilData['username']; ?>"class="validate[required,custom[integer]] text-input"  >
	
	</td>
  </tr>
  
  <tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="password" value="<?php echo $tampilData['password']; ?>"class="validate[required,custom[onlyLetterSp]] text-input"></td>
  </tr>

  <tr>
    <td>Password Baru</td>
    <td>:</td>
    <td><input type="password" name="passwordbaru" class="validate[required,custom[onlyLetterSp]] text-input"></td>
  </tr>

   <tr>
    <td>Level</td>
    <td>:</td>
    <td>
    <select name="level" class="form-control">
              <option value="admin"<?php if($tampilData['level']=="admin") echo "selected";?>>admin</option>
              <option value="user"<?php if($tampilData['level']=="user") echo "selected";?>>user</option>
              <option value="kades"<?php if($tampilData['kades']=="user") echo "selected";?>>kades</option>
    </select>
    </td>
  </tr>
 
  
    <td colspan=3><button type='submit' class='btn btn-sm btn-info'>Edit</button></td>

	</table>


</center>	
</form>
</div>
													<?php } ?>

