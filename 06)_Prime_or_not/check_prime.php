<?php 
function IsPrime($n){
	for($i=2;$i<=$n-1;$i++)
	{
		if($n%$i==0)
		{
			break;
		}
	}
	if($i==$n)
	{
		echo "prime number";
	}
	else{
		echo "not a prime number";
	}
	
}
$p= IsPrime(4);
echo $p;
