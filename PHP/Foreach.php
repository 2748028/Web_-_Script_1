<html>
  <head>
    <link rel="stylesheet" href="stylesheet.css" />
    <title>Languages</title>
  </head>
  <body>
    <h1>Some languages you can learn:</h1>
    <div class="wrapper">
      <ul>
        <?php
          $langs = array("JavaScript",
          "HTML/CSS", "PHP",
          "Python", "Ruby");
        
          foreach ($langs as $lang) 
          {
              echo "<li>$lang</li>";
          }
        
          unset($lang);
        ?>
      </ul>
    </div>
  </body>
</html>