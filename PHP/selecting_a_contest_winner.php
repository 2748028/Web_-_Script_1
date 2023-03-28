<html>
    <p>
	<?php
	$familyArray = array();
	    
	array_push ($familyArray, "Mom");
	array_push ($familyArray, "Dad");
	array_push ($familyArray, "Sister 1");
	array_push ($familyArray, "Sister 2");
	array_push ($familyArray, "Doggo");
	array_push ($familyArray, "Brother 1");
	array_push ($familyArray, "Brother 2");
	
    sort($familyArray);
    
    $arrayLen = count($familyArray);
    $winner = rand(0, $arrayLen);
    $winner = $winner -1;
	$chickenDin = $familyArray[$winner];
	
    $upperWin = strtoupper($chickenDin);
    print $upperWin;
	?>
	</p>
</html>