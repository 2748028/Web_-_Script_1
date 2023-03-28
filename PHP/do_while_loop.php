<!DOCTYPE html>
<html>
    <head>
		<title>Your own do-while</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
    <?php
    $x = 6;

    do 
    {
        echo "The number is: $x <br>";
        $x++;
    } 
    while ($x <= 5);
    ?>
    </body>
</html>