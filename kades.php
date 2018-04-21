<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
$k=$_GET['container'];
$container    = $_GET['container'];

?>
<?php
include 'koneksi.php';

  if(empty($_SESSION['username'])AND
    empty($_SESSION['password'])){
    echo "<p><b>Anda Harus Login</b></p>";
}
else{?>

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

    <script src="js/jquery.js"></script>
  

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style type="text/css">
    .b1{
        font-size: 18px;
    }
</style>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right b1">
                <li>
                    <a href="kades.php?container=permintaan_kades">Permintaan</a>
                            </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Data <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="kades.php?container=kelahiran">Kelahiran</a>
                            </li>
                            <li>
                                <a href="kades.php?container=kematian">Kematian</a>
                            </li>
                            <li>
                                <a href="kades.php?container=pindah_masuk">Pindah Masuk</a>
                            </li>
                            <li>
                                <a href="kades.php?container=pindah_keluar">Pindah Keluar</a>
                            </li>
                            <li>
                                <a href="kades.php?container=penduduk">Penduduk</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                    
                    
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
       

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
            <center>
            <br>
            <img src="kebumen.jpg" width="175" height="225" />
            <br>
                <h1>Desa Candiwulan</h1>
                <h1 class="page-header"><small>Alamat : RT. 03 RW. 02 Desa Candiwulan Telp. (0287) 3871059 Kebumen - 54351</small></h1>
            </center>
            
                    <?php
             if($container=='kelahiran')
                include("data_kelahiran_kades.php");
            else if($container=='permintaan_kades')
                include("permintaan_kades.php");
            else if($container=='lihat_datapenduduk_kelahiran')
                include("lihat_datapenduduk_kelahiran.php");
            else if($container=='kematian')
                include("kematian_kades.php");
            else if($container=='lihat_datapenduduk_kematian')
                include("lihat_datapenduduk_kematian.php");
            else if($container=='pindah_masuk')
                include("pindah_masuk_kades.php");
            else if($container=='lihat_datapenduduk_masuk')
                include("lihat_datapenduduk_masuk.php");
            else if($container=='lihat_datapenduduk')
                include("lihat_datapenduduk.php");
            else if($container=='pindah_keluar')
                include("pindah_keluar_kades.php");
            else if($container=='lihat_datapenduduk_keluar')
                include("lihat_datapenduduk_keluar.php");
             else
                include("penduduk_kades.php");

        ?>
 
            
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <center>
                    <p>Copyright &copy; 2017 Laeli Atikoh</p>
                    </center>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
       <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    
    <!-- jQuery -->
    <!-- tanggal -->


    <!-- Custom CSS -->
     <link href="datepicker/css/datepicker.css" rel="stylesheet">
      <!-- jQuery -->
    <script src="datepicker/js/bootstrap-datepicker.js"></script>

  
    <style>
    .datepicker
        </style>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.tanggal').datepicker({
            format:'yyyy-mm-dd',
        });
    });
    
    </script>


</body>

</html>
<?php } ?> 