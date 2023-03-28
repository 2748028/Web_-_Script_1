<!DOCTYPE html>
<html>
	<head>
	  <title>Reconstructing the Person Class</title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
      <p>
        <?php
        class Person
        {
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age;
            
            public function greet()
            {
                return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you!";
            }
            
            public function __construct($firstname, $lastname, $age)
            {
                $this->$firstname = $firstname;
                $this->$lastname = $lastname;
                $this->$age = $age;
            }
        }
        
        $teacher = new Person("boring", "12345", 12345);
        $teacher->greet();
        
        $student = new Person("Dean", "Orchard", 20);
        echo $student->isAlive;
        echo $student->age;
        $student->greet();
        ?>
      </p>
    </body>
</html>