<!DOCTYPE html>
<html lang="en">
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		
		<!-- Title -->
		<title> Question View</title>

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
								<li class="breadcrumb-item"><a href="#">Question</a></li>
								<li class="breadcrumb-item active" aria-current="page"> Question</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<div class="d-flex right-page">
							
							<a href="question_add.php" class="btn btn-warning pd-x-20 mg-t-10" >Add Question</a>
							
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
								<div class="table-responsive">
									<table id="example" class="table key-buttons text-md-nowrap">
										<thead>
											<tr>
												<th class="border-bottom-0">Sr No</th>
												<th class="border-bottom-0">Action</th>
			                                    <th class="border-bottom-0">Semester</th>
			                                    <th class="border-bottom-0">Subject</th>
			                                    <th class="border-bottom-0">Question</th>
			                                    <th class="border-bottom-0">Option 1</th>
			                                    <th class="border-bottom-0">Option 2</th>
			                                    <th class="border-bottom-0">Option 3</th>
			                                    <th class="border-bottom-0">Option 4</th>
			                                    <th class="border-bottom-0">Correct Answer</th>
			                                    <th class="border-bottom-0">Created Date</th>
			                                    <th class="border-bottom-0">Modified Date</th>
											</tr>
										</thead>
										<tbody>
											<?php 
			                                    $count=0; 
			                                    $query="select sub.*,std.*,q.* from tbl_subject sub, tbl_standard std, tbl_question q where std.fld_standard_id=sub.fld_standard_id and std.fld_standard_id=sub.fld_standard_id and 
			                                    		std.fld_standard_id=q.fld_standard_id and
			                                    		sub.fld_standard_id=q.fld_standard_id and
			                                    	sub.fld_subject_id=q.fld_subject_id 
			                                    group by q.fld_question_id order by q.fld_question_id desc";
			                                    $row=mysqli_query($connect,$query) or die(mysqli_error($connect));

			                                    $total=mysqli_num_rows($row);
			                                    
			                                    while($fetch=mysqli_fetch_array($row)) {

			                                    extract($fetch);

			                                ?>
											<tr>
												<td class="table-plus"><?php echo ++$count; ?></td>
												<td><a href="question_update.php?fld_question_id=<?php echo $fetch['fld_question_id'] ?>"   title="Edit Question"><i class="far fa-edit text-success" style="font-size: 20px" ></i> </a>

												<a href="question_delete.php?fld_question_id=<?php echo $fetch['fld_question_id'] ?>" onclick="return confirm('You are sure to delete the question.')" title="Delete Question" ><i class="fas fa-trash-alt text-danger" style="font-size: 20px; padding-left: 10px" ></i></a>
												</td>
												<td><?php echo $fetch['fld_standard_name'];?></td>
												<td><?php echo $fetch['fld_subject_name'];?></td>
												<td><?php echo $fetch['fld_question'];?></td>
												<td><?php echo $fetch['fld_option1'];?></td>
												<td><?php echo $fetch['fld_option2'];?></td>
												<td><?php echo $fetch['fld_option3'];?></td>
												<td><?php echo $fetch['fld_option4'];?></td>
												<td><?php echo $fetch['fld_right_answer'];?></td>
												<td><?php echo $fetch['fld_question_created_date'];?></td>
												<td><?php echo $fetch['fld_question_modified_date'];?></td>

														
												
											</tr>
											<?php } ?>
											
										</tbody>
									</table><br>
								</div>
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