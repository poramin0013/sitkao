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
    <br><br><br>
    <!-------------------------------------------------------------------------------------------------------------------------->

    <div class="container">
        <div class="crad " align="center">
            <form action="sql/login.php" method="POST">
                <div class="col-3"></div>
                <div class="col-6">

                    <div class="card">

                        <!--Header-->
                        <h1 class="card-header  text-center py-4  " style="background-color:#2BBBAD ; color:#ffffff">
                            <strong>Login</strong>
                        </h1>

                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">

                            <!--Body-->
                            <div class="modal-body mx-4">
                                <!--Body-->
                                <div class="md-form mb-5">
                                    <input type="text" name="Student_ID" id="Student_ID" class="form-control validate">
                                    <label data-error="wrong" data-success="right">Student_ID</label>
                                </div>


                                <!-- Sign up button -->
                                <div class="text-center mb-3">
                                    <button class="btn btn-info my-4 btn-block" type="submit" name="submit">Login</button>
                                </div>

                                <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in
                                    with:</p>

                                <div class="row my-3 d-flex justify-content-center">
                                    <!--Facebook-->
                                    <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-facebook-f text-center"></i></button>
                                    <!--Twitter-->
                                    <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-twitter"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-3"></div>
            </form>
        </div>
    </div>


</body>

</html>