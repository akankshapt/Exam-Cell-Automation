<!DOCTYPE html>
<html lang="en">
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		
		<!-- Title -->
		<title> Change Password </title>

		<!--- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!--- Icons css -->
		<link href="assets/css/icons.css" rel="stylesheet">

		<!--- Select2 css-->
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
								<li class="breadcrumb-item"><a href="#">Setting</a></li>
								<li class="breadcrumb-item active" aria-current="page">Change Password</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<div class="d-flex right-page">
							
							<!-- <a href="group_view.php" class="btn btn-warning pd-x-20 mg-t-10" >View Group</a> -->
							
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
								<!-- <div class="main-content-label mg-b-5">
									Select2 Box Validation
								</div> -->
								<!-- <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p> -->
								<form id="selectForm" name="selectForm" method="post">
									<div class="row">

										<div class="col-lg-12 col-md-12 col-xs-12" ><br>
											<label>Old Password <span style="color: red">*</span> : </label>
											<input class="form-control" type="password" name="old_password" placeholder="Enter Old Password" required="">				
										</div>

										<div class="col-lg-12 col-md-12 col-xs-12" ><br>
											<label>New Password <span style="color: red">*</span> : </label>
											<input class="form-control" type="password" name="new_password" placeholder="Enter New Password" required="">				
										</div>


										<div class="col-lg-12 col-md-12 col-xs-12" ><br>
											<label>Confirm Password <span style="color: red">*</span> : </label>
											<input class="form-control" type="password" name="confirm_password" placeholder="Confirm New Password" required="">				
										</div>

										
										
										<div class="col-lg-12 col-md-12 col-xs-12 ">
											<br><br>
											<center>
												<button class="btn btn-primary pd-x-20" type="submit" name="change">Change Password</button>
												<button class="btn btn-warning pd-x-20" type="reset" name="reset">Reset</button>
												
											</center>
										</div>
									</div>
								</form>

<?php
	if(isset($_POST['change']))
	{

		$query='select * from tbl_admin where fld_admin_email="'.$_SESSION['email'].'" and fld_admin_password="'.$_POST['old_password'].'"';
		$res=mysqli_query($connect,$query) or die(mysqli_error($connect));
		if(mysqli_num_rows($res)>0)
		{
			if(strlen($_POST['new_password'])>=3)
			{
				if($_POST['new_password']==$_POST['confirm_password'])
				{
					$query1='update tbl_admin set fld_admin_password="'.$_POST['new_password'].'"
					where fld_admin_email="'.$_SESSION['email'].'"';
					$res1=mysqli_query($connect,$query1) or die(mysqli_error($connect));
					//echo $query1;
					if($res1)
					{
						echo"<script>";
						echo"alert('Password Changed Successfully');";
						echo"</script>";
					}
					else
					{
						echo "Error";
					}
				}
				else
				{
					echo"<script>";
					echo"alert('Please Enter Correct Password');";
					echo"</script>";
				}
			}
			else
			{
				echo"<script>";
				echo"alert('Password Length Must Be Greater Than or Equal To 3');";
				echo"</script>";
			}
		}
		else
		{
		echo"<script>";
		echo"alert('Old Password Is Wrong. Please Enter Valid Password');";
		echo"</script>";
		}
	}
?> 
							</div>
						</div>
					</div>
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

		<!--- Select2 js -->
<script src="assets/plugins/select2/js/select2.min.js"></script>
<!--- Internal Parsley.min js -->
<script src="assets/plugins/parsleyjs/parsley.min.js"></script>
<!--- Internal Form-validation js -->
<script src="assets/js/form-validation.js"></script>

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
	<script>
$(function(){
    $('#addMore').on('click', function() {
              var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
              data.find("input").val('');
     });
     $(document).on('click', '.remove', function() {
         var trIndex = $(this).closest("tr").index();
            if(trIndex>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
	</body>
</html>