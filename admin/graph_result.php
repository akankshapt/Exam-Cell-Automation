<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	
	<!-- Title -->
	<title>Graph Result </title>

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
	<link href="assets/switcher/demo.css" rel="stylesheet">	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
							<li class="breadcrumb-item active" aria-current="page">Graph Result</li>
						</ol>
					</nav>
				</div>
				<div class="d-flex my-auto">
					<div class="d-flex right-page">
						
						<!-- <a href="question_view.php" class="btn btn-warning pd-x-20 mg-t-10" >View Question</a> -->
						
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
								<form id="selectForm" name="selectForm" method="post">
									<div class="row">
										<div class="col-lg-5 col-md-5 col-xs-12" ><br>
											<label>Semester</label>
											<select class="form-control "  data-placeholder="Choose standard"  name="standard" id="standard">
												<option value="">Select Semester</option>

												<?php $query_standard= mysqli_query($connect,"select * from tbl_standard order by fld_standard_id desc") or die(mysqli_error($connect));
												
													while($fetch_standard=mysqli_fetch_array($query_standard)) 
													{ 
														if(isset($_POST['submit']))
	                      								{
                    							?>
                        									<option value="<?php echo $fetch_standard['fld_standard_id'];?>" <?php if( $_POST['standard']==$fetch_standard['fld_standard_id']) {echo "selected";} ?>><?php echo $fetch_standard['fld_standard_name'];?></option>
												<?php  
														}
														else
														{
												?>
                        									<option value="<?php echo $fetch_standard['fld_standard_id'];?>" ><?php echo $fetch_standard['fld_standard_name'];?></option>
          										<?php      
                  										}
												 	} 
												?>
												
											</select>											
										</div>
										<div class="col-lg-5 col-md-5 col-xs-12" ><br>
											<label>User</label>
											<select class="form-control "  data-placeholder="Choose user"  name="user" id="user">
												<option value="">Select User</option>

												<?php $query_user= mysqli_query($connect,"select * from tbl_user order by fld_user_name asc") or die(mysqli_error($connect));
												
														while($fetch_user=mysqli_fetch_array($query_user)) 
														{ 
															if(isset($_POST['submit']))
	                      									{
                    							?>
                        										<option value="<?php echo $fetch_user['fld_user_id'];?>" <?php if( $_POST['user']==$fetch_user['fld_user_id']) {echo "selected";} ?>><?php echo $fetch_user['fld_user_name'];?></option>
												<?php  
															}
															else
															{
												?>
                        										<option value="<?php echo $fetch_user['fld_user_id'];?>" ><?php echo $fetch_user['fld_user_name'];?></option>
          										<?php      
                  											}
														} 
												?>
												
											</select>											
										</div>
										<div class="col-lg-2 col-md-2 col-xs-12 ">
											<center>
												<br><br>
												<button class="btn btn-primary pd-x-20" type="submit" name="submit">Submit</button>
												
											</center>
										</div>
									</div>
								</form>
								<hr>
								
								<?php 
                                    $count=0; 
                                    $query="select r.*,sub.*,u.*,std.* from tbl_result r, tbl_subject sub, tbl_user u, tbl_standard std where std.fld_standard_id=sub.fld_standard_id and std.fld_standard_id=r.fld_standard_id and  std.fld_standard_id=u.fld_standard_id and sub.fld_standard_id=r.fld_standard_id and  sub.fld_standard_id=u.fld_standard_id and r.fld_standard_id=u.fld_standard_id and sub.fld_subject_id=r.fld_subject_id and   r.fld_user_id=u.fld_user_id";
                                    if(isset($_POST['submit']))
									{
									    $conditions=array();

									  	if((isset($_POST['standard'])) && (!empty($_POST['standard'])))
									    {
									      $conditions[] = 'r.fld_standard_id ='."'". $_POST['standard']."'";
									    }

										if((isset($_POST['user'])) && (!empty($_POST['user'])))
									    {
									      $conditions[] = 'r.fld_user_id ='."'". $_POST['user']."'";
									    }

										if ($conditions)
									    {
									      $query .= " AND ".implode(" AND ", $conditions);
									    }
									}
                                    $query .=" group by r.fld_result_id order by r.fld_result_id desc";
                                    $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
                                     $row=mysqli_query($connect,$query) or die(mysqli_error($connect));

                                    $total=mysqli_num_rows($row);
                                    
                                   if($total==0){ echo "<b>No Record Found</b>";} 
                                   else 
                                   {
                                   
                                ?>
	                                	<script type="text/javascript">
									      google.charts.load('current', {'packages':['bar']});
									      google.charts.setOnLoadCallback(drawChart);

									      function drawChart() {
									        var data = google.visualization.arrayToDataTable([
									          ['User', 'Correct Answer', 'Wrong Answer'],

									          <?php  while($fetch=mysqli_fetch_array($row)) {
	                                    		extract($fetch); ?>
									          	['<?php echo $fetch['fld_user_name'];?> <?php echo $fetch['fld_standard_name'];?>-<?php echo $fetch['fld_subject_name'];?>', <?php echo $fetch['fld_correct_answer'];?>, <?php echo $fetch['fld_wrong_answer'];?>],

									          <?php } ?>
									          
									        ]);

									        var options = {
									          chart: {
									            title: '',
									            subtitle: '',
									          }
									        };

									        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

									        chart.draw(data, google.charts.Bar.convertOptions(options));
									      }
									    </script>

										<div id="columnchart_material" style="width: 100%; height: 400px;"></div>
								<?php } ?>	
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