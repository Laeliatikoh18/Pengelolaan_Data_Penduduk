<?php
	include "koneksi.php";
	$Lapor = "SELECT id_obat, nama_obat, tanggal_expired, harga_jual FROM data_obat";
	$Hasil = mysql_query($Lapor);
	$Data = array();
	while($row = mysql_fetch_assoc($Hasil)){
		array_push($Data, $row);
	}
	$Judul = "Data Master Obat";
	$Header= array(
		array("label"=>"id_obat", "length"=>20, "align"=>"L"),
		array("label"=>"nama_obat", "length"=>80, "align"=>"L"),
		array("label"=>"tanggal_expired", "length"=>40, "align"=>"L"),
		array("label"=>"harga_jual", "length"=>40, "align"=>"L"),
	);
	require ("fpdf/fpdf.php");
	$pdf = new FPDF();
	$pdf->AddPage('P','A4','C');
	$pdf->SetFont('arial','B','15');
	$pdf->Cell(0, 15, $Judul, '0', 1, 'C');
	$pdf->SetFont('arial','i','9');
	$pdf->SetFillColor(190,190,0);
	$pdf->SetTextColor(255);
	$pdf->setDrawColor(128,0,0);
	foreach ($Header as $Kolom){
		$pdf->Cell($Kolom['length'], 8, $Kolom['label'], 1, '0', $Kolom['align'], true);
	}
	$pdf->Ln();
	$pdf->SetFillColor(244,235,255);
	$pdf->SettextColor(0);
	$pdf->SetFont('arial','','10');
	$fill =false;
	foreach ($Data as $Baris){
		$i= 0;
		foreach ($Baris as $Cell){
			$pdf->Cell ($Header[$i]['length'], 7, $Cell, 2, '0', $Kolom['align'], $fill);
			$i++;
		}
		$fill = !$fill;
		$pdf->Ln();
	}
	$pdf->Output();
	?>