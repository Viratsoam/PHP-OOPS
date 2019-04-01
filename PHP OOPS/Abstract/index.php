<?php

// Abstract class is used, when we want to share the common methods to the multiple classes or can say we can used the abstract class to share the common prpperty to all and it has empty and non-empty method

// non-empty methods are which have definition and declaration both whereas empty methods are which have only declaration.

// Abstract class is used for the abstraction and it's provide the 80-90% abstraction 

// In abstract method we can have the constructor but we can't create the object of the abstract class 

// when we are used the abstract class the when we declare the abstract method inside this class, that abstract method we have to use in all another derived classes it's must.



abstract class Ac 
{

 public $model;
 public $speed;
 
 public function GetModel()
 {
	return $this->model;
 }


 public function GetSpeed()
 {
 	return $this->speed;
 }
 abstract function showAll();

function __construct($a,$b)
{
	$this->model = $a;
	$this ->speed = $b;
}
}

class Demo extends Ac
{
	
	function __construct($a,$b)
	{
	   parent::__construct($a,$b);
	}

public function showALL()
	{
		echo $this->model;
		echo "\n";
		echo $this->speed;
	}
}

$one = new Demo("Daikin",18);

$one->showALL();
echo "\n";
echo $one->GetModel();

?>