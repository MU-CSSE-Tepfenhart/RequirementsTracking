<!doctype html>
	<html class="no-js" lang="en">
	<?php
	  include("../../reqd_connection.php")
	?>

	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>Add Requirement Form - Reqd</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
	    <link rel="stylesheet" href="assets/css/themify-icons.css">
	    <link rel="stylesheet" href="assets/css/metisMenu.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	    <link rel="stylesheet" href="assets/css/slicknav.min.css">
	    <!-- amchart css -->
	    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
	    <!-- others css -->
	    <link rel="stylesheet" href="assets/css/typography.css">
	    <link rel="stylesheet" href="assets/css/default-css.css">
	    <link rel="stylesheet" href="assets/css/styles.css">
	    <link rel="stylesheet" href="assets/css/responsive.css">
	    <!-- modernizr css -->
	    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
	

	<body>
	    <!--[if lt IE 8]>
	            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	        <![endif]-->
	    <!-- preloader area start -->
	    <div id="preloader">
	        <div class="loader"></div>
	    </div>
	    <!-- preloader area end -->
	    <!-- page container area start -->
	    <div class="page-container">
	        <!-- main content area start -->
	        <div class="main-content">

<!-- main wrapper start -->
    <div class="horizontal-main-wrapper">
        <!-- main header area start -->
        <div class="mainheader-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.php">Dashboard | Reqt</a>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-9 clearfix text-right">
                        <div class="d-md-inline-block d-block mr-md-4">
                            <ul class="notification-area">
                                <li class="dropdown">
                                    <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                        <span>2</span>
                                    </i>
                                    <div class="dropdown-menu bell-notify-box notify-box">
                                        <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                        <div class="nofity-list">
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>You have Changed Your Password</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                                <div class="notify-text">
                                                    <p>New Comments On Post</p>
                                                    <span>30 Seconds ago</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                                <div class="notify-text">
                                                    <p>Some special like you</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                                <div class="notify-text">
                                                    <p>New Comments On Post</p>
                                                    <span>30 Seconds ago</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                                <div class="notify-text">
                                                    <p>Some special like you</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>You have Changed Your Password</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>You have Changed Your Password</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                    <div class="dropdown-menu notify-box nt-enveloper-box">
                                        <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                        <div class="nofity-list">
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="assets/images/author/author-img1.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">Hey I am waiting for you...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="assets/images/author/author-img2.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">When you can connect with me...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="assets/images/author/author-img3.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">I missed you so much...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="assets/images/author/author-img4.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">Your product is completely Ready...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="assets/images/author/author-img2.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">Hey I am waiting for you...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="assets/images/author/author-img1.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">Hey I am waiting for you...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="assets/images/author/author-img3.jpg" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">Hey I am waiting for you...</span>
                                                    <span>3:15 PM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="settings-btn">
                                    <i class="ti-settings"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix d-md-inline-block d-block">
                            <div class="user-profile m-0">
                                <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">name goes here<i class="fa fa-angle-down"></i></h4>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="settings.php">Settings</a>
                                    <a class="dropdown-item" href="login.php" onclick = "logout()">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header area end -->
        <!-- header area start -->
        <div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                    <li>
                                        <a href="index.php"><i class="ti-dashboard"></i><span>dashboard</span></a>

                                    </li>
                                    <li>
                                        	<a href="javascript:void(0)"><i class="ti-pie-chart"></i><span>Requirements</span></a>
                                        		<ul class="submenu">
                                            			<li><a href="requirementslist.php">List</a></li>
                                            			<li><a href="addrequirements.php">Add Requirement (temp. location)</a></li>
						    		<li><a href="editrequirements.php">Edit Requirement (temp. location)</a></li>
                                           			 <li><a href="deleterequirements.php">Delete Requirement (temp. location)</a></li>
                                        		</ul>
                                    	</li>
                                    	<li>
                                       		<a href="javascript:void(0)"><i class="ti-palette"></i><span>Project</span></a>
                                        		<ul class="submenu">
                                            			<li><a href="projectoverview.php">Overview</a></li>
                                            			<li><a href="addprojectform.php">Add Project (temporary location)</a></li>
                                           			 <li><a href="editprojectform.php">Edit Project (temporary location)</a></li>
                                          
                                        		</ul>
                                    	</li>
                                    <li><a href="profile.php"><i class="ti-map-alt"></i> <span>Profile</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- nav and search button -->
                    <div class="col-lg-3 clearfix">
                        <div class="search-box">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>

                    <!-- mobile_menu -->
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header area end -->
        <!-- page title area end -->

