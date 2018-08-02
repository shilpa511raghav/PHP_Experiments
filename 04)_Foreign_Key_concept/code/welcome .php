<?php
include('config.php');
session_start();

if(!$_SESSION['email'])
{
	header("location:login.php");
	exit();
}
?>

<html>  
<head>  
  
    <title>  
        Registration  
    </title>  
</head>  
<body>  
<h1>Welcome <?php echo ("{$_SESSION['username']}"."<br />")?> </h1>
<h1>Your email is: <?php echo ("{$_SESSION['email']}"."<br />")?> </h1>
<?php
include('config.php');
if (isset($_POST['update'])){
	$one=$_POST['n1'];
	$two= $_POST['n2'];
	$addition= $one+$two;
	echo"updated num1: $one";
	echo "<br>";
	echo"updated num2: $two";
	echo "<br>";
	echo " new sum : $addition";
	echo "<br>";
	
	$id= $_SESSION['ID'];
	echo "<br> id_fk is :";
	echo $id;
	$sq= "SELECT * from addition where id = '$id'";
	
	$result = mysqli_query($conn,$sq);
	while ($row1 = mysqli_fetch_array($result) ){
		$_SESSION['one']=$row1['num1'];
		$_SESSION['two']=$row1['num2'];
		$_SESSION['s']=$row1['sum'];
	}
	$up="Update addition set num1= $one , num2= $two, sum=$addition Where id= '$id'" ;
	if (mysqli_query($conn,$up)){
		echo "<br>";
		echo "updated";
		echo "<br>";
	}else{
		echo"database not updated";
	}
		
}	

?>

<form method= "post" action="">
	
	Num1: <input type="text" name="n1" value = "<?php echo $_SESSION['number_one'];?>" ><br/>
	Num2: <input type="text" name="n2" value = "<?php echo $_SESSION['number_two'];?>" ><br/>
	sum: <input type = "text" value = "<?php echo $_SESSION['sum'];?>">
	
	
	
	<input type = "submit" value = "update" name = "update">
	<?php
	
	echo "<br>";
	echo "<br>";
	echo"fetched data from addition table";
	echo "<br>";
	echo "<br>";
	
	echo ("number_one: {$_SESSION['number_one']}"."<br />");
	echo "<br>";

	echo ("number_two: {$_SESSION['number_two']}"."<br />");
	echo "<br>";
	echo ("sum: {$_SESSION['sum']}"."<br />");
	
	?>	
	<?php 
	mysqli_close($conn);
	?>
	

</form>
 
  
<h1><a href="logout.php">Logout here</a> </h1>  
  
  
</body>  
  
</html>