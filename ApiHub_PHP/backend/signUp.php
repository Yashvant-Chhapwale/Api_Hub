<?php
include "connection.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO `blogsignup`(`Name`,`Email`,`Password`) values ('$name','$email','$password')";
$res = mysqli_query($conn, $sql);

if($res){
    echo "User Credentials Stored!";
    header("Location: ../app/login.html");
        exit;
}else{
    echo mysqli_error($conn);
}
}
else{
    echo "HTTP Error 405!";
}

mysqli_close($conn)

?>