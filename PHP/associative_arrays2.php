<html>
  <head>
    <title>Accessing Associative Arrays</title>
  </head>
  <body>
    <p>
      <?php
        // This is an array using integers as the indices...
        $myArray = array(2012, 'blue', 5, 'BMW');

        // ...and this is an associative array:
        $myAssocArray = array('year' => 2012,
                        'colour' => 'blue',
                        'doors' => 5,
                        'make' => 'BMW');
            
        // This code will output "blue".
        echo $myArray[1];
        echo '<br />';
            
        // Add your code here!
        echo 'I have a ' . $myAssocArray['year'] . ' In the color ' . $myAssocArray['colour'] . ' with ' . $myAssocArray['doors'] . ' and it is a ' . $myAssocArray['make'];
      ?>
    </p>
  </body>
</html>