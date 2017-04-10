<?php

class Applicant 

{

public $name;
public $age;
public $employed;


public function returnName($someName)
{
	return $this->name;
}

public function getOlder($number)
{
	$this->number++;
}

public function echoAge($someAge)
{
	echo $this->age;
}

public function quitJob($boolean) 
{
	$this->employed === false;
}

public function getJob($boolean) 
{
	$this->employed === true;
}

public function passAway($number) 
{
	$this->age === 0;
}



// Procedural code

$name = 'Bob';
$age = "43";

echo returnName($name);

echoAge($age);

$employed = getJob($employed);
var_dump($employed);

$age = getOlder($age);

echoAge($age);

$age = passAway($age);

echoAge($age);

}
?>