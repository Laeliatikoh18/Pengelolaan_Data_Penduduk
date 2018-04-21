<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Desa Candiwulan</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="dataTables/dataTables.bootstrap.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body onload="window.print()">

<div class="panel panel-default">
  <div class="panel-body">
    <div class="row-table-bordered">
            
          
              
              <div class="col-md-2">
              <img src="kebumen.jpg" class="img-responsive pull-left" style="max-height:150px;display:inline">

              </div>
          
                
                
                <font size="5"><b><p class="text-center">PEMERINTAH KABUPATEN KEBUMEN  </p></font>
                <font size="5"><b><p class="text-center">KECAMATAN KEBUMEN</p></font>
                <font size="6"><b><p class="text-center">KEPALA DESA CANDIWULAN</p></font>
                <b><p class="text-center">Alamat : RT. 03 RW. 02 Desa Candiwulan Telp. (0287) 3871059 Kebumen - 54351</p></b> 

  <style type="text/css">
      hr.style2 {
      border-top: 3px double #8c8b8b;
      }
    </style>
  
  <hr class="style2">
<?php
session_start();

$tgl = date('Y-m-d');
function tgl_ind($tgl){
  $bulan = array (1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
  $split = explode('-', $tgl);
  return $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];
}
?>    

<div class="jumbroton">
  <div class="col-md-12">                       


<center><h3>DATA PENDUDUK</h3></center>
<table class="table">
    <thead>
      <tr>
        <th><h4>No</h4></th>
        <th><h4>No KK</h4></th>
        <th><h4>NIK</h4></th>
        <th><h4>Nama</h4></th>
        <th><h4>Jenis Kelamin</h4></th>
        <th><h4>Alamat</h4></th>
        <th><h4>RT</h4></th>
        <th><h4>RW</h4></th>
        <th><h4>SHDK</h4></th>
        <th><h4>Tempat Lahir</h4></th>
        <th><h4>Tanggal Lahir</h4></th>
        <th><h4>Agama</h4></th>
        <th><h4>Pendidikan</h4></th>
        <th><h4>Pekerjaan</h4></th>

      </tr>
    </thead>

    <tbody>
    <?php
    include 'koneksi.php';
    $query = "SELECT * FROM data_penduduk ORDER BY no_kk ASC";
    $tampil=mysql_query($query);
    
    $query1 = "SELECT * FROM user WHERE level='kades' ";
    $tampil1=mysql_query($query1) or die(mysql_error());
    $datapen1=mysql_fetch_array($tampil1);
    $id=1;
    $count =mysql_num_rows($tampil);

if($count<1){
  echo "<tr><td colspan='9'><center>Data Tidak Ditemukan!</center></td></tr>";
}else{

  
  while($datapen=mysql_fetch_array($tampil)){

   echo"

    <tr>
    <td>".$id++."</td>
    <td>".$datapen['no_kk']."</td>
    <td>".$datapen['nik']."</td>
    <td>".$datapen['nama_lgkp']."</td>
    <td>".$datapen['jk']."</td>
    <td>".$datapen['alamat']."</td>
    <td>".$datapen['rt']."</td>
    <td>".$datapen['rw']."</td>
    <td>".$datapen['shdk']."</td>
    <td>".$datapen['tmpt_lhr']."</td>
    <td>".$datapen['tgl_lhr']."</td>
    <td>".$datapen['agama']."</td>
    <td>".$datapen['pendidikan']."</td>
    <td>".$datapen['pekerjaan']."</td>
    </tr>";}}
    ?>
    </tbody>
    </table>
<br><br>
<p align="right">Kebumen,<?php echo tgl_ind($tgl); ?></p> 
<div class="btn-group pull-right">
        
        <h5 align="center"><b>Kepala Desa Candiwulan</b></h5>

        

        
       <br>
  <br>


  <br>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $datapen1['username'];?></b>

        </div>
  
  
</div>
</div>
</div>
</div>
</div>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="dataTables/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="dataTables/jquery.dataTables.js"></script>


</body>

</html>
