<?php

/* 

Function overloading provides the naming convention easier to remember the name of function  by using the same function name but with the differebt arguments.

Function Overloading is done At the Compile time.
*/

// Basic function which will return the number of arguments are used inside the function

class Demo
{

	// this is the constructor or can say it's a magic function
	public function __construct()
	{
		echo "Implements Function overloading";
	}
	// This is also a magic function which is already written in php <Call> function which wiil gives the count of number of arguments are used iside the function.

	public function __call($name,$arguments)
	{
		if($name =="overload")
		{
			$count = count($arguments);

			switch ($count) {
				case '1':
					# code...
					echo "one argument has been pased";
					break;
			
				case '2':
					# code...
					echo "Two argument has been pased";
					break;
				case '3':
					# code...
					echo "Three argument has been pased";
					break;
				default:
					# code...
					echo "you have enter the wrong input";
					break;
			}
		}
	}
}

$obj1 = new Demo();
echo "\n";
$obj1 -> overload("Ajay");
echo "\n";
$obj1 -> overload("Ajay",23);
echo "\n";
$obj1 -> overload("Ajay",23,"BCA");

?>