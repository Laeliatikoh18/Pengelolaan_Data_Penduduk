<?php
include 'koneksi.php';
$per_pages=25;

if (isset($_GET['pages'])) {
  $pages = $_GET['pages'];
}else {

  $pages=1;

}

// pages will start from 0 and Multiple by Per pages
$start_from = ($pages-1) * $per_pages;

$query_limit = "LIMIT $start_from, $per_pages";


  if(empty($_SESSION['username'])AND
    empty($_SESSION['password'])){
    echo "<p><b>Anda Harus Login</b></p>";
}
else{?>
<div class="container">
  <center>
  <h1>Permintaan Konfirmasi Data Kematian</h1></center>
  <br><br>
  <table class="table table-striped" id="data">
    <thead>
      <tr>
        <th><h4>No</h4></th>
        <th><h4>NIK</h4></th>
        <th><h4>Nama</h4></th>
        <th><h4>Tanggal Lahir</h4></th>
        <th><h4>Tanggal Kematian</h4></th>
        <th><h4>Sebab Kematian</h4></th>
        <th><h4>Fungsi</h4></th>
      </tr>
    </thead>

    <tbody>
<?php
  $query = "SELECT * FROM kematian WHERE send='1' ORDER BY nik ASC";
  $tampil=mysql_query($query);
$id=1;
$count = mysql_num_rows($tampil);

if($count<1){
  echo "<tr><td colspan='7'><center>Data Tidak Ditemukan!</center></td></tr>";
}else{

  
  while($datapen=mysql_fetch_array($tampil)){
  
   echo"
   <tr>
    
    <td>".$id++."</td>
    <td>".$datapen['nik']."</td>
    <td>".$datapen['nama_lgkp']."</td>
    <td>".$datapen['tgl_lhr']."</td>
    <td>".$datapen['tgl_kematian']."</td>
    <td>".$datapen['sebab_kematian']."</td>
    <td><a href='user.php?container=lihat_datapenduduk_kematian&nik=".$datapen['nik']."' <span class='glyphicon glyphicon-open-file'></span> Lihat</a>";

    ?>
    &nbsp;&nbsp;
<?php
$nik = $datapen['nik'];
       ?><form method='POST'><td><a href="proses_konfirm_user.php?nik=<?php echo $nik;?>" class="btn btn-info">konfirm</a></form></td>
      <?php      
      
     

   

   }}
  ?>
    </tbody>
  </table>

</div>
<?php } ?> 

<?php
echo "</ul>";
echo "</center>";


?>
