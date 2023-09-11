<!DOCTYPE html>
<html lang="en">
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		
		<!-- Title -->
		<title> Dashboard </title>

		<!--- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!--- Icons css -->
		<link href="assets/css/icons.css" rel="stylesheet">

		<!-- Owl-carousel css-->
<link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet"/>

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
		<link href="assets/switcher/demo.css" rel="stylesheet">	</head>

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
							</ol>
						</nav>
					</div>
					
				</div>
				<!-- /breadcrumb -->
									<!-- main-content-body -->
				<div class="main-content-body">
					<div class="row row-sm">

						<!-- Standard Start -->
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card text-center">
								<a href="standard_view.php">
									<div class="card-body">

										<div class="feature widget-2 text-center mt-0 mb-3">
										<i class="fe fe-grid project bg-pink-transparent mx-auto text-pink "></i>
									</div>
									<?php 
										$query_standard=mysqli_query($connect,"select * from tbl_standard order by fld_standard_id desc") or die(mysqli_error($connect));
					                ?>
										<h6 class="mb-1 text-muted">Semester</h6>
										<h3 class="font-weight-semibold" style="color: black"><?php echo mysqli_num_rows($query_standard); ?></h3>
										
									</div>
								</a>
							</div>
						</div>
						<!-- Standard End -->

						<!-- Subject Start -->
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card text-center">
								<a href="subject_view.php">
									<div class="card-body">

										<div class="feature widget-2 text-center mt-0 mb-3">
										<i class="fe fe-grid project bg-primary-transparent mx-auto text-primary "></i>
									</div>
									<?php 
										$query_main_categopry=mysqli_query($connect,"select * from tbl_subject order by fld_subject_id desc ") or die(mysqli_error($connect));
					                ?>
										<h6 class="mb-1 text-muted">Subject</h6>
										<h3 class="font-weight-semibold" style="color: black"><?php echo mysqli_num_rows($query_main_categopry); ?></h3>
										
									</div>
								</a>
							</div>
						</div>
						<!-- Subject End -->

						<!-- Question Start -->
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card text-center">
								<a href="question_view.php">
									<div class="card-body">

										<div class="feature widget-2 text-center mt-0 mb-3">
										<i class="far fa-question-circle project bg-warning-transparent mx-auto text-warning "></i>
									</div>
									<?php 
										$query_question=mysqli_query($connect,"select sub.*,std.*,q.* from tbl_subject sub, tbl_standard std, tbl_question q where std.fld_standard_id=sub.fld_standard_id and std.fld_standard_id=sub.fld_standard_id and 
			                                    		std.fld_standard_id=q.fld_standard_id and
			                                    		sub.fld_standard_id=q.fld_standard_id and
			                                    	sub.fld_subject_id=q.fld_subject_id 
			                                    group by q.fld_question_id order by q.fld_question_id desc") or die(mysqli_error($connect));
					                ?>
										<h6 class="mb-1 text-muted">Question</h6>
										<h3 class="font-weight-semibold" style="color: black"><?php echo mysqli_num_rows($query_question); ?></h3>
										
									</div>
								</a>
							</div>
						</div>
						<!-- Question End -->
						<!-- Result Start -->
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card text-center">
								<a href="user_result.php">
									<div class="card-body">

										<div class="feature widget-2 text-center mt-0 mb-3">
										<i class="ion-ios-list-box project bg-teal-transparent mx-auto text-teal "></i>
									</div>
									<?php 
										$query_result=mysqli_query($connect,"select r.*,sub.*,u.*,std.* from tbl_result r, tbl_subject sub, tbl_user u, tbl_standard std where std.fld_standard_id=sub.fld_standard_id and std.fld_standard_id=r.fld_standard_id and  std.fld_standard_id=u.fld_standard_id and sub.fld_standard_id=r.fld_standard_id and  sub.fld_standard_id=u.fld_standard_id and r.fld_standard_id=u.fld_standard_id and sub.fld_subject_id=r.fld_subject_id and   r.fld_user_id=u.fld_user_id group by r.fld_result_id order by r.fld_result_id desc") or die(mysqli_error($connect));
					                ?>
										<h6 class="mb-1 text-muted">Result</h6>
										<h3 class="font-weight-semibold" style="color: black"><?php echo mysqli_num_rows($query_result); ?></h3>
										
									</div>
								</a>
							</div>
						</div>
						<!-- Result End -->

						<!-- Total User Start -->
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card text-center">
								<a href="#">
									<div class="card-body">

										<div class="feature widget-2 text-center mt-0 mb-3">
										<i class="mdi mdi-account-multiple project bg-primary-transparent mx-auto text-primary "></i>
									</div>
									<?php 
										$query_total_user=mysqli_query($connect,"select * from tbl_user order by fld_user_id desc") or die(mysqli_error($connect));
					                ?>
										<h6 class="mb-1 text-muted">Total User</h6>
										<h3 class="font-weight-semibold" style="color: black"><?php echo mysqli_num_rows($query_total_user); ?></h3>
										
									</div>
								</a>
							</div>
						</div>
						<!-- Total User End -->

						<!-- Registered User Start -->
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card text-center">
								<a href="user_registered_view.php">
									<div class="card-body">
										<div class="feature widget-2 text-center mt-0 mb-3">
										<i class="mdi mdi-account-multiple project bg-warning-transparent mx-auto text-warning "></i>
									</div>
									<?php 
										$query_registered_user=mysqli_query($connect,"select * from tbl_user where fld_user_status='Registered' order by fld_user_id desc") or die(mysqli_error($connect));
					                ?>
										<h6 class="mb-1 text-muted">Registered User</h6>
										<h3 class="font-weight-semibold" style="color: black"><?php echo mysqli_num_rows($query_registered_user); ?></h3>
										
									</div>
								</a>
							</div>
						</div>
						<!-- Registered User End -->
						<!-- Approved User Start -->
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card text-center">
								<a href="user_approved_view.php">
									<div class="card-body">

										<div class="feature widget-2 text-center mt-0 mb-3">
										<i class="mdi mdi-account-multiple project bg-success-transparent mx-auto text-success "></i>
									</div>
									<?php 
										$query_approved_user=mysqli_query($connect,"select * from tbl_user where fld_user_status='Approved' order by fld_user_id desc") or die(mysqli_error($connect));
					                ?>
										<h6 class="mb-1 text-muted">Approved User</h6>
										<h3 class="font-weight-semibold" style="color: black"><?php echo mysqli_num_rows($query_approved_user); ?></h3>
										
									</div>
								</a>
							</div>
						</div>
						<!-- Approved User End -->
						<!-- Disapproved User Start -->
						<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
							<div class="card text-center">
								<a href="user_disapproved_view.php">
									<div class="card-body">

										<div class="feature widget-2 text-center mt-0 mb-3">
										<i class="mdi mdi-account-multiple project bg-danger-transparent mx-auto text-danger "></i>
									</div>
									<?php 
										$query_disapproved_user=mysqli_query($connect,"select * from tbl_user where fld_user_status='Disapproved' order by fld_user_id desc") or die(mysqli_error($connect));
					                ?>
										<h6 class="mb-1 text-muted">Disapproved User</h6>
										<h3 class="font-weight-semibold" style="color: black"><?php echo mysqli_num_rows($query_disapproved_user); ?></h3>
										
									</div>
								</a>
							</div>
						</div>
						<!-- Disapproved User End -->
						
					</div>					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /main-content -->
					
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

		<!--- Chart bundle min js -->
<script src="assets/plugins/chart.js/Chart.bundle.min.js"></script>
<!--- Internal Sampledata js -->
<script src="assets/js/chart.flot.sampledata.js"></script>
<!--- Index js -->
<script src="assets/js/index.js"></script>

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