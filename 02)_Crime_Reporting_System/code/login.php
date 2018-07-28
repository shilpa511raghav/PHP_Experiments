<?php
session_start();
if (isset($_POST['login'])){
	$user= $_POST['username'];
	$Pwd= $_POST['password'];
	$UserType= $_POST['cmbUser'];
	$link= mysqli_connect("localhost", "root", "", "CRS");
	if ($UserType == "Admin"){
		$sql1= "select * from Admin_Tbl where Admin_Name='$user' and Admin_Password='".$Pwd."'";
		$result1= mysqli_query($link, $sql1);
		$row_admin= mysqli_fetch_row($result1);
		if ($row_admin==0){
			echo "<script type = 'text/javascript' ><alert('Wrong username or password');window.location=\'index.php\';><script>";
		}else{
			header ("location:Admin/index.php");	
		}
	mysqli_close($link);		
	}
	
	elseif($UserType=="Police"){
		$sql2="select * from policestation_tbl where UserName= '$user' and Password='$Pwd'";
		$result2= mysqli_query($link,$sql2);
		$row_police= mysqli_fetch_row($result2);
		if ($row_police==0){
			echo "<script type= 'text/javascript'><alert ('wrong username or password'); window.location=\'index.php';></script>";
		}else{
			$_SESSION['ID']=$row_police['Station_Id'];
			$_SESSION['Name']=$row_police['Station_Name'];
			header("location:PoliceStation\index.php");
		}
	mysqli_close($link);
	}
	else{
		$sql3="select * from User_Tbl where UserName='$user' and Password='$Pwd'";
		$result3= mysqli_query($link,$sql3);
		$row_user= mysqli_fetch_row($result3);
		if ($row_user ==0){
				echo "<script type= 'text/javascript'><alert ('wrong username or password'); window.location=\'index.php';></script>";
			}else{
				$_SESSION['ID']=$row_user['User_Id'];
				$_SESSION['Name']=$row_user['Name'];
				header("location:registered_users\index.php");
			}
		mysqli_close($link);
		}
	
}		
		
	
		
?>