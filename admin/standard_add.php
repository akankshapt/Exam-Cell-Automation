<!DOCTYPE html>
<html lang="en">
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		
		<!-- Title -->
		<title> Semester Details Add </title>

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
								<li class="breadcrumb-item"><a href="#">Master</a></li>
								<li class="breadcrumb-item"><a href="standard_view.php">Semester Details</a></li>
								<li class="breadcrumb-item active" aria-current="page">Add Semester Details</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<div class="d-flex right-page">
							
							<a href="standard_view.php" class="btn btn-warning pd-x-20 mg-t-10" >View Semester</a>
							
						</div>
					</div>
				</div>
				<!-- /breadcrumb -->
									<!-- row -->
				
				<!-- /row -->

				<!-- row -->
				<?php
                                    
                if (isset($_POST['submit'])) 
                {                    
                    extract($_POST);
                    $status=array();

                    $total_standard = count($_POST['fld_standard_name']);

                    for($i=0;$i<$total_standard;$i++)
                    {
                      if(($_POST['fld_standard_name'][$i]!=""))
                      {

                        $standard=$_POST['fld_standard_name'][$i];

                        $nm=mysqli_query($connect,"select * from tbl_standard where fld_standard_name = '".$standard."'  ");
                        if(mysqli_num_rows($nm)>0)
                        {
                            echo "<script>";
                            // echo "alert('Standard Is Already Exists');";
                            // echo "window.location.href='standard_view.php';";
                            echo "</script>";
                        }
                     
                        else
                        {

                          $query = "INSERT INTO tbl_standard(fld_standard_name) VALUES ('".$standard."')" ;
                          $result = mysqli_query($connect,$query)or die(mysqli_error($connect));

                          if(!empty($result)) 

                              {
                                  $status[]=1;                 
                              }
                              else
                              {
                                  echo "<script>";
                                   echo "alert('Standard Not Added Successfully');";
                                  echo "window.location.href='standard_view.php';";
                                  echo "</script>";
                              }
                        }
                      }
                    }  

                    if((isset($status)) &&(in_array('1', $status)))  
                    {
                      echo "<script>";
                      echo "alert('Standard Added Successfully');";
                      echo "window.location.href='standard_view.php';";
                      echo "</script>";
                    }              
                }
              ?>	
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

										<div class="parsley-select col-lg-12 col-md-12 col-xs-12" id="slWrapper">
											<table  class="table table-hover small-text" id="tb">
							                  <tr class="tr-header">
							                    <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Person"><span class="fa fa-plus text-success"></span></a></th>
							                    <th>Semester<span class="text-danger">*</span> : </th>
							                  </tr>
							                  <tr>
							                    <td><a href='javascript:void(0);'  class='remove'><span class='fa fa-times text-danger'style="font-size:18px;"></span></a></td>
							                    <td><input type="text" name="fld_standard_name[]" id="fld_standard_name" placeholder="Enter Semester" class="form-control" required="" oninput="this.value = this.value.replace(/[^0-9\s]/g, '').replace(/(\..*)\./g, '$1');" ></td>  
							                    </tr>                  
							                  </table><br>
										</div>

										<div class="col-lg-12 col-md-12 mg-t-10 mg-sm-t-0 col-xs-12">
											<center>
												<button class="btn btn-main-primary pd-x-20" type="submit" name="submit">Submit</button>
												<button class="btn btn-warning pd-x-20" type="reset" name="reset">Reset</button>
												<a href="standard_view.php" class="btn btn-danger pd-x-20" >Back</a>
											</center>
										</div>
									</div>
								</form>
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