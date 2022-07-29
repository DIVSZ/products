<?php
require_once ("connect.php");

function get_all_products($connect){
    $consulta = "SELECT 
    c.name as 'categories',
    p.id as 'id',
    p.price as 'price',
    p.description as 'description',
    p.quantity as 'quantity',
    p.image as 'image',
    p.name as 'products'
    FROM categories c
    JOIN products p
    ON c.id = p.id";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}

function get_juan_products($connect){
    $consulta = "SELECT 
    c.name as 'categories',
    p.id as 'id',
    p.price as 'price',
    p.description as 'description',
    p.quantity as 'quantity',
    p.image as 'image',
    p.name as 'products'
    FROM categories c
    JOIN products p
    ON c.id = p.id WHERE p.user_id = 1";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}


function get_villalobos_products($connect){
    $consulta = "SELECT 
    c.name as 'categories',
    p.id as 'id',
    p.price as 'price',
    p.description as 'description',
    p.quantity as 'quantity',
    p.image as 'image',
    p.name as 'products'
    FROM categories c
    JOIN products p
    ON c.id = p.id WHERE p.user_id = 2";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}
function get_antwone_products($connect){
    $consulta = "SELECT 
    c.name as 'categories',
    p.id as 'id',
    p.price as 'price',
    p.description as 'description',
    p.quantity as 'quantity',
    p.image as 'image',
    p.name as 'products'
    FROM categories c
    JOIN products p
    ON c.id = p.id WHERE p.user_id = 3";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}

?>
