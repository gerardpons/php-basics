<?php

    function swapChars($string) {

        if (strlen($string) >= 2) {

            $firstChar = substr($string, 0, 1);
            $lastChar = substr($string, -1);
            $midChars = substr($string, 1, -1);

            echo $lastChar . $midChars . $firstChar;

        } else {
            echo $string;
        }

    }

    swapChars('wxyz');
    echo '<br>';
    swapChars('a');
    echo '<br>';
    swapChars('ab');

?>