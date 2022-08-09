<?php

require_once ("../../lib/functions.php");
$products = get_all_products($connect);
$users= get_all_productsin($connect);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL PRODUCTS</title>
</head>
<body>

<h1 align="center"> ALL PRODUCTS 
    <small><a href="../../index.php">Back</a>
    <br> <a href = "../all_products/formulario_insert.php">Insert Product </a></small></h1>
<table align="center">
        <thead>

            
    
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>Category 
                    <small>
                    <form method="post">
                        <select name="select">
                            <option selected ></option>
                            <option value1="enlatados">enlatados</option>
                            <option value2="bebibles">bebibles</option>
                            <option value3="limpieza">limpieza</option>
                        </select>
                        </form>
                    </small>
                </th>
                <th>Description</th>
                <th>Price 
                    <small>
                        <select name="select">
                           <option selected ></option>
                           <option value1="mayor">Mayor a menor </option>
                           <option value2="menor">Menor a mayor</option>
                        </select>
                    </small>
                </th>
                <th>Quantity</th>
                <th>Image</th>
            </tr>
        </thead>
    <tbody>
    <?php
   
    while ($fila = mysqli_fetch_array($users))
{

?>

       <tr align="center">
        
            <td><?php echo $fila["id"]?></td>
            <td><?php echo $fila["products"]?></td>
            <td><?php echo $fila["categories"]?></td>
            <td><?php echo $fila["description"]?></td>
            <td><?php echo $fila["price"]?></td>
            <td><?php echo $fila["quantity"]?></td>
            <td><img height= "200px" src='../../products/image/<?php echo $fila["image"]?>'></td>
            </small>
            <td> 
            <small><td><a href="detailallproducts.php?id=<?php echo $fila['id']; ?>">Details</a></td></small> 
            <small><td><a href="formulario_update.php?id=<?php echo $fila['id']; ?>">Update product</a></td></small> 
            <small><td><a href="delete_query.php?id=<?php echo $fila['id']; ?>">Delete product</a></td></small> 
        </tr>
            <?php
            }
?>
    </tbody>
    </table>

</body>
</html>