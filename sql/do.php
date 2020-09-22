<meta charset="UTF-8">
<?php
include('connect.php');


$sql = "SELECT * from profil where  pro_id = :pro_id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':pro_id', $_GET['pro_id']);
if ($stmt->execute()) :
	$message = 'Successfully DELETE  customer' . $_GET['pro_id'];
else :
	$message = 'Fail to DELETE customer';
endif;
header('location:../do.php');
echo $message;
$conn = null;


?>