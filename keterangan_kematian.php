<?php
include 'koneksi.php';

  if(empty($_SESSION['username'])AND
    empty($_SESSION['password'])){
    echo "<p><b>Anda Harus Login</b></p>";
}
else{
$tdnik = $_GET['tdnik'];
$td_namalgkp = $_GET['td_namalgkp'];
$td_jk = $_GET['td_jk'];
$td_tgllhr= $_GET['td_tgllhr'];
$td_alamat= $_GET['td_alamat'];
$td_rt = $_GET['td_rt'];
$td_rw = $_GET['td_rw'];
$td_id = $_GET['td_id'];


  

  ?>
<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
     <link href="datepicker/css/datepicker.css" rel="stylesheet">
      <!-- jQuery -->
    <script src="js/jquery.js"></script>
  <script src="datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="jquery.autocomplete.js"></script>
    
  <style>
  th, td {
    padding: 5px;
    
  .datepicker
    </style>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.tanggal').datepicker({
      format:'yyyy-mm-dd',
    });
  });

  
  </script>

<div class="container">
  <h2 align="center">Surat Keterangan Kematian</h2>
  <form id="formID" action= "proses_sk_kematian.php" method= "POST" >

   <br>
     
        <center>
          <input type="hidden" name="nik" id="nik">

        <div class="form-group">
           <div class="form-inline">
           <input name="search" type ="text" class="form-control" size="65" id="nik" name ="nik" placeholder="NIK" readonly>
           <span>
              <a href="#" class="btn btn-primary" data-target="#tabel_penduduk" id="id_btnModal" data-toggle="modal">
                  <i class="glyphicon glyphicon-search"/></i>

              </a>
          </span>
      <!--      <button type="button" class="btn btn-primary" id="search"><span class="glyphicon glyphicon-search"></span></button> 
       -->  </div></div>
       <table>
 <tr><td><input type="hidden" class="form-control"  name="id_kelahiran"   value="<?php echo $td_id ; ?>"></td></tr>
 <tr><td>NIK</td><td>Nama</td><td>Alamat</td></tr>
  <tr><td style="width:350px;">
      <input type="text" class="form-control"  name="nik"   value="<?php echo $tdnik ; ?>" readonly></td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="nama_lgkp" value="<?php echo $td_namalgkp ; ?>" readonly></td>
      <td style="width:350px;">
      <textarea type="text" class="form-control"  name="alamat" readonly><?php echo $td_alamat . ' RT ' . $td_rt . ' RW ' . $td_rw; ?></textarea> 
      </td></tr>
  <tr><td>Jenis Kelamin</td><td>Tanggal Lahir</td><td>Tanggal Kematian</td></tr>
  <tr><td style="width:350px;">
      <input type="text" class="form-control"  name="jk" value="<?php echo $td_jk ; ?>" readonly></td>
      <td style="width:350px;">
      <div class='input-group date' id='datetimepicker'>
      <input type="text" class="form-control tanggal"  name="tgl_lhr" value="<?php echo $td_tgllhr ; ?>" readonly>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span></div></td>   
      <td style="width:350px;">
      <div class='input-group date' id='datetimepicker'>
      <input type="text" class="form-control tanggal"  name="tgl_kematian" placeholder="TANGGAL KEMATIAN" >
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span></div></td>
  </tr>
  <tr><td>Pukul</td><td>Sebab Kematian</td><td>Tempat Kematian</td></tr>
  <tr><td style="width:350px;">
      <div class="input-group time" id="timepicker" ></div>
      <input type="text" class="form-control" name="pukul" placeholder="PUKUL" ></td>
      <td style="width:350px;">
      <select name="sebab_kematian" class="form-control">
              <option value="Sakit biasa/ tua">Sakit biasa/ tua</option>
              <option value="Wabah Penyakit">Wabah Penyakit</option>
              <option value="Kecelakaan">Kecelakaan</option>
              <option value="Kriminalitas">Kriminalitas</option>
              <option value="Bunuh Diri">Bunuh Diri</option>
              <option value="Keracunan">Keracunan</option>
            </select>
      </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="tmpt_kematian" placeholder="TEMPAT KEMATIAN" >
      </td>
  </tr>
  <tr><td>Yang Menerangkan</td><td>NIK Saksi</td><td>Nama Saksi</td></tr>
  <tr><td style="width:350px;">
      <select name="yg_menerangkan" class="form-control">
              <option value="Dokter">Dokter</option>
              <option value="Tenaga Kesehatan">Tenaga Kesehatan</option>
              <option value="Kepolisian">Kepolisian</option>
              <option value="Kerabat Dekat">Kerabat Dekat</option>
            </select>
      </td>
      <td style="width:350px;">
        <input type="text" class="form-control"  name="nik_saksi" placeholder="NIK SAKSI" >
      </td>
      <td style="width:350px;">
      <input type="text" class="form-control"  name="nama_saksi" placeholder="NAMA SAKSI" >
      </td>
  </tr>
  <tr><td>Tanggal Lahir Saksi</td><td>Alamat Saksi</td><td>Pelapor</td></tr>
  <tr>
      <td style="width:350px;">
      <div class='input-group date' id='datetimepicker'>
      <input type="text" class="form-control tanggal"  name="tgl_lhr_saksi" placeholder="TANGGAL LAHIR" >
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span></div></td>
      <td style="width:350px;">
      <textarea type="text" class="form-control"  name="alamat_saksi" placeholder="Alamat Saksi" ></textarea></td>
      <td style="width:350px;">
        <input type="text" class="form-control"  name="nama_pelapor" placeholder="NAMA PELAPOR" >
      </td>
  </tr>
  
  <tr><td colspan="3">
          
          <button type="submit" class="btn btn-primary">Submit</button></td></tr>
  </table></center></div>
