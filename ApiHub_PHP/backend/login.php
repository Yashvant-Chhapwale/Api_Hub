<?php
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM `blogsignup` WHERE `Email` = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if ($user['Password'] === $password) {
            header("Location: ../app/home.html"); 
            exit;
        } else {
            echo "Incorrect Password.";
        }
    } else {
        echo "User Not Found.";
    }
} else {
    echo "HTTP Error 405!";
}

mysqli_close($conn)

?>