<!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Add Requirement</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->

	            <div class="main-content-inner">
	                <div class="row">
	                    <div class="col-lg-6 col-ml-12">
	                        <div class="row">
				    
				    <!-- basic form start -->
	                            <div class="col-12 mt-5">
	                                <div class="card">
	                                    <div class="card-body">
	                                        <h4 class="header-title">New Requirement</h4>
	                                        
                                            <form action="insert.php" method = "post">
							
							<fieldset disabled>
								<div class="form-group">
	                                            			<label for="example-text-input" class="col-form-label">Requirement ID</label>
	                                            			<input class="form-control" type="text" value="#1" id="example-text-input"
                                                            name = "id">
	                                        		</div>
							</fieldset>

							<div class="form-group">
	                                            		<label for="example-text-input" class="col-form-label">Requirement Title</label>
	                                            		<input class="form-control" type="text" value="" id="example-text-input" 
                                                        name = "title" >
	                                        	</div>

                                             <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Short Description</label>
                                                        <input class="form-control" type="text" value="" id="example-text-input"
                                                        name = "summary">
                                                </div>

	                                        	<div class="form-group">
	                                            		<label for="example-date-input" class="col-form-label">Start Date</label>
	                                            		<input class="form-control" type="date" value="2018-03-05" id="example-date-input"
                                                        name = "sdate">
	                                        	</div>

	                                        	<div class="form-group">
	                                            		<label for="example-date-input" class="col-form-label">Due Date</label>
	                                            		<input class="form-control" type="date" value="2018-03-05" id="example-date-input"
                                                        name = "edate">
	                                        	</div>


                                              <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Original Estimate</label>
                                                        <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>


                                                <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Time Spent</label>
                                                        <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>

                                            <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Complexity</label>
                                                        <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>

                                                <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Parent Requirement</label>
                                                        <input class="form-control" type="text" value="" id="example-text-input"
                                                        name = "parent">
                                                </div>

	                                        	<div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Assigner</label>
                                                        <input class="form-control" type="text" value="" id="example-text-input"
                                                        name = "assigner">
                                                </div>

                                                <div class="form-group">
                                                        <label for="example-text-input" class="col-form-label">Assignee</label>
                                                        <input class="form-control" type="text" value="" id="example-text-input"
                                                        name = "assignee">
                                                </div>
														
	                                        	</div>

	                                        	

	                                            
	                                            <button type="button" class="btn btn-primary mt-4 pr-4 pl-4">Cancel</button>
						    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Add Requirement</button>
	                                        </form>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- basic form end -->

	                        </div>
	                    </div>

	                </div>
	            </div>
	        </div>
	        <!-- main content area end -->
	        <!-- footer area start-->
	        <footer>
	            <div class="footer-area">
	                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
	            </div>
	        </footer>
	        <!-- footer area end-->
	    </div>
	    <!-- page container area end -->
	    <!-- offset area start -->
	    <div class="offset-area">
	        <div class="offset-close"><i class="ti-close"></i></div>
	        <ul class="nav offset-menu-tab">
	            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
	            <li><a data-toggle="tab" href="#settings">Settings</a></li>
	        </ul>
	        <div class="offset-content tab-content">
	            <div id="activity" class="tab-pane fade in show active">
	                <div class="recent-activity">
	                    <div class="timeline-task">
	                        <div class="icon bg1">
	                            <i class="fa fa-envelope"></i>
	                        </div>
	                        <div class="tm-title">
	                            <h4>Rashed sent you an email</h4>
	                            <span class="time"><i class="ti-time"></i>09:35</span>
	                        </div>
	                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
	                        </p>
	                    </div>
	                    <div class="timeline-task">
	                        <div class="icon bg2">
	                            <i class="fa fa-check"></i>
	                        </div>
	                        <div class="tm-title">
	                            <h4>Added</h4>
	                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
	                        </div>
	                        <p>Lorem ipsum dolor sit amet consectetur.
	                        </p>
	                    </div>
	                    <div class="timeline-task">
	                        <div class="icon bg2">
	                            <i class="fa fa-exclamation-triangle"></i>
	                        </div>
	                        <div class="tm-title">
	                            <h4>You missed you Password!</h4>
	                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
	                        </div>
	                    </div>
	                    <div class="timeline-task">
	                        <div class="icon bg3">
	                            <i class="fa fa-bomb"></i>
	                        </div>
	                        <div class="tm-title">
	                            <h4>Member waiting for you Attention</h4>
	                            <span class="time"><i class="ti-time"></i>09:35</span>
	                        </div>
	                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
	                        </p>
	                    </div>
	                    <div class="timeline-task">
	                        <div class="icon bg3">
	                            <i class="ti-signal"></i>
	                        </div>
	                        <div class="tm-title">
	                            <h4>You Added Kaji Patha few minutes ago</h4>
	                            <span class="time"><i class="ti-time"></i>01 minutes ago</span>
	                        </div>
	                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
	                        </p>
	                    </div>
	                    <div class="timeline-task">
	                        <div class="icon bg1">
	                            <i class="fa fa-envelope"></i>
	                        </div>
	                        <div class="tm-title">
	                            <h4>Ratul Hamba sent you an email</h4>
	                            <span class="time"><i class="ti-time"></i>09:35</span>
	                        </div>
	                        <p>Hello sir , where are you, i am egerly waiting for you.
	                        </p>
	                    </div>
	                    <div class="timeline-task">
	                        <div class="icon bg2">
	                            <i class="fa fa-exclamation-triangle"></i>
	                        </div>
	                        <div class="tm-title">
	                            <h4>Rashed sent you an email</h4>
	                            <span class="time"><i class="ti-time"></i>09:35</span>
	                        </div>
	                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
	                        </p>
	                    </div>
	                    <div class="timeline-task">
	                        <div class="icon bg2">
	                            <i class="fa fa-exclamation-triangle"></i>
	                        </div>
	                        <div class="tm-title">
	                            <h4>Rashed sent you an email</h4>
	                            <span class="time"><i class="ti-time"></i>09:35</span>
	                        </div>
	                    </div>
	                    <div class="timeline-task">
	                        <div class="icon bg3">
	                            <i class="fa fa-bomb"></i>
	                        </div>
	                        <div class="tm-title">
	                            <h4>Rashed sent you an email</h4>
	                            <span class="time"><i class="ti-time"></i>09:35</span>
	                        </div>
	                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
	                        </p>
	                    </div>
	                    <div class="timeline-task">
	                        <div class="icon bg3">
	                            <i class="ti-signal"></i>
	                        </div>
	                        <div class="tm-title">
	                            <h4>Rashed sent you an email</h4>
	                            <span class="time"><i class="ti-time"></i>09:35</span>
	                        </div>
	                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
	                        </p>
	                    </div>
	                </div>
	            </div>
	            <div id="settings" class="tab-pane fade">
	                <div class="offset-settings">
	                    <h4>General Settings</h4>
	                    <div class="settings-list">
	                        <div class="s-settings">
	                            <div class="s-sw-title">
	                                <h5>Notifications</h5>
	                                <div class="s-swtich">
	                                    <input type="checkbox" id="switch1" />
	                                    <label for="switch1">Toggle</label>
	                                </div>
	                            </div>
	                            <p>Keep it 'On' When you want to get all the notification.</p>
	                        </div>
	                        <div class="s-settings">
	                            <div class="s-sw-title">
	                                <h5>Show recent activity</h5>
	                                <div class="s-swtich">
	                                    <input type="checkbox" id="switch2" />
	                                    <label for="switch2">Toggle</label>
	                                </div>
	                            </div>
	                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
	                        </div>
	                        <div class="s-settings">
	                            <div class="s-sw-title">
	                                <h5>Show your emails</h5>
	                                <div class="s-swtich">
	                                    <input type="checkbox" id="switch3" />
	                                    <label for="switch3">Toggle</label>
	                                </div>
	                            </div>
	                            <p>Show email so that easily find you.</p>
	                        </div>
	                        <div class="s-settings">
	                            <div class="s-sw-title">
	                                <h5>Show Task statistics</h5>
	                                <div class="s-swtich">
	                                    <input type="checkbox" id="switch4" />
	                                    <label for="switch4">Toggle</label>
	                                </div>
	                            </div>
	                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
	                        </div>
	                        <div class="s-settings">
	                            <div class="s-sw-title">
	                                <h5>Notifications</h5>
	                                <div class="s-swtich">
	                                    <input type="checkbox" id="switch5" />
	                                    <label for="switch5">Toggle</label>
	                                </div>
	                            </div>
	                            <p>Use checkboxes when looking for yes or no answers.</p>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- offset area end -->
	    <!-- jquery latest version -->
	    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	    <!-- bootstrap 4 js -->
	    <script src="assets/js/popper.min.js"></script>
	    <script src="assets/js/bootstrap.min.js"></script>
	    <script src="assets/js/owl.carousel.min.js"></script>
	    <script src="assets/js/metisMenu.min.js"></script>
	    <script src="assets/js/jquery.slimscroll.min.js"></script>
	    <script src="assets/js/jquery.slicknav.min.js"></script>
	

	    <!-- others plugins -->
	    <script src="assets/js/plugins.js"></script>
	    <script src="assets/js/scripts.js"></script>
	</body>
	

	</html>
