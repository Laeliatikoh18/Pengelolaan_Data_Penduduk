<?php

// koneksi ke database
mysql_connect("localhost", "root", "");
mysql_select_db("skripsi");

$query = "SELECT * FROM siswa";
$hasil = mysql_query($query);

// setting banyaknya kolom
$kolom = 2;

// membuat tabel berisi label barcode
echo "<table border='1'>";

$counter = 1;
while ($data = mysql_fetch_array($hasil))
{
 if (($counter-1) % $kolom == 0) echo "<tr>";
 echo "<td align='center' style='padding: 5px'><font face='Free 3 of 9' size='20'>*".$data['nis']."*</font><br />".$data['nis']."</td>";
 if ($counter % $kolom == 0) echo "</tr>";
 $counter++;
}

echo "</table>";
?>