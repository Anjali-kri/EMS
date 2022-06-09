<?php
require('fpdf.php');
include "connection1.php";
$emp_id=$_POST['emp_id'];
$month=$_POST['month'];
$date=date('d-m-Y');
$result_detail=mysqli_query($con,"select * from emp_details where emp_id='$emp_id'");
$fetch_detail=mysqli_fetch_assoc($result_detail);
$name=$fetch_detail['fname']." ".$fetch_detail['mname']." ".$fetch_detail['lname'];
$emp_id=$fetch_detail['emp_id'];
$dept=$fetch_detail['dept'];
$desi=$fetch_detail['desi'];
$result_salary=mysqli_query($con,"select * from emp_salary where emp_id='$emp_id'");
$fetch_salary=mysqli_fetch_assoc($result_salary);
$bsal=$fetch_salary['b_sal'];
$house=$fetch_salary['house'];
$medical=$fetch_salary['medical'];
$dearness=$fetch_salary['dearness'];
$increment=$fetch_salary['increment'];
$incentive=$fetch_salary['incentive'];
$outdoor=$fetch_salary['outdoor'];
$transport=$fetch_salary['transport'];
$total_earn=$fetch_salary['total_earn'];
$loss_wage=$fetch_salary['loss_wage'];
$pf=$fetch_salary['provident_fund'];
$tax=$fetch_salary['tax'];
$other1=$fetch_salary['other1'];
$total_deduction=$fetch_salary['total_deduction'];
$net_pay=$fetch_salary['net_pay'];

//$pdf = new FPDF('P','mm',array(100,150));

$pdf = new FPDF();
$pdf->AddPage();

$pdf->AddFont('Times New Roman','B','times.php');
$pdf->SetFont('Times New Roman','B',10);
$pdf->Cell(180,8,'PAY SLIP','',1,'C');
$pdf->Image('../upload/logo.png',10,17,15,'');
$pdf->Cell(15,8,'');
$pdf->Cell(100,8,'PROGRAMMING CLASSES');
$pdf->Cell(35,8,'','','R');
$pdf->Cell(10,8,'DATE:','','R');
$pdf->Cell(20,8,$date,'',1,'');
$pdf->Cell(15,5,'');
$pdf->Cell(165,8,'Unit of Magenoto Software Pvt. Ltd',0,1);
$pdf->Cell(40,5,'Emp id :','');
$pdf->Cell(140,5,$emp_id,'',1);
$pdf->Cell(40,5,'Name :','');
$pdf->Cell(140,5,$name,'',1);

$pdf->Cell(40,5,'Department :','');
$pdf->Cell(140,5,$dept,'',1);
$pdf->Cell(40,5,'Desination :','');
$pdf->Cell(140,5,$desi,'',1);
$pdf->Cell(40,5,'Month :','');
$pdf->Cell(140,5,$month,'',1);
$pdf->Cell(180,'','','',1);

$pdf->Cell(45,5,'Gross',1,'','C');
$pdf->Cell(45,5,'Amount',1,'','C');
$pdf->Cell(45,5,'Deduction',1,'','C');
$pdf->Cell(45,5,'Amount',1,1,'C');
$pdf->Cell(45,5,'Basic :','','');
$pdf->Cell(45,5,$bsal,'','');
$pdf->Cell(45,5,'Loss of wages ');
$pdf->Cell(45,5,$loss_wage,'',1);
$pdf->Cell(45,5,'HA ');
$pdf->Cell(45,5,$house,'','');
$pdf->Cell(45,5,'PF ');
$pdf->Cell(45,5,$pf,'',1);
$pdf->Cell(45,5,'medical Allowance ');
$pdf->Cell(45,5,$medical,'','');
$pdf->Cell(45,5,'TAX ');
$pdf->Cell(45,5,$tax,'',1);
$pdf->Cell(45,5,'DA');
$pdf->Cell(45,5,$dearness,'','');
$pdf->Cell(45,5,'OTHER ');
$pdf->Cell(45,5,$other1,'',1);
$pdf->Cell(45,5,'Incentive');
$pdf->Cell(45,5,$incentive,'','');
$pdf->Cell(45,5,'');
$pdf->Cell(45,5,'','',1);
$pdf->Cell(45,5,'Increment');
$pdf->Cell(45,5,$increment,'','');
$pdf->Cell(45,5,'');
$pdf->Cell(45,5,'','',1);
$pdf->Cell(45,5,'outdoor');
$pdf->Cell(45,5,$outdoor,'','');
$pdf->Cell(45,5,'');
$pdf->Cell(45,5,'','',1);
$pdf->Cell(45,5,'transport');
$pdf->Cell(45,5,$transport,'','');
$pdf->Cell(45,5,'');
$pdf->Cell(45,5,'','',1);
$pdf->Cell(45,5,'Total','1');
$pdf->Cell(45,5,$total_earn,'1');
$pdf->Cell(45,5,'Total',1);
$pdf->Cell(45,5,$total_deduction,'1',1);
$pdf->Cell(180,5,'','',1);

$pdf->Cell(100,5,'');
$pdf->Cell(40,5,'Net_Payment :',1,'');
$pdf->Cell(40,5,$net_pay,1,1);

$pdf->Rect(10,59, 45, 45,'D'); //for border
$pdf->Rect(55,59, 45, 45,'D');
$pdf->Rect(100,59, 45, 45,'D');
$pdf->Rect(145,59, 45, 45,'D');

$pdf->Rect(5, 5, 200, 150,'D'); //for border
$pdf->Output();
?>
