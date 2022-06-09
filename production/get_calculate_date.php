<?php
$from=$_POST['emp'];
$to=$_POST['emp1'];
$d=strtotime($from);
$d1=strtotime($to);
$date123=$d1-$d;
$days=round($date123/(60*60*24));
echo $days;
?>