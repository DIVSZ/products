<?php

require_once ("../../lib/functions.php");


$id = $_GET ["id"];

delete_products($connect,$id);

header("Location: indexj.php");


?>