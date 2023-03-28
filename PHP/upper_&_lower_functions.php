<html>
  <p>
    <?php
    $myName = "User";
    $partialLen = substr($myName, 0, 4);
    echo $partialLen;
    ?>
  </p>
  <p>
    <?php 
    $upperName = strtoupper($myName);
    echo $upperName;   
    ?>
  </p>
  <p>
    <?php
    $lowerName = strtolower($myName);
    echo $lowerName;
    ?>
  </p>
</html>