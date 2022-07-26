<?php

require_once ("../lib/functions.php");
$products = get_juan_products($connect);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS JUANSTORE</title>
</head>
<body>

<h1>PRODUCTS JUANESTORE <small><a href="../">Regresar</a></small></h1>

<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>User</th>
                <th>Category</th>

            </tr>
        </thead>
    <tbody>
    <?php
        while ($fila = mysqli_fetch_array($products))
        {
        ?>
        <tr>
            <td><?php echo $fila["id"]?></td>
            <td><?php echo $fila["name"]?></td>
            <td><?php echo $fila["description"]?></td>
            <td><?php echo $fila["image"]?></td>
            <td><?php echo $fila["price"]?></td>
            <td><?php echo $fila["quantity"]?></td>
            <td><?php echo $fila["status"]?> </td>
            <td><?php echo $fila["user_id"]?></td>
            <td><?php echo $fila["category_id"]?></td>
            
        </tr>
        <?php    
        }
        ?>
    </tbody>
    </table>

</body>
</html>