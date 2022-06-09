
<?php
error_reporting(0);
include_once('connection.php');
if (isset($_POST["save"]))
{
	$c1=$_POST['c1'];
	$f1=$_POST['f1'];
	$l1=$_POST['l1'];
	$a1=$_POST['a1'];
	$ef=$_POST['ef'];
	$deve=$_POST['deve'];
	$addfee=$_POST['addfee'];
	$icard=$_POST['icard'];
	$uniform=$_POST['uniform'];
	echo $deve;
	echo $addfee;
	echo $icard;
	echo $uniform;
	echo $c1,$f1,$l1,$a1,$e1;
  
 $q1="insert into fee values('$c1','$f1','$l1','$a1','$ef','$deve','$addfee','$icard','$uniform')";
$r1=mysqli_query($con,$q1);

 	$c2=$_POST['c2'];
	$f2=$_POST['f2'];
	$l2=$_POST['l2'];
	$a2=$_POST['a2'];
	$eq=$_POST['eq'];
	$q2="insert into fee values ('$c2','$f2','$l2','$a2','$eq','$deve','$addfee','$icard','$uniform')";
 $r2=mysqli_query($con,$q2);
 
 	$c3=$_POST['c3'];
	$f3=$_POST['f3'];
	$l3=$_POST['l3'];
	$a3=$_POST['a3'];
	$e3=$_POST['e3'];
	$q3="insert into fee values ('$c3','$f3','$l3','$a3','$e3','$deve','$addfee','$icard','$uniform')";
 $r3=mysqli_query($con,$q3);
 
 	$c4=$_POST['c4'];
	$f4=$_POST['f4'];
	$l4=$_POST['l4'];
	$a4=$_POST['a4'];
	$e4=$_POST['e4'];
	$q4="insert into fee values ('$c4','$f4','$l4','$a4','$e4','$deve','$addfee','$icard','$uniform')";
$r4=mysqli_query($con,$q4);

 	$c5=$_POST['c5'];
	$f5=$_POST['f5'];
	$l5=$_POST['l5'];
	$a5=$_POST['a5'];
	$e5=$_POST['e5'];

	 $q5="insert into fee values ('$c5','$f5','$l5','$a5','$e5','$deve','$addfee','$icard','$uniform')";
 $r5=mysqli_query($con,$q5);
 	$c6=$_POST['c6'];
	$f6=$_POST['f6'];
	$l6=$_POST['l6'];
	$a6=$_POST['a6'];
	$e6=$_POST['e6'];
	
	$q6="insert into fee values ('$c6','$f6','$l6','$a6','$e6','$deve','$addfee','$icard','$uniform')";
$r6=mysqli_query($con,$q6);
 	$c7=$_POST['c7'];
	$f7=$_POST['f7'];
	$l7=$_POST['l7'];
	$a7=$_POST['a7'];
	$e7=$_POST['e7'];
	 $q7="insert into fee values ('$c7','$f7','$l7','$a7','$e7','$deve','$addfee','$icard','$uniform')";
 $r7=mysqli_query($con,$q7);
 
 	$c8=$_POST['c8'];
	$f8=$_POST['f8'];
	$l8=$_POST['l8'];
	$a8=$_POST['a8'];
	$e8=$_POST['e8'];
	$q8="insert into fee values ('$c8','$f8','$l8','$a8','$e8','$deve','$addfee','$icard','$uniform')";
$r8=mysqli_query($con,$q8);

 	$c9=$_POST['c9'];
	$f9=$_POST['f9'];
	$l9=$_POST['l9'];
	$a9=$_POST['a9'];
	$e9=$_POST['e9'];
	 $q9="insert into fee values ('$c9','$f9','$l9','$a9','$e9','$deve','$addfee','$icard','$uniform')";
 $r9=mysqli_query($con,$q9);

 	$c10=$_POST['c10'];
	$f10=$_POST['f10'];
	$l10=$_POST['l10'];
	$a10=$_POST['a10'];
	$e10=$_POST['e10'];

	$q10="insert into fee values ('$c10','$f10','$l10','$a10','$e10','$deve','$addfee','$icard','$uniform')";
$r10=mysqli_query($con,$q10);

}
if (isset($_POST["list"]))
header('Location:listfee.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include"headsection.php" ?>
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <?php include"sidebar.php"?>
      <?php include"topnavigation.php"?>
      <!-- page content -->
	  <div class="right_col" role="main">
	      <div class="">
        <div class="page-title">
            <div class="title_left">
              <h3>FEE DETAILS</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
               
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

		  
		  
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel" >
              <div class="x_title">
                  <h2> Admission Fee</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div><!--end of page-->
				<form method="post">
      <div class="row">
	  		
		 <div class="col-sm-2">
		 <label>class<span>*</span></label> 
		  <input type="text" class="form-control" name="c1"   >
		  </div>
		  
		   <div class="col-sm-2">
		  <label>Fee<span>*</span></label>
		   <input type="text" class="form-control" name="f1">
		  </div>
		  <div class="col-sm-2">
		  <label>Lab<span>*</span></label>
		   <input type="text" class="form-control" name="l1">
		  </div>
		  <div class="col-sm-2">
		  <label>Activity<span>*</span></label>
		   <input type="text" class="form-control" name="a1">
		  </div>
			  <div class="col-sm-2">
		  <label>Exam Fee<span>*</span></label>
		   <input type="text" class="form-control" name="ef">
		  </div>
		  </div>
		  
		  <div class="row">
		 <div class="col-sm-2">
		 <label>class<span>*</span></label> 
		  <input type="text" class="form-control" name="c2" >
		  </div>
		  
		   <div class="col-sm-2">
		  <label>Fee<span>*</span></label>
		   <input type="text" class="form-control" name="f2">
		  </div>
		  <div class="col-sm-2">
		  <label>Lab<span>*</span></label>
		   <input type="text" class="form-control" name="l2">
		  </div>
		  <div class="col-sm-2">
		  <label>Activity<span>*</span></label>
		   <input type="text" class="form-control" name="a2">
		  </div>
		  <div class="col-sm-2">
		  <label>Exam Fee<span>*</span></label>
		   <input type="text" class="form-control"name="eq">
		  </div>
		  </div>
		  
		  
		  <div class="row">
		 <div class="col-sm-2">
		 <label>class<span>*</span></label> 
		  <input type="text" class="form-control" name="c3" >
		  </div>
		  
		   <div class="col-sm-2">
		  <label>Fee<span>*</span></label>
		   <input type="text" class="form-control" name="f3">
		  </div>
		  <div class="col-sm-2">
		  <label>Lab<span>*</span></label>
		   <input type="text" class="form-control" name="l3">
		  </div>
		  <div class="col-sm-2">
		  <label>Activity<span>*</span></label>
		   <input type="text" class="form-control" name="a3">
		  </div>
		  <div class="col-sm-2">
		  <label>Exam Fee<span>*</span></label>
		   <input type="text" class="form-control" name="e3">
		  </div>
		  </div>
		  
		  <div class="row">
		 <div class="col-sm-2">
		 <label>class<span>*</span></label> 
		  <input type="text" class="form-control" name="c4" >
		  </div>
		 
		   <div class="col-sm-2">
		  <label>Fee<span>*</span></label>
		   <input type="text" class="form-control"name="f4">
		  </div>
		  <div class="col-sm-2">
		  <label>Lab<span>*</span></label>
		   <input type="text" class="form-control"name="l4">
		  </div>
		  <div class="col-sm-2">
		  <label>Activity<span>*</span></label>
		   <input type="text" class="form-control"name="a4">
		  </div>
		  <div class="col-sm-2">
		  <label>Exam Fee<span>*</span></label>
		   <input type="text" class="form-control"name="e4">
		  </div>
		  </div>
		  
		  <div class="row">
		 <div class="col-sm-2">
		 <label>class<span>*</span></label> 
		  <input type="text" class="form-control" name="c5">
		  </div>
		  
		   <div class="col-sm-2">
		  <label>Fee<span>*</span></label>
		   <input type="text" class="form-control"name="f5">
		  </div>
		  <div class="col-sm-2">
		  <label>Lab<span>*</span></label>
		   <input type="text" class="form-control"name="l5">
		  </div>
		  <div class="col-sm-2">
		  <label>Activity<span>*</span></label>
		   <input type="text" class="form-control"name="a5">
		  </div>
		  <div class="col-sm-2">
		  <label>Exam Fee<span>*</span></label>
		   <input type="text" class="form-control" name="e5">
		  </div>
		  </div>
		  
		  
		  <div class="row">
		 <div class="col-sm-2">
		 <label>class<span>*</span></label> 
		  <input type="text" class="form-control" name="c6" >
		  </div>
		  
		   <div class="col-sm-2">
		  <label>Fee<span>*</span></label>
		   <input type="text" class="form-control"name="f6">
		  </div>
		  <div class="col-sm-2">
		  <label>Lab<span>*</span></label>
		   <input type="text" class="form-control"name="l6">
		  </div>
		  <div class="col-sm-2">
		  <label>Activity<span>*</span></label>
		   <input type="text" class="form-control"name="a6">
		  </div>
		  <div class="col-sm-2">
		  <label>Exam Fee<span>*</span></label>
		   <input type="text" class="form-control" name="e6">
		  </div>
		  </div>
		  <div class="row">
		 <div class="col-sm-2">
		 <label>class<span>*</span></label> 
		  <input type="text" class="form-control" name="c7">
		  </div>
		  
		   <div class="col-sm-2">
		  <label>Fee<span>*</span></label>
		   <input type="text" class="form-control"name="f7">
		  </div>
		  <div class="col-sm-2">
		  <label>Lab<span>*</span></label>
		   <input type="text" class="form-control"name="l7">
		  </div>
		  <div class="col-sm-2">
		  <label>Activity<span>*</span></label>
		   <input type="text" class="form-control" name="a7">
		  </div>
		  <div class="col-sm-2">
		  <label>Exam Fee<span>*</span></label>
		   <input type="text" class="form-control"name="e7">
		  </div>
		  </div>
		  <div class="row">
		 <div class="col-sm-2">
		 <label>class<span>*</span></label> 
		  <input type="text" class="form-control" name="c8">
		  </div>
		  
		   <div class="col-sm-2">
		  <label>Fee<span>*</span></label>
		   <input type="text" class="form-control" name="f8">
		  </div>
		  <div class="col-sm-2">
		  <label>Lab<span>*</span></label>
		   <input type="text" class="form-control" name="l8">
		  </div>
		  <div class="col-sm-2">
		  <label>Activity<span>*</span></label>
		   <input type="text" class="form-control"name="a8">
		  </div>
		  <div class="col-sm-2">
		  <label>Exam Fee<span>*</span></label>
		   <input type="text" class="form-control"name="e8">
		  </div>
		  </div>
		  <div class="row">
		 <div class="col-sm-2">
		 <label>class<span>*</span></label> 
		  <input type="text" class="form-control" name="c9">
		  </div>
		  
		   <div class="col-sm-2">
		  <label>Fee<span>*</span></label>
		   <input type="text" class="form-control" name="f9">
		  </div>
		  <div class="col-sm-2">
		  <label>Lab<span>*</span></label>
		   <input type="text" class="form-control" name="l9">
		  </div>
		  <div class="col-sm-2">
		  <label>Activity<span>*</span></label>
		   <input type="text" class="form-control"name="a9">
		  </div>
		  <div class="col-sm-2">
		  <label>Exam Fee<span>*</span></label>
		   <input type="text" class="form-control"name="e9">
		  </div>
		  </div>
		  <div class="row">
		 <div class="col-sm-2">
		 <label>class<span>*</span></label> 
		  <input type="text" class="form-control" name="c10">
		  </div>
		  
		   <div class="col-sm-2">
		  <label>Fee<span>*</span></label>
		   <input type="text" class="form-control" name="f10">
		  </div>
		  <div class="col-sm-2">
		  <label>Lab<span>*</span></label>
		   <input type="text" class="form-control" name="l10">
		  </div>
		  <div class="col-sm-2">
		  <label>Activity<span>*</span></label>
		   <input type="text" class="form-control" name="a10">
		  </div>
		  <div class="col-sm-2">
		  <label>Exam Fee<span>*</span></label>
		   <input type="text" class="form-control" name="e10">
		  </div>
		  </div><br><br>
		  
		  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Development <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"   class="form-control col-md-7 col-xs-12" name="deve">
                      </div>
                    </div><br><br>
		  
		  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Admission <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  class="form-control col-md-7 col-xs-12" name="addfee">
                      </div>
                    </div><br><br>
		
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >I-CARD <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text"  class="form-control col-md-7 col-xs-12"  name="icard">
                      </div>
                    </div><br><br>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" >Uniform <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" name="uniform">
                      </div>
                    </div><br><br>
					
					
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-primary" name="save">SAVE</button>
                       <a href="listfee.php"><button type="submit" class="btn btn-success" name="list">LIST </button></a>
					  
                      </div>
					  
                    </div>
					</form>
					
					
		  </div>
		  </div>
		  </div>
<?php include"footer.php"?>
 </div>
      <!-- /page content -->
    </div>
  </div>

<?php include"scriptfile.php"?>

</body>
</html>
