<html>
  <head>
    <title>Override!</title>
  </head>
  <body>
    <p>
      <?php
        class Vehicle 
        {
          final public function honk() 
          {
            return "HONK HONK!";
          }
        }
        // Add your code below!
        
        class Bicycle extends Vehicle {
        public function honk(){
            return "Beep beep!";
        }   
      }
      $bicycle = new Bicycle();
      print $bicycle -> honk();
        
      ?>
    </p>
  </body>
  $BicycleClass = new Bicycle();
        $BicycleClass->honk();
</html>