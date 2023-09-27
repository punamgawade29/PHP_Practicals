<?php
error_reporting(0);
require ("fpdf.php ");
$pdf = new FPDF();
$pdf->addPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(150,20,'***GOVERNMENT POLYTECHNIC AWASARI***',0,1,'C');
$pdf->Cell(150,20,'DEPARTMENT OF INFORMATION TECHNOLOGY',0,1,'C');
$pdf->Cell(150,20,'THIRD YEAR',0,1,'C');
$pdf->Output();
?>
