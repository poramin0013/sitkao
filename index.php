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

    <!---------------- status ------------>
    <div class="sticky-top">
        <?php if (isset($_SESSION['status'])) {
            if ($_SESSION['status'] == "admin") {
                include('navA.php');
            } else {
                include('nav.php');
            }
        } else {
            include('nav.php');
        } ?>
    </div>

    <!---------------- status---------------->

    <!-------------------------------------------------------------------------------------------------------------------------->
    <br><br><br><br><br><br><br><br><br><br><br>
    <div class="container" align="center">
        <b>
            <h2>ระบบลงทะเบียนศิษย์เก่า สาขาวิศวกรรมซอฟต์แวร์</h2>
        </b>
    </div>






</body>

</html>