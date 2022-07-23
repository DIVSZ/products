<?php
$db="elorigin";
$user="root";
$password="";
$host="localhost";

$connect = mysqli_connect($host, $user, $password, $db);

if($connect)
    {
    echo "andamos online pa, dele antes de que nos corten el internet";
    }
    else
    {
    echo "Padrino, nos caimos no hay conexcion";
    }
?>