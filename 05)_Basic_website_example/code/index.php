<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Carry My Cargo</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
	
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="index">  
<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
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
                        <a class="btn btn-default" href="login.php" name= "login">Login</a>
                    </li>
                    <li>
                        <a class="btn btn-default" href="register-company.php" name = "register">Register</a>
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

<?php include('header.php');?>
    <!-- Features Section -->
    <section id="form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="section-heading text-white">Demand A Quote</h1>
                        <span class="line"></span>
                    </div>
                </div>
            
                <div class="row">
                    <div role="tabpanel">
                    
                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs nav-tabs-justified" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#prac" aria-controls="prac" role="tab" class="tab1" data-toggle="tab">
                                        1 Time Basis
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#digi" aria-controls="digi" role="tab" data-toggle="tab">
                                       Contract Basis
                                    </a>
                                </li>
                                
                          </ul>
                        
                          <!-- Tab panes -->
                          <div class="tab-content text-center">
                                <div role="tabpanel" class="tab-pane active" id="prac">
                                	<form name="sentMessage" id="contactForm" novalidate>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group has-feedback">
                                                    <input type="text" name="date15" id="calendar1" value="" class="form-control" placeholder="I demand the quote before" />
                                                    <span class="fa fa-calendar-o text-muted form-control-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                    	<option disabled class="text-muted" selected value="">Pick Up Point</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="drop_point">
                                                    	<option disabled class="text-muted" selected value="">Drop Point</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="esti" placeholder="Estimated time and distance" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group has-feedback">
                                                    <input type="text" name="date-time" id="calendar2" value="" class="form-control" placeholder="Pickup Date and time" />
                                                    <span class="fa fa-calendar text-muted form-control-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="material">
                                                    	<option disabled class="text-muted" selected value="">Material Type</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="weight">
                                                    	<option disabled class="text-muted" selected value="">Weight (MT)</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="vehicle">
                                                    	<option disabled class="text-muted" selected value="">Vehicle Type</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="trucks">
                                                    	<option disabled class="text-muted" selected value="">No. of truck</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="expcted_price" placeholder="Expected Price" />
                                                </div>
                                            </div>                           
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <textarea class="form-control" placeholder="Your Message" name="message"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 text-left">
                                                <button type="submit" class="btn btn-primary btn-lg">Get a quote</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                                
                                <div role="tabpanel" class="tab-pane" id="digi">
                                	<form name="sentMessage" id="contactForm" novalidate>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group has-feedback">
                                                    <input type="text" name="date15" value="" class="form-control" placeholder="I demand the quote before" />
                                                    <span class="fa fa-calendar-o text-muted form-control-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                    	<option disabled class="text-muted" selected value="">Pick Up Point</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="drop_point">
                                                    	<option disabled class="text-muted" selected value="">Drop Point</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="esti" placeholder="Estimated time and distance" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group has-feedback">
                                                    <input type="text" name="date-time" value="" class="form-control" placeholder="Pickup Date and time" />
                                                    <span class="fa fa-calendar text-muted form-control-feedback"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="material">
                                                    	<option disabled class="text-muted" selected value="">Material Type</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="weight">
                                                    	<option disabled class="text-muted" selected value="">Weight (MT)</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="vehicle">
                                                    	<option disabled class="text-muted" selected value="">Vehicle Type</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <select class="form-control" name="trucks">
                                                    	<option disabled class="text-muted" selected value="">No. of truck</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="expcted_price" placeholder="Expected Price" />
                                                </div>
                                            </div>                           
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <textarea class="form-control" placeholder="Your Message" name="message"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 text-left">
                                                <button type="submit" class="btn btn-primary btn-lg">Get a quote</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                    
                                    
                                </div>
                                
                          </div>
                    
                    </div>
                </div>
            </div>
    </section>
	<!--features end-->
    
    
   <!-- Why US Section -->
    <section id="faq" class="text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Why Carry My Cargo</h1>
                   <span class="line"></span>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4 wow fadeInLeft" >
                    <figure><img src="images/final_03.png" alt="Why Carry My Cargo" /></figure>
                    <p class="large"> Real time GPS tracking</p>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="col-md-4 wow fadeInLeft"  data-wow-delay=".2s" >
                     <figure><img src="images/final_05.png" alt="Why Carry My Cargo" /></figure>
                    <p class="large">Bestest Pricing & service</p>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="col-md-4 wow fadeInLeft"  data-wow-delay=".4s" >
                     <figure><img src="images/final_07.png" alt="Why Carry My Cargo" /></figure>
                    <p class="large">Vehicle Inspection & transporter background check</p>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="col-md-4 wow fadeInLeft" >
                    <figure><img src="images/final_17.png" alt="Why Carry My Cargo" /></figure>
                    <p class="large">Feedback & Review</p>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="col-md-4 wow fadeInLeft"  data-wow-delay=".2s" >
                     <figure><img src="images/final_12.png" alt="Why Carry My Cargo" /></figure>
                    <p class="large">Live Support</p>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                <div class="col-md-4 wow fadeInLeft"  data-wow-delay=".4s" >
                     <figure><img src="images/final_14.png" alt="Why Carry My Cargo" /></figure>
                    <p class="large">Delightful Experience / Not a service, but a Solution...</p>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
                
            </div>
            
        </div>
        <div class="clearfix moving_truck">
            <span class="build"></span>
            	<div class="col-sm-6 text-center">
                	<span class="truck1"></span>
                    <span class="truck2"></span>
                </div>
                
                
            </div>
    </section>
    <!--why us end-->
    
     <!-- How it work Section -->
    <section id="work">
        <div class="container">
            <h1 class="text-center text-blue">How it works</h1>
            <span class="line"></span>
            <div id="how_work" class="carousel slide" data-ride="carousel">
                   
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                    	<!-- slide 1 -->
                        <div class="item active">
                             <div class="row">
                                <div class="col-md-4 col-sm-5">
                                    <img class="img-responsive img-centered" src="images/how-it-works-2.png"  alt="slide"/>
                                </div>
                                <div class="col-md-8 col-sm-7">
                                     <h3 class="section-heading text-blue">Demand a quote</h3>
                                    <p class="large">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                                
                               
                            </div>
                        </div>
                        <!-- slide 2-->
                        <div class="item">
                             <div class="row">
                                <div class="col-md-4 col-sm-5">
                                    <img class="img-responsive img-centered" src="images/how-it-works-3.png"  alt="slide"/>
                                </div>
                                <div class="col-md-8 col-sm-7">
                                     <h3 class="section-heading text-blue">Demand a quote</h3>
                                    <p class="large">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                             </div>
                        </div>
                        <!-- slide 3 -->
                        <div class="item">
                             <div class="row">
                                <div class="col-md-4 col-sm-5">
                                    <img class="img-responsive img-centered" src="images/how-it-works-4.png"  alt="slide"/>
                                </div>
                                <div class="col-md-8 col-sm-7">
                                     <h3 class="section-heading text-blue">Demand a quote</h3>
                                    <p class="large">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                             </div>
                        </div>
                        <!-- slide 4 -->
                        <div class="item">
                             <div class="row">
                                <div class="col-md-4 col-sm-5">
                                    <img class="img-responsive img-centered" src="images/how-it-works-i.png"  alt="slide"/>
                                </div>
                                <div class="col-md-8 col-sm-7">
                                     <h3 class="section-heading text-blue">Demand a quote</h3>
                                    <p class="large">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                             </div>
                        </div>
                        
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control text-blue" href="#how_work" data-slide="prev"> 
                        <span class="fa fa-angle-left text-blue glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control text-blue" href="#how_work" data-slide="next">
                        <span class="fa fa-angle-right text-blue glyphicon glyphicon-chevron-right"></span>
                    </a>
            	</div>
                <!-- crousel end -->
                <!-- watch now -->
                <div class="clearfix">
                	<div class="col-md-8 col-md-offset-4 col-sm-7 col-sm-offset-5 col-xs-12 col-xs-offset-0">
                    	<a href="#" class="btn btn-blue btn-lg">Watch Now</a>
                    </div>
                </div>
           
        </div>
    </section>
    <!-- how it work end -->
     
	<!--CONTACT US-->
    <section id="contact">
        <div class="container">
            <div class="row text-white">
                <div class="col-lg-6">
                    <h2 class="section-heading">We're here to help.</h2>
                    <p class="large">7 days a week, 8AM - 7PM</p>
                    <span class="line"></span>
                </div>
            
                <div class="col-lg-6 col-md-12">
                    <p class="lead"><i class="fa fa-phone fa-2x"></i> 1234567890</p>
                    <p class="lead"><i class="fa fa-envelope fa-2x"></i>  support@loremipsum.com</p>
                </div>
            </div>
        </div>
    </section>
    <!--contact us end-->
    
    <!-- feed back start -->
    <div class="feedback-wrap">
    	<div class="feedback-header">
        	Feedback
        </div>
    	<div class="feedback-body">
        	<form role="form">
            	  <!--<div class="form-group">
                    <label for="name">Name:</label>
                    <input type="name" class="form-control" id="name">
                  </div>-->
                  <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email" name = "feedmail">
                  </div>
                  <!--<div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" class="form-control noalpha phone" id="phone">
                  </div>-->
                  <div class="form-group">
                    <label for="phone">Message:</label>
                    <textarea class="form-control" id="message" name = "msg"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary" name = "feed_submit">Submit</button>
            </form>
        </div>
    
    </div>
	
    <!-- feedback end -->
	 <?php include('footer.php');  ?>
	