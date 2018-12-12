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


		<?php include 'navbar.php';?>


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
