    <?php
    $a = 0;
    $a++;
    
        setcookie("num", 10, time () + 7);
            if(isset($_COOKIE["num"]))
                echo "куки уст";
            else
                echo "куки не уст";









?>

