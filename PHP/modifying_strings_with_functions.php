<html>
    <p>
    <?php
    print rand(1, 9001);
    ?>
    </p>
    <p>
    <?php
    $myName = "Dean_Orchard";
    $nameLen = strlen($myName);
    $randName = rand(0, $nameLen);
    $randChar = $randName -1; 
    $subString = substr($myName, $randChar, 1);
    print $subString;
    ?>
    </p>
</html>