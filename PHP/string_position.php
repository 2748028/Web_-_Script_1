<html>
    <p>
    <?php
    $myName="dean orchard";
    $position=strpos($myName, "o");
    print $position;
    ?>
    </p>
    <p>
    <?php
    if (strpos("dean orchard", "q") === false)
    {
        echo "There is no 'q' in Dean Orchard!";    
    }
    ?>
    </p>
</html>