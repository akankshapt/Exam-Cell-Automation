<!DOCTYPE html>
<html lang="en">
	<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		
		<!-- Title -->
		<title> Subject Add </title>

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
								<li class="breadcrumb-item"><a href="#">Information Technology</a></li>
								<li class="breadcrumb-item"><a href="subject_view.php">Subject</a></li>
								<li class="breadcrumb-item active" aria-current="page">Add Subject</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-auto">
						<div class="d-flex right-page">
							
							<a href="subject_view.php" class="btn btn-warning pd-x-20 mg-t-10" >View Subject</a>
							
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

										<div class="col-lg-12 col-md-12 col-xs-12" >
											<label>Semester</label>
											<select class="form-control select2"  data-placeholder="Choose semester" required="" name="standard">
												<option value="">Select Semester</option>

												<?php $query_standard= mysqli_query($connect,"select * from tbl_standard order by fld_standard_id desc") or die(mysqli_error($connect));
			                                    
			                                    while($fetch_standard=mysqli_fetch_array($query_standard)) { ?>
			                                    	<option value="<?php echo $fetch_standard['fld_standard_id'];?>" ><?php echo $fetch_standard['fld_standard_name'];?></option>
			                                    <?php } ?>
												
												</select>											
										</div>
										<br><br><br>
										<div class="col-lg-12 col-md-12 col-xs-12">
											<label></label>
											<div class="form-group row">              
								              <div class="col-sm-12 col-md-12 col-xs-12">
								                <!-- <input class="form-control" type="text" name="bill_head" id="bill_head" placeholder="Enter Subject " required=""  oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '').replace(/(\..*)\./g, '$1');" > -->
								                <table  class="table table-hover small-text" id="tb">
								                  <tr class="tr-header">
								                     <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Subject"><span class="fa fa-plus text-success"></span></a></th></th>
								                    <th>Subject <span class="text-danger">*</span> : </th>
								                  </tr>
								                  <tr>
								                    <td><a href='javascript:void(0);'  class='remove'><span class='fa fa-times text-danger'style="font-size:18px;"></span></a></td>
								                    <td><input type="text" name="fld_subject_name[]" id="fld_subject_name" placeholder="Enter Subject" class="form-control" required="" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/(\..*)\./g, '$1');" style="text-transform: capitalize;"></td> 
								                    </tr>                   
								                  </table><br>
								              </div>
								            </div>
										</div>
										<div class="col-lg-12 col-md-12 col-xs-12">
											<center>
												<button class="btn btn-main-primary pd-x-20" type="submit" name="submit">Submit</button>
												<button class="btn btn-warning pd-x-20" type="reset" name="reset">Reset</button>
												<a href="subject_view.php" class="btn btn-danger pd-x-20" >Back</a>
											</center>
										</div>
									</div>
								</form>

								<?php
                                    
                if (isset($_POST['submit'])) 
                {                    
                    extract($_POST);
                    $status=array();
                    $total_subject = count($_POST['fld_subject_name']);

                    for($i=0;$i<$total_subject;$i++)
                    {
                      if(($_POST['fld_subject_name'][$i]!=""))
                      {

                        $subject1=$_POST['fld_subject_name'][$i];
                        $subject=ucwords(strtolower($subject1));

                         $abc="select * from tbl_subject where  fld_standard_id='".$_POST['standard']."' and fld_subject_name = '".$subject."' ";
                        $nm=mysqli_query($connect,$abc);
                        if(mysqli_num_rows($nm)>0)
                        {
                            echo "<script>";
                            // echo "alert('Subject Is Already Exists');";
                            echo "window.location.href='subject_view.php';";
                            echo "</script>";
                        }
                     
                        else
                        {

                          $query = "INSERT INTO tbl_subject(fld_standard_id,fld_subject_name) VALUES ('".$_POST['standard']."','".$subject."')" ;
                          $result = mysqli_query($connect,$query)or die(mysqli_error($connect));

                          if(!empty($result)) 
                              {
                                 $status[]=1;
                                                   
                              }
                              else
                              {
                                  echo "<script>";
                                   echo "alert('Subject Not Added Successfully');";
                                  echo "window.location.href='subject_view.php';";
                                  echo "</script>";
                              }
                        }
                      }
                    } 


                    if((isset($status)) &&(in_array('1', $status)))  
                    {
                      echo "<script>";
                      echo "alert('Subject Added Successfully');";
                      echo "window.location.href='subject_view.php';";
                      echo "</script>";
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