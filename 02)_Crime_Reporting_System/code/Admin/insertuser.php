
<?php
if (isset($_POST['button'])){
	$username= $_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$conn= mysqli_connect("localhost","root","","CRS");
	mysqli_select_db($conn,"CRS");
	$qry= "insert into Admin_Tbl(Admin_Name,Admin_Password) values('$username','$Password')";
	$result_row= mysqli_query($conn,$qry);
	
}
mysqli_close ($conn);








?>