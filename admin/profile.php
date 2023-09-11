<!DOCTYPE html>
<html lang="en">
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		
		<!-- Title -->
		<title> Profile </title>

		<!--- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!--- Icons css -->
		<link href="assets/css/icons.css" rel="stylesheet">

		<!--- Select2 css -->
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
		<style>
	      .preview_box{clear: both; padding: 5px; margin-top: 10px; text-align:left;}
	      .preview_box img{max-width: 150px; max-height: 150px;}
	  </style> 
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
								<li class="breadcrumb-item"><a href="#">Setting</a></li>
								<li class="breadcrumb-item active" aria-current="page"> Update Profile</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<div class=" d-flex right-page">
							
						</div>
					</div>
				</div>
				<!-- /breadcrumb -->
				<?php 
                        $sel=mysqli_query($connect,"select * from tbl_admin where fld_admin_email='".$_SESSION['email']."' ") or die(mysqli_error($connect));
                        $fetch=mysqli_fetch_array($sel);
                    ?> 
									<!-- row -->
				<div class="row row-sm">
					<!-- Col -->
					<div class="col-lg-4">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="pl-0">
									<div class="main-profile-overview">
										<div class="main-img-user profile-user">
											<?php
		                                        if ($fetch['fld_admin_photo']=="") 
		                                        {
		                                    ?>
		                                            <img src="../images/No-image-full.jpg" alt="No Image" />
		                                    <?php
		                                        }
		                                        else
		                                        {
		                                    ?>                                        
		                                            <img src="../images/admin/<?php echo $fetch['fld_admin_photo'];?>" alt="No Image"  />
		                                    <?php
		                                        }
		                                    ?>
		                                    
											
										</div>
										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name"><?php echo $fetch['fld_admin_name'];?></h5>
												<p class="main-profile-name-text">Admin</p>
											</div>
										</div>

										<hr class="mg-y-30">
										<label class="main-content-label tx-13 mg-b-20">Social</label>
										<div class="main-profile-social-list">
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary">
													<i class="far fa-user"></i>
												</div>
												<div class="media-body">
													<span>Name</span> <a href="#"><?php echo $fetch['fld_admin_name'];?></a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-success-transparent text-success">
													<i class="far fa-envelope"></i>
												</div>
												<div class="media-body">
													<span>Email</span> <a href="#"><?php echo $fetch['fld_admin_email'];?></a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-info-transparent text-info">
													<i class="fas fa-mobile-alt"></i>
												</div>
												<div class="media-body">
													<span>Mobile</span> <a href="#"><?php echo $fetch['fld_admin_mobile'];?></a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-danger-transparent text-danger">
													<i class="fas fa-map-marker-alt"></i>
												</div>
												<div class="media-body">
													<span>Address</span> <a href="#"><?php echo $fetch['fld_admin_address'];?></a>
												</div>

											</div>
										</div><!-- main-profile-social-list -->
										<br>
									</div><!-- main-profile-overview -->
								</div>
							</div>
						</div>
						
					</div>
					<!-- /Col -->
					
					<!-- Col -->
					<div class="col-lg-8">
						<div class="card">
							<form class="form-horizontal" method="post" enctype="multipart/form-data">
								<div class="card-body">
									<div class="mb-4 main-content-label">Personal Information</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3 col-xs-12">
													<label class="form-label">Name <span style="color: red">*</span> : </label>
												</div>
												<div class="col-md-9 col-xs-12">
													<input class="form-control" type="text" name="admin_name" placeholder="Name" required="" value="<?php echo $fetch['fld_admin_name'];?>" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/(\..*)\./g, '$1');">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3 col-xs-12">
													<label class="form-label">Email <span style="color: red">*</span> : </label>
												</div>
												<div class="col-md-9 col-xs-12">
													<input type="email" class="form-control" name="admin_email" placeholder="Email" required="" id="email" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" value="<?php echo $fetch['fld_admin_email'];?>" readonly>
												</div>
											</div>
										</div>
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3 col-xs-12">
													<label class="form-label">Mobile No <span style="color: red">*</span> : </label>
												</div>
												<div class="col-md-9 col-xs-12">
													<input type="text" class="form-control" placeholder="Mobile Number" name="admin_mobile" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10" minlength="10" required="" value="<?php echo $fetch['fld_admin_mobile'];?>">
												</div>
											</div>
										</div>

										<div class="form-group ">
											<div class="row">
												<div class="col-md-3 col-xs-12">
													<label class="form-label">Photo <span style="color: red">*</span> : </label>
												</div>
												<div class="col-md-9 col-xs-12">
													<div class="preview_box">

					                                    <?php
					                                        if ($fetch['fld_admin_photo']=="") 
					                                        {
					                                    ?>
					                                            <img src="../images/No-image-full.jpg" alt="No Image" id="preview_img" height="100px" width="100px"/>
					                                    <?php
					                                        }
					                                        else
					                                        {
					                                    ?>                                        
					                                            <img src="../images/admin/<?php echo $fetch['fld_admin_photo'];?>" alt="No Image" id="preview_img" height="100px" width="100px" />
					                                    <?php
					                                        }
					                                    ?>
					                                    
					                                </div>
					                                <input type="file" name="photo" id="image" accept=".png, .jpg, .jpeg" onchange="return fileValidation()" />	
					                                <script>
					                                    function fileValidation() {
					                                        var fileInput =
					                                            document.getElementById('image');

					                                        var filePath = fileInput.value;

					                                        // Allowing file type 
					                                        var allowedExtensions =
					                                            /(\.jpg|\.jpeg|\.png)$/i;

					                                        if (!allowedExtensions.exec(filePath)) {
					                                            alert('Invalid Image type');
					                                            fileInput.value = '';
					                                            return false;
					                                        }

					                                    }
					                                </script>	
												</div>
											</div>
										</div>
										
										<div class="form-group ">
											<div class="row">
												<div class="col-md-3 col-xs-12">
													<label class="form-label">Address <span style="color: red">*</span> : </label>
												</div>
												<div class="col-md-9 col-xs-12">
													<textarea class="form-control"  name="admin_address" placeholder="Address " required=""><?php echo $fetch['fld_admin_address'];?></textarea>
												</div>
											</div>
										</div>
								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-primary" type="submit" name="update">Update Profile</button>
								</div>
							</form>
							<?php

