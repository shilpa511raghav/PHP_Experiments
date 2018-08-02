
<?php
include('config.php');
session_start();
if (isset($_POST['login'])){
	$user_mail= $_POST['email'];
	$user_pass= $_POST['password'];
	
	if ($user_mail==""){
		echo "Please enter the email";	
		header("location:login.php");
		exit();
	}
	
	if($user_pass==""){
		echo "Please enter the password";
		header("location:login.php");
		exit();
	}
	
	//$sql= "SELECT * FROM `reguser` where EMAIL= '$user_mail' AND PASSWORD= '$user_pass'";
	$sql= "SELECT reguser.USERNAME , reguser.EMAIL,reguser.PASSWORD, addition.ID_fk ,addition.id, addition.num1,addition.num2,addition.sum FROM  reguser  Inner JOIN addition  ON reguser.ID= addition.ID_fk Where EMAIL= '$user_mail' AND PASSWORD= '$user_pass'"; 
	
	$result= mysqli_query($conn,$sql);
		while($row = mysqli_fetch_array($result)){
			
			$_SESSION['email']= $row['EMAIL'];
			$_SESSION['username']= $row['USERNAME'];
			$_SESSION['ID']=$row['id'];
			$_SESSION['number_one'] = $row['num1'];
			$_SESSION['number_two'] = $row['num2'];
			$_SESSION['sum']= $row['sum'];
			echo $row[4];
			echo"<script>window.open('welcome.php','_self')</script>";
			
			//$_SESSION['email']= $user_mail;
		}
		
	//else{
		//echo"<script>alert('Email or password is incorrect')</script>";
	//}
	
}
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel= "stylesheet" href= "style.css" type= "text/css">
</head>
<body>
<div class = "container">
		<div class= "row">
			<div class= "col-md-4 col-md-offset-4">
				<div class = "panel-info log_panel">
					<div class= "panel-heading title">
						<h3 class = "panel-title">Sign in</h3>
					</div>
					<div class= "panel-body">
						<form method= "post" action = "login.php">
							<fieldset>

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
								<input class="btn btn-lg btn-info btn-block" type="submit" value="login" name="login" >
								
							</fieldset>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
 