<?php

require_once('Rectangle.php');

class Square extends Rectangle 
{
	public function __construct($height){
		parent::__construct($height,$height);
	}

	public function perimeter($height,$width){
		return $this->height + $this->width;
	}

	public function area(){
		return $this->height * $this->width;		
	}

}

// $square = new Square(8,4);
// echo $square->area() . PHP_EOL;