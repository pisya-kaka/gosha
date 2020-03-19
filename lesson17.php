    <?php
   $x = 12;
   echo "Переменная x = $x<br/>";
   $x = 10;
    echo "Переменная x = $x<br/>";

    function test () {
        //$GLOBALS["x"] += 7;
        //$x = 0;
        global $x;
            $x += 10;
        //echo "Переменная x = $x<br/>";
    }
    test ();
    function test_2 () {
        static $id;
        $id++;
        echo $id."<br/>";
    }
    for ($i = 0; $i <10; $i++) {
        test_2 ();
    }







?>





































