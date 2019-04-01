<?php

// POLYMORPHISM :- It's basic meaning is one thing many form.
/*

1.) In polymorphism we used the one function at the different-2 places in our program.

2.) The polymorphism have two types,
	1.> Compile Time :- Function Overloading :- Same name more than one function and different number of argumnets.

	2.> Run Time :- Function overriding :- Same name and same return type and same number of arguments are passed.

 */

 interface shape
 {
 	public function calArea();
 }

 class Rectangle implements shape
 {
 	public $length;
 	public $breadth;

 	function __construct($length,$breadth)
 	{
 		$this->length = $length;
 		$this->breadth = $breadth;
 	}

 	public function calArea()
 	{
 		echo "Area of Rectangle : ".($this->length * $this->breadth);
 	}
 }

class Circle implements shape
{
	public $r;

	public function __construct($r)
	{
		$this->r = $r;
	}

	public function calArea()
	{
		echo "Area of Circle : ".(3.14 * $this->r * $this->r);
	}
}
$obj1 = new Circle(5);
 $obj1 ->calArea();

echo "\n";

$obj2 = new Rectangle(4,5);

$obj2 ->calArea();


?>