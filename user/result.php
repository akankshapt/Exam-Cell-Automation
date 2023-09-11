
<!DOCTYPE html>
<html lang="en">
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		
		<!-- Title -->
		<title>Test Question </title>

		<!--- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!--- Icons css -->
		<link href="assets/css/icons.css" rel="stylesheet">

		<!--- Select2 css-->
<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet">

		<!--- Internal Morris Css -->
<link href="assets/plugins/morris.js/morris.css" rel="stylesheet">

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
		<!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
		<script src="assets/js/loader.js"></script>
	</head>

	<body class="sub-body  app sidebar-mini">
		
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
								<li class="breadcrumb-item active" aria-current="page">Test Question</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<div class="d-flex right-page">
							<!-- <a href="question_view.php" class="btn btn-warning pd-x-20 mg-t-10" >Back</a> -->
						</div>
					</div>
				</div>
				<!-- /breadcrumb -->
									<!-- row -->
				
				<!-- /row -->

				<!-- row -->
				
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<center>
									<?php 

										$query_details="select r.*,m.* from tbl_result r, tbl_subject m where 
											 m.fld_subject_id=r.fld_subject_id and  r.fld_standard_id='".$fetch_user['fld_standard_id']."' and r.fld_user_id='".$_SESSION['fld_user_id']."' and r.fld_result_id='".$_GET['fld_result_id']."'  group by r.fld_result_id order by r.fld_result_id desc";
										$row_d=mysqli_query($connect,$query_details) or die(mysqli_error($connect));
										$fetch_d=mysqli_fetch_array($row_d); 
									?>
										<h3 style="color: #c43a7f;">Result </h3>
								</center>
								
								<br>

								<p class="mg-b-20">Standard : <span><?php echo $fetch_user['fld_standard_name'];?></span></p>
								<p class="mg-b-20">Subject : <span><?php echo $fetch_d['fld_subject_name'];?></span></p>
								
								<p class="mg-b-20">Total Answer: <span> 20</span></p>
								<p class="mg-b-20">Number Of Correct Answer:<span><?php echo $fetch_d['fld_correct_answer'];?></span></p>
								<p class="mg-b-20">Number Of Wrong Answer:<span><?php echo $fetch_d['fld_wrong_answer'];?></span></p>
								<p class="mg-b-20">Result:<span style="color: #c43a7f;"><?php echo $fetch_d['fld_correct_answer'];?></span></p>
								
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				

				
			</div>
			<!-- Container closed -->
		</div>
		<!-- sub-content closed -->
					
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

		<!--- Select2 js -->
<script src="assets/plugins/select2/js/select2.min.js"></script>
<!--- Internal Parsley.min js -->
<script src="assets/plugins/parsleyjs/parsley.min.js"></script>
<!--- Internal Form-validation js -->
<script src="assets/js/form-validation.js"></script>
<!--- Internal Morris js -->
<script src="assets/plugins/raphael/raphael.min.js"></script>
<script src="assets/plugins/morris.js/morris.min.js"></script>
<!--- Internal Chart Morris js -->
<!-- <script src="assets/js/chart.morris.js"></script> -->

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