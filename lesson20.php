    <?php
    $x = 15;
    if (isset ($x)) echo "hello";
    else echo "bay";
    echo "<br/>";
    unset ($x);
    if (isset ($x)) echo "hello";
    else echo "bay";
    echo "<br/>";

    $x = "15";
    $bool = false;
    $null = 0;

    echo  "Is Numeric - ".is_numeric($x)."<br/>";
    echo  "Is Integer - ".is_integer($x)."<br/>";
    echo  "Is Double - ".is_double($x)."<br/>";
    echo  "Is String - ".is_string($x)."<br/>";
    echo  "Is Boolean - ".is_bool($bool)."<br/>";
    echo  "Is Scalar -".is_scalar($bool)."<br/>";
    echo  "Is null -".is_null($null)."<br/>";
    echo  "Is array -".is_array($x)."<br/>";
    echo  "Type -".gettype($x)."<br/>";
    echo  "Type -".gettype($null)."<br/>";
    











?>





































