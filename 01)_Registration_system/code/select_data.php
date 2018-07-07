<?php
$host= "localhost";
$user= "root";
$pass= "";
$dbname= "testdb";

$conn= mysqli_connect($host,$user,$pass,$dbname);
if(!$conn){
	die("connection is not established:".mysql_error());
}else{
	echo"connection established";
}
$sql= "SELECT * FROM user_info ORDER BY PASSWORD"; // ordering will be from email means alphabetically according to email it will print, not from id or anything
$result= mysqli_query($conn,$sql); //perform queries against database
if (mysqli_num_rows($result)>0){
	echo"<table>";
		echo"<tr>";
			echo"<th>id</th>";
			echo"<th>name</th>";
			echo"<th>username</th>";
			echo"<th>email</th>";
			echo"<th>password</th>";
		echo"</tr>";

		while($row = mysqli_fetch_array($result,MYSQL_BOTH)){  //by default mysqli_fetch_array set 2nd argument as MYSQLI_BOTH so is not writtem here, although we have used table data as index (4) inside while loop
			echo "<tr>";
				echo"<td>{$row['id']}<td>";
				echo"<td>".$row['name']."<td>";
				echo"<td>".$row['username']."<td>";
				echo"<td>".$row['email']."<td>";
				echo"<td>".$row['4']."<td>";
			echo"</tr>";
			
			/*echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["username"]."-email ".$row['email']. "-password ".$row[4]. "<br>";*/
		}
	echo"</table>";
	mysqli_free_result($result); //this function fetches row from result set and then free the memory associated with result
		
}
else{
	echo "No records matching your query were found";

}
mysql_close($conn); // closes a previously opened database connection

?>