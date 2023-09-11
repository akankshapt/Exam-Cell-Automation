<?php 
include "config.php";
include "header_session.php";

$query_admin=mysqli_query($connect,"select * from tbl_admin where fld_admin_email='".$_SESSION['email']."'") or die(mysqli_error($connect));
$fetch_admin=mysqli_fetch_array($query_admin);
extract($fetch_admin);
 ?>

<!-- Switcher -->
		<!-- <div class="switcher-wrapper">
			<div class="demo_changer">
				<div class="demo-icon bg-black">
					<i class="fa fa-cog fa-spin text-white"></i>
				</div>
				<div class="form_holder right-sidebar">
					<div class="">
						<div class="predefined_styles">
							<div class="skin-theme-switcher">
								<div class="skin-theme-switcher">
									<div class="clearfix"></div>
									<h4>NAVIGATION STYLES</h4>
									<div class="pl-3 pr-3">
										<a class="btn btn-success btn-block" href="https://laravel.spruko.com/azira/horizontal_light/index">Horizontal-menu</a> 
										<a class="btn btn-warning btn-block" href="dashboard.php">Leftmenu</a>
									</div>
									<div class="clearfix"></div>
									<h4>THEMES</h4>
									<div class="pl-3 pr-3">
										<a class="btn btn-primary btn-block" href="dashboard.php">Leftmenu-Light</a> 
										<a class="btn btn-danger btn-block" href="https://laravel.spruko.com/azira/leftmenu_dark/index">Leftmenu-dark</a>
									</div>
									<div class="clearfix"></div>
									<div class="swichermainleft">
										<h4>Skin Modes</h4>
										<div class="switch_section">
											<div class="switch-toggle d-flex">
												<span class="mr-auto">Header-style</span>
												<div class="onoffswitch2">
													<input class="onoffswitch-checkbox" id="myonoffswitch" name="onoffswitch2" type="radio">
													<label class="onoffswitch-label" for="myonoffswitch"></label>
												</div>
											</div>
											<div class="switch-toggle d-flex">
												<span class="mr-auto">Header-style2</span>
												<div class="onoffswitch2">
													<input class="onoffswitch2-checkbox" id="myonoffswitch2" name="onoffswitch2" type="radio"> 
													<label class="onoffswitch2-label" for="myonoffswitch2"></label>
												</div>
											</div>
											<div class="switch-toggle d-flex">
												<span class="mr-auto">Leftmenu-light</span>
												<div class="onoffswitch2">
													<input class="onoffswitch2-checkbox" id="myonoffswitch11" name="onoffswitch2" type="radio"> 
													<label class="onoffswitch2-label" for="myonoffswitch11"></label>
												</div>
											</div>
											<div class="switch-toggle d-flex">
												<span class="mr-auto">reset all</span>
												<div class="onoffswitch2">
													<input class="onoffswitch2-checkbox" id="myonoffswitch9" name="onoffswitch2" type="radio"> 
													<label class="onoffswitch2-label" for="myonoffswitch9"></label>
												</div>
											</div>
										</div>
									</div>
									<div class="swichermainleft border-top mt-2 text-center">
										<div class="p-3">
											<a class="btn btn-primary btn-block mt-0" href="#">View Demo</a> 
											<a class="btn btn-pink btn-block" href="https://themeforest.net/user/sprukosoft/portfolio">Buy Now</a> 
											<a class="btn btn-teal btn-block" href="https://themeforest.net/user/sprukosoft/portfolio">Our Portfolio</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- Switcher -->
		
		<!-- Loader -->
		<div id="global-loader">
			<img src="assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- main-sidebar opened -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="main-sidebar app-sidebar sidebar-scroll">
			<div class="main-sidebar-header">
				<a class="desktop-logo logo-light active" href="dashboard.php" class="text-center mx-auto"><img src="assets/img/brand/admin logo.png" class="main-logo"></a>
				<a class="desktop-logo icon-logo active"href="dashboard.php"><img src="assets/img/brand/favicon.png" class="logo-icon"></a>
				<a class="desktop-logo logo-dark active" href="dashboard.php"><img src="assets/img/brand/admin logo-white.png" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark active" href="dashboard.php"><img src="assets/img/brand/favicon-white.png" class="logo-icon dark-theme" alt="logo"></a>
			</div><!-- /logo -->
			<div class="main-sidebar-loggedin">
				<div class="app-sidebar__user">
					<div class="dropdown user-pro-body text-center">
						<div class="user-pic">
							<?php if ($fetch_admin['fld_admin_photo']=="") 
		                            {
		                        ?>
		                                <img src="../images/no-image.jpg" alt="No Image" class="rounded-circle mCS_img_loaded"/>
		                        <?php
		                            }
		                            else
		                            {
		                        ?>                                        
		                                <img src="../images/admin/<?php echo $fetch_admin['fld_admin_photo'];?>" alt="No Image"  class="rounded-circle mCS_img_loaded" />
		                        <?php
		                            }
		                        ?>
							
						</div>
						<div class="user-info">
							<h6 class=" mb-0 text-dark"><?php echo $fetch_admin['fld_admin_name']; ?></h6>
							<span class="text-muted app-sidebar__user-name text-sm">Administrator</span>
						</div>
					</div>
				</div>
			</div><!-- /user -->
			<div class="sidebar-navs">
				<ul class="nav  nav-pills-circle">
					<li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Profile" aria-describedby="tooltip365540">
						<a class="nav-link text-center m-2" href="profile.php">
							<i class="fa fa-user"></i>
						</a>
					</li>
					<li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Change Password">
						<a class="nav-link text-center m-2" href="change_password.php">
							<i class="fa fa-key"></i>
						</a>
					</li>
					<li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Profile">
						<a class="nav-link text-center m-2" href="profile.php">
							<i class="fa fa-edit"></i>
						</a>
					</li>
					<li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout">
						<a class="nav-link text-center m-2" href="logout.php">
							<i class="fa fa-power-off"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="main-sidebar-body">
				<ul class="side-menu ">
					<li class="slide">
						<a class="side-menu__item" href="dashboard.php"><i class="side-menu__icon fas fa-tachometer-alt"></i><span class="side-menu__label">Dashboard</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-th menu-icons"></i><span class="side-menu__label">Information Technology</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="standard_view.php">Semester</a></li>
							<li><a class="slide-item" href="subject_view.php">Subject</a></li>
						</ul>
					</li>

					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-users menu-icons"></i><span class="side-menu__label">User</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="user_registered_view.php">Registered User</a></li>
							<li><a class="slide-item" href="user_approve_view.php">Approved User</a></li>
							<li><a class="slide-item" href="user_disapprove_view.php">Disapproved User</a></li>
						</ul>
					</li>

					<li class="slide">
						<a class="side-menu__item" href="question_view.php"><i class="side-menu__icon fa fa-question"></i><span class="side-menu__label">Question</span></a>
					</li>

					<li class="slide">
						<a class="side-menu__item" href="user_result.php"><i class="side-menu__icon fas fa-tasks"></i><span class="side-menu__label">User Result</span></a>
					</li>

					<li class="slide">
						<a class="side-menu__item" href="graph_result.php"><i class="side-menu__icon far fa-chart-bar"></i><span class="side-menu__label">Graph Result</span></a>
					</li>

					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fas fa-cog menu-icons"></i><span class="side-menu__label">Setting</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="profile.php">Update Profile</a></li>
							<li><a class="slide-item" href="change_password.php">Change Password</a></li>
						</ul>
					</li>


					<li class="slide">
						<a class="side-menu__item" href="logout.php"><i class="side-menu__icon fa fa-power-off"></i><span class="side-menu__label">Logout</span></a>
					</li>
					
				</ul>
			</div>
		</aside>
		<!-- /main-sidebar -->
		<!-- main-content -->
		<div class="main-content">
		<!-- main-header -->
			<div class="main-header  side-header">
				<div class="container-fluid">
					<div class="main-header-left ">
						<div class="app-sidebar__toggle mobile-toggle" data-toggle="sidebar">
							<a class="open-toggle" href="#"><i class="header-icons" data-eva="menu-outline"></i></a>
							<a class="close-toggle" href="#"><i class="header-icons" data-eva="close-outline"></i></a>
						</div>
						<div class="responsive-logo">
							<a href="dashboard.php"><img src="assets/img/brand/admin logo-white.png" class="logo-1"></a>
							<a href="dashboard.php"><img src="assets/img/brand/admin logo.png" class="logo-11"></a>
							<a href="dashboard.php"><img src="assets/img/brand/favicon-white.png" class="logo-2"></a>
							<a href="dashboard.php"><img src="assets/img/brand/favicon.png" class="logo-12"></a>
						</div>
						<!-- <ul class="header-megamenu-dropdown  nav">
							<li class="nav-item">
								<div class="btn-group dropdown">
									<button aria-expanded="false" aria-haspopup="true" class="btn btn-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton2" type="button"><span><i class="fe fe-settings"></i> Settings </span></button>
									<div  class="dropdown-menu" >
										<div class="dropdown-menu-header header-img p-3">
											<div class="drop-menu-inner">
												<div class="header-content text-left d-flex">
												    <div class="text-white">
														<h5 class="menu-header-title">Setting</h5>
														<h6 class="menu-header-subtitle mb-0">Overview of theme</h6>
													</div>
													<div class="my-auto ml-auto">
														<span class="badge badge-pill badge-warning float-right">View all</span>
													</div>
												</div>
											</div>
										</div>
										<div class="setting-scroll">
											<div>
												<div class="setting-menu ">
													<a  class="dropdown-item" href="#"><i class="mdi mdi-account-outline tx-16 mr-2 mt-1"></i>Profile</a>
													<a class="dropdown-item" href="#"><i class="mdi mdi-account-box-outline tx-16 mr-2"></i>Contacts</a>
													<a class="dropdown-item" href="#"><i class="mdi mdi-account-location tx-16 mr-2"></i>Accounts</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#"><i class="typcn typcn-briefcase tx-16 mr-2"></i>About us</a>
													<a class="dropdown-item" href="#"><i class="mdi mdi-application tx-16 mr-2"></i>Getting start</a>
												</div>
											</div>
										</div>
										<ul class="setting-menu-footer flex-column pl-0">
											<li class="divider mb-0 pb-0 "></li>
											<li class="setting-menu-btn">
												<button class=" btn-shadow btn btn-success btn-sm">Cancel</button>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li class="nav-item">
								<div class="dropdown-menu-rounded btn-group dropdown" >
									<button aria-expanded="false" aria-haspopup="true" class="btn btn-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton3" type="button"><span><i class="nav-link-icon fe fe-briefcase"></i> Projects </span></button>
									<div class="dropdown-menu-lg dropdown-menu"  x-placement="bottom-left">
										<div class="dropdown-menu-header">
											<div class="dropdown-menu-header-inner header-img p-3">
												<div class="header-content text-left d-flex">
												    <div class="text-white">
														<h5 class="menu-header-title">Projects</h5>
														<h6 class="menu-header-subtitle mb-0">Overview of Projects</h6>
													</div>
													<div class="my-auto ml-auto">
														<span class="badge badge-pill badge-warning float-right">View all</span>
													</div>
												</div>
											</div>
										</div>
										<a  class="dropdown-item  mt-2" href="#"><i class="dropdown-icon"></i>Mobile Application</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon"></i>PSD Projects</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon"></i>PHP Project</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="dropdown-icon"></i>Wordpress Projects</a>
										<a class="dropdown-item mb-2" href="#"><i class="dropdown-icon "></i>HTML & CSS3 Projects</a>
									</div>
								</div>
							</li>
						</ul> -->
					</div>
					<div class="main-header-right">
						<!-- <div class="nav nav-item nav-link" id="bs-example-navbar-collapse-1">
							<form class="navbar-form" role="search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search">
									<span class="input-group-btn">
										<button type="reset" class="btn btn-default">
											<i class="fas fa-times"></i>
										</button>
										<button type="submit" class="btn btn-default nav-link">
											<i class="fe fe-search"></i>
										</button>
									</span>
								</div>
							</form>
						</div> -->
						<div class="nav nav-item  navbar-nav-right ml-auto">
							<div class="nav-item full-screen fullscreen-button">
								<a class="new nav-link full-screen-link" href="#"><i class="fe fe-maximize"></i></span></a>
							</div>
							<!-- <div class="dropdown  nav-item main-header-message ">
								<a class="new nav-link" href="#" ><i class="fe fe-mail"></i><span class=" pulse-danger"></span></a>
								<div class="dropdown-menu">
									<div class="menu-header-content bg-primary-gradient text-left d-flex">
										<div class="">
											<h6 class="menu-header-title text-white mb-0">5 new Messages</h6>
										</div>
										<div class="my-auto ml-auto">
											<a class="badge badge-pill badge-warning float-right" href="#">Mark All Read</a>
										</div>
									</div>
									<div class="main-message-list chat-scroll">
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="  drop-img  cover-image  " data-image-src="assets/img/faces/3.jpg">
												<span class="avatar-status bg-teal"></span>
											</div>

											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Paul Molive</h5>
													<p class="time mb-0 text-right ml-auto float-right">10 min ago</p>
												</div>
												<p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
											</div>
										</a>
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="drop-img cover-image" data-image-src="assets/img/faces/2.jpg">
												<span class="avatar-status bg-teal"></span>
											</div>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Sahar Dary</h5>
													<p class="time mb-0 text-right ml-auto float-right">13 min ago</p>
												</div>
												<p class="mb-0 desc">All set ! Now, time to get to you now......</p>
											</div>
										</a>
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="drop-img cover-image" data-image-src="assets/img/faces/9.jpg">
												<span class="avatar-status bg-teal"></span>
											</div>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Khadija Mehr</h5>
													<p class="time mb-0 text-right ml-auto float-right">20 min ago</p>
												</div>
												<p class="mb-0 desc">Are you ready to pickup your Delivery...</p>
											</div>
										</a>
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="drop-img cover-image" data-image-src="assets/img/faces/12.jpg">
												<span class="avatar-status bg-danger"></span>
											</div>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Barney Cull</h5>
													<p class="time mb-0 text-right ml-auto float-right">30 min ago</p>
												</div>
												<p class="mb-0 desc">Here are some products ...</p>
											</div>
										</a>
										<a href="#" class="p-3 d-flex border-bottom">
											<div class="drop-img cover-image" data-image-src="assets/img/faces/5.jpg">
												<span class="avatar-status bg-teal"></span>
											</div>
											<div class="wd-90p">
												<div class="d-flex">
													<h5 class="mb-1 name">Petey Cruiser</h5>
													<p class="time mb-0 text-right ml-auto float-right">35 min ago</p>
												</div>
												<p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
											</div>
										</a>
									</div>
									<div class="text-center dropdown-footer">
										<a href="#">VIEW ALL</a>
									</div>
								</div>
							</div>
							<div class="dropdown nav-item main-header-notification">
								<a class="new nav-link" href="#"><i class="fe fe-bell"></i><span class=" pulse"></span></a>
								<div class="dropdown-menu">
									<div class="menu-header-content bg-primary-gradient text-left d-flex">
										<div class="">
											<h6 class="menu-header-title text-white mb-0">7 new Notifications</h6>
										</div>
										<div class="my-auto ml-auto">
											<a class="badge badge-pill badge-warning float-right" href="#">Mark All Read</a>
										</div>
									</div>
									<div class="main-notification-list Notification-scroll">
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-success-transparent">
												<i class="la la-shopping-basket text-success"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">New Order Received</h5>
												<div class="notification-subtext">1 hour ago</div>
											</div>
											<div class="ml-auto" >
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-danger-transparent">
												<i class="la la-user-check text-danger"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">22 verified registrations</h5>
												<div class="notification-subtext">2 hour ago</div>
											</div>
											<div class="ml-auto" >
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-primary-transparent">
												<i class="la la-check-circle text-primary"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">Project has been approved</h5>
												<div class="notification-subtext">4 hour ago</div>
											</div>
											<div class="ml-auto" >
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-pink-transparent">
												<i class="la la-file-alt text-pink"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">New files available</h5>
												<div class="notification-subtext">10 hour ago</div>
											</div>
											<div class="ml-auto" >
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3 border-bottom" href="#">
											<div class="notifyimg bg-warning-transparent">
												<i class="la la-envelope-open text-warning"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">New review received</h5>
												<div class="notification-subtext">1 day ago</div>
											</div>
											<div class="ml-auto" >
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
										<a class="d-flex p-3" href="#">
											<div class="notifyimg bg-purple-transparent">
												<i class="la la-gem text-purple"></i>
											</div>
											<div class="ml-3">
												<h5 class="notification-label mb-1">Updates Available</h5>
												<div class="notification-subtext">2 days ago</div>
											</div>
											<div class="ml-auto" >
												<i class="las la-angle-right text-right text-muted"></i>
											</div>
										</a>
									</div>
									<div class="dropdown-footer">
										<a href="#">VIEW ALL</a>
									</div>
								</div>
							</div> -->
							<div class="dropdown main-profile-menu nav nav-item nav-link">

								<a class="profile-user d-flex" href="#">

									<?php if ($fetch_admin['fld_admin_photo']=="") 
		                            {
		                        ?>
		                                <img src="../images/no-image.jpg" alt="No Image"  class="rounded-circle mCS_img_loaded" />
		                        <?php
		                            }
		                            else
		                            {
		                        ?>                                        
		                                <img src="../images/admin/<?php echo $fetch_admin['fld_admin_photo'];?>" alt="No Image"  class="rounded-circle mCS_img_loaded"/>
		                        <?php
		                            }
		                        ?>
									
									<span></span></a>

								<div class="dropdown-menu">
									<div class="main-header-profile header-img">
										<div class="main-img-user">
											<?php if ($fetch_admin['fld_admin_photo']=="") 
		                            {
		                        ?>
		                                <img src="../images/no-image.jpg" alt="No Image"/>
		                        <?php
		                            }
		                            else
		                            {
		                        ?>                                        
		                                <img src="../images/admin/<?php echo $fetch_admin['fld_admin_photo'];?>" alt="No Image"  />
		                        <?php
		                            }
		                        ?>
										</div>
										<h6><?php echo $fetch_admin['fld_admin_name']; ?></h6>
										<span><?php echo $fetch_admin['fld_admin_email']; ?></span>
									</div>
									<!-- <a class="dropdown-item" href="#"><i class="far fa-user"></i> My Profile</a> -->
									<a class="dropdown-item" href="profile.php"><i class="far fa-edit"></i> Edit Profile</a>
									<a class="dropdown-item" href="change_password.php"><i class="fa fa-key"></i> Change Password</a>
									<a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
								</div>
							</div>
							<!-- <div class="dropdown main-header-message right-toggle">
								<a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
									<i class="ion ion-md-menu tx-20 bg-transparent"></i>
								</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
			<!-- /main-header -->