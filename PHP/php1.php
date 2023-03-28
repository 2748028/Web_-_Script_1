<!DOCTYPE html>

<html>

<body>

	<?php//PHP
	
	$x = 5;
	$y = 10;
	$z = 15;
	
	$w = $x + $y;
	
	echo $w;
	
	//Scopes
	
	$var1 = 5; //Global scope
	
	function myFunc()
	{
		$y = 20; //Local scope
		
		global $x, $y;
		
		echo "<p> Var inside a function</p>";
		echo "x: $x <br>";
	}
	
	myFunc();
	
	echo "Outside function";
	echo "x: $x";
	
	echo $GLOBALS['x']; 
	
	//Static
	
	function test()
	{
		static $xx=0;
		echo $xx."<br>";
		$xx++;
	}
	
	test();
	test();
	test();
	
	//Strings
	
	$str = "Hello";
	$str1 = $str." World";
	echo $str1;
	
	var_dump($x);
	var_dump($str);
	
	//Bools
	
	$bol = true;
	
	//Arrays
	
	$cars=array("BMW", "VW", "AUDI");
	var_dump ($cars);
	echo $cars[1];
	
	//Objects
	
	class Car
	{
		var $color;
		function Car($color="black")
		{
				$this->color = $color;
		}
			
		function getColor()
		{
				return $this->color;
		}
	}
	
	$myCar = new Car("red");
	echo "<br>My car is: ".$myCar->getColor();
	
	$f = "Richard";
	$l = "Cheese";
	$fn = $f.$l;
	
	$f .= $l;
	echo "<br> My name is $f";
	
	//Constants
	
	define("IP", "192.168.1.1");
	echo "<br>".IP;
	
	//Comparisons
	
	$x = 10;
	$str = "10";
	
	var_dump($x == $str);
	var_dump($x === $str); // != !==
	
	//Conditionals
	
	$mycar = "VW";
	
	if ($mycar == "AUDI")
	{
		echo " ";
	}
	elseif()
	
	function Name($name, $year)
	{
		echo "$name was born in $year";
	}
	
	Name("John", "2000");
	
	//Associative arrays
	
	$age=array("John" => "35", "Peter"=>"40");
	echo "<br> Peter is".$age['Peter'];
	
	
	?>

</body>

</html>