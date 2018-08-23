<?php include ('connection.php'); ?>
 
<?php
session_start();

if(isset($_POST['login'])){
	$usermail= $_POST['email'];
	$userpass= $_POST['pwd'];
	
	if ($usermail==""){
		echo "<script>alert('Enter email address');window.location.href='login.php';</script>";
		exit();
	}
	if($userpass== ""){
		echo "<script>alert('Enter password');window.location.href='login.php';</script>";
		exit();
	}
	$query= "SELECT * FROM `register-company` where 
		Email_address= '$usermail' ";
	$result= mysqli_query($conn, $query);
	$row= mysqli_fetch_array( $result,MYSQLI_BOTH);
	$num= mysqli_num_rows($result);
	if ($num==1){
		$_SESSION['ID']=$row['id'];
		$_SESSION['Trans_name']= $row['Transport_Name'];
		$_SESSION['director']= $row['Director_Name'];
		$fullname = explode(".", $_SESSION['director']);
		$_SESSION['firstname'] =$fullname[0];
		$_SESSION['lastname'] =$fullname[1];
		$_SESSION['mobile']=$row['Mobile_No'];
		$_SESSION['landline']=$row['Landline_No'];
		$_SESSION['email']= $row['Email_address'];
		$_SESSION['estd_year']=$row['Establishment_Year'];
		$_SESSION['registered_addr']=$row['Registered_Address'];
		$_SESSION['pin']=$row['Pin_Code'];
		$_SESSION['username']=$row['Authorized_person'];
		$_SESSION['auth_number']=$row['authorized_number'];
		$_SESSION['tax']=$row['Tax'];
		$_SESSION['PAN']=$row['PAN_No'];
		$_SESSION['web']=$row['Website'];
		$_SESSION['company_reg_no']=$row['Company_Registration_Number'];
		$_SESSION['Documents']= $row['upload_file'];
		$_SESSION['profile_img']=$row['profile_pic'];
		
				
		 	

}
	
}

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
                        <a class="btn btn-default" href="register-company.php">Register</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="javascript:void(0);" data-toggle="dropdown" role="button" aria-haspopup="true"><i class="fa fa-navicon fa-2x"></i></a>
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
	<header>
        <div class="slider">
           <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2000">
             
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="images/login-popup_03.png"  alt="slide">
                 </div>
                
                 <div class="item">
                  <img src="images/login-popup_03.png"  alt="slide">
                 </div>
                 <div class="item">
                  <img src="images/login-popup_03.png"  alt="slide">
                 </div>
                
              </div>
            
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
           </div>
        </div>
    </header>  
         
		<div class="container">
                            
			<form method = "post" action = "profile-page.php" >
			  <div class="form-group">
				<label for="email">Email address:</label>
			   <input type="email" id="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email">
			  </div>
			  <div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd" name = "pwd">
			  </div>
			  <div class="checkbox">
			  <?php echo $_SESSION['username'];?>
				 <button type="submit" class="btn btn-danger" name = "login">Submit</button>
				
				</div>
				
				
			
				
				
				
			</form>
		</div>
		
   
	
	<?php include('footer.php');?>

