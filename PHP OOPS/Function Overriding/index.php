<?php
 
  /*
Function Over-riding is done at the compile time

major difference between functuion overloading anf overriding is that

In Function Overloading :- function are placed in the same Scope 

In Function OverRiding :- Function are placed in the different Scope

  */

class Test 
{
	public function show()
	{
		echo "Show is a function of a Test class"."\n";
	}
}
class Demo extends Test
{
	public function show()
	{
		parent::show();

		echo "Function inside the Demo class";
	}
}

$obj1 = new Demo();
$obj1 -> show();

?>