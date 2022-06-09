
<html lang="en">
<head>
  <?php
  error_reporting(0);
 include("head1.php");
  include "connection1.php" ;
  session_start();
  $admin=$_SESSION['user_name'];
  
  if($admin=="")
  {
	  header('Location:login.php');
  }
  ?>
  
</head>
<body >
  <div class="container body">
    <div >

      <!-- page content -->
      <div class="right_col" role="main" style="padding-right:200px;padding-left:200px;">
	      <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Update Account </h2>
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
				  function account(val)
				  {
					 $.ajax
					 ({
						type:'POST',
						url:'getupdate_account.php',
						data:'a_type='+val,
						success:function(data)
						{
							$('#account_code').html(data)
						}
							
					 });
				  }
				  </script>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Account Type <span class="required" >*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="accout_type" class="form-control" onchange="account(this.value);">
						<option value="Admin">Admin</option>
						<option value="SubAdmin">SubAdmin</option>
						</select>
                      </div>
                    </div>
					<script>
					/*
					function getname(val)
					{
						$.ajax
						({
							type:'POST',
							url:'get_update_name.php',
							data:'p_code='+val,
							success:function(data)
							{
								$('#name').val(data)
							}
						});
					}
					
					
					*/
					</script>
					<br><br><br><br>
					<div id="account_code">
					</div>
					<!-- permission  Assigned-->
					</form>
				</div>
             </div>
            </div>
          </div>      
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
