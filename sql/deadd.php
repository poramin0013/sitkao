<meta charset="UTF-8">
<?php
include('connect.php');


$sql = "DELETE from chil where  id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $_GET['id']);
if ($stmt->execute()) :
	$message = 'Successfully DELETE  customer' . $_GET['id'];
else :
	$message = 'Fail to DELETE customer';
endif;
header('location:../sadd.php');
echo $message;
$conn = null;


?>