// error_reporting(0);
    
    if(isset($_POST['update']))
    {
     extract($_POST);
// $back="javascript:history.back()";

    $name=$_FILES['photo']['name'];
    $size=$_FILES['photo']['size'];
    $type=$_FILES['photo']['type'];
    $temp=$_FILES['photo']['tmp_name'];

        if($name)
            {
                 $desired_dir="../images/admin/";  
                 unlink($desired_dir.$fetch['fld_admin_photo']);             
                $admin_photo=uniqid().$name;
                $extension = strtolower(pathinfo($admin_photo,PATHINFO_EXTENSION));
                
                 move_uploaded_file($temp,"$desired_dir/".$admin_photo);
                // $a1 = $a;
                  $save = "$desired_dir/" . $admin_photo; //This is the new file you saving
                  $file = "$desired_dir/" . $admin_photo; //This is the original file

                  list($width, $height) = getimagesize($file) ;

                  $modwidth = 600;

                  // $diff = $width / $modwidth;

                  // $modheight = $height / $diff;
                  $modheight = 600;
                  $tn = imagecreatetruecolor($modwidth, $modheight) ;
                  imagealphablending( $tn, false );
		            imagesavealpha( $tn, true );
		            if($extension=="jpg" || $extension=="jpeg" )
		            {

		                    $image = imagecreatefromjpeg($file);
		                    imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;
		                    imagejpeg($tn, $save, 100); 
		                }
		                else if($extension=="png")
		                {

		                    $image = imagecreatefrompng($file);
		                    imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;
		                    imagepng( $tn, $save, 9 );
		                }

            }
        else
            {
                $admin_photo=$fetch['fld_admin_photo'];
            }  

             $qw="update tbl_admin set
                fld_admin_photo='".$admin_photo."', 
                fld_admin_name='".$_POST['admin_name']."',
                fld_admin_mobile='".$_POST['admin_mobile']."',
                fld_admin_address='".$_POST['admin_address']."'
                where fld_admin_email='".$_SESSION['email']."'";
      
     $update=mysqli_query($connect,$qw) or die(mysqli_error($connect));
     
     if($update)
                              {
           echo '<script type="text/javascript">';
           echo " alert('Admin Profile Updated Successfully');";
           echo 'window.location.href = "profile.php";';
           echo '</script>';
      
                          }
                         else
                         {
           echo '<script type="text/javascript">';
           echo "alert('Admin Profile Not Update');";
           echo 'window.location.href = "profile.php";';
             echo '<script>';
                            //echo $cQry;
      
                         }
    }


?> 	
		
						</div>
					</div>
					<!-- /Col -->
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
					<!--Sidebar-right-->
		
		<!--/Sidebar-right-->
            		<!-- Footer opened -->
		<?php include "footer.php"; ?>
		<!-- Footer closed -->		
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

		<!--- Internal Chart.bundle js -->
<script src="assets/plugins/chart.js/Chart.bundle.min.js"></script>
<!-- Select2.min js -->
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/js/select2.js"></script>

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
            $(document).ready(function(){
                //Image file input change event
                $("#image").change(function(){
                    readImageData(this);//Call image read and render function
                });
            });
             
            function readImageData(imgData){
                if (imgData.files && imgData.files[0]) {
                    var readerObj = new FileReader();
                    
                    readerObj.onload = function (element) {
                        $('#preview_img').attr('src', element.target.result);
                    }
                    
                    readerObj.readAsDataURL(imgData.files[0]);
                }
            }
        </script>
	
	</body>
</html>