<?phpinclude('connection.php');
session_start();

if isset($_POST[])


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
                        <a class="btn btn-default btn-login" href="javascript:void(0);">Login</a>
                        <div class="panel login-wrap">
                        <button class="close close-login" type="button"><span aria-hidden="true">×</span></button>
                        	<div class="panel-body">
                            
                            	<form>
                                  <div class="form-group">
                                    <label for="email">Email address:</label>
                                   <input type="email" id="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email">
                                  </div>
                                  <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="pwd" name = "pwd">
                                  </div>
                                  <div class="checkbox">
                                     <button type="submit" class="btn btn-danger" name = "login">Submit</button> 			  
								  </div>
								</form>
                            </div>
                        </div>
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
	
	<?php include ('footer.php');?>