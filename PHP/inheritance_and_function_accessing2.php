<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
      class Person
      {
       static public function say()
       {
        print "Here are my thoughts!";   
       }
      }
      class Blogger extends Person
      {
      
        const cats = 50;    
      
      }
      Person::say();
      print blogger::cats;
      ?>
    </p>
  </body>
</html>