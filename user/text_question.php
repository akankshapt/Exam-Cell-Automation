<?php 
// include "config.php";
// include "header_session.php";

// $query_user=mysqli_query($connect,"select * from tbl_user where fld_user_email='".$_SESSION['email']."'") or die(mysqli_error($connect));
// $fetch_user=mysqli_fetch_array($query_user);
// extract($fetch_user);
 ?>
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

										$query_details="select r.*,m.* from tbl_result r, tbl_subject m where r.fld_subject_id=m.fld_subject_id and r.fld_standard_id='".$fetch_user['fld_standard_id']."' and r.fld_user_id='".$_SESSION['fld_user_id']."' and r.fld_result_id='".$_GET['fld_result_id']."' group by r.fld_result_id order by r.fld_result_id desc";
										$row_d=mysqli_query($connect,$query_details) or die(mysqli_error($connect));
										$fetch_d=mysqli_fetch_array($row_d); 
									?>
										<h3 style="color: #c43a7f;"><?php echo $fetch_d['fld_subject_name'];?> </h3>
								</center>
								
<br>

								<p class="mg-b-20"></p>
								<form method="post">
								<?php 
								$count=1;
									$query="select sub.*,std.*,q.* from tbl_subject sub, tbl_standard std, tbl_question q where std.fld_standard_id=sub.fld_standard_id and  std.fld_standard_id=q.fld_standard_id and 	sub.fld_standard_id=q.fld_standard_id and sub.fld_subject_id=q.fld_subject_id and	q.fld_subject_id='".$fetch_d['fld_subject_id']."' and q.fld_standard_id='".$fetch_d['fld_standard_id']."' group by q.fld_question_id order by rand() limit 20";

			                        // $query="select s.*,l.*,q.* from tbl_sub_stream s, tbl_level l, tbl_question q where s.fld_group_id=q.fld_group_id and q.fld_group_id='".$fetch_user['fld_group_id']."' and s.fld_subject_id=q.fld_subject_id and q.fld_subject_id='".$_GET['fld_subject_id']."' and s.fld_sub_stream_id=q.fld_sub_stream_id and l.fld_level_id=q.fld_level_id and q.fld_level_id='".."' group by q.fld_question_id order by q.fld_question_id desc";
                                    $row=mysqli_query($connect,$query) or die(mysqli_error($connect));

                                    $total=mysqli_num_rows($row);
                                    
                                    while($fetch=mysqli_fetch_array($row)) {

                                    extract($fetch);

								?>

									<div class="row mg-t-10">
										<div class="col-lg-12 mg-t-20 mg-lg-t-0">
											<div class="main-content-label mg-b-5"><h6><?php echo $count++; ?>. <?php echo $fetch['fld_question'];?></h6></div>
										</div>
										<div class="col-lg-12 mg-t-20 mg-lg-t-0">
											<input name="question_id[]" type="text" value="<?php echo $fetch['fld_question_id'];?>" hidden>
										</div>
										<div class="col-lg-12 mg-t-20 mg-lg-t-0">
											<input name="right_answer[]" type="text" value="<?php echo $fetch['fld_right_answer'];?>" hidden>
										</div>
										<div class="col-lg-12 mg-t-20 mg-lg-t-0">
											<label class="rdiobox"><input name="answer_<?php echo $fetch['fld_question_id'];?>" type="radio" value="1" id="<?php echo $fetch['fld_question_id'];?>_1"> <span><?php echo $fetch['fld_option1'];?></span></label>
										</div>
										<div class="col-lg-12 mg-t-20 mg-lg-t-0">
											<label class="rdiobox"><input name="answer_<?php echo $fetch['fld_question_id'];?>" type="radio" value="2" id="<?php echo $fetch['fld_question_id'];?>_2"> <span><?php echo $fetch['fld_option2'];?></span></label>
										</div>
										<div class="col-lg-12 mg-t-20 mg-lg-t-0">
											<label class="rdiobox"><input name="answer_<?php echo $fetch['fld_question_id'];?>" type="radio" value="3" id="<?php echo $fetch['fld_question_id'];?>_3"> <span><?php echo $fetch['fld_option3'];?></span></label>
										</div>
										<div class="col-lg-12 mg-t-20 mg-lg-t-0">
											<label class="rdiobox"><input name="answer_<?php echo $fetch['fld_question_id'];?>" type="radio" value="4" id="<?php echo $fetch['fld_question_id'];?>_4"> <span><?php echo $fetch['fld_option4'];?></span></label>
										</div>
									</div>
									<hr>
								<?php } ?>
									<div class="col-lg-2 col-md-2 col-xs-12" ><br><br>
												<button class="btn btn-primary pd-x-20" type="submit" name="submit">Submit</button>
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
						$status[]=1;
						$total_question = count($_POST['question_id']);

                    for($i=0;$i<$total_question;$i++)
                    {
                      if(($_POST['question_id'][$i]!="") && ($_POST['right_answer'][$i]!=""))
                      {
                      	$answer1="answer_".$_POST['question_id'][$i];
                      	$answer=$$answer1;

                      	if($answer==$_POST['right_answer'][$i])
                      	{
                      		$result_answer="Correct";
                      		$result_marks=1;
                      	}
                      	else
                      	{
                      		$result_answer="Wrong";
                      		$result_marks=0;
                      	}

                          $query = "INSERT INTO tbl_result_question(fld_result_id, fld_question_id, fld_user_answer, fld_result_answer, fld_result_marks) VALUES ('".$_GET['fld_result_id']."', '".$_POST['question_id'][$i]."', '".$answer."', '$result_answer', '$result_marks')" ;
                          $result = mysqli_query($connect,$query)or die(mysqli_error($connect));

                          if(!empty($result)) 

                              {
                                  $status[]=1;                 
                              }
                              else
                              {
                                  echo "<script>";
                                   echo "alert('Error In Submitting Test');";
                                  // echo "window.location.href='group_view.php';";
                                  echo "</script>";
                              }
                        
                      }
                    }  

                    $correct_answer=array();
                    $wrong_answer=array();
                    $total_marks=array();

                    $result_details="select * from tbl_result_question where fld_result_id='".$_GET['fld_result_id']."'";
                    $qurey_result=mysqli_query($connect,$result_details)or die(mysqli_error($connect));
                    while($fetch_result=mysqli_fetch_array($qurey_result))
                    {
                    	if($fetch_result['fld_result_answer']=="Correct")
                    	{
                    		$correct_answer[]=1;
                    	}
                    	else
											{
												$wrong_answer[]=1;
											}
											$total_marks[]=$fetch_result['fld_result_marks'];
                    	
                    }
                    $correct_ans=array_sum($correct_answer);
                    $wrong_ans=array_sum($wrong_answer);
                    $totl_marks=array_sum($total_marks);


                    $upadate_result="update tbl_result  set fld_correct_answer='".$correct_ans."', fld_wrong_answer='".$wrong_ans."', fld_total_marks='".$totl_marks."'  where fld_result_id='".$_GET['fld_result_id']."'";
                    $qurey_update=mysqli_query($connect,$upadate_result)or die(mysqli_error($connect));

                    if((isset($status)) && (in_array('1', $status)) && $qurey_update)  
                    {
                    	$next="result.php?fld_result_id=".$_GET['fld_result_id']."";
                      echo "<script>";
                      echo "alert('Test Successfully Submited');";
                      echo "window.location.href='".$next."'";
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