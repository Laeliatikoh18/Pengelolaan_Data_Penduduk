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
$tanggal = date('Y-m-d');
function tanggal($tanggal){
	$wulan = array (1 => '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');
	$splits = explode('-', $tanggal);
	return $splits[2] . ' ' . $wulan[(int)$splits[1]] . ' ' . $splits[0];
}
?>  
<?php
session_start();
                          include "koneksi.php";
                          $no_id = $_GET['no_id'];
                          $query = "select * from data_penduduk where no_id ='$no_id'";
                          $tampil = mysql_query($query) or die("Gagal dalam menampilkan data");
                          $tampilData = mysql_fetch_array($tampil);
                          $query1 = "select * from kelahiran where id_kelahiran ='$no_id'";
                          $tampil1 = mysql_query($query1) or die("Gagal dalam menampilkan data");
                          $tampilData1 = mysql_fetch_array($tampil1);
                            //$image        = $tampilData['foto'];
                          $query2 = "SELECT * FROM user WHERE level='kades' ";
    					  $tampil2=mysql_query($query2) or die(mysql_error());
    					  $datapen1=mysql_fetch_array($tampil2);
                          
                          
                        ?>
 <div class="jumbroton">
  <div class="col-md-12">                       

<center><h3>SURAT KETERANGAN KELAHIRAN</h3></center>


<br>
<table>
<tr><td colspan="5">Nama Kepala Keluarga</td><td>:</td><td> <?php echo $tampilData['nama_lgkp_ayah']; ?></td></tr>
<tr><td colspan="5">Nomor Kepala Keluarga</td><td>:</td><td> <?php echo $tampilData['no_kk']; ?></td></tr>
<tr><td colspan="9">Bayi/Anak</td><td colspan="9">Saksi</td></tr>
<tr><td colspan="3">Nama</td><td>:</td><td colspan="5"> <?php echo $tampilData['nama_lgkp']; ?></td>
    <td colspan="3">NIK Saksi</td><td>:</td><td colspan="5"><?php echo $tampilData1['nik_saksi']; ?></td></tr>
<tr><td colspan="3">Jenis Kelamin</td><td>:</td><td colspan="5"> <?php echo $tampilData['jk']; ?></td>
    <td colspan="3">Nama Saksi Saksi</td><td>:</td><td colspan="5"><?php echo $tampilData1['nama_saksi']; ?></td></tr>
<tr><td colspan="3">Tanggal Lahir</td><td>:</td><td colspan="5"> <?php echo $tampilData['tgl_lhr']; ?></td>
    <td colspan="3">Tanggal Lahir Saksi</td><td>:</td><td colspan="5"><?php echo $tampilData1['tgl_lhr_saksi']; ?></td></tr>
<tr><td colspan="3">Pukul</td><td>:</td><td colspan="5"> <?php echo $tampilData1['pukul']; ?> WIB</td>
    <td colspan="3">Alamat Saksi</td><td>:</td><td colspan="5" rowspan="4"><?php echo $tampilData1['alamat_saksi']; ?></td></tr>
<tr><td colspan="3">Jenis Kelahiran</td><td>:</td><td> <?php echo $tampilData1['jenis_kelahiran']; ?></td></tr>
<tr><td colspan="3">Kelahiran Ke</td><td>:</td><td> <?php echo $tampilData1['kelahiran_ke']; ?></td></tr>
<tr><td colspan="3">Penolong Kelahiran</td><td>:</td><td> <?php echo $tampilData1['penolong_kelahiran']; ?></td></tr>
<tr><td colspan="3">Berat Bayi</td><td>:</td><td> <?php echo $tampilData1['berat_bayi']; ?> Kg</td></tr>
<tr><td colspan="3">Panjang Bayi</td><td>:</td><td> <?php echo $tampilData1['panjang_bayi']; ?> Cm</td></tr>
<tr><td colspan="9">Ibu</td><td colspan="9">Ayah</td></tr>
<tr><td colspan="3">NIK</td><td>:</td><td colspan="5"><?php echo $tampilData['nik_ibu']; ?> </td>
    <td colspan="3">NIK</td><td>:</td><td colspan="5"><?php echo $tampilData['nik_ayah']; ?> </td></label></td></tr>
<tr><td colspan="3">Nama Lengkap</td><td>:</td><td colspan="5"><?php echo $tampilData['nama_lgkp_ibu']; ?> </td>
    <td colspan="3">Nama Lengkap</td><td>:</td><td colspan="5"><?php echo $tampilData['nama_lgkp_ayah']; ?> </td></tr>
<tr><td>Alamat</td><td>:</td><td> <?php echo $tampilData['alamat']; ?> </td>
	  <td>RT</td><td>:</td><td> <?php echo $tampilData['rt']; ?> </td>
	  <td>RW</td><td>:</td><td> <?php echo $tampilData['rw']; ?> </td>
    <td>Alamat</td><td>:</td><td> <?php echo $tampilData['alamat']; ?> </td>
    <td>RT</td><td>:</td><td> <?php echo $tampilData['rt']; ?> </td>
    <td>RW</td><td>:</td><td> <?php echo $tampilData['rw']; ?></td>
  </tr>
<tr><td>Desa</td><td>:</td><td colspan="2"> Candiwulan </td><td> Kabupaten</td><td>:</td><td colspan="3"> Kebumen </td>
    <td>Desa</td><td>:</td><td colspan="2"> Candiwulan </td><td> Kabupaten</td><td>:</td><td colspan="3">Kebumen </td></tr>
<tr><td>Kecamatan</td><td>:</td><td colspan="2"> Kebumen </td><td> Provinsi</td><td>:</td><td colspan="3"> Jawa Tengah </td>
    <td>Kecamatan</td><td>:</td><td colspan="2"> Kebumen </td><td> Provinsi</td><td>:</td><td colspan="3"> Jawa Tengah </td></tr>
<tr><td colspan="3">Kode Pos</td><td>:</td><td colspan="5"> 54531 </td>
    <td colspan="3">Kode Pos</td><td>:</td><td colspan="5"> 54531 </td></tr>
<tr><td colspan="6">Tanggal Pernikahan Orang Tua</td><td>:</td><td colspan="5"> <?php echo $tampilData1['tanggal_pernikahan']; ?></td></tr>
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
        
        <h5 align="center"><b>Pelapor</b></h5>

        

        
       <br>
  <br>
  <br>&nbsp;&nbsp;<b><?php echo $tampilData1['pelapor']; ?> </b>

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
