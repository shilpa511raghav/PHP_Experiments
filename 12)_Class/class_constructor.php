<?php
class Ac{
	public $model = "abc";
	public $speed= 15;
	
	function __construct()
	{
		echo "new model of ac contains wifi";
		echo "&nbsp&nbsp&nbsp&nbsp";
	}
	
	public function speedUp()
	{
		return $this -> speed+4;
	}
	public function speedDown()
	{
		return $this ->speed-1;
	}
}

$ac_one= new Ac;  
echo $ac_one ->model = "xyz";
$s1=$ac_one->speedUp();
echo $s1;

	
	

	



?>