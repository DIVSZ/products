<?php
require_once ("connect.php");
//get producto ,,, where id   ,------------------------------------------------------------------------!

function get_products($connect,$id)
{
    $consulta = "SELECT * FROM products WHERE id = $id";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
}

//Get products//---------------------------------------------------------------------------------------!

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




function get_juan_products($connect)
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
    ON c.id = p.category_id WHERE p.user_id = 1";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}


function get_villalobos_products($connect)
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
    ON c.id = p.category_id WHERE p.user_id = 3";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}


function get_antwone_products($connect)
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
    ON c.id = p.category_id WHERE p.user_id = 2";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}


//insert //----------------------------------------------------------------------------------------!
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

//Delete//-----------------------------------------------------------------------------------------!

function delete_products($connect,$id)
{
    global $connect;

    $consulta = "DELETE FROM products WHERE id = $id ";
    $resultado = mysqli_query($connect, $consulta);
}

//filtros all products name //----------------------------------------------------------------------!

function ordenar_az($connect)
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
    ON c.id = p.category_id ORDER BY p.name ASC";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}


function ordenar_za($connect)
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
    ON c.id = p.category_id ORDER BY p.name DESC";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}
//Filtro all products precio//----------------------------------------------------------------!
function price_asc($connect)
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
    ON c.id = p.category_id ORDER BY p.price ASC";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}


function price_desc($connect)
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
    ON c.id = p.category_id ORDER BY p.price DESC";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

//Filtro all products Quantity//------------------------------------------------------------------!
function quantity_asc($connect)
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
    ON c.id = p.category_id ORDER BY p.quantity ASC";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}


function quantity_desc($connect)
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
    ON c.id = p.category_id ORDER BY p.quantity DESC";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}


///Antwone friltros name//--------------------------------------------------------------------------!

function ant_az($connect)
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
    ON c.id = p.category_id  WHERE p.user_id = 2 ORDER BY p.name DESC";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}

function ant_za($connect)
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
    ON c.id = p.category_id WHERE p.user_id =2 ORDER BY p.name ASC";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}

///Antwone friltros price//-----------------------------------------------------------------------------!

function ant_price_asc($connect)
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
    ON c.id = p.category_id  WHERE p.user_id = 2 ORDER BY p.price ASC";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}


function ant_price_desc($connect)
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
    ON c.id = p.category_id WHERE p.user_id =2 ORDER BY p.price DESC";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}


///Antwone friltros quantity//-------------------------------------------------------------------------------!

function ant_quantity_asc($connect)
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
    ON c.id = p.category_id  WHERE p.user_id = 2 ORDER BY p.quantity ASC";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}


function ant_quantity_desc($connect)
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
    ON c.id = p.category_id WHERE p.user_id =2 ORDER BY p.quantity DESC";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}





///Juan friltros name//-------------------------------------------------------------------------------------------------------!

function juan_az($connect)
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
    ON c.id = p.category_id  WHERE p.user_id = 1 ORDER BY p.name DESC";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}

function juan_za($connect)
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
    ON c.id = p.category_id WHERE p.user_id =1 ORDER BY p.name ASC";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}



///Juan friltros price//--------------------------------------------------------!

function juan_price_asc($connect)
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
    ON c.id = p.category_id  WHERE p.user_id = 1 ORDER BY p.price ASC";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}


function juan_price_desc($connect)
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
    ON c.id = p.category_id WHERE p.user_id =1 ORDER BY p.price DESC";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}


///Juan friltros quantity//--------------------------------------------------------!

function juan_quantity_asc($connect)
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
    ON c.id = p.category_id  WHERE p.user_id = 1 ORDER BY p.quantity ASC";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}
function juan_quantity_desc($connect)
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
    ON c.id = p.category_id WHERE p.user_id =1 ORDER BY p.quantity DESC";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}



///Villalobos friltros name//-------------------------------------------------------------------------------------------------------!

function villa_az($connect)
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
    ON c.id = p.category_id  WHERE p.user_id = 3 ORDER BY p.name DESC";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}

function villa_za($connect)
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
    ON c.id = p.category_id WHERE p.user_id =3 ORDER BY p.name ASC";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}



///Villalobos friltros price//--------------------------------------------------------!

function villa_price_asc($connect)
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
    ON c.id = p.category_id  WHERE p.user_id = 3 ORDER BY p.price ASC";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}


function villa_price_desc($connect)
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
    ON c.id = p.category_id WHERE p.user_id =3 ORDER BY p.price DESC";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}


///Villalobos friltros quantity//--------------------------------------------------------!

function villa_quantity_asc($connect)
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
    ON c.id = p.category_id  WHERE p.user_id = 3 ORDER BY p.quantity ASC";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}


function villa_quantity_desc($connect)
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
    ON c.id = p.category_id WHERE p.user_id =3 ORDER BY p.quantity DESC";
    $resultado = mysqli_query ($connect, $consulta);
    return $resultado;
}

?>

