<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		
		<!-- Title -->
		<title> User Registration </title>

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
						<h4>Please Register With Us</h4>
						<form  method="post">
							<div class="form-group">
								<label>Name</label>
								<input class="form-control" placeholder="Enter your name" type="text" name="name" required="" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/(\..*)\./g, '$1');">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" placeholder="Enter your email" type="text" name="email" required="" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" >
							</div>
							<div class="form-group">
								<label>Mobile Number</label>
								<input class="form-control" placeholder="Enter your mobile Number" type="text" name="mobile" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" minlength="10" maxlength="10" required="">
							</div>
							<div class="form-group">
								<label>Password</label> 
								<input class="form-control" placeholder="Enter your password" type="password" name="password" required="" id="password">
							</div>
							<div class="form-group">
								<label>Address</label> 
								<textarea class="form-control" placeholder="Enter your address"  name="address" required="" id="address"></textarea>
							</div>
							<div class="form-group">
								<label>Semester</label> 
								<select class="form-control select2"  data-placeholder="Choose semester" required="" name="standard">
									<option value="">Select Semester</option>

									<?php $query_standard= mysqli_query($connect,"select * from tbl_standard order by fld_standard_name asc") or die(mysqli_error($connect));
                                    
                                    while($fetch_standard=mysqli_fetch_array($query_standard)) { ?>
                                    	<option value="<?php echo $fetch_standard['fld_standard_id'];?>" ><?php echo $fetch_standard['fld_standard_name'];?></option>
                                    <?php } ?>
									
								</select>
							</div>

							<button class="btn btn-main-primary btn-block" type="submit" name="submit">Create Account</button>
						</form>
					</div>
					<div class="main-signin-footer mt-3 mg-t-5">
						
						<p>Already have an account? <a href="index.php">Sign In</a></p>
					</div>
				</div>

				<?php

				

    if(isset($_POST['submit']))
    {
        extract($_POST);

        $email=mysqli_real_escape_string($connect,$_POST['email']);
        $password=mysqli_real_escape_string($connect,$_POST['password']);
        
			$nm=mysqli_query($connect,"select * from tbl_user where fld_user_email = '".$email."'");
			if(mysqli_num_rows($nm)>0)
			{
			  echo "<script>";
			  echo "alert('User Is Already Exists');";
			  echo "window.location.href='registration.php';";
			  echo "</script>";
			}

			else
			{
				$query="insert into tbl_user(fld_user_name, fld_user_email, fld_user_mobile, fld_user_address,  fld_user_password, fld_standard_id) values('$name', '$email', '$mobile', '$address',  '$password', '$standard')"; 
             
	            $add=mysqli_query($connect,$query) or die(mysqli_error($connect));
	         
	            if($add)
	              {
	                echo '<script type="text/javascript">';
	                echo " alert('User Registration Successfully');";
	                echo 'window.location.href = "index.php";';
	                echo '</script>';      
	              }
	              else
	              {
	                echo '<script type="text/javascript">';
	                echo "alert('Error in adding User');";
	                echo 'window.location.href = "registration.php";';
	                echo '<script>';
	              }
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
		<script src="assets/switcher/js/switcher.js"></script>
			<script type="text/javascript">
		$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye-slash fa-eye");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
	</script>
	</body>
</html>