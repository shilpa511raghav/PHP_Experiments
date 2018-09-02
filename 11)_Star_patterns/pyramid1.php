<?php
function pyramid($n)
{
	for ($i=1;$i<=$n;$i++)
	{
		// for loop for printing space
		for($j=$i;$j<$n;$j++)
		{
			echo "&nbsp";
		}
		//for loop for printing *
		for($j=1;$j<2*$i-1;$j++)
		{
			
			echo "*";
		}
		echo "<br/>";
	}
}
 $p= pyramid(5);
 echo $p;


?>