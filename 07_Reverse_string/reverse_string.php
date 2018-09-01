<?php
function revstring($st){
	echo"input string: $st"; 
	$s= strlen($st);
	for ($i=$s;$i>=0;$i--)
	{
		echo $st[$i];
	}
	
}

echo revstring("WELCOME");


?>