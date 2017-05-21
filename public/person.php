<?php

class Person 
{
	public $name;
	public $age;
	public $employed;

	function returnName()
	{
		return $this->name;
	}

	function getOlder($number)
	{
		return $this->number++;
	}

	function echoAge($someAge)
	{
		echo $this->age;
	}

	function quitJob($boolean) 
	{
		$this->employed = false;
	}

	function getJob($boolean) 
	{
		$this->employed = true;
	}

	function passAway($number) 
	{
		$this->age = 0;
	}

}


?>