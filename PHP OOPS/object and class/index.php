<?php

// class and obejcts understanding on the real world porblem


class Ac
{


public $model = "xyz";
public $speed = 16;
function speedup()
{
	$var = $this -> speed + 1;
	$this ->speed = $var;
	echo "After speedup : ".$var;
}
function speedDown()
{
	$var1 =$this-> speed -1;
	$this-> speed = $var1;
	echo "After speedDown : ".$var1;
}

}
// object creation
 $AC_one = new Ac;
 echo "Model Name : ".$AC_one -> model="VOLTAS";
 echo "\n";
 echo "current speed : ".$AC_one -> speed;
  echo "\n";
 $AC_one -> speedup();
 echo "\n";
 $AC_one -> speedup();
 echo "\n";
 $AC_one -> speedDown();



?>