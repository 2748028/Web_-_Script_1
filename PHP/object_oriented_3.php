<!DOCTYPE html>
<html>
	<head>
	  <title> Practice makes perfect! </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <?php
        class Dog
        {
            public $numLegs = 4;
            public $name;
            
            public function bark()
            {
                return "Woof!";
            }
            
            public function greet()
            {
                return "Hello! my name is " . $this->name . " I am happy to meet you!";
            }
            
            public function __construct($name)
            {
                $this->name = $name;
            }
        }
        
        $dog1 = new dog("Barker");
        echo $dog1->bark();
        
        $dog2 = new dog("Amigo");
        echo $dog2->greet();
        
        ?>
      </p>
    </body>
</html>