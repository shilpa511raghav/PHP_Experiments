<?php include('connection.php'); 
session_start();
?>


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
	
	 <!-- content area -->
   <section class="content-area profile-area clearfix">
   		<!-- sidebar start -->
   		<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar">
        	<div class="user-info">
            	<div class="user-img">
                	<img src="http://localhost/cargo/images/<?php echo $_SESSION['profile_img'];?>" alt="username" />
                </div>
                <div class="user-data">
                	<p><?php echo $_SESSION['username'];?></p>
                    <p><?php echo $_SESSION['email']?></p>
                </div>
            </div>
            <div class="row list-navigation">
                <nav class="navbar-collapse collapse">
                    <ul class="nav nav-stacked">
    
                       <li><a href="profile-page.php">Profile</a></li>
                        <li><a href="#">Documents</a></li>
                        <li><a href="open-tender.php">Open Tenders</a></li>
                        <li><a href="open-bids.php">Open Bids</a></li>
                        <li><a href="#">Status Of Placed Bid</a></li>
                        <li><a href="#">History</a></li>
                        <li><a href="in-transit.php">In Transit</a></li>
                        <li class="active"><a href="share-load.php">Share The Load</a></li>
                        <li><a href="logout.php">Logout</a></li>
    
    
                    </ul>
                </nav>
            </div>
        </div>
        <!-- sidebar end -->
        
        <!-- main content start -->
        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 main-content">
        	<div class="content-title">
            	Share The Load
            </div>
            <div class="content-data">
            	<div class="padding4020">
                    <div role="tabpanel">
                    
                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs nav-tabs-justified" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#prac" aria-controls="prac" role="tab" class="tab1" data-toggle="tab">
                                        I Want To Give Load
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#digi" aria-controls="digi" role="tab" data-toggle="tab">
                                       I Want To Take Load
                                    </a>
                                </li>
                                
                          </ul>
                        
                          <!-- Tab panes -->
                          <div class="tab-content text-center">
                                <div role="tabpanel" class="tab-pane active" id="prac">
                                	<h3 class="tab-heading">I Want To Give Load</h3>
                                	<form name="sentMessage" class="register_form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                	<label class="control-label">Source </label>
                                                    <input type="text" name="source" value="" class="form-control" />
                                                    <span class="fa fa-map-marker text-black form-control-feedback"></span>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Weight (MT) Capacity Available</label>
                                                    <input type="text" name="weight" value="" class="form-control" />
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                	<label class="control-label">Destination</label>
                                                    <input type="text" name="destination" value="" class="form-control" />
                                                    <span class="fa fa-map-marker text-black form-control-feedback"></span>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Material Type</label>
                                                    <input type="text" name="material" value="" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label class="control-label">Date and Time</label>
                                                    <input type="text" name="date-time" value="" class="form-control"/>
                                                    <span class="fa fa-calendar text-black form-control-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                               <div class="form-group">
                                                	<label class="control-label">Vehicle Type</label>
                                                    <input type="text" name="vehicle" value="" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">No Of Vehicles</label>
                                                    <input type="text" name="vehicle_no" value="" class="form-control noalpha" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Quote</label>
                                                    <input type="text" name="weight" value="" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Weight (MT) Of The Vehicle (Capacity)</label>
                                                    <input type="text" name="weight_cap" value="" class="form-control" />
                                                </div>
                                            </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Contact Number</label>
                                                    <input type="tel" name="weight" value="" class="form-control noalpha phone" />
                                                </div>
                                            </div>                           
                                                                                        
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-danger btn-lg">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                                
                                <div role="tabpanel" class="tab-pane" id="digi">
                                	<h3 class="tab-heading">I Want To Take Load</h3>
                                	<form name="sentMessage" class="register_form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                	<label class="control-label">Source </label>
                                                    <input type="text" name="source" value="" class="form-control" />
                                                    <span class="fa fa-map-marker text-black form-control-feedback"></span>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Weight (MT) Capacity Available</label>
                                                    <input type="text" name="weight" value="" class="form-control" />
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                	<label class="control-label">Destination</label>
                                                    <input type="text" name="destination" value="" class="form-control" />
                                                    <span class="fa fa-map-marker text-black form-control-feedback"></span>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Material Type</label>
                                                    <input type="text" name="material" value="" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <label class="control-label">Date and Time</label>
                                                    <input type="text" name="date-time" value="" class="form-control"/>
                                                    <span class="fa fa-calendar text-black form-control-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                               <div class="form-group">
                                                	<label class="control-label">Vehicle Type</label>
                                                    <input type="text" name="vehicle" value="" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">No Of Vehicles</label>
                                                    <input type="text" name="vehicle_no" value="" class="form-control noalpha" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Quote</label>
                                                    <input type="text" name="weight" value="" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Weight (MT) Of The Vehicle (Capacity)</label>
                                                    <input type="text" name="weight_cap" value="" class="form-control" />
                                                </div>
                                            </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                	<label class="control-label">Contact Number</label>
                                                    <input type="tel" name="weight" value="" class="form-control noalpha phone" />
                                                </div>
                                            </div>                           
                                                                                        
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-danger btn-lg">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                    
                                    
                                </div>
                                
                          </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- main content end -->
   </section>
   <!-- content area end -->
   <?php include('footer.php');?>