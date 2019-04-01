<?php


// In late static binding we work at the run-time

// late binding best used in polymorphism 


// This is the basic example on late static binding using the DBDemo

class DBDemo
{

	protected static $table ="BaseDemotable";

	public static function select()
	{
		echo " SELECT * FROM ".static::$table;
	}
	public static function insert()
	{
		echo "Insert into ".static::$table;
	}
}

class student extends DBDemo
{
	protected static $table ="student";
}

$obj1 = new student();
$obj1 -> select();
echo "\n";
$obj1 -> insert();

?>