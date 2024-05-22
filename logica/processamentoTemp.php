<?php
    require "funcoesCalculo.php";

    $resultado = "";
    session_start(); //iniciando a session permitindo usu de variaveis de session

    if(!empty($_POST['inputNum1'])){
        $numero1 = $_POST['inputNum1'];

        if($_POST['selectOperacoes'] == "fahrenheit"){
            $resultado = "Fahrenheit = " . fahrenheit($numero1);
        } else if($_POST['selectOperacoes'] == "celsius"){
            $resultado = "Celsius = "  . celsius($numero1);
        }
        $_SESSION['resultado'] = $resultado;
        echo $resultado;

        header("location:../temperatura.php");
        die();
    }

?>