<?php
include 'koneksi.php';

  if(empty($_SESSION['username'])AND
    empty($_SESSION['password'])){
    echo "<p><b>Anda Harus Login</b></p>";
}
else{?>
<div class="container">
  <center>
  <h1>Manajement User</h1></center>
             
  <table class="table table-striped">
    <thead>
      <tr>
        <th><h3>No</h3></th>
        <th><h3>Username</h3></th>
        <th><h3>Level</h3></th>
        <th><h3>Password</h3></th>
        <th><h3>Hapus / Update</h3></th>
      </tr>
    </thead>

    <tbody>
    <?php
     
  include "koneksi.php";
  $id=1;
  $sql="SELECT * FROM `user`";
  $hasil=mysql_query($sql);
  while($user=mysql_fetch_array($hasil)){
  
   echo"
   <tr>
    
    <td>".$id++."</td>
    <td>".$user['username']."</td>
    <td>".$user['level']."</td>
    <td>".$user['password']."</td>
    <td><a href='deleteuser.php?no=".$user['no']."' <span class='glyphicon glyphicon-trash'></span> Hapus</a> &nbsp;
    <a href='admin.php?container=updateuser&no=".$user['no']."' <span class='glyphicon glyphicon-edit'</span>Edit</a></td>  
   </tr>
   ";
   }
  ?>
    </tbody>
  </table>
  <strong> <td><a href="admin.php?container=tambah_manajementuser" align="right"
  class="btn btn-info" role="button">Tambah User</a></td></strong>

</div>

<?php
}
?>