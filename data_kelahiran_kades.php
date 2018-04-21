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
  $query = "SELECT a.*,b.* FROM kelahiran a LEFT JOIN data_penduduk b ON a.id_kelahiran=b.no_id  ORDER BY a.id_kelahiran ASC $query_limit ";
  $tampil=mysql_query($query) or die(mysql_error());
}else{
  $query = "SELECT a.*,b.* FROM kelahiran a LEFT JOIN data_penduduk b ON a.id_kelahiran=b.no_id WHERE ". $_GET['search_select'] ." LIKE '%". $_GET['search_value'] ."%' ORDER BY a.id_kelahiran DESC $query_limit";
  $tampil = mysql_query($query);
}


  if(empty($_SESSION['username'])AND
    empty($_SESSION['password'])){
    echo "<p><b>Anda Harus Login</b></p>";
}
else{?>
<div class="container">
  <center>
  <h1>Data Kelahiran</h1></center>
  <br><br>
  <div class="row space-form ">
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
        <th><h4>ID Kelahiran</h4></th>
        <th><h4>Nama</h5></th>
        <th><h4>Tanggal Lahir</h4></th>
        <th><h4>Jenis Kelamin</h4></th>
        <th><h4>Nama Ibu</h4></th>
        <th><h4>Nama Ayah</h4></th>
        <th><h4>Fungsi</h4></th>
      </tr>
    </thead>

    <tbody>
<?php
     
$id=1;
$count = mysql_num_rows($tampil);

if($count<1){
  echo "<tr><td colspan='7'><center>Data Tidak Ditemukan!</center></td></tr>";
}else{
$hasil=mysql_query($sql);
  while($datapen=mysql_fetch_array($tampil)){
  
   echo"
   <tr>
    
    <td>".$id++."</td>
    <td>".$datapen['id_kelahiran']."</td>
    <td>".$datapen['nama_lgkp']."</td>
    <td>".$datapen['tgl_lhr']."</td>
    <td>".$datapen['jk']."</td>
    <td>".$datapen['nama_lgkp_ibu']."</td>
    <td>".$datapen['nama_lgkp_ayah']."</td>
    <td>
    <a href='kades.php?container=lihat_datapenduduk_kelahiran&id_kelahiran=".$datapen['id_kelahiran']."' <span class='glyphicon glyphicon-open-file'></span> Lihat</a>
     
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
  $query = "SELECT a.*,b.* FROM kelahiran a LEFT JOIN data_penduduk b ON a.id_kelahiran=b.no_id";
}else{
  $query = "SELECT a.*,b.* FROM kelahiran a LEFT JOIN data_penduduk b ON a.id_kelahiran=b.no_id WHERE ". $_GET['search_select'] ." LIKE '%". $_GET['search_value'] ."%'";
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
    echo "<li $active><a href='index.php?container=data_kelahiran&pages=".$i."'>".$i."</a></li>";
  }else{
    echo "<li $active><a href='index.php?container=data_kelahiran&search_select=". $_GET['search_select'] ."&search_value=". $_GET['search_value'] ."&submit=". $_GET['submit'] ."&pages=".$i."'>".$i."</a></li>";
  }
};

echo "</ul>";
echo "</center>";

// Going to last pages
//echo "<a href='admin.php?menu=manage_tarif&pages=$total_pagess'>".'Last pages'."</a></center> ";

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