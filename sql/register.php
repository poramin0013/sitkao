<?php

include('connect.php');
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$password2 = $_POST["password2"];


$sql = "INSERT INTO `user`(`use_id`, `name`,  `email`, `password`, `password2`) 
VALUES (null,'$name','$phone','$email','$password','$user','$img')";
$stmt =  $conn->query($sql);


if ($stmt) {
    header('location:../login.php');
} else {
    echo "errorrrrrrrr";
}
