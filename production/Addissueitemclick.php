<?php
error_reporting(0);
include_once('connection.php');

if(isset($_POST['save']))
{
	$Usertype=$_POST['Usertype'];
	$Issueto=$_POST['Issueto'];
	$Issueby=$_POST['Issueby'];
	$Issuedate=$_POST['Issuedate'];
	$Returndate=$_POST['Returndate'];
	$Note=$_POST['Note'];
	$Itemcategory=$_POST['Itemcategory'];
	$Item=$_POST['Item'];
	$Quantity=$_POST['Quantity'];
	$q="insert into addissueitem(Usertype,Issueto,Issueby,Issuedate,Returndate,Note,Itemcategory,Item,Quantity)values('$Usertype','$Issueto','$Issueby','$Issuedate','$Returndate','$Note','$Itemcategory','$Item','$Quantity')";
	
$r=mysqli_query($con,$q);
if(mysqli_affected_rows($con)>0)
	{
		$r2=mysqli_query($con,"select * from additemstock where Item='$Item'");
		$rs2=mysqli_fetch_assoc($r2);
		$totalquantity=$rs2['Quantity'];
		$restquantity=$totalquantity-$Quantity;		
		$rs3=mysqli_query($con,"update additemstock set Quantity='$restquantity'");
		
	}
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include"heder.php"?>
      <script>
		
		function getitem(val)
		{
			
			$.ajax
		  ({
		   type: "POST",
		   url: "getitemdata.php",
		   data: 'adno='+val,
		   success: function(data)
		   {
			   $("#item").html(data);
		   }
		  
		   });	
		}
		
		</script>
</head>
<body class="nav-md">
  <div class="container body">
  <div class="main_container">
  <?php include"sidebar.php"?> 
  <?php include"footer.php"?> 
  
          <!-- page content -->
		  <div class="right_col" role="main">			
		  <div class="">
          <div class="page-title">
          <div class="title_left">
          </div>
		  </div>
		  
			<div class="clearfix">
			</div>
			
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
            <div class="x_title">
            <h2 style="color:#0077b3"><b>ISSUE ITEM</b></h2>
			 
				  <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li><a class="print-link"><i class="fa fa-print"></i></a>
                  </li>
				  <li><a class="copy-link"><i class="fa fa-copy"></i></a>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>				 
                </ul>
			
			<div class="clearfix">
			</div>
            </div>
			
               <div class="x_content">
               <br />
			   <form id="demo-form2" data-parsley-validate  method="post">
			   <div class="row">
			   <div class="col-sm-4">
               <div class="form-group"><br>
               <label class="control-label col-md-4 col-sm-4 col-xs-12">User Type<span class="required">*</span></label>
               <div class="col-md-10 col-sm-10 col-xs-12">
			   
          <select class="form-control" name="Usertype">
		  <option>---Select---</option>
		  <option value="Admin">Admin</option>
		  <option value="Employee">Employee</option>  
               </select>
               </div>
               </div>
			   </div>
               	
			<div class="col-sm-4">
            <div class="form-group"><br>
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="Issue By">Issue To<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="text" id="Issue To" name="Issueto" required="required" class="form-control col-md-7 col-xs-12">
            </div>
            </div>
		    </div>
          		 
			<div class="col-sm-4">
            <div class="form-group"><br>
            <label class="control-label col-md-4 col-sm-4 col-xs-12" for="Issue By">Issue By<span class="required">*</span>
            </label>
            <div class="col-md-10 col-sm-10 col-xs-12">
            <input type="text" id="Issue By" name="Issueby" required="required" class="form-control col-md-7 col-xs-12">
            </div>
            </div>
		    </div>
			</div>
			
			
			<div class="row"> 
	        <div class="col-sm-4">
			<div class="form-group"><br>
                      <label for="Issue Date" class="control-label col-md-4 col-sm-4 col-xs-12">Issue Date*</label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
					  <input type="Date" class="form-control col-md-7 col-xs-12"  name="Issuedate">
                      </div>
                    </div>
					</div>
				
					
			
	        <div class="col-sm-4">
			<div class="form-group"><br>
                      <label for="Return Date" class="control-label col-md-4 col-sm-4 col-xs-12">Return Date*</label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
					  <input type="Date" class="form-control col-md-7 col-xs-12"  name="Returndate">
                      </div>
                    </div>
					</div>
				
				<div class="col-sm-4">
				<div class="form-group"><br>
                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="Note">Note<span class="required"></span>
                </label>
                <div class="col-md-10 col-sm-10 col-xs-12">
                <input type="text" id="Note" name="Note" required="required" class="form-control col-md-7 col-xs-12">
                </div>
                </div>
				</div>
				</div>
				
				
					
	<div class="row">
	<div class="col-sm-4">
	<div class="form-group"><br>
    <label class="control-label col-md-4 col-sm-4 col-xs-12">ItemCategory<span class="required">*</span></label>
    <div class="col-md-10 col-sm-10 col-xs-12">
	<?php 
		  $r=mysqli_query($con,"select * from additemcategory");
		  ?>
          <select class="form-control" name="Itemcategory" onchange="getitem(this.value)" >
		  <option>---Select---</option>
		  <?php
		  while($row=mysqli_fetch_assoc($r))
		  {
		  ?>
		  <option value="<?php echo $row['Itemcategory']?>"><?php echo $row['Itemcategory']?></option>
		  <?php
		  }
		  ?>
		
    </select><br>
    </div>
    </div>
    </div>
	
					
		  <div class="col-sm-4">
		  <div class="form-group"><br>
          <label class="control-label col-md-4 col-sm-4 col-xs-12">Item<span class="required"></span></label>
          <div class="col-md-10 col-sm-10 col-xs-12">
          <select class="form-control" name="Item" id="item">
		  <option></option>   
          </select><br>
          </div>
          </div>
		  </div>
		  
					
	<div class="col-sm-4">
    <div class="form-group"><br>
    <label class="control-label col-md-4 col-sm-4 col-xs-12" for="Quantity">Quantity<span class="required">*</span>
    </label>
    <div class="col-md-10 col-sm-10 col-xs-12">
    <input type="text" id="Quantity" name="Quantity" required="required" class="form-control col-md-7 col-xs-12">
    </div>
    </div>
	</div>
	</div>
	
            <div class="ln_solid"></div>
            <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">    
            <button type="submit" style="border-radius:10px;background-color: #00b3b3"  class="btn btn-success" name="save">Save</button>
			<button type="submit" style="border-radius:10px;background-color:#5c8a8a" class="btn btn-primary" name="cancel">Cancel</button>
            </div>
		    </form>
            </div>
            </div>
            </div>
            </div>
            </div>
			</div>
			
	  
	
        <!-- footer content -->
        <footer>
        <div class="copyright-info">
        <p class="pull-right">Magenoto Software Pvt.Ltd</p>
        </div>
        <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
        </div>		
        <!-- /page content -->
        </div>
        </div>
    <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
    </div>

   <script src="js/bootstrap.min.js"></script>

  <!-- gauge js -->
  <script type="text/javascript" src="js/gauge/gauge.min.js"></script>
  <script type="text/javascript" src="js/gauge/gauge_demo.js"></script>
  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="js/moment/moment.min.js"></script>
  <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
  <!-- chart js -->
  <script src="js/chartjs/chart.min.js"></script>

  <script src="js/custom.js"></script>

  <!-- flot js -->
  <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
  <script type="text/javascript" src="js/flot/jquery.flot.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.pie.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.orderBars.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.time.min.js"></script>
  <script type="text/javascript" src="js/flot/date.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.spline.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.stack.js"></script>
  <script type="text/javascript" src="js/flot/curvedLines.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.resize.js"></script>
  <script>
    $(document).ready(function() {
      // [17, 74, 6, 39, 20, 85, 7]
      //[82, 23, 66, 9, 99, 6, 2]
      var data1 = [
        [gd(2012, 1, 1), 17],
        [gd(2012, 1, 2), 74],
        [gd(2012, 1, 3), 6],
        [gd(2012, 1, 4), 39],
        [gd(2012, 1, 5), 20],
        [gd(2012, 1, 6), 85],
        [gd(2012, 1, 7), 7]
      ];

      var data2 = [
        [gd(2012, 1, 1), 82],
        [gd(2012, 1, 2), 23],
        [gd(2012, 1, 3), 66],
        [gd(2012, 1, 4), 9],
        [gd(2012, 1, 5), 119],
        [gd(2012, 1, 6), 6],
        [gd(2012, 1, 7), 9]
      ];
      $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
        data1, data2
      ], {
        series: {
          lines: {
            show: false,
            fill: true
          },
          splines: {
            show: true,
            tension: 0.4,
            lineWidth: 1,
            fill: 0.4
          },
          points: {
            radius: 0,
            show: true
          },
          shadowSize: 2
        },
        grid: {
          verticalLines: true,
          hoverable: true,
          clickable: true,
          tickColor: "#d5d5d5",
          borderWidth: 1,
          color: '#fff'
        },
        colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
        xaxis: {
          tickColor: "rgba(51, 51, 51, 0.06)",
          mode: "time",
          tickSize: [1, "day"],
          //tickLength: 10,
          axisLabel: "Date",
          axisLabelUseCanvas: true,
          axisLabelFontSizePixels: 12,
          axisLabelFontFamily: 'Verdana, Arial',
          axisLabelPadding: 10
            //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
        },
        yaxis: {
          ticks: 8,
          tickColor: "rgba(51, 51, 51, 0.06)",
        },
        tooltip: false
      });

      function gd(year, month, day) {
        return new Date(year, month - 1, day).getTime();
      }
    });
  </script>

  <!-- worldmap -->
  <script type="text/javascript" src="js/maps/jquery-jvectormap-2.0.3.min.js"></script>
  <script type="text/javascript" src="js/maps/gdp-data.js"></script>
  <script type="text/javascript" src="js/maps/jquery-jvectormap-world-mill-en.js"></script>
  <script type="text/javascript" src="js/maps/jquery-jvectormap-us-aea-en.js"></script>
  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>
  <script>
    $(function() {
      $('#world-map-gdp').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        zoomOnScroll: false,
        series: {
          regions: [{
            values: gdpData,
            scale: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
          }]
        },
        onRegionTipShow: function(e, el, code) {
          el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
        }
      });
    });
  </script>
  <!-- skycons -->
  <script src="js/skycons/skycons.min.js"></script>
  <script>
    var icons = new Skycons({
        "color": "#73879C"
      }),
      list = [
        "clear-day", "clear-night", "partly-cloudy-day",
        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
        "fog"
      ],
      i;

    for (i = list.length; i--;)
      icons.set(list[i], list[i]);

    icons.play();
  </script>

  <!-- dashbord linegraph -->
  <script>
    Chart.defaults.global.legend = {
      enabled: false
    };

    var data = {
      labels: [
        "Symbian",
        "Blackberry",
        "Other",
        "Android",
        "IOS"
      ],
      datasets: [{
        data: [15, 20, 30, 10, 30],
        backgroundColor: [
          "#BDC3C7",
          "#9B59B6",
          "#455C73",
          "#26B99A",
          "#3498DB"
        ],
        hoverBackgroundColor: [
          "#CFD4D8",
          "#B370CF",
          "#34495E",
          "#36CAAB",
          "#49A9EA"
        ]

      }]
    };

    var canvasDoughnut = new Chart(document.getElementById("canvas1"), {
      type: 'doughnut',
      tooltipFillColor: "rgba(51, 51, 51, 0.55)",
      data: data
    });
  </script>
  <!-- /dashbord linegraph -->
  <!-- datepicker -->
  <script type="text/javascript">
    $(document).ready(function() {

      var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
      }

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Clear',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      };
      $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
      $('#reportrange').daterangepicker(optionSet1, cb);
      $('#reportrange').on('show.daterangepicker', function() {
        console.log("show event fired");
      });
      $('#reportrange').on('hide.daterangepicker', function() {
        console.log("hide event fired");
      });
      $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
      });
      $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        console.log("cancel event fired");
      });
      $('#options1').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
      });
      $('#options2').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
      });
      $('#destroy').click(function() {
        $('#reportrange').data('daterangepicker').remove();
      });
    });
  </script>
  <script>
    NProgress.done();
  </script>
  <!-- /datepicker -->
  <!-- /footer content -->
</body>

</html>

		  
		  
