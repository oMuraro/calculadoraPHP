<?php
    function soma($num1, $num2){
        return($num1 + $num2);
    }

    function subtracao($num1, $num2){
        return($num1 - $num2);
    }

    function multiplicacao($num1, $num2){
        return($num1 * $num2);
    }

    function divisao($num1, $num2){
        return($num1 / $num2);
    }

    function fahrenheit($num1){
        return ($num1*1.8)+32;
    }

    function celsius($num1){
        return ($num1-32)/1.8;
    }

    function metros($num1){
        return $num1/100;
    }

    function centimetros($num1){
        return $num1*100;
    }

    function quilometros($num1){
        return $num1/1000;
    }

    function kmMetros($num1){
        return $num1*1000;
    }
?>