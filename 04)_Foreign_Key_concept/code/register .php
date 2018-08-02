


<?php
include('config.php');
if (isset($_POST['register'])){
	  
	$user_name= $_POST['uname'];
	$user_pass= $_POST['password'];
	$user_mail= $_POST['email'];
	
	if ($user_name==""){
		header("location:register.php");
		exit();		
		
	}
	if($user_pass==""){
		header("location:register.php");
		exit();
	}
	if($user_mail==""){
		header("location:register.php");
		exit();
	}
	$check_email_query= "SELECT * FROM `reguser` WHERE EMAIL='$user_mail'";
	$run_query= mysqli_query($conn,$check_email_query);
	if (mysqli_num_rows($run_query)>0){
		echo "Email $user_mail is already exist in our database, Please try another one!!";
		header("location:register.php");
		exit();
	}
	$insert_user= "INSERT INTO `reguser`( `USERNAME`, `EMAIL`, `PASSWORD`) VALUES ('$user_name' ,'$user_mail','$user_pass')";
	$result=mysqli_query($conn, $insert_user);
	if($result){
		echo"user registered";
	}else{
		echo"not registered";
	}
		
}
	
?>


<html>
<head lang= "en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel = "stylesheet" type= "text/css" href = "style.css">
<title> REGISTRATION</title>
</head>
<style>

</style>
<body>
	<div class = "container>
		<div class= "row">
			<div class= "col-md-4 col-md-offset-4">
				<div class = "panel-info log_panel">
					<div class= "panel-heading">
						<h3 class = "panel-title">Registration</h3>
					</div>
					<div class= "panel-body">
						<form method= "post" action = "register.php">
							<fieldset>
								<div class= "form-group">
									<label>Username</label>
									
									<input class= "form-control" placeholder= "Enter the username" name= "uname" type= "text" autofocus>
									
								</div>
								
								<div class= "form-group">
									<label>Email</label>
									
									<input class= "form-control" placeholder= "Enter the email" name= "email" type= "email">
									
								</div>
								<div class= "form-group" >
									<div class="cols-sm-10">
										<label>Password</label>
										
										<input class= "form-control" placeholder= "Enter the password" name= "password" type= "password">
									</div>
								</div>
								<div>
									<input class= "btn btn-lg btn-info btn-block" type= "submit" value ="Register" name= "register">	
								</div>
							</fieldset>
						</form>
						<center> <b> Already Registered ? </b> </br> <a href = "login.php"> Login Here </a></center>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>