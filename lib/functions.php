<?php
require_once ("connect.php");
//get producto ,,, where id   ,
function get_products($connect,$id)
{
$consulta = "SELECT * FROM products WHERE id = $id";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

function get_all_productsin($connect)
{
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
    ON c.id = p.category_id";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

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
    ON c.id = p.category_id";
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
    ON c.id = p.category_id WHERE p.user_id = 1";
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
    ON c.id = p.category_id WHERE p.user_id = 3";
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
    ON c.id = p.category_id WHERE p.user_id = 2";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}


//insert villalobostore//
function insert_products ($name,$description,$image,$price,$quantity,$status,$user_id,$category_id) {

    global $connect;
    
    $consulta = "INSERT INTO products (name,description,image,price,quantity,status,user_id,category_id) VALUES ('$name','$description','$image','$price','$quantity','$status','$user_id','$category_id')";
    
    $resultado = mysqli_query($connect, $consulta);
    
    }


    function update_products($name,$description,$image,$price,$quantity,$status,$user_id,$category_id,$id)
    {
        global $connect;
    
        $consulta = "UPDATE products SET name='$name',description='$description',image='$image',price='$price',quantity='$quantity',status='$status',user_id='$user_id',category_id='$category_id' WHERE id = $id";
        
        $resultado = mysqli_query($connect, $consulta);
    }

function delete_products($connect,$id)
{
    global $connect;

    $consulta = "DELETE FROM products WHERE id = $id ";
    $resultado = mysqli_query($connect, $consulta);
}
?>

