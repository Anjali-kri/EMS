<?php
$d_ins=$_POST['emp'];
$d1_ins=$_POST['emp1'];
 $d=strtotime($d_ins);
 $d1=strtotime($d1_ins);
 $date123=$d1-$d;
 $d_total= round($date123/(60*60*24));
 if($d_total>=0)
 {
	 
 }
else
{
	echo "please check starting and ending date";
}



?>