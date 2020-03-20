    <?php
    $string = "This is example!";
    echo strlen ($string)."<br/>";
    echo strpos ($string, "T")."<br/>";

    if (strpos($string, "T") == false) echo "T не найдео";
    else echo "T не найдено";

    echo "<br/>".substr($string, 3, -2)."<br/>";
    echo str_replace(array("is", "ple"), array("abc","123"), $string)."<br/>";
    
    $str = "<b>ХАХА, жирный шрифт</b>";

    echo htmlspecialchars ($str);
    echo "<br/>".strtolower($string)."<br/>".strtoupper($string);
     echo md5("123")."<br/>";
     echo trim("     string    sd sd     ");
     
    
    











?>





































