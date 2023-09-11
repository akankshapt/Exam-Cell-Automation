<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		
		<!-- Title -->
		<title> User Login </title>

		<!--- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!--- Icons css -->
		<link href="assets/css/icons.css" rel="stylesheet">

		
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

		<script>
	     history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
	 </script>

	</head>
	
	<body class="main-body">

	<!-- Loader -->
		<div id="global-loader">
			<img src="assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
				<!-- main-signin-wrapper -->
		<div class="my-auto page page-h">
			<div class="main-signin-wrapper">
				<div class="main-card-signin d-md-flex wd-100p">
				<div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
					<div class="my-auto authentication-pages">
						<div>
							<img src="assets/img/brand/User logo-white.png" class=" m-0 mb-4" alt="logo">
							<h5 class="mb-4">Exam Cell automation system</h5>
							<!-- <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> -->
							<!-- <a href="index.html" class="btn btn-success">Learn More</a> -->
						</div>
					</div>
				</div>
				<div class="p-5 wd-md-50p">
					<div class="main-signin-header">
						<h2>Welcome back!</h2>
						<h4>Please sign in to continue</h4>
						<form  method="post">
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" placeholder="Enter your email" type="email" name="email" required="" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$">
							</div>
							<div class="form-group">
								<label>Password</label> 
								<input class="form-control" placeholder="Enter your password" type="password" name="password" required="" id="password">
							</div>

							<button class="btn btn-main-primary btn-block" type="submit" name="login">Sign In</button>
						</form>
					</div>
					<div class="main-signin-footer mt-3 mg-t-5">
						
						<p>Don't have an account? <a href="registration.php">Create an Account</a></p>
					</div>
				</div>

				<?php

				include "config.php";

    if(isset($_POST['login']))
    {
        extract($_POST);

        $email=mysqli_real_escape_string($connect,$_POST['email']);
        $password=mysqli_real_escape_string($connect,$_POST['password']);

        
        $log=mysqli_query($connect,"select * from tbl_user where fld_user_email='$email' and fld_user_password='$password'") or die (mysqli_error($connect));
            
        if(mysqli_num_rows($log)>0)
        {
            $fetch=mysqli_fetch_array($log);

            if($fetch['fld_user_status']=="Registered")
            {
            	echo "<script>";
	            echo "alert('Your Account Still Not Approved by Admin');";
	            echo 'window.location.href="index.php";';
	            echo "</script>";
            }
            else if($fetch['fld_user_status']=="Approved")
            {
            
	            $_SESSION['email']=$fetch['fld_user_email'];
	            $_SESSION['fld_user_id']=$fetch['fld_user_id'];
	            
	            
	            echo "<script>";
	            echo "alert('Login Successfull');";
	            echo 'window.location.href="dashboard.php";';
	            echo "</script>";
	        }
	        else
	        {
	        	echo "<script>";
	            echo "alert('Your Account Temprory Disapprove');";
	            echo 'window.location.href="index.php";';
	            echo "</script>";
	        }
        }else
        {
            echo "<script>";
            echo "alert('Please Enter Correct Username Or Password ');";
            echo "</script>";
            
        }
        
    }

?>
			</div>
			</div>
		</div>
		<!-- /main-signin-wrapper -->
		
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
		
	</body>
</html>