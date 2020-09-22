<?php
session_start();

require("connect.php");
if (isset($_POST['submit'])) {
    $Student_ID = $_POST['Student_ID'];


    $sql = "SELECT * FROM `user` WHERE Student_ID = '" . $Student_ID . "' ";
    $result = $conn->query($sql);

    if ($result->rowCount() > 0) {
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $_SESSION['use_id'] = $row['use_id'];
        $_SESSION['Student_ID'] = $row['Student_ID'];
        $_SESSION['status'] = $row['status'];

        Header("Location:../index.php");
    } else {
        echo '<script>
            alert("error incorrect Student_ID")
            </script>';
    }
}
