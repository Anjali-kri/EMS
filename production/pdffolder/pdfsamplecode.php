<?php
require('fpdf.php');
//$pdf = new FPDF('P','mm',array(100,150));

$pdf = new FPDF();
$pdf->AddPage();
//$pdf->Image('',10,11,15);
$pdf->AddFont('Times New Roman','B','times.php');
$pdf->SetFont('Times New Roman','B',10);
$pdf->Cell(15,8,'');
$pdf->Cell(100,8,'PROGRAMMING CLASSES');
$pdf->Cell(65,8,'FEE RECIPT',1,1,'C');
$pdf->Cell(15,5,'');
$pdf->Cell(105,8,'Unit of Magenoto Software Pvt. Ltd');
$pdf->Cell(60,8,'DATE:12/01/2019',0,1);

$pdf->Cell(120,8,'PATNA,BIHAR,INDIA');
$pdf->Cell(60,8,'Sl.No[23456]',0,1);

$pdf->Cell(120,8,'phone:+91 9308893964 7488435045');
$pdf->Cell(60,8,'Reg.No:PAT/201932',1,1);

$pdf->Cell(180,8,'Email:progclasses@gmail.com','',1);
$pdf->Cell(180,0,'',1,1);
$pdf->Cell(180,5,'',0,1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,8,'Student Name :');
$pdf->Cell(130,8,'RAJ SAURAV','',1);
$pdf->Cell(50,8,'Course Name :');
$pdf->Cell(130,8,'Php +Mysql','',1);
$pdf->Cell(50,8,'Batch Time :');
$pdf->Cell(130,8,'4:30pm','',1);
$pdf->Cell(50,8,'Total :');
$pdf->Cell(30,8,'6000');
$pdf->Cell(20,8,'Paid:',1,'','C');
$pdf->Cell(30,8,'4000',1,'','C');
$pdf->Cell(20,8,'Due:',1,'','C');
$pdf->Cell(30,8,'2000',1,1,'C');
$pdf->Cell(130,5,'','',1);
$pdf->Cell(120,8,'');
$pdf->Cell(30,8,'Sig.Of Cashier :','','','C');
$pdf->Cell(30,8,'Ravi Kumar',1,1,'C');
$pdf->Cell(180,10,'','',1);
$pdf->Cell(180,1,'-----------x---------------x--------------------x---------------------x--------------------x----------------------x----------------x----------------x-----','',1);

$pdf->Rect(5, 5, 200, 150,'D'); //for border
$pdf->Output();
?>
