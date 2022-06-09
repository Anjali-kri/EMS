<?php
$d_ins=$_POST['emp'];
$d1_ins=$_POST['emp1'];
$d2_ins=$_POST['emp2'];
 $d=strtotime($d_ins);
 $d1=strtotime($d1_ins);
 $d2=strtotime($d2_ins);
 $date123=$d1-$d;
 $date1234=$d2-$d;
 $d_total_end= round($date123/(60*60*24));
  $d_total_mar= round($date1234/(60*60*24));
 
 if(($d_total_end>=$d_total_mar)&&($d_total_mar>0))
 {
	 
 }
else
{
	echo "please enter date between starting and Ending date";
}



?>