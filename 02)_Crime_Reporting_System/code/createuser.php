<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>
<body>
<?php
include("connection.php");
if (!$conn){
	echo "Not conneted to database";
}
if (isset($_POST['button'])){
	
		$Name= $_POST['txtName'];
		$Address= $_POST['txtAdd'];
		$City= $_POST['cmbCity'];
		$Mobile= $_POST['txtMobile'];
		$Email= $_POST['txtEmail'];
		$Gender= $_POST['cmbGender'];
		$BirthDate= $_POST['txtDate'];
		$Username= $_POST['txtUserName'];
		$Password= $_POST['txtPassword'];
		$Station= $_POST['cmbStation'];
		$filePath= $_FILES['txtFile']['name'];
		move_uploaded_file($_FILES["txtFile"]["tmp_name"],"Documents/"  .$_FILES["txtFile"]["name"]);
		$conn= mysqli_connect("localhost", "root", "", "crs");
		
		$que = "INSERT INTO `user_tbl`(`Name`, `Address`, `City`, 
		`Mobile`, `Email`, `Gender`, `BirthDate`, `UserName`, `Password`, `Station_Name`,
		`VerificationProof`) values('$Name','$Address','$City','$Mobile',
		'$Email','$Gender','$BirthDate','$Username','$Password',
		'$Station','$filePath')";
		
		
		mysqli_query($conn, $que);
		echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';
}
		mysqli_close ($conn);
		
	
		

?>
</body>
</html>
