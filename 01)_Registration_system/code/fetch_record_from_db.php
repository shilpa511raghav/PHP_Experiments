<?php
$host= "localhost";
$user= "root";
$pass= "";
$dbname="testdb";
$conn= mysqli_connect($host,$user,$pass,$dbname);

if(!$conn)
{
	echo "not conneccted to database";
}else{
	echo "connected succesfully";
}
$query= "Select * FROM user_info ORDER by email ";
$result= mysqli_query($conn,$query);

if (mysqli_num_rows($result)>0){
	echo "<table>";
		echo "<tr>";
			echo "<th>id</th>";
			echo "<th>name</th>";
			echo "<th>username</th>";
			echo "<th>email</th>";
			echo "<th>password</th>";
		echo "</tr>";
		while($row=mysqli_fetch_array($result, MYSQLI_BOTH)){
			echo "<tr>";
				echo"<td>{$row['ID']}</td>";       // here index are case sensitive so write properly as per database you are using.
				echo"<td>".$row['name']. "</td>";
				echo"<td>".'        '."</td>";
				echo"<td>".$row['email']."<td>";
				echo"<td>".$row['password']."</td>";
			echo "</tr>";
		
		}
		mysqli_free_result($result);
}else{
	echo "no record matching your query was found";
}
		
		
		
	
	
	
	
	
	
	
	
	echo"</table>"
	

?>