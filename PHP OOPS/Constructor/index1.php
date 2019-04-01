<?php

// use of constructors and type of constructor

/*  

constructor is used for the memory allocation or can say when object is created than construtor provide the run time memory of an object


*/



class  Ac
{
	public $model;
	public $speed;

	function speedup()
	{
		$var = $this->speed + 1;
		$this->speed = $var;
		echo "The speed after speedup function".$var;
	}
	function speedDown()
	{
		$var1 = $this->speed - 1;
		$this ->speed = $var1;
		echo "Speed after the calling of speedDwon function".$var1;
	}
	function __construct($model,$speed)
	{
	echo "Inside the constructor Model Name:".$this->model = $model;
	echo "\n";
	echo "Inside the constructor speed :".$this ->speed = $speed;
	}
}

$AC_one = new Ac("VOLTAS",17);


?>