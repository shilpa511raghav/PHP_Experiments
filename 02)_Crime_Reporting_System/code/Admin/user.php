<?php

$conn= mysqli_connect('localhost', 'root', '','CRS');
$query="select * from Admin_Tbl ";
$result= mysqli_query($conn,$query);
while($row= mysqli_fetch_array($result)){
	$Id=$row['Admin_Id'];
	$UserName=$row['Admin_Name'];
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Crime Management System</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_wrapper">
   <?php
   include "header.php";
   ?>
   <div class = "templatemo_content" style = "background-color:yellow;">
		<div class = "section_w800">
			<h2>User Management</h2>
			<ul class = "TabbedPannelsTabsGroup">
				<li class = "TabbedPannelsTab style1" tabindex= "0">Create User</li>
				<li class= "TabbedPannelsTab  style1"tabindex= "0">Display User</li>
			</ul>
			<div class = "TabbedPannelContentsGroup">
				<div class = "TabbedPannelsContent">
					<form method = "post" action = "insertuser.php">
					<table>
						<tr>
							<td><span class="style5">User Name:</span></td>
							<td>
							<label>
								<input type="text" name="txtUserName" id="txtUserName" />
							</label>
							<span class="textfieldRequiredMsg">A value is required.</span></td>
						</tr>
						<tr>
							<td><span class="style5">Password:</span></td>
							<td>
							<label>
								<input type="text" name="txtPassword" id="txtUserName" />
							</label>
							<span class="textfieldRequiredMsg">A value is required.</span></td>
						</tr>
						
						<tr>
							<td>&nbsp </td>
							<td>
							<label>
								<input type="submit" name="button" id="button" value="Submit" />
							</label></td>
						</tr>
					</table>
					</form>
				</div>
				<div class="TabbedPanelsContent">
					<table height= "100%" border= "1" bordercolor="#2AA2C7">
						<tr>
							<th height="32" bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Id</strong></div></th>
							<th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>UserName</strong></div></th>
							<th bgcolor="#E3B71A" class="style6"><div align="left" class="style9 style2 style4"><strong>Edit</strong></div></th>
							<th bgcolor="#E3B71A" class="style6"><div align="left" class="style12 style2 style4">Delete</div></th>
						</tr>
						
						
						<tr>
							<td class="style6"><div align="left" class="style9 style5 style4"><strong><?php echo $Id;?></strong></div></td>
							<td class="style6"><div align="left" class="style9 style5 style4"><strong><?php echo $UserName;?></strong></div></td>
							<td class="style6"><div align="left" class="style9 style5 style4"><strong><a href="editUser.php?UserId=<?php echo $Id;?>">Edit</a></strong></div></td>
							<td class="style6"><div align="left" class="style9 style5 style4"><strong><a href="deleteUser.php?UserId=<?php echo $Id;?>">Delete</a></strong></div></td>
					   </tr>
					
					</table>
				
				
				</div>
			
			
			</div>
			
		</div>
   
   
   
   </div>
</div>