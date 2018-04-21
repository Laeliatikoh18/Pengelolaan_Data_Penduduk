<?php
include "koneksi.php";

$no_kk = $_POST['no_kk'];
$nik =$_POST['nik'];
$nama_lgkp =$_POST['nama_lgkp'];
$alamat =$_POST['alamat'];
$rt =$_POST['rt'];
$rw =$_POST['rw'];
$shdk =$_POST['shdk'];
$tmpt_lhr =$_POST['tmpt_lhr'];
$tgl_lhr =$_POST['tgl_lhr'];
$jk =$_POST['jk'];
$gol_darah =$_POST['gol_darah'];
$status_kwn =$_POST['status_kwn'];
$no_akta_lhr =$_POST['no_akta_lhr'];
$no_akta_kwn =$_POST['no_akta_kwn'];
$nik_ibu =$_POST['nik_ibu'];
$nama_lgkp_ibu =$_POST['nama_lgkp_ibu'];
$nik_ayah =$_POST['nik_ayah'];
$nama_lgkp_ayah =$_POST['nama_lgkp_ayah'];
$agama =$_POST['agama'];
$pendidikan =$_POST['pendidikan'];
$pekerjaan =$_POST['pekerjaan'];
$alamat_asal =$_POST['alamat_asal'];
$alasan_pindah =$_POST['alasan_pindah'];

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


$sql="INSERT INTO data_penduduk (
no_kk ,
nik,
nama_lgkp,
alamat,
rt,
rw,
shdk,
tmpt_lhr,
tgl_lhr,
jk,
gol_darah,
status_kwn,
no_akta_lhr,
no_akta_kwn,
nik_ibu,
nama_lgkp_ibu,
nik_ayah,
nama_lgkp_ayah,
agama,
pendidikan,
pekerjaan,
foto) VALUES ('$no_kk','$nik','$nama_lgkp','$alamat','$rt','$rw','$shdk','$tmpt_lhr','$tgl_lhr','$jk','$gol_darah','$status_kwn','$no_akta_lhr','$no_akta_kwn','$nik_ibu','$nama_lgkp_ibu','$nik_ayah','$nama_lgkp_ayah','$agama','$pendidikan','$pekerjaan','$target_file')";

$query=mysql_query($sql) or die (mysql_error());


$sql1="INSERT INTO penduduk_masuk(
nik,
alamat_asal,
alasan_pindah) VALUES('$nik','$alamat_asal','$alasan_pindah')";


$query1=mysql_query($sql1) or die (mysql_error());
echo "<center><b><h1>daftar berhasil</h1></b></center>";
echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=admin.php?container=pindah_masuk">';

?>
 