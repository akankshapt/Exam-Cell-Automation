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

							$query_m="select * from tbl_subject where fld_subject_id='".$_GET['fld_subject_id']."' group by fld_subject_id order by fld_subject_id desc";
							$row_m=mysqli_query($connect,$query_m) or die(mysqli_error($connect));
							$fetch_m=mysqli_fetch_array($row_m); 
							?>
							<h3 style="color: #c43a7f;"><?php echo $fetch_m['fld_subject_name'];?></h3>

						</center>



						
						<form method="post">

							<p class="mg-b-20">Semester : <span><?php echo $fetch_user['fld_standard_name'];?></span></p>
							<p class="mg-b-20">Subject : <span><?php echo $fetch_m['fld_subject_name'];?></span></p>
							<p class="mg-b-20">Total Question : <span>20</span></p>
							<p class="mg-b-20">Total Marks : <span> 20</span></p>
							
							<hr>

							<div class="col-lg-12 col-md-12 col-xs-12" >

								<?php 
									$question="select sub.*,std.*,q.* from tbl_subject sub, tbl_standard std, tbl_question q where std.fld_standard_id=sub.fld_standard_id and std.fld_standard_id=sub.fld_standard_id and 
			                                    		std.fld_standard_id=q.fld_standard_id and
			                                    		sub.fld_standard_id=q.fld_standard_id and
			                                    	sub.fld_subject_id=q.fld_subject_id and q.fld_subject_id='".$fetch_m['fld_subject_id']."' and q.fld_standard_id='".$fetch_user['fld_standard_id']."'
			                                    group by q.fld_question_id order by q.fld_question_id desc"; 

			                        $view_question=mysqli_query($connect,$question);
			                        if(mysqli_num_rows($view_question)>=20)
			                        {
			                    ?>
			                    		<button class="btn btn-primary pd-x-20" type="submit" name="submit">Start Test</button>	

			                    <?php 
			                        }
			                        else
			                        {
			                    ?>
			                    		<button class="btn btn-warning pd-x-20" type="button" name="test">Wait For The Exam</button>	

			                	<?php } ?>
																		
								<!-- <button class="btn btn-danger" type="reset" name="reset">Clear</button>										 -->
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
		<!-- /row -->

		<?php 

		if(isset($_POST['submit']))
		{
			extract($_POST);


			$query = "INSERT INTO tbl_result (fld_user_id, fld_standard_id, fld_subject_id) VALUES ('".$_SESSION['fld_user_id']."', '".$fetch_user['fld_standard_id']."', '".$_GET['fld_subject_id']."')" ;
			$result = mysqli_query($connect,$query) or die(mysqli_error($connect));

			$abc=mysqli_query($connect,"select * from tbl_result where fld_user_id='".$_SESSION['fld_user_id']."' and  fld_standard_id='".$fetch_user['fld_standard_id']."' and  fld_subject_id='".$_GET['fld_subject_id']."'  order by fld_result_id desc limit 1") or die(mysqli_error($connect));
			$fetch_result=mysqli_fetch_array($abc);

			if($result)
			{

				$next="text_question.php?fld_result_id=".$fetch_result['fld_result_id']."";
				echo "<script>";
				// echo "alert('Answer Added Successfully');";
				echo "window.location.href='".$next."'";
				echo "</script>";              
			}
			else
			{
				echo "<script>";
				echo "alert('Answer Not Added Successfully');";
                      // echo "window.location.href='main_category_view.php';";
				echo "</script>";
			}

		}
		?>


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