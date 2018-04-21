<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
$k=$_GET['container'];
$container    = $_GET['container'];
?>

<?php
include "koneksi.php";
$id_kelahiran =$_POST['id_kelahiran'];
$no_kk = $_POST['no_kk'];
$nama_lgkp =$_POST['nama_lgkp'];
$jk =$_POST['jk'];
$tmpt_lhr =$_POST['tmpt_lhr'];
$tgl_lhr =$_POST['tgl_lhr'];
$pukul =$_POST['pukul'];
$jenis_kelahiran =$_POST['jenis_kelahiran'];
$kelahiran_ke =$_POST['kelahiran_ke'];
$penolong_kelahiran =$_POST['penolong_kelahiran'];
$berat_bayi =$_POST['berat_bayi'];
$panjang_bayi =$_POST['panjang_bayi'];
$nik_ibu =$_POST['nik_ibu'];
$nama_lgkp_ibu =$_POST['nama_lgkp_ibu'];
$tanggal_pernikahan =$_POST['tanggal_pernikahan'];
$nik_ayah =$_POST['nik_ayah'];
$nama_lgkp_ayah =$_POST['nama_lgkp_ayah'];
$pelapor =$_POST['pelapor'];
$alamat =$_POST['alamat'];
$rt =$_POST['rt'];
$rw =$_POST['rw'];
$nik_saksi =$_POST['nik_saksi'];
$nama_saksi =$_POST['nama_saksi'];
$tgl_lhr_saksi =$_POST['tgl_lhr_saksi'];
$alamat_saksi =$_POST['alamat_saksi'];

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





$sql="INSERT INTO kelahiran (
id_kelahiran,
pukul,
jenis_kelahiran,
kelahiran_ke,
penolong_kelahiran,
berat_bayi,
panjang_bayi,
pelapor,
nik_saksi,
nama_saksi,
tgl_lhr_saksi,
alamat_saksi,
tanggal_pernikahan) VALUES ('$id_kelahiran','$pukul','$jenis_kelahiran','$kelahiran_ke','$penolong_kelahiran','$berat_bayi','$panjang_bayi','$pelapor','$nik_saksi','$nama_saksi','$tgl_lhr_saksi','$alamat_saksi','$tanggal_pernikahan')";

$query=mysql_query($sql)or die (mysql_error());

$sql1="INSERT INTO data_penduduk (
no_id,
no_kk,
nama_lgkp,
jk,
alamat,
rt,
rw,
tmpt_lhr,
tgl_lhr,
nik_ibu,
nama_lgkp_ibu,
nik_ayah,
nama_lgkp_ayah,
foto) VALUES ('$id_kelahiran','$no_kk','$nama_lgkp','$jk','$alamat','$rt','$rw','$tmpt_lhr','$tgl_lhr','$nik_ibu','$nama_lgkp_ibu','$nik_ayah','$nama_lgkp_ayah','$target_file')";

$query1=mysql_query($sql1)or die (mysql_error());
echo "<center><b><h1>daftar berhasil</h1></b></center>";
echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=user.php?container=kelahiran">';

?>
 