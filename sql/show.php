<?php

include('connect.php');

$name = $_POST["name"];
$lastname = $_POST["lastname"];
$sex = $_POST["sex"];
$p_num = $_POST["p_num"];
$date= $_POST["date"];


$sql = "INSERT INTO `profil`(`pro_id`, `name`, `lastname`, `sex`, `p_num`, `date`) 
VALUES (null,'$name','$lastname','$sex','$p_num','$date')";
$stmt =  $conn->query($sql);


if ($stmt) {
    header('location:../show.php');
} else {
    echo "errorrrrrrrr";
}
