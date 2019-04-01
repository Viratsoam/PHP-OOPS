<?php

// Here we will use the same Dependency Injection  but we will not create the onject inside the functuion of the derived class 

// Here we will use the this keyword and will perform the Dependency Injection, here we are using the this keyword but somehow it's treated as the object.


class logger 
{
	public function log($message)
	{
		echo "Logging message : ".$message;
	}
}

class userInfo
{
	private $logger;
	public function createUser()
	{
		$this -> logger -> log("User created");
	}
	public function UserUpdated()
	{
		$this -> logger -> log("User UserUpdated");
	}


	public function __construct(logger $logger)
	{
		$this ->logger =$logger;
	}

}

$logger1 = new logger();


	$vk = new userInfo($logger1);

	$vk -> createUser();

	echo "\n";

	$vk -> UserUpdated();

?>