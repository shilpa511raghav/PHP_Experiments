<?php
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
<h1>Welcome </h1><br>
<p><?php  echo $_SESSION['username']?><p>
<p><?php echo $_SESSION['email'];?><p>
  
  
  
<h1><a href="logout.php">Logout here</a> </h1>  
  
  
</body>  
  
</html>