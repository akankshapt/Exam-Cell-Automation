<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	
	<!-- Title -->
	<title>Question Add </title>

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
							<li class="breadcrumb-item"><a href="question_view.php">Question</a></li>
							<li class="breadcrumb-item active" aria-current="page">Add Question</li>
						</ol>
					</nav>
				</div>
				<div class="d-flex my-auto">
					<div class="d-flex right-page">
						
						<a href="question_view.php" class="btn btn-warning pd-x-20 mg-t-10" >View Question</a>
						
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
								<!-- <div class="sub-content-label mg-b-5">
									Select2 Box Validation
								</div> -->
								<!-- <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p> -->
								<form id="selectForm" name="selectForm" method="post">
									<div class="row">

										<div class="col-lg-6 col-md-6 col-xs-12" ><br>
											<label>Semester</label>
											<select class="form-control select2"  data-placeholder="Choose standard" required="" name="standard" id="standard">
												<option value="">Select Semester</option>

												<?php $query_standard= mysqli_query($connect,"select * from tbl_standard order by fld_standard_id desc") or die(mysqli_error($connect));
												
												while($fetch_standard=mysqli_fetch_array($query_standard)) { ?>
													<option value="<?php echo $fetch_standard['fld_standard_id'];?>" ><?php echo $fetch_standard['fld_standard_name'];?></option>
												<?php } ?>
												
											</select>											
										</div>

										<div class="col-lg-6 col-md-6 col-xs-12" ><br>
											<label>Subject</label>
											<select class="form-control select2"  data-placeholder="Choose Subject" required="" name="subject" id="subject">
												<option value="">Select Subject</option>												
											</select>											
										</div>

										
										<br><br><br>
										<div class="col-lg-12 col-md-12 col-xs-12">
											<label></label>
											<div class="form-group row">              
												<div class="col-sm-12 col-md-12 col-xs-12">
													<!-- <input class="form-control" type="text" name="bill_head" id="bill_head" placeholder="Enter Sub Stream " required=""  oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '').replace(/(\..*)\./g, '$1');" > -->
													<div class="table-responsive">
														<table  class="table table-hover small-text" id="tb">
															<tr class="tr-header">
																<th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Sub Stream"><span class="fa fa-plus text-success"></span></a></th></th>
																<th>Question <span class="text-danger">*</span> : </th>
																<th>Option 1 <span class="text-danger">*</span> : </th>
																<th>Option 2 <span class="text-danger">*</span> : </th>
																<th>Option 3 <span class="text-danger">*</span> : </th>
																<th>Option 4 <span class="text-danger">*</span> : </th>
																<th>Right Answer <span class="text-danger">*</span> : </th>
															</tr>
															<tr>
																<td><a href='javascript:void(0);'  class='remove'><span class='fa fa-times text-danger'style="font-size:18px;"></span></a></td>
																<td><textarea name="fld_question[]" id="fld_question" placeholder="Enter Question" class="form-control" required="" oninput="this.value = this.value.replace(/[^a-zA-Z0-9?-_.+*/\s,]/g, '').replace(/(\..*)\./g, '$1');"></textarea> </td>
																<td><textarea name="fld_option1[]" id="fld_option1" placeholder="Enter Option 1" class="form-control" required="" oninput="this.value = this.value.replace(/[^a-zA-Z0-9?-_.+*/\s,]/g, '').replace(/(\..*)\./g, '$1');"></textarea> </td>
																<td><textarea name="fld_option2[]" id="fld_option2" placeholder="Enter Option 2" class="form-control" required="" oninput="this.value = this.value.replace(/[^a-zA-Z0-9?-_.+*/\s,]/g, '').replace(/(\..*)\./g, '$1');"></textarea> </td>
																<td><textarea name="fld_option3[]" id="fld_option3" placeholder="Enter Option 3" class="form-control" required="" oninput="this.value = this.value.replace(/[^a-zA-Z0-9?-_.+*/\s,]/g, '').replace(/(\..*)\./g, '$1');"></textarea> </td>
																<td><textarea name="fld_option4[]" id="fld_option4" placeholder="Enter Option 4" class="form-control" required="" oninput="this.value = this.value.replace(/[^a-zA-Z0-9?-_.+*/\s,]/g, '').replace(/(\..*)\./g, '$1');"></textarea> </td>
																<td><select class="form-control" required="" name="fld_right_answer[]" id="fld_right_answer">
																	<option value="">Select correct option</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																</select></td>  
															</tr>                   
														</table><br>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-xs-12 ">
											<center>
												<button class="btn btn-primary pd-x-20" type="submit" name="submit">Submit</button>
												<button class="btn btn-warning pd-x-20" type="reset" name="reset">Reset</button>
												<a href="question_view.php" class="btn btn-danger pd-x-20" >Back</a>
											</center>
										</div>
									</div>
								</form>

								<?php
								
								if (isset($_POST['submit'])) 
								{                    
									extract($_POST);
									$status=array();
									$total_question = count($_POST['fld_question']);

									for($i=0;$i<$total_question;$i++)
									{
										if(($_POST['standard']!="") && ($_POST['subject']!="") && ($_POST['fld_question'][$i]!="") && ($_POST['fld_option1'][$i]!="") && ($_POST['fld_option2'][$i]!="") && ($_POST['fld_option3'][$i]!="") && ($_POST['fld_option4'][$i]!="") && ($_POST['fld_right_answer'][$i]!=""))
										{
											

											$abc="select * from tbl_question where  fld_standard_id='".$_POST['standard']."' and fld_subject_id='".$_POST['subject']."' and fld_question='".$_POST['fld_question'][$i]."' and fld_option1='".$_POST['fld_option1'][$i]."' and fld_option2='".$_POST['fld_option2'][$i]."' and fld_option3='".$_POST['fld_option3'][$i]."' and fld_option4='".$_POST['fld_option4'][$i]."' and fld_right_answer='".$_POST['fld_right_answer'][$i]."'";
											$nm=mysqli_query($connect,$abc);
											if(mysqli_num_rows($nm)>0)
											{
												echo "<script>";
                            // echo "alert('Question Is Already Exists');";
												echo "window.location.href='question_view.php';";
												echo "</script>";
											}
											
											else
											{

												$query = "INSERT INTO tbl_question(fld_standard_id, fld_subject_id, fld_question, fld_option1, fld_option2, fld_option3, fld_option4, fld_right_answer) VALUES ('".$_POST['standard']."','".$_POST['subject']."', '".$_POST['fld_question'][$i]."', '".$_POST['fld_option1'][$i]."', '".$_POST['fld_option2'][$i]."', '".$_POST['fld_option3'][$i]."', '".$_POST['fld_option4'][$i]."', '".$_POST['fld_right_answer'][$i]."')" ;
												$result = mysqli_query($connect,$query)or die(mysqli_error($connect));

												if(!empty($result)) 
												{
													$status[]=1;
													
												}
												else
												{
													echo "<script>";
													echo "alert('Question Not Added Successfully');";
													echo "window.location.href='question_view.php';";
													echo "</script>";
												}
											}
										}
									} 


									if((isset($status)) &&(in_array('1', $status)))  
									{
										echo "<script>";
										echo "alert('Question Added Successfully');";
										echo "window.location.href='question_view.php';";
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
					data.find("textarea").val('');
					data.find("select").val('');
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

		<script type="text/javascript">
			$(document).ready(function(){
				$("select#standard").change(function(){
					var t = $("#standard option:selected").val();
          // alert(t);
          $.ajax({
          	type: "POST",
          	url: "subject.php", 
          	data: { standard : t} 
          }).done(function(data){
          	$("#subject").html(data);
          });
        });
			});
		</script>

	</body>
	</html>