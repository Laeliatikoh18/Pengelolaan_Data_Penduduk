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


if(!isset($_GET['submit'])){
  $query = "SELECT * FROM data_penduduk ORDER BY no_kk ASC $query_limit";
  $tampil=mysql_query($query);
}else{
  $query = "SELECT * FROM data_penduduk WHERE ". $_GET['search_select'] ." LIKE '%". $_GET['search_value'] ."%' ORDER BY nik DESC $query_limit";
  $tampil = mysql_query($query);
}

  if(empty($_SESSION['username'])AND
    empty($_SESSION['password'])){
    echo "<p><b>Anda Harus Login</b></p>";
}
else{?>
<div class="container">
  <center>
  <h1>Data Penduduk</h1></center>
  <br><br>
  <div class="row space-form " >
   <div class="col-sm-4">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
      <input  class="form-control" id="search" type="text" placeholder="Pencarian">
      </div>
    </div>
  </div>     
  <table class="table table-striped" id="data">
    <thead>
      <tr>
        <th><h4>No</h4></th>
        <th><h4>No ID</h4></th>
        <th><h4>No KK</h4></th>
        <th><h4>NIK</h4></th>
        <th><h4>Nama</h4></th>
        <th><h4>Jenis Kelamin</h4></th>
        <th><h4>Alamat</h4></th>
        <th><h4>RT</h4></th>
        <th><h4>RW</h4></th>
        <th><h4>Fungsi</h4></th>
      </tr>
    </thead>

    <tbody>
<?php
if(!isset($_GET['submit'])){
  $query = "SELECT * FROM data_penduduk ORDER BY no_kk ASC";
  $tampil=mysql_query($query);
}else{
  $query = "SELECT * FROM data_penduduk WHERE ". $_GET['search_select'] ." LIKE '%". $_GET['search_value'] ."%' ORDER BY no_kk DESC $query_limit";
  $tampil = mysql_query($query);
}  
?>


<?php
$id=1;
$count = mysql_num_rows($tampil);

if($count<1){
  echo "<tr><td colspan='9'><center>Data Tidak Ditemukan!</center></td></tr>";
}else{

  
  while($datapen=mysql_fetch_array($tampil)){

   echo"
   <tr>
    
    <td>".$id++."</td>
    <td>".$datapen['no_id']."</td>
    <td>".$datapen['no_kk']."</td>
    <td>".$datapen['nik']."</td>
    <td>".$datapen['nama_lgkp']."</td>
    <td>".$datapen['jk']."</td>
    <td>".$datapen['alamat']."</td>
    <td>".$datapen['rt']."</td>
    <td>".$datapen['rw']."</td>
    <td>
    <a href='user.php?container=lihat_datapenduduk&no_id=".$datapen['no_id']."' <span class='glyphicon glyphicon-open-file'></span>Lihat</a>
    
   </tr>
   ";
   }}
  ?>
    </tbody>
  </table>
 
</div>
<?php } ?> 
<?php


//Now select all from table
if(!isset($_GET['submit'])){
  $query = "SELECT * FROM data_penduduk";
}else{
  $query = "SELECT * FROM data_penduduk WHERE ". $_GET['search_select'] ." LIKE '%". $_GET['search_value'] ."%'";
}

$result = mysqli_query($konek, $query);

// Count the total records
$total_records = mysqli_num_rows($result);

//Using ceil function to divide the total records on per pages
$total_pages = ceil($total_records / $per_pages);

//Going to first pages
//echo "<center><a href='admin.php?p=mrecruit&cat=recruit&pages=1'>".'First pages'."</a> ";

echo "<center>";
echo "<ul class='pagination'>";

for ($i=1; $i<=$total_pages; $i++) {

  if($i==$pages){
    $active = "class='active'";
  }else{
    $active = "";
  }

  if(!isset($_GET['submit'])){
    echo "<li $active><a href='index.php?container=data_penduduk&pages=".$i."'>".$i."</a></li>";
  }else{
    echo "<li $active><a href='index.php?container=data_penduduk&search_select=". $_GET['search_select'] ."&search_value=". $_GET['search_value'] ."&submit=". $_GET['submit'] ."&pages=".$i."'>".$i."</a></li>";
  }
};

echo "</ul>";
echo "</center>";


?>



<!-- JQuery Search -->
  <script type="text/javascript">
    $(document).ready(function()
  {
    $('#search').keyup(function()
    {
      searchTable($(this).val());
    });
  });

  function searchTable(inputVal)
  {
    var table = $('#data');
    table.find('tr').each(function(index, row)
    {
      var allCells = $(row).find('td');
      if(allCells.length > 0)
      {
        var found = false;
        allCells.each(function(index, td)
        {
          var regExp = new RegExp(inputVal, 'i');
          if(regExp.test($(td).text()))
          {
            found = true;
            return false;
          }
        });
        if(found == true)$(row).show();else $(row).hide();
      }
    });
  }
  </script>