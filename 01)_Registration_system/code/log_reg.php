<?php
$host= "localhost";
$user= "root";
$pass="";
$dbname= "testdb";

$conn= mysqli_connect($host,$user,$pass,$dbname);
if (isset($_POST['save'])){
	$nam= $_POST["name"];
	$uname= $_POST["username"];
	$mail= $_POST["email"];
	$pwd= $_POST["password"];
	if($nam=='')  
		{  
			echo"<script>alert('Please enter the name')</script>";  
	exit();//this use if first is not work then other will not show  
		} 
		
	if($uname=='')  
		{  
			echo"<script>alert('Please enter the username')</script>";  
	exit();	
		}
	if($pwd=='')  
		{  
			echo"<script>alert('Please enter the password')</script>";  
	exit();  
		}  
	  
	if($mail=='')  
		{  
			echo"<script>alert('Please enter the email')</script>";  
	exit(); 	
		}
	
	$check_email_query="select * from user_info WHERE email='$mail'"; 
    $run_query=mysqli_query($conn,$check_email_query);
	
	if(mysqli_num_rows($run_query)>0)  
    {  
	echo "<script>alert('Email $mail is already exist in our database, Please try another one!')</script>";  
	exit();  
		}  
	
$insert_user= "insert into user_info(name,username,email,password) VALUES ('$nam','$uname','$mail','$pwd')";	
$result= mysqli_query($conn  ,$insert_user);
if ($result==true){
	echo"user registered";
}
else{
	echo "registration failed";
}
}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<title>Registration form</title>
</head>


<body>
	<div class= "container cont">
		<div class= "row main">
			<div class= "panel-heading">
				<div class= "panel-title text-center">
				<h1 class ="title">COMPANY NAME</h1>
				<hr/>
				</div>
			</div>
			
			<div>
				<div class= "main-login main-center">
					<form class= "form-horizontal" action = "" method= "post">
						<div class= "form-group">
						<label class= "cols-sm-2 control-label">Name</label>
							<div class= "col-sm-10">     
								<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							
							</div>
						
						</div>
					
						<div class= "form-group">
						<label class= "cols-sm-2 control-label">Username</label>
							<div class= "col-sm-10">     
								<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your username"/>
								</div>
							
							</div>
						
						</div>
						<div class= "form-group">
						<label class= "cols-sm-2 control-label">Email</label>
							<div class= "col-sm-10">     
								<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
										<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your email"/>
								</div>
							
							</div>
						
						</div>
						<div class= "form-group">
						<label class= "cols-sm-2 control-label">Password</label>
							<div class= "col-sm-10">     
								<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock lg-fa" aria-hidden="true"></i></span>
										<input type="password" class="form-control" name="password" id="name"  placeholder="Enter password"/>
								</div>
							</div>
						</div>
						
						
					
						<div class="form-group ">
								<button type="submit" name= "save" class="btn btn-primary btn-lg btn-block login-button">Register</button>
						</div>
						<div class="login-register">
								<a href="index.php">Login</a>
						</div>
					
					
					</form>
				
				</div>
			
			</div>
		</div>
		

	</div>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>


</body>

</html>