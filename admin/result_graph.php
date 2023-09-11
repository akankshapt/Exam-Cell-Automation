<!DOCTYPE html>
<html lang="en">
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		
		<!-- Title -->
		<title> User Result In Graph</title>

		<!--- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!--- Icons css -->
		<link href="assets/css/icons.css" rel="stylesheet">

		<!-- Internal Data table css -->
	<link href="assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet">
	<link href="assets/plugins/datatable/css/responsive.bootstrap4.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="assets/plugins/datatable/css/responsive.dataTables.min.css" rel="stylesheet">
	<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet">

		<!--- Right-sidemenu css -->
		<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!--- Custom Scroll bar -->
		<link href="assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

		<!--- Style css -->
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/skin-modes.css" rel="stylesheet">

		<!--- Sidemenu css -->
		<link href="assets/css/sidemenu.css" rel="stylesheet">

		<!--- Animations css -->
		<link href="assets/css/animate.css" rel="stylesheet">
		
		<!--- Switcher css -->
		<link href="assets/switcher/css/switcher.css" rel="stylesheet">
		<link href="assets/switcher/demo.css" rel="stylesheet">	
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	</head>

	<body class="main-body  app sidebar-mini">
		
		<?php include "sidebar.php"; ?>

			<!-- container -->
			<div class="container-fluid">
									<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div>
						<h4 class="content-title mb-2">Hi, welcome back!</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="dashboard.php">User Result</a></li>
								<li class="breadcrumb-item active" aria-current="page">Result In Graph </li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<div class="d-flex right-page">
							<a href="user_result.php" class="btn btn-warning pd-x-20 mg-t-10" >Back</a>
						</div>
					</div>
				</div>
				<!-- /breadcrumb -->
									<!-- row opened -->
				<div class="row row-sm">
					<!--div-->
					<div class="col-xl-12">
						<div class="card mg-b-20">
							
							<div class="card-body">

								<?php 
									$query="select r.*,sub.*,u.*,std.* from tbl_result r, tbl_subject sub, tbl_user u, tbl_standard std where std.fld_standard_id=sub.fld_standard_id and std.fld_standard_id=r.fld_standard_id and  std.fld_standard_id=u.fld_standard_id and sub.fld_standard_id=r.fld_standard_id and  sub.fld_standard_id=u.fld_standard_id and r.fld_standard_id=u.fld_standard_id and sub.fld_subject_id=r.fld_subject_id and   r.fld_user_id=u.fld_user_id and r.fld_result_id='".$_GET['fld_result_id']."'  group by r.fld_result_id order by r.fld_result_id desc";
			                                    $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
			                                   $fetch=mysqli_fetch_array($row);
			                                    extract($fetch);

								?>
								<p class="mg-b-20">User Name : <span><?php echo $fetch['fld_user_name'];?></span></p>
								<p class="mg-b-20">Standard : <span><?php echo $fetch['fld_standard_name'];?></span></p>
								<p class="mg-b-20">Subject : <span><?php echo $fetch['fld_subject_name'];?></span></p>
<hr>
									<script type="text/javascript">
								      google.charts.load("current", {packages:["corechart"]});
								      google.charts.setOnLoadCallback(drawChart);
								      function drawChart() {
								        var data = google.visualization.arrayToDataTable([
								          ['Question Answer', 'Question Count'],
								          ['Correct Answer',     <?php echo $fetch['fld_correct_answer'];?>],
								          ['Worng Answer',      <?php echo $fetch['fld_wrong_answer'];?>]
								        ]);

								        var options = {
								          title: '',
								          pieHole: 0.4,
								        };

								        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
								        chart.draw(data, options);
								      }
								    </script>
								    <div id="donutchart" style="width: 100%; height: 500px;"></div>
								
							</div>
						</div>
					</div>
					<!--/div-->

					
				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
					
            		<?php include "footer.php"; ?>	
		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!--- JQuery min js -->
		<script src="assets/plugins/jquery/jquery.min.js"></script>

		<!--- Datepicker js -->
		<script src="assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

		<!--- Bootstrap Bundle js -->
		<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!--- Ionicons js -->
		<script src="assets/plugins/ionicons/ionicons.js"></script>

		<!-- Internal Data tables -->
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatable/js/responsive.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/jquery.dataTables.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
<script src="assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatable/js/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/datatable/js/jszip.min.js"></script>
<script src="assets/plugins/datatable/js/pdfmake.min.js"></script>
<script src="assets/plugins/datatable/js/vfs_fonts.js"></script>
<script src="assets/plugins/datatable/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatable/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatable/js/buttons.colVis.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatable/js/responsive.bootstrap4.min.js"></script>
<!-- datatable js -->
<script src="assets/js/table-data.js"></script>

		<!--- Moment js -->
		<script src="assets/plugins/moment/moment.js"></script>

		<!--- JQuery sparkline js -->
		<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!--- Perfect-scrollbar js -->
		<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>


		<!--- Rating js -->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="assets/plugins/rating/jquery.barrating.js"></script>

		<!--- Custom Scroll bar Js -->
		<script src="assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>


		<!--- Sidebar js -->
		<script src="assets/plugins/side-menu/sidemenu.js"></script>


		<!--- Right-sidebar js -->
		<script src="assets/plugins/sidebar/sidebar.js"></script>
		<script src="assets/plugins/sidebar/sidebar-custom.js"></script>
		
		<!--- Eva-icons js -->
		<script src="assets/js/eva-icons.min.js"></script>

		<!--- Scripts js -->
		<script src="assets/js/script.js"></script>

		<!--- Custom js -->
		<script src="assets/js/custom.js"></script>
		
		<!--- Switcher js -->
		<script src="assets/switcher/js/switcher.js"></script>

		
	
	</body>
</html>