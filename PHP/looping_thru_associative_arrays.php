$food = array('pizza', 'salad', 'burger');
    $salad = array('lettuce' => 'with',
               'tomato' => 'without',
               'onions' => 'with');

  // Looping through an array using "for".
  // First, let's get the length of the array!
  $length = count($food);

  // Remember, arrays in PHP are zero-based:
  for ($i = 0; $i < $length; $i++) {
    echo $food[$i] . '<br />';
  }

  echo '<br /><br />I want my salad:<br />';

  // Loop through an associative array using "foreach":
  foreach ($salad as $ingredient=>$include) {
    echo $include . ' ' . $ingredient . '<br />';
  }

  echo '<br /><br />';

  // Create your own array here and loop
  // through it using foreach!
  $car = array('Honda' => 'made by',
               'Bangladesh' => 'made in',
               '2014' => 'made on');    
 echo '<br /><br />I want the car which:<br />';
  foreach ($car as $information=>$informationhead) {
    echo $informationhead . ' ' . $information . '<br