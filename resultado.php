<?php

    if ($_POST["num1"]) {
        $n = $_POST["num1"];

        echo"<h1>Tabuada do " . $n . "</h1>";

        #sempre tenho que adicionar um contador na tabuada para que de certo $i

        for ($i = 1; $i <= 10; $i++) {
        echo $n . " x " . $i . " = " . ($n*$i) . "<br>" ;
}

    } else {
        header("Location: tabuada.php");
    }

    $num1 = $_POST["num1"];





?>