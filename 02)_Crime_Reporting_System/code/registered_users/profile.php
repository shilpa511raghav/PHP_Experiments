<?php
if (!isset($_SESSION)){
	session_start();
}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Crime Management System</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>
</head>

</head>

<body>
<div>
<?php
include("header.php");
?>
	<div id = "templatemo_wrapper">
		<div class = "section_w800">
			<h2>Edit your profile<h2>
		</div>
		<?php
		$conn= mysqli_connect("localhost", "root", "", "crs");
		
		$sqli= "Select * from user_tbl where User_Id= '".$_SESSION['ID']."' .";
		$result= mysqli_query($conn,$sqli);
		while($row= mysqli_fetch_row($result)){
			$Id=$row['User_Id'];
			$Name=$row['Name'];
			$Address=$row['Address'];
			$City=$row['City'];
			$Email=$row['Email'];
			$Mobile=$row['Mobile'];
			$Gender=$row['Gender'];
			$Birthdate=$row['BirthDate'];
			$Station_Name=$row['Station_Name'];

			$UserName=$row['UserName'];
			$Password=$row['Password'];

		}
		?>
		<table>
			<tr>
				<td><strong>ID:</strong> </td>
				<td><strong><?php echo $Id;?></strong></td>
			
			</tr>
		
		</table>
	
	</div>


</div>

</body>
</html>