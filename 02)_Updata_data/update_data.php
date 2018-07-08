<?php
$host= "localhost";
$user= "root";
$pass= "";
$dbname= "registration";

$conn= mysqli_connect($host,$user,$pass,$dbname);
if(!$conn){
	die("connection is not established:".mysqli_error());
}else{
	echo"connection established";
}
if (isset($_POST['update'])){
	$id=$_POST['id'];
	$name= $_POST['name'];
	$user= $_POST['username'];
	$mail= $_POST['email'];
	$pwd= $_POST['password'];
	$update= "UPDATE `student` SET `username`='".$user."',`email`='".$mail."',`password`='".$pwd."' , `id`='".$id."' WHERE  `name`='".$name."'";
	
$result= mysqli_query($conn,$update);
if ($result){
	echo " data updated successfully";
}else{
	echo "database is not updated";
}
mysqli_close($conn);
}
?> 


<html>
<head>
<title>Update data in database</title>
</head>

<body>
	
	<form action= "update_data.php" method= "post" style= "color:black,font-weight:10px">
			Id to Update:<input type ="text" name ="id"><br><br>
			New name:<input type = "text" name = "name"><br><br>
			New username: <input type = "text" name = "username"><br><br>
			New email: <input type = "text" name = "email"><br><br>
			New password: <input type = "password" name = "password"><br><br>
			<input type = "submit" name= "update" value= "Update data">
	</form>
	
</body>


</html>