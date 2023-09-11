<!DOCTYPE html>
<html lang="en">
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		
		<!-- Title -->
		<title> Semester Details View</title>

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
								<li class="breadcrumb-item"><a href="#">Information Technology</a></li>
								<li class="breadcrumb-item active" aria-current="page"> Semester Details</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<div class="d-flex right-page">
							
							<a href="standard_add.php" class="btn btn-warning pd-x-20 mg-t-10" >Add Semester</a>
							
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
			                                    <th class="border-bottom-0">Created Date</th>
			                                    <th class="border-bottom-0">Modified Date</th>
											</tr>
										</thead>
										<tbody>
											<?php 
			                                    $count=0; 
			                                    $query="select * from tbl_standard order by fld_standard_id desc ";
			                                    $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
			                                    
			                                    while($fetch=mysqli_fetch_array($row)) {

			                                    extract($fetch);

			                                ?>
											<tr>
												<td class="table-plus"><?php echo ++$count; ?></td>
												<td><a href="#" data-toggle="modal" data-target="#standard_update<?php echo $fetch['fld_standard_id'] ?>"  title="Edit Standard"><i class="far fa-edit text-success" style="font-size: 20px" ></i> </a>

												<a href="standard_delete.php?fld_standard_id=<?php echo $fetch['fld_standard_id'] ?>" onclick="return confirm('You are sure to delete the standard.')" title="Delete Standard" ><i class="fas fa-trash-alt text-danger" style="font-size: 20px; padding-left: 10px" ></i></a>
												</td>
												<td><?php echo $fetch['fld_standard_name'];?></td>                     
												<td><?php echo $fetch['fld_standard_created_date'];?></td>
												<td><?php echo $fetch['fld_standard_modified_date'];?></td>

												<div class="modal fade bs-example-modal-lg" id="standard_update<?php echo $fetch['fld_standard_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
													<div class="modal-dialog modal-lg modal-dialog-centered">
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title" id="myLargeModalLabel">Update Semester</h4>
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
															</div>

															<form method="post" action="standard_update.php?fld_standard_id=<?php echo $fetch['fld_standard_id'] ?>">
																<div class="modal-body">
																	
																	<div class="form-group row">
																		<label class="col-sm-12 col-md-3 col-xs-12  col-form-label">Semester Name <span class="text-danger">*</span> : </label>
																		<div class="col-sm-12 col-md-9 col-xs-12">
																			<input class="form-control" type="text" name="standard" id="standard1" placeholder="Enter Semester Name" required="" value="<?php echo $fetch['fld_standard_name'] ?>" oninput="this.value = this.value.replace(/[^0-9\s]/g, '').replace(/(\..*)\./g, '$1');" >
																		</div>
																	</div>
																</div>
																	
																<div class="modal-footer">
																	<input class="btn btn-success" value="Update" type="submit" name="update">
																	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																	
																</div>
															</form>
														</div>
													</div>
												</div>
				
																
												
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