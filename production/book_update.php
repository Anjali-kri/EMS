
<html lang="en">

<head>
  <?php
  include("head1.php");
  session_start();
$admin=$_SESSION['user_name'];
  include "connection.php";
  error_reporting(0);
  ?>
		<script>
		function myfun()
		{
			$.ajax
			({
				type:'POST',
				url:'get_book_details.php',
				data:'emp='+1,
				success:function(data)
				{
					$('#details').html(data)
				}
			});
		}

		</script>
  

</head>

<body class="nav-md" onload="myfun()">

  <div class="container body">


    <div class="main_container">
	 <div class="navbar nav_title" style="border: 0;">
		   <?php
		   include "sidemenu.php";
		   ?>
          </div>
		  
		  

<!--abc paste-->
<?php
//include("menu.php");


?>
 
<?php
include("header.php");

?>

      <!-- page content -->
      <div class="right_col" role="main">

       <!--working part-->
	    <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Search Pannel <small>BOOKS OF DIFFERENT DEPARTMENT </small></h2>
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
                </div>
                <div class="x_content">
                  <br />
				  <script>
				  function mysearch()
				  {
					  var a=document.getElementById('b_id').value;
					  $.ajax
					  ({
						  type:'POST',
						  url:'get_book_detail_single.php',
						  data:'emp1='+a,
						  success:function(data)
						  {
							  $('#details').html(data);
						  }
					  });
				  }
				  </script>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
					<div class="row">
					<div class="col-sm-4">
					<input type="text" id='b_id' name="b_id" class="form-control" style="border-radius:10px;height:35px;" placeholder="search by Book Name or Book Id ">
					</div>
					<div class="col-sm-2">
					<label class="btn btn-info btn-block" onclick="mysearch();"><b>Search</b></label>
					</div>
					<div class="col-sm-2">
					</div>
					<div class="col-sm-4">
					</div>
					</div>
                  </form>
                </div>
              </div>
            </div>
          </div>
		  
		  
		  
		  
		  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>BOOK DETAILS <small>BOOKS OF DIFFERENT DEPARTMENT </small></h2>
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
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
				 <div id="details">
				 </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
		  <div style="margin-top:1500px;"></div>

        

        


       
</div>
      
		<?php
		include("footer.php");
		?>


        

    </div>

  </div>

  
<?php

include("script.php");

?>

</body>

</html>
