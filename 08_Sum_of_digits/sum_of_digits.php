<?php 
function Sum($n)
{
	$sum=0;
	while($n!=0)
	{
		$digi=$n%10;
		$sum=$sum+ $digi;
		$n= $n/10;
		
	}
	echo $sum;
	
	
		 
	
}

echo Sum(123);

?>