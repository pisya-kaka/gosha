    <?php
        $array = array (12, -3.25, "String", true);
    echo $array[1];
    $array [1] = "String";
    $array [2] = 4.25;
    echo "<br/>".$array[1]."<br/>".$array[2];
    $array[] = "new element";
    echo "<br/>".$array[4]."<hr/>";


    for ($i = 0; $i < count($array); $i++) {
        echo "Элемент массива с индексом $i =".$array[$i]."<br/>";
    }
    $list = array ("age" => 12,"name" =>"Alex", "schoolBoy" => true);
    $list ["age"] = 10;
    $summa = 0;
    echo getAverage (array ("first" =>12, "sec" => 45, "third" => 23, "forth" =>55));

    function getAverage ($array) {
        $summa = 0;
        foreach ($array as $key => $value) {
            $summa += $value;
        echo $key."<br/>";
        }
    return $summa / count ($array);
    }
?>




































