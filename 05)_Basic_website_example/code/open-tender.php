<?php include('connection.php');
session_start();

 ?>

<title>Carry My Cargo</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">


<!-- Custom CSS -->
<link rel="stylesheet" href="css/animate.css">
<link href="css/style.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">


<body id="page-top" class="other">

    <!-- Navigation -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll" href="index.php"><img src="images/logowhite.png" alt="" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div>
                <ul class="nav navbar-nav navbar-right text-white">
                    <li>
                        <i class="fa fa-envelope fa-2x"></i>  <i class="fa fa-phone fa-flip-horizontal fa-2x"></i>   +91-9990509727 
                    </li>
                    
                    <li>
                        <a class="btn btn-default" href="register-company.php">Register</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="javascript:void(0);" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-navicon fa-2x"></i></a>
                         <ul class="dropdown-menu" aria-labelledby="dLabel">
                         		<li><a href="#">Why Us</a></li>
                                <li><a href="#">Why Us</a></li>
                                <li><a href="#">Why Us</a></li>
                                <li><a href="#">Why Us</a></li>
                                <li><a href="#">Why Us</a></li>
                         </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	<section class="content-area profile-area clearfix">
   		<!-- sidebar start -->
   		<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar">
        	<div class="user-info">
            	<div class="user-img">
                	<img src="http://localhost/cargo/images/<?php echo $_SESSION['profile_img'];?>" alt="username" />
                </div>
                <div class="user-data">
                	<p><?php echo $_SESSION['username'];?></p>
                    <p><?php echo $_SESSION['email'];?></p>
                </div>
            </div>
            <div class="row list-navigation">
                <nav class="navbar-collapse collapse">
                    <ul class="nav nav-stacked">
    
                        <li><a href="profile-page.php">Profile</a></li>
                        <li><a href="#">Documents</a></li>
                        <li class="active"><a href="open-tender.php">Open Tenders</a></li>
                        <li><a href="open-bids.php">Open Bids</a></li>
                        <li><a href="#">Status Of Placed Bid</a></li>
                        <li><a href="#">History</a></li>
                        <li><a href="in-transit.php">In Transit</a></li>
                        <li><a href="#">Share The Load</a></li>
                        <li><a href="#">Logout</a></li>
    
                    </ul>
                </nav>
            </div>
        </div>
        <!-- sidebar end -->
        
        <!-- main content start -->
        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 main-content">
        	<div class="content-title">
            	Open Tenders
            </div>
            <div class="content-data">
            	<div class="padding4020">
                	<div class="bordered-pannel">
                    	<h4 class="text-muted text-uppercase">project acitvity</h4>
                        <ul class="list-projects">
                        	<li>
                            	Lorem Ipsum
                                <label class="label-info text-uppercase pull-right">Approved</label>
                            </li>
                            <li>
                            	Lorem Ipsum
                                <label class="label-info text-uppercase pull-right">Deleted</label>
                            </li>
                            <li>
                            	Lorem Ipsum
                                <label class="label-info text-uppercase pull-right">Cancelled</label>
                            </li>
                            <li>
                            	Lorem Ipsum
                                <label class="label-info text-uppercase pull-right">Approved</label>
                            </li>
                            <li>
                            	Lorem Ipsum
                                <label class="label-info text-uppercase pull-right">Approved</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content end -->
   </section>
   <!-- content area end -->
   
 <?php include ('footer.php');?>