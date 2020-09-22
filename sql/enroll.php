<?php

include('connect.php');
$id = $_POST['id'];
$la = $_POST['la'];
$pe = $_POST['pe'];

$sql = "INSERT INTO `chil`(`id`, `la`, `pe`)
VALUES (null,'$la','$pe')";
$stmt =  $conn->query($sql);


$name = $_POST['name'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$p_num = $_POST['p_num'];
$date = $_POST['date'];

$sql1 = "INSERT INTO `profil`(`pro_id`,  `name`, `lastname`, `gender`, `p_num`, `date`) 
VALUES (null,'$name','$lastname','$gender','$p_num','$date')";
$stmt1 =  $conn->query($sql1);


$h_number = $_POST['h_number'];
$swine = $_POST['swine'];
$h_dis = $_POST['h_dis'];
$h_per = $_POST['h_per'];
$hpro = $_POST['hpro'];
$h_code = $_POST['h_code'];

$sql2 = "INSERT INTO `home`(`h_id`, `h_number`, `swine`, `h_dis`, `h_per`, `hpro`, `h_code`) 
VALUES (null,'$h_number','$swine','$h_dis','$h_per','$hpro','$h_code')";
$stmt2 =  $conn->query($sql2);


$email = $_POST['email'];
$phone = $_POST['phone'];
$facebook = $_POST['facebook'];
$line = $_POST['line'];

$sql3 = "INSERT INTO  `cons`(`c_id`, `email`, `phone`, `facebook`, `line`) 
VALUES (null,'$email','$phone','$facebook','$line')";
$stmt3 =  $conn->query($sql3);


$w_name = $_POST['w_name'];
$w_code = $_POST['w_code'];
$w_mu = $_POST['w_mu'];
$w_tum = $_POST['w_tum'];
$w_per = $_POST['w_per'];
$w_por = $_POST['w_por'];
$w_pai = $_POST['w_pai'];
$w_ps = $_POST['w_ps'];

$sql4 = "INSERT INTO  `work`(`work_id`, `w_name`, `w_code`, `w_mu`, `w_tum`, `w_per`, `w_por`, `w_pai`, `w_ps`) 
VALUES (null,'$w_name','$w_code','$w_mu','$w_tum','$w_per','$w_por','$w_pai','$w_ps')";
$stmt4 =  $conn->query($sql4);





if ($stmt && $stmt1 && $stmt2 && $stmt3 && $stmt4) {
    header('location:../show.php');
} else {
    echo "errorrrrrrrr";
}