<?php } ?> 



 <!--  MODAL Data Karyawan -->
<div class="modal fade draggable-modal" id="tabel_penduduk" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog  modal-full">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Data Penduduk</h4>
            </div>
            <div class="modal-body">
                <div class="scroller" style="height:400px;" >
                    <div class="row">
                        <div class="col-md-12">
                            <button id="id_Reload" style="display: none;"></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-body">
                                <table class="table table-striped table-bordered table-hover text_kanan" id="nikTabelpenduduk">
                                    <thead>
                                        <tr>
                                        
                                        <th class="bg-danger">NIK</th> 
                                        <th class="bg-danger"><input type="hidden" Id></th>                                
                                        <th class="bg-danger">NAMA</th>                          
                                        <th class="bg-danger"><input type="hidden" Tanggal Lahir></th>
                                        <th class="bg-danger">Jenis Kelamin</th>
                                        <th class="bg-danger">Alamat</th>   
                                        <th class="bg-danger">AKSI</th>                                                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                      include 'koneksi.php';
                                                                          
                                        $query = "SELECT * FROM data_penduduk ORDER BY nama_lgkp ASC";
                                        $tmp=mysql_query($query);
                                      
                                        $no = 1;
                                        while($data=mysql_fetch_assoc($tmp) ){

                                      ?>
                                        
                                        <tr>
                                         
                                          <td class="td_nik"><?php echo $data['nik']; ?></td>
                                          <td class="td_id"><input type="hidden" value="<?php echo $data['no_id'];?>"></td>
                                          <td class="td_namalgkp"><?php echo $data['nama_lgkp'];?></td>
                                          <td class="td_tgllhr"><input type="hidden" value="<?php echo $data['tgl_lhr']; ?>"></td>
                                          <td class="td_jk"><?php echo $data['jk']; ?></td>
                                          <td class="td_alamat"><?php echo $data['alamat'] . ', RT ' . $data['rt'] . ' RW  ' . $data['rw'];?></td>
                                          <td><a href="user.php?container=keterangan_kematian&&tdnik=<?php echo $data['nik']; ?>&&td_id=<?php echo $data['no_id']; ?>&&td_namalgkp=<?php echo $data['nama_lgkp'];?>&&td_tgllhr=<?php echo $data['tgl_lhr'];?>&&td_jk=<?php echo $data['jk'];?>&&td_alamat=<?php echo $data['alamat'];?>&&td_rt=<?php echo $data['rt']?>&&td_rw=<?php echo $data['rw']; ?>">PILIH</td>
                                        </tr>
                  
                                      <?php
            
                                      }
                                      
                                      ?>
                                    </tbody>
                                    <tfoot>


                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- end col-12 -->
                    </div>
                    <!-- END ROW-->
                </div>
                <!-- END SCROLLER-->
            </div>
            <!-- END MODAL BODY-->
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal" id="btnCloseModalDataUser">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!--  END  MODAL Data Karyawan -->

        </div>
      </div>
<script>
    $('.td_btn').click(function(){

            var nik = $(this).closest('tr').find('.td_nik').text();
            var noid = $(this).closest('tr').find('.td_id').text();
            var namaLgkp = $(this).closest('tr').find('.td_namalgkp').text();
            var tglLhr = $(this).closest('tr').find('.td_tgllhr').text();
            var jkel = $(this).closest('tr').find('.td_jk').text();
            var stts_kwn = $(this).closest('tr').find('.td_status_kwn').text();
            var Addres = $(this).closest('tr').find('.td_alamat').text();
            $('#nik').val(nik);
            $('#noiid').val(noid);
            $('#nmlgkp').val(namaLgkp);
            $('#tgllhr').val(tglLhr);
            $('#jk').val(jkel);
            $('#status_kwn').val(stts_kwn);
            $('#alamat').val(Addres);
           
            $('#tabel_penduduk').modal('hide');
    });
</script>
