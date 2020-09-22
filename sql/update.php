<?php

include('connect.php');

$pro_id = $_POST['pro_id'];
$pro_name = $_POST['pro_name'];
$pro_img = $_POST['pro_img'];
$price = $_POST['price'];

$pro_img = $_FILES['pro_img']['name'];
move_uploaded_file($_FILES['pro_img']['tmp_name'], '../pic/' . $pro_img);

$sql = "UPDATE `product` SET `pro_name`='$pro_name',`pro_img`='$pro_img',`price`='$price' WHERE pro_id='$pro_id'";
$stmt = $conn->query($sql);

if ($stmt) {
    echo '<script>alert("hahahahahahahahahaha")</script>';
    header('refresh:0 url=../addpro.php');
}
