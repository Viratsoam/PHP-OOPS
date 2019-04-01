<?php

// Encapsulation is used for the binding the data into single unit and best example for Encapsulation <CLASS> here we have used the getter and setter 




 class Ac
 {

 	private $model;
 	public $speed;

 public	function speedUp()
 	{
 		$var = $this ->speed +1;
 		$this ->speed = $var;
 		return $var;
 	}

 public function speedDown()
 	{
 		$var1 = $this ->speed -1;
 		$this ->speed = $var1;
 		return $var1;
 	}

 public	function __construct($model,$speed)
 	{

 	 echo $this ->model = $model;
 	 echo "\n";
 	 echo $this ->speed = $speed;
 	}
 public function getModel()
   {
   	echo "\n";
	return $this->model;
   }


 }


class smartAc extends Ac
{

	public $wifi ="Wifi Feature Available!!";

	function __construct($model,$speed)
	{
		parent:: __construct($model,$speed);

	}

}
 
$one = new smartAc("VOLTAS",12);
  
echo $one->getModel();


?>