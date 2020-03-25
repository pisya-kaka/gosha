    <?php
    session_start ();
    $num = (isset($_SESSION["num"])) ? $_SESSION["num"] : 0;
    $num++;
    setcookie("num", $num, time () + 4);
    echo "Пользователь обновил страничку $num раз";
    session_destroy ();







