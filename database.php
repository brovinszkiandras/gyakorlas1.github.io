<?php
$serverAddress = "localhost";
$username = "root";
$password = "";
$databaseName = "lionsdaleapp";

try {
    $connection = mysqli_connect($serverAddress,$username,$password,$databaseName);
    
} catch (\Throwable $th) {
    $connection = "";
    echo "something is wrong";
    echo $th;
}