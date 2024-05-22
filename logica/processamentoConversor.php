<?php
    require "funcoesCalculo.php";

    $resultado = "";
    session_start(); //iniciando a session permitindo usu de variaveis de session

    if(!empty($_GET['inputNum1'])){
        $numero1 = $_GET['inputNum1'];

        if($_GET['selectOperacoes'] == "metros"){
            $resultado = "Metros = " . metros($numero1);
        } else if($_GET['selectOperacoes'] == "centimetros"){
            $resultado = "Centímetros = "  . centimetros($numero1);
        } else if($_GET['selectOperacoes'] == "quilometros"){
            $resultado = "Quilômetros = " . quilometros($numero1);
        } else {
            $resultado = "Quilômetros para Metros = " . kmMetros($numero1);
        }
        $_SESSION['resultado'] = $resultado;
        echo $resultado;

        header("location:../conversor.php");
        die();
    }

?>