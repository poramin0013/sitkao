<?php session_start();
include('sql/connect.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Alumni </title>

    <!-- ------------------------------------------------------------------------------------------------------------------------ -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/js/mdb.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">


</head>


<body>



    <!---------------- nav ---------------------->
    <?php include('nav.php'); ?>
    <!---------------- nav ---------------------->



    <?php

    $sql = "SELECT * FROM `chil` WHERE id ='" . $_GET['id'] . "' ";
    $stmt = $conn->query($sql);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    ?>

    <!-------------------------------------------------------------------------------------------------------------------------->
    <br><br><br>
    <div class="container">
        <!-- Default form register -->
        <form class="text-center  border-dark p-5" action="sql/up1.php" method="POST">

            <h1>อัปเดทข้อมูล</h1>
            <br>

            <br>
            <u>
                <h4 align="left">ข้อมูลการศึกษา</h4>
            </u>
            <br>
            <div class="modal-body" align="left">
                <div class="form-row mb-4">

                    <div class="col">
                        <input type="hidden" value="<?php echo $result['id'] ?>" name="id">
                        <!-- E-mail -->
                        <label> รหัสนักศึกษา </label>
                        <input type="text" class="form-control" name="la" id="la" value="<?php echo $result['la'] ?>">
                    </div>
                    <div class="col">
                        <!-- password -->
                        <label> ปีที่จบการศึกษา </label>
                        <input type="text" class="form-control" value="<?php echo $result['pe'] ?>" name="pe" id="pe">
                    </div>
                </div>
                <p></p>
            </div>

            <div class="b1" align="right">
                <!-- Sign up button -->
                <button type="submit" name="submit" class="btn aqua-gradient btn-lg btn-block">ตกลง</button>
            </div>

        </form>
        <!-- Default form register -->
        <br>
        <br>
    </div>





</body>

</html>