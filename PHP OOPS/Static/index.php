<?php

// We can't call the non-static function iside the static function 

// Static variable share their property with all the function inside the same package 

// we can create the static inner class but we can't use the outer class as static class
// static variable and function is used when we want to share the same property with all the member of function in the class

// we can use the static and non-static variable iside the static function 

// we used the <self> keyword with the scope resulation varible <::> self work same as the <this> keyword

class IRCTC
{

	public static $count = 0;

	static function getCount()
	{
		return self::$count;
	}
	function __construct()
	{
		self::$count++;
	}
}

class xyz extends IRCTC
{
	static function getCount()
	{
		// here we are calling the function from the parent class
		echo parent::getCount();
		echo "\n";
		echo "hello";
	}
}

$obj1 =new IRCTC();
$obj2 =new IRCTC();
$obj3 =new IRCTC();
$obj4 =new IRCTC();
$obj5 =new IRCTC();

//echo IRCTC::getCount(); // -> Here access using the scope resulation variable

//echo $obj3->getCount(); // -> Here we used the object for access the static function

$obj = new xyz();

echo $obj->getCount(); // -> access through the object from another extended class


?>