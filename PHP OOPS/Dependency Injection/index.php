<?php

// In dependency Injection -> We create the object of base class and put it into the another class that is derived class, inside any function

// we can also used this with one object to another object by using one object of base class and put that object inside the anoter class of object that derived class 

// by using Depndency Injetction we can achieve the some properties  of the inheritance concept without using the exteds keyword

// Dependency Injection is same as the <MVC> MVC -> Model View Controller

/*  
MVC :-

Model :- It's relate to data

View :- Presentation of data

Controller :- intermediater between Model & View

*/


class logger
{
	public function log($message)
	{
		echo "logging Message : ". $message;
	}
} 

class UserInfo
{


public function createUser()
{
	$logger1 = new logger();
	$logger1 -> log("User Created");
}

public function UserUpdated()
{
	$logger1 = new logger();
	$logger1 -> log("User UserUpdated");
}

}

echo "Dependency Injection";
echo "\n";
$vk =new userInfo();
$vk -> createUser();

echo "\n";

$vk -> UserUpdated();

?>