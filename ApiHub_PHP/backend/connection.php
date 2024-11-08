<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "blogsignup";

$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn){
    echo mysqli_connect_error();
}else{
    echo "Database Connected Successfully!";
}

?>