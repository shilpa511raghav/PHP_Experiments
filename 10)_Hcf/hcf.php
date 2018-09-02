<?php 
function Hcf($n1,$n2)
{
	$h= min($n1,$n2);
	for ($i=$h;$i>=0;$i--)
	{
		if($n1%$i==0 and $n2%$i==0)
		{
			return "hcf is : ".$i."";
			break;
		}
	}
}
$hcf= Hcf(78,99);
echo $hcf;
			