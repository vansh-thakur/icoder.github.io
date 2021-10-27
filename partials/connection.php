<?php

$username ="root";
$password ="";
$server ="localhost";
$db ='forum';

$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
    echo "error";
}


?>