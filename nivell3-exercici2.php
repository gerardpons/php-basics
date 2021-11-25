<?php

// Escriu un programa en PHP que compta el nombre total de vegades que un
// valor existeix en l'array.

function countValues($array) {

    echo '<pre>';
    print_r(array_count_values($array));
    echo '</pre>';

}

countValues(array('H','e','l','l','o','W','o','r','l','d'));

?>