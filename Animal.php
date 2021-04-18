<?php

class Animal
{
	public $name;
	public $noOfLeg;


	public function walk()
	{
		echo "Walking with ". $this->noOfLeg ." leg";
	}
}

$human = new Animal;
$human->name = "Human";
$human->noOfLeg = 2;
$human->walk();


$unknown = new StdClass();
var_dump($unknown);
