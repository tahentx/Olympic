<?php

class Pet
{
	public $species;
	public $weight;
	public $color;
	public $name;

	function eat()
	{
		$food = 'carrot';
		if ($this->weight < 10) {
			echo "I need a $food";
		}
		return $this->eat();
	}

	function move()
	{
		$energy = range(0, 100);
		if ($energy =< 20){
			echo "I'm tired";
		}	else {
			
		}
	}

	function sleep()
	{
		echo $this->age;
	}

}


?>