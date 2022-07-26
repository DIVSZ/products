<?php
require_once ("connect.php");

function get_all_products($connect){
    $consulta = "SELECT * FROM products";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}

function get_juan_products($connect){
    $consulta = "SELECT * FROM products WHERE user_id = 1";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}


function get_villalobos_products($connect){
    $consulta = "SELECT * FROM products WHERE user_id = 2";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}

function get_antwone_products($connect){
    $consulta = "SELECT * FROM products WHERE user_id = 3";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}

?>
