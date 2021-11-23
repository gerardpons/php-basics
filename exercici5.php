<?php

    $even = array(2,4,6,8,10);
    $odd = array(1,3,5);

    array_push($odd, 7);

    $mergedArray = array_merge($odd,$even);

    echo '<pre>'; print_r(sizeof($mergedArray)); '</pre>';
    echo '<br>';
    echo '<pre>'; print_r($mergedArray); '</pre>';

?>