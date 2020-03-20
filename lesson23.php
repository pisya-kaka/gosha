    <?php
    $array = array (12, 17, 5, 23, 56);
    echo count($array)."<br/>";
    sort ($array);
    print_r ($array);
    echo "<br/>";
    rsort ($array);
    print_r($array);
    echo"<br/>";
    asort($array);
    print_r($array);
    echo "<br/>";
    $alist = array("123" => 23, "12" => 45);
    asort ($alist);
    print_r ($alist);
    echo "<br/>";
    ksort ($alist);
    print_r ($alist);
    echo "<br/>";
    shuffle($array);
    print_r($array);
    echo "<br/>";
    echo in_array(12, $array);
    echo "<br/>";
    $arr_1 = array (10, 2);
    $arr_2 = array (4, 5, 7);
    $array_3 = array_merge($arr_1, $arr_2);
    print_r($array_3);
    echo "<br/>";
    $arrDone = array (1, 2, 3, 4, 5, 6, 7);
    print_r($arrDone);
    echo "<br/>";
    array_slice($arrDone, 1, -2);
    print_r($arrDone);
     
    
    











?>





































