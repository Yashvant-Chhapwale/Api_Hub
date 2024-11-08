<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "blogcontact";

$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn){
    echo mysqli_connect_error();
}else{
    echo "Database Connected Successfully!";
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$query = $_POST['query'];

$sql = "INSERT INTO `blogcontact`(`Name`,`Email`,`Phone`,`Query`) values ('$name','$email','$phone','$query')";
$res = mysqli_query($conn, $sql);

if($res){
    echo "User Credentials Stored!";
    header("Location: ../app/home.html");
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