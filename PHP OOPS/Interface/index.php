<?php

// Interface provide the multiple iheritance and also it's the best used for the abstraction 
// Interface provide the 100% abstraction

// In interface have only empty methods and it's provide only the method declaration 

// Interface have the collection of abstract methods only 

// All the methods inside the interface are public they can't be private, protected and it's not used the variable declaration 

// interface don't have a constructor and it's not create the object  
 

interface Car
{
 
public function Getspeed();

public function GetModel();

public function GetCompany();

public function GetCity();

}

class Car_A implements Car
{
  private $speed;
  private $model;
  private $comapny;
  private $city;

 public function GetModel()
 {
 	echo "Model Name: ".$this->model;
 }

 public function Getspeed()
 {
 	 echo "Top speed: ".$this->speed;
 }

public function GetCompany()
{
	echo "Company Name: ".$this->comapny;
}

public function GetCity()
{
	echo "City Name: ".$this->city;
}

private function Setcity($city)
{
	$this->city = $city;
}

private function SetModel($Model)
{
	$this->model = $model;
}

private function Setspeed($speed)
{
	$this->speed =$speed;
}

private function SetCompany($comapny)
{
	$this->comapny =$comapny;
}

public function __construct($model,$speed,$city,$comapny)
{
	$this->model = $model;
	$this ->speed = $speed;
	$this ->city = $city;
	$this ->comapny = $comapny;
}
}


class CAR_B extends Car_A
{
	function __construct($model,$speed,$city,$comapny)
	{
		parent:: __construct($model,$speed,$city,$comapny);
	}
}

$one = new CAR_B("A-1",350,"LONDON","BMW");
echo "THROUGH THE CLASS B"."\n";
echo "\n";
$one ->GetCompany();

echo "\n";

$one ->GetModel();

echo "\n";

$one ->Getspeed();

echo "\n";

$one ->GetCity();
echo "\n";
echo "\n";


$one1 = new Car_A("A-2",300,"NEW DELHI","TATA");

echo "THROUGH THE CLASS A"."\n";
echo "\n";
$one1 ->GetCompany();

echo "\n";

$one1 ->GetModel();

echo "\n";

$one1 ->Getspeed();

echo "\n";

$one1 ->GetCity();

?>