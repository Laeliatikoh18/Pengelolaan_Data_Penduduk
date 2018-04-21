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
$tgl = date('Y-m-d');
function tgl_ind($tgl){
  $bulan = array (1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
  $split = explode('-', $tgl);
  return $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];
}
?>    

<?php
session_start();
                          include "koneksi.php";
                          $no_id = $_GET['no_id'];
                          $query = mysql_query("select * from penduduk_masuk where no_id ='$no_id'");
                          $query1 = mysql_query("select * from data_penduduk where no_id ='$no_id'");
                          $tampilData = mysql_fetch_array($query);
                          $tampilData1 = mysql_fetch_array($query1);
                          $query2 = "SELECT * FROM user WHERE level='kades' ";
                          $tampil2=mysql_query($query2) or die(mysql_error());
                          $datapen1=mysql_fetch_array($tampil2);

                          
                          
                        ?>
<div class="jumbroton">
  <div class="col-md-12">                       


<center><h3>SURAT KETERANGAN PINDAH MASUK</h3></center>
<br><br>


<table>
<tr><td colspan="6">Data Daerah Asal</td></tr>
<tr><td>NIK Pemohon</td><td>:</td><td><label><?php echo $tampilData1['nik']; ?></label></td></tr>
<tr><td>Nama Lengkap</td><td>:</td><td><label><?php echo $tampilData1['nama_lgkp']; ?></label></td></tr>
<tr><td>Tanggal Lahir</td><td>:</td><td><?php echo $tampilData1['tgl_lhr']; ?></td></tr>
<tr><td>Jenis Kelamin</td><td>:</td><td><?php echo $tampilData1['jk']; ?></td></tr>
<tr><td>Status Kawin</td><td>:</td><td><?php echo $tampilData1['status_kwn']; ?></td></tr>
<tr><td>Alamat Asal</td><td>:</td><td clospan="4"><label><?php echo $tampilData['alamat_asal']; ?></label></td></tr>
<tr><td>Alasan Pindah</td><td>:</td><td><label><?php echo $tampilData['alasan_pindah']; ?></label></td></tr>
<tr><td colspan="6">Data Kepindahan</td></tr>
<tr><td>Alamat Tujuan</td><td>:</td><td><label><?php echo $tampilData1['alamat']; ?></label></td>
	<td> RT</td><td>:</td><td><label><?php echo $tampilData1['rt']; ?></label></td>
	<td>RW</td><td>:</td><td><label><?php echo $tampilData1['rw']; ?></label></td></tr>
<tr><td>Desa</td><td>:</td><td><label>Candiwulan</label></td><td>Kabupaten</td><td>:</td><td><label>Kebumen</label></td></tr>
<tr><td>Kecamatan</td><td>:</td><td><label>Kebumen</label></td><td>Provinsi</td><td>:</td><td><label>Jawa Tengah</label></td></tr>
<tr><td>Kode Pos</td><td>:</td><td><label>54531</label></td></tr>
</table>

<br><br>
<p align="right">Kebumen,<?php echo tgl_ind($tgl); ?></p> 
<div class="btn-group pull-left">
        
        <h5 align="center"><b>Kepala Desa Candiwulan</b></h5>

        

        
       <br>
  <br>
  <br>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $datapen1['username'];?></b>

        </div>


  <div class="btn-group pull-right">
        
        <h5 align="center"><b>Pemohon</b></h5>

        

        
       <br>
  <br>
  <br>&nbsp;&nbsp;<b> <?php echo $tampilData1['nama_lgkp']; ?> </b>

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
