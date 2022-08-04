<?php

require_once ("../lib/functions.php");
$products = get_antwone_products($connect);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS ANTWONE</title>
</head>
<body>

<h1 align="center">PRODUCTS ANTWONE <small><a href="../">Regresar</a></small></h1>

<table align="center">
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>Category 
                    <small>
                        <select name="select">
                            <option selected ></option>
                            <option value1="enlatados">enlatados</option>
                            <option value2="bebibles">bebibles</option>
                            <option value3="limpieza">limpieza</option>
                        </select>
                    </small>
                </th>
                <th>Description</th>
                <th>Price 
                    <small>
                        <select name="select">
                           <option selected ></option>
                           <option value1="mayor">Mayor</option>
                           <option value2="menor">Menor</option>
                        </select>
                    </small>
                </th>
                <th>Quantity</th>
                <th>Image</th>
            </tr>
        </thead>
    <tbody>
    <?php

$query = "SELECT * FROM products ";
$resultado=$connect->query($query);
while ($fila = mysqli_fetch_array($products))
{

?>

       <tr align="center">
        
            <td><?php echo $fila["id"]?></td>
            <td><?php echo $fila["products"]?></td>
            <td><?php echo $fila["categories"]?></td>
            <td><?php echo $fila["description"]?></td>
            <td><?php echo $fila["price"]?></td>
            <td><?php echo $fila["quantity"]?></td>
            <td><img height= "200px" src='../products/image/<?php echo $fila["image"]?>'></td>
        </tr>
            <?php
            }
?>
    </tbody>
    </table>

</body>
</html>