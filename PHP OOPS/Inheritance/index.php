<?php

// Inheritance understanding basic example

/*  

1->Inheritance is used when we inherit the functionality from the base to derived class and add some more features in te drived class.

2-> Inheritance provide the reusability of code here we don't need to write the same code again and again for the same features we can inherit the class from the base class.


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




class smartAc extends Ac
{

 public $wifi ="Wifi is Available!!";
 function __construct($model,$speed)
 {
 	parent::__construct($model,$speed);

 }

}
   

/* ----------------------------------------------- */
echo "This is Samrt Ac :"."\n";
$smart_one = new smartAc("VOLTAS",19);

echo "\n";

echo $smart_one -> wifi;

/* ----------------------------------------------- */

echo "\n";
echo "\n";

echo "This is Simple Ac :"."\n";
$Ac_one = new Ac("Abc",15);

/* --------------------------------------------- */


?>