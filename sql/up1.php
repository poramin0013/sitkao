<?php

include('connect.php');

$id = $_POST['id'];
$la = $_POST['la'];
$pe = $_POST['pe'];

$sql = "UPDATE `chil` SET `la`='$la' `pe`='$pe'";
$stmt = $conn->query($sql);




if ($stmt) {
    echo '<script>alert("hahahahahahahahahaha")</script>';
    header('refresh:0 url=../up1.php');
}
