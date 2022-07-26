<?php
$db="elorigin_unid";
$user="root";
$password="";
$host="localhost";

$connect = mysqli_connect($host, $user, $password, $db);

if($connect)
    {
    echo "tas online";
    }
    else
    {
    echo "no hay internet";
    }
?>