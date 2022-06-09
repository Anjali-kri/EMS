<?php
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('../upload/logo.png',13,30,25,30,'');
$pdf->SetFont('Arial','B',20);
$pdf->Cell(15,8,'');
$pdf->Cell(15,8,'');
$pdf->Cell(100,40,"PROGRAMMING CLASSES",0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,25,"H.O : ",0,0);
$pdf->Cell(42,8,'');
$pdf->SetFont('Arial','',10);
$pdf->Cell(10,25,"Jagdamba Tower, Boring Road, ",0,1,'R');
$pdf->Cell(192,-15,"Shadeo Mahto Marg, ",0,1,'R');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(15,8,'');
$pdf->Cell(15,8,'');
$pdf->Cell(100,40,"A Unit of MAGENOTO SOFTWARE PVT. LTD.",0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(51,8,'');
$pdf->Cell(10,25,"Boring Road, Patna- 800001",0,1,'R');
$pdf->Cell(0,8,'');
$pdf->Cell(2,-15,"Cont. No.-7488435045,9308893964 ",0,1,'R');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(15,8,'');
$pdf->Cell(15,8,'');
$pdf->Cell(100,40,"CIN :U74999BR2016PTC0262226",0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(17,30,'');
$pdf->Cell(20,25,"B.O. : ",0,0);
$pdf->Cell(25,8,'');
$pdf->SetFont('Arial','',10);
$pdf->Cell(0.25,25,"Fida Hussain Road, ",0,1,'R');
$pdf->Cell(192,-15,"Jehanabad,Pin-804408(Bihar) ",0,1,'R');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(15,8,'');
$pdf->Cell(15,8,'');
$pdf->Cell(100,40,"An ISO 9001 : 2015 Certified Company",0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(62,26,"Cont. No.:7488516186 ",0,1,'R');
$pdf->Cell(10,0,'');
$pdf->Cell(175,0,'',1,1);
































$pdf->Output();
 ?>
