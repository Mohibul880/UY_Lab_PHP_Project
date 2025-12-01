<?php

$bd_host = "localhost";
$db_user = "root";
$bd_pass = "";
$db_name = "uy_lab_php-project";


$conn = mysqli_connect($bd_host,$db_user,$bd_pass,$db_name);


if(!$conn){
    echo "Database Connection Failed!";
}


?>