<?php

    function sumNums($num1,$num2) {
        if ($num1 != $num2) {
            echo $num1 + $num2;
        } else {
            echo ($num1 + $num2) * 2;
        }
    }

    sumNums(1,2);
    echo '<br>';
    sumNums(3,2);
    echo '<br>';
    sumNums(2,2);

?>