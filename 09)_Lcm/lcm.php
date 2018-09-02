<?php
function Lcm($n1,$n2)
{
	$l= $n1 *$n2;
	for ($i=1;$i<=$l;$i++)
	{
		if($i%$n1 ==0 and $i%$n2 ==0)
		{
			return "lcm is:".$i."";
			break;
		}
		
	}
}
$k= Lcm(2,5);
echo $k;
			
	
?